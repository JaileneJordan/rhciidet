<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Subdireccion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Subdireccion controller.
 *
 */
class SubdireccionController extends Controller
{
    /**
     * Lists all subdireccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $subdireccions = $em->getRepository('AppBundle:Subdireccion')->findAll();

        return $this->render('subdireccion/index.html.twig', array(
            'subdireccions' => $subdireccions,
        ));
    }

    /**
     * Creates a new subdireccion entity.
     *
     */
    public function newAction(Request $request)
    {
        $subdireccion = new Subdireccion();
        $form = $this->createForm('AppBundle\Form\SubdireccionType', $subdireccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subdireccion);
            $em->flush();

            return $this->redirectToRoute('subdireccion_index', array('id' => $subdireccion->getId()));
        }

        return $this->render('subdireccion/new.html.twig', array(
            'subdireccion' => $subdireccion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a subdireccion entity.
     *
     */
    public function showAction(Subdireccion $subdireccion)
    {
        $deleteForm = $this->createDeleteForm($subdireccion);

        return $this->render('subdireccion/show.html.twig', array(
        //return $this->render('subdireccion/index.html.twig', array(
            'subdireccion' => $subdireccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing subdireccion entity.
     *
     */
    public function editAction(Request $request, Subdireccion $subdireccion)
    {
        $deleteForm = $this->createDeleteForm($subdireccion);
        $editForm = $this->createForm('AppBundle\Form\SubdireccionType', $subdireccion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('subdireccion_edit', array('id' => $subdireccion->getId()));
        }

        return $this->render('subdireccion/edit.html.twig', array(
            'subdireccion' => $subdireccion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a subdireccion entity.
     *
     */
    public function deleteAction(Request $request, Subdireccion $subdireccion)
    {
        $form = $this->createDeleteForm($subdireccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($subdireccion);
            $em->flush();
        }

        return $this->redirectToRoute('subdireccion_index');
    }

    /**
     * Creates a form to delete a subdireccion entity.
     *
     * @param Subdireccion $subdireccion The subdireccion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Subdireccion $subdireccion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subdireccion_delete', array('id' => $subdireccion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
