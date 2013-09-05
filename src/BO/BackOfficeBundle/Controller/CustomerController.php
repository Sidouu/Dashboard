<?php

namespace BO\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BO\BackOfficeBundle\Entity\Customer;
use BO\BackOfficeBundle\Form\CustomerType;
use BO\BackOfficeBundle\Form\CustomerTypeSearch;

/**
 * Customer controller.
 *
 */
class CustomerController extends Controller
{

    /**
     * Lists all Customer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BOBackOfficeBundle:Customer')->findBy(
            array(),
            array('lastName' => 'ASC'));
        $search   = $this->createForm(new CustomerTypeSearch());

        return $this->render('BOBackOfficeBundle:Customer:index.html.twig', array(
            'entities' => $entities,
            'search' => $search->createView()
        ));
    }
    /**
     * Creates a new Customer entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Customer();
        $form = $this->createForm(new CustomerType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('customer_show', array('id' => $entity->getId())));
        }

        return $this->render('BOBackOfficeBundle:Customer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Customer entity.
     *
     */
    public function newAction()
    {
        $entity = new Customer();
        $form   = $this->createForm(new CustomerType(), $entity);

        return $this->render('BOBackOfficeBundle:Customer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Customer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Customer')->find($id);
        $pianos = $em->getRepository('BOBackOfficeBundle:Piano')->findByCustomer($id);
        $quotes = $em->getRepository('BOBackOfficeBundle:Quote')->findByCustomer($id);
        $bills = $em->getRepository('BOBackOfficeBundle:Bill')->findByCustomer($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Customer:show.html.twig', array(
            'entity'      => $entity,
            'pianos'      => $pianos,
            'quotes'       => $quotes,
            'bills'       => $bills,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $editForm = $this->createForm(new CustomerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BOBackOfficeBundle:Customer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Customer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BOBackOfficeBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CustomerType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('customer_edit', array('id' => $id)));
        }

        return $this->render('BOBackOfficeBundle:Customer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Customer entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BOBackOfficeBundle:Customer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Customer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('customer'));
    }

    /**
     * Creates a form to delete a Customer entity by id.
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
            $form = $request->get('bo_backofficebundle_customertypesearch');
            $name = $form['lastName'];
        }

        $em = $this->getDoctrine()->getEntityManager();

        $customers = $em->getRepository('BOBackOfficeBundle:Customer')->findBy(
            array('lastName' => $name),
            array('lastName' => 'ASC'));
        $search   = $this->createForm(new CustomerTypeSearch());

        return $this->render('BOBackOfficeBundle:Customer:search.html.twig', array(
            'customers'      => $customers,
            'search' => $search->createView()
        ));
    }
}
