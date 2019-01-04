<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RegistroTramite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Registrotramite controller.
 *
 */
class RegistroTramiteController extends Controller
{
    /**
     * Lists all registroTramite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $registroTramites = $em->getRepository('AppBundle:RegistroTramite')->findAll();

        return $this->render('registrotramite/index.html.twig', array(
            'registroTramites' => $registroTramites,
        ));
    }

    /**
     * Creates a new registroTramite entity.
     *
     */
    public function newAction(Request $request)
    {
        $registroTramite = new Registrotramite();
        $form = $this->createForm('AppBundle\Form\RegistroTramiteType', $registroTramite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($registroTramite);
            $em->flush();

            return $this->redirectToRoute('registrotramite_show', array('id' => $registroTramite->getId()));
        }

        return $this->render('registrotramite/new.html.twig', array(
            'registroTramite' => $registroTramite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a registroTramite entity.
     *
     */
    public function showAction(RegistroTramite $registroTramite)
    {
        $deleteForm = $this->createDeleteForm($registroTramite);

        return $this->render('registrotramite/show.html.twig', array(
            'registroTramite' => $registroTramite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing registroTramite entity.
     *
     */
    public function editAction(Request $request, RegistroTramite $registroTramite)
    {
        $deleteForm = $this->createDeleteForm($registroTramite);
        $editForm = $this->createForm('AppBundle\Form\RegistroTramiteType', $registroTramite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('registrotramite_edit', array('id' => $registroTramite->getId()));
        }

        return $this->render('registrotramite/edit.html.twig', array(
            'registroTramite' => $registroTramite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a registroTramite entity.
     *
     */
    public function deleteAction(Request $request, RegistroTramite $registroTramite)
    {
        $form = $this->createDeleteForm($registroTramite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($registroTramite);
            $em->flush();
        }

        return $this->redirectToRoute('registrotramite_index');
    }

    /**
     * Creates a form to delete a registroTramite entity.
     *
     * @param RegistroTramite $registroTramite The registroTramite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RegistroTramite $registroTramite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('registrotramite_delete', array('id' => $registroTramite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
