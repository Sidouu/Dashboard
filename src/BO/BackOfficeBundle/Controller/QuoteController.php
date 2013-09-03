<?php

namespace BO\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BO\BackOfficeBundle\Entity\Quote;
use BO\BackOfficeBundle\Form\QuoteType;
use BO\BackOfficeBundle\Form\QuoteTypeSearch;

/**
 * Quote controller.
 *
 */
class QuoteController extends Controller
{

    /**
     * Lists all Quote entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BOBackOfficeBundle:Quote')->findAll();
        $search   = $this->createForm(new QuoteTypeSearch());

        return $this->render('BOBackOfficeBundle:Quote:index.html.twig', array(
            'entities' => $entities,
            'search' => $search->createView()
        ));
    }
    /**
     * Creates a new Quote entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Quote();
        $form = $this->createForm(new QuoteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('quote_show', array('id' => $entity->getId())));
        }

        return $this->render('BOBackOfficeBundle:Quote:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Quote entity.
     *
     */
    public function newAction()
    {
        $entity = new Quote();
        $form   = $this->createForm(new QuoteType(), $entity);

        return $this->render('BOBackOfficeBundle:Quote:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Quote entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Quote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quote entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Quote:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Quote entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Quote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quote entity.');
        }

        $editForm = $this->createForm(new QuoteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Quote:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Quote entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Quote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Quote entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new QuoteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('quote_edit', array('id' => $id)));
        }

        return $this->render('BOBackOfficeBundle:Quote:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Quote entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BOBackOfficeBundle:Quote')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Quote entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('quote'));
    }

    /**
     * Creates a form to delete a Quote entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    public function searchAction()
    {
        $request = $this->container->get('request');

        if( $request->getMethod() == 'POST' ) {
            $form = $request->get('bo_backofficebundle_quotetypesearch');
            $name = $form['customer'];
        }

        $em = $this->getDoctrine()->getEntityManager();

        $quotes = $em->getRepository('BOBackOfficeBundle:Quote')->findByCustomer($name);
        $search   = $this->createForm(new QuoteTypeSearch());

        return $this->render('BOBackOfficeBundle:Quote:search.html.twig', array(
            'quotes'      => $quotes,
            'search' => $search->createView()
        ));
    }
}
