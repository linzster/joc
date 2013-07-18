<?php

namespace Test\PublicationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Test\PublicationsBundle\Entity\Books;
use Test\PublicationsBundle\Form\BooksType;

/**
 * Books controller.
 *
 * @Route("/books")
 */
class BooksController extends Controller
{

    /**
     * Lists all Books entities.
     *
     * @Route("/", name="books")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestPublicationsBundle:Books')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Books entity.
     *
     * @Route("/", name="books_create")
     * @Method("POST")
     * @Template("TestPublicationsBundle:Books:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Books();
        $form = $this->createForm(new BooksType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('books_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Books entity.
     *
     * @Route("/new", name="books_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Books();
        $form   = $this->createForm(new BooksType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Books entity.
     *
     * @Route("/{id}", name="books_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPublicationsBundle:Books')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Books entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Books entity.
     *
     * @Route("/{id}/edit", name="books_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPublicationsBundle:Books')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Books entity.');
        }

        $editForm = $this->createForm(new BooksType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Books entity.
     *
     * @Route("/{id}", name="books_update")
     * @Method("PUT")
     * @Template("TestPublicationsBundle:Books:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPublicationsBundle:Books')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Books entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BooksType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('books_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Books entity.
     *
     * @Route("/{id}", name="books_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestPublicationsBundle:Books')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Books entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('books'));
    }

    /**
     * Creates a form to delete a Books entity by id.
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
}
