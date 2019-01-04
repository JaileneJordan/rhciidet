<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Puesto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Puesto controller.
 *
 */
class PuestoController extends Controller
{
    /**
     * Lists all puesto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $puestos = $em->getRepository('AppBundle:Puesto')->findAll();

        return $this->render('puesto/index.html.twig', array(
            'puestos' => $puestos,
        ));
    }

    /**
     * Creates a new puesto entity.
     *
     */
    public function newAction(Request $request)
    {
        $puesto = new Puesto();
        $form = $this->createForm('AppBundle\Form\PuestoType', $puesto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($puesto);
            $em->flush();

            return $this->redirectToRoute('puesto_show', array('id' => $puesto->getId()));
        }

        return $this->render('puesto/new.html.twig', array(
            'puesto' => $puesto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a puesto entity.
     *
     */
    public function showAction(Puesto $puesto)
    {
        $deleteForm = $this->createDeleteForm($puesto);

        return $this->render('puesto/show.html.twig', array(
            'puesto' => $puesto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing puesto entity.
     *
     */
    public function editAction(Request $request, Puesto $puesto)
    {
        $deleteForm = $this->createDeleteForm($puesto);
        $editForm = $this->createForm('AppBundle\Form\PuestoType', $puesto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('puesto_edit', array('id' => $puesto->getId()));
        }

        return $this->render('puesto/edit.html.twig', array(
            'puesto' => $puesto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a puesto entity.
     *
     */
    public function deleteAction(Request $request, Puesto $puesto)
    {
        $form = $this->createDeleteForm($puesto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($puesto);
            $em->flush();
        }

        return $this->redirectToRoute('puesto_index');
    }

    /**
     * Creates a form to delete a puesto entity.
     *
     * @param Puesto $puesto The puesto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Puesto $puesto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('puesto_delete', array('id' => $puesto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
