<?php

namespace BO\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BO\BackOfficeBundle\Entity\Piano;
use BO\BackOfficeBundle\Form\PianoType;
use BO\BackOfficeBundle\Form\PianoTypeSearch;

/**
 * Piano controller.
 *
 */
class PianoController extends Controller
{

    /**
     * Lists all Piano entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BOBackOfficeBundle:Piano')->findBy(
            array(),
            array('name' => 'ASC'));
        $search   = $this->createForm(new PianoTypeSearch());

        return $this->render('BOBackOfficeBundle:Piano:index.html.twig', array(
            'entities' => $entities,
            'search' => $search->createView()
        ));
    }
    /**
     * Creates a new Piano entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Piano();
        $form = $this->createForm(new PianoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('piano_show', array('id' => $entity->getId())));
        }

        return $this->render('BOBackOfficeBundle:Piano:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Piano entity.
     *
     */
    public function newAction()
    {
        $entity = new Piano();
        $form   = $this->createForm(new PianoType(), $entity);

        return $this->render('BOBackOfficeBundle:Piano:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Piano entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Piano')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Piano entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Piano:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Piano entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Piano')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Piano entity.');
        }

        $editForm = $this->createForm(new PianoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Piano:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Piano entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Piano')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Piano entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PianoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('piano_edit', array('id' => $id)));
        }

        return $this->render('BOBackOfficeBundle:Piano:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Piano entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BOBackOfficeBundle:Piano')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Piano entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('piano'));
    }

    /**
     * Creates a form to delete a Piano entity by id.
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
            $form = $request->get('bo_backofficebundle_pianotypesearch');
            $name = $form['name'];
        }

        $em = $this->getDoctrine()->getEntityManager();

        $pianos = $em->getRepository('BOBackOfficeBundle:Piano')->findBy(
            array('name' => $name),
            array('name' => 'ASC'));
        $search   = $this->createForm(new PianoTypeSearch());

        return $this->render('BOBackOfficeBundle:Piano:search.html.twig', array(
            'pianos'      => $pianos,
            'search' => $search->createView()
        ));
    }
}
