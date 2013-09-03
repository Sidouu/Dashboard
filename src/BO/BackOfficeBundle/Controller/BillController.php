<?php

namespace BO\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BO\BackOfficeBundle\Entity\Bill;
use BO\BackOfficeBundle\Form\BillType;
use BO\BackOfficeBundle\Form\BillTypeSearch;

/**
 * Bill controller.
 *
 */
class BillController extends Controller
{

    /**
     * Lists all Bill entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BOBackOfficeBundle:Bill')->findAll();
        $search   = $this->createForm(new BillTypeSearch());

        return $this->render('BOBackOfficeBundle:Bill:index.html.twig', array(
            'entities' => $entities,
            'search' => $search->createView()
        ));
    }
    /**
     * Creates a new Bill entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Bill();
        $form = $this->createForm(new BillType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bill_show', array('id' => $entity->getId())));
        }

        return $this->render('BOBackOfficeBundle:Bill:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Bill entity.
     *
     */
    public function newAction()
    {
        $entity = new Bill();
        $form   = $this->createForm(new BillType(), $entity);

        return $this->render('BOBackOfficeBundle:Bill:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bill entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Bill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bill entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Bill:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Bill entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Bill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bill entity.');
        }

        $editForm = $this->createForm(new BillType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Bill:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Bill entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Bill')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bill entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BillType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bill_edit', array('id' => $id)));
        }

        return $this->render('BOBackOfficeBundle:Bill:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Bill entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BOBackOfficeBundle:Bill')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bill entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bill'));
    }

    /**
     * Creates a form to delete a Bill entity by id.
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
            $form = $request->get('bo_backofficebundle_billtypesearch');
            $name = $form['customer'];
        }

        $em = $this->getDoctrine()->getEntityManager();

        $bills = $em->getRepository('BOBackOfficeBundle:Bill')->findByCustomer($name);
        $search   = $this->createForm(new BillTypeSearch());

        return $this->render('BOBackOfficeBundle:Bill:search.html.twig', array(
            'bills'      => $bills,
            'search' => $search->createView()
        ));
    }
}
