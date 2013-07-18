<?php

namespace Test\PublicationsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Test\PublicationsBundle\Entity\Poems;
use Test\PublicationsBundle\Form\PoemsType;

/**
 * Poems controller.
 *
 * @Route("/poems")
 */
class PoemsController extends Controller
{

    /**
     * Lists all Poems entities.
     *
     * @Route("/", name="poems")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TestPublicationsBundle:Poems')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Poems entity.
     *
     * @Route("/", name="poems_create")
     * @Method("POST")
     * @Template("TestPublicationsBundle:Poems:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Poems();
        $form = $this->createForm(new PoemsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('poems_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Poems entity.
     *
     * @Route("/new", name="poems_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Poems();
        $form   = $this->createForm(new PoemsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Poems entity.
     *
     * @Route("/{id}", name="poems_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPublicationsBundle:Poems')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Poems entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Poems entity.
     *
     * @Route("/{id}/edit", name="poems_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPublicationsBundle:Poems')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Poems entity.');
        }

        $editForm = $this->createForm(new PoemsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Poems entity.
     *
     * @Route("/{id}", name="poems_update")
     * @Method("PUT")
     * @Template("TestPublicationsBundle:Poems:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPublicationsBundle:Poems')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Poems entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PoemsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('poems_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Poems entity.
     *
     * @Route("/{id}", name="poems_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TestPublicationsBundle:Poems')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Poems entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('poems'));
    }

    /**
     * Creates a form to delete a Poems entity by id.
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
