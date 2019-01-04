<?php

namespace AppBundle\Controller;

use AppBundle\Entity\NivelEdu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Niveledu controller.
 *
 */
class NivelEduController extends Controller
{
    /**
     * Lists all nivelEdu entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nivelEdus = $em->getRepository('AppBundle:NivelEdu')->findAll();

        return $this->render('niveledu/index.html.twig', array(
            'nivelEdus' => $nivelEdus,
        ));
    }

    /**
     * Creates a new nivelEdu entity.
     *
     */
    public function newAction(Request $request)
    {
        $nivelEdu = new Niveledu();
        $form = $this->createForm('AppBundle\Form\NivelEduType', $nivelEdu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nivelEdu);
            $em->flush();

            return $this->redirectToRoute('niveledu_show', array('id' => $nivelEdu->getId()));
        }

        return $this->render('niveledu/new.html.twig', array(
            'nivelEdu' => $nivelEdu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nivelEdu entity.
     *
     */
    public function showAction(NivelEdu $nivelEdu)
    {
        $deleteForm = $this->createDeleteForm($nivelEdu);

        return $this->render('niveledu/show.html.twig', array(
            'nivelEdu' => $nivelEdu,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nivelEdu entity.
     *
     */
    public function editAction(Request $request, NivelEdu $nivelEdu)
    {
        $deleteForm = $this->createDeleteForm($nivelEdu);
        $editForm = $this->createForm('AppBundle\Form\NivelEduType', $nivelEdu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('niveledu_edit', array('id' => $nivelEdu->getId()));
        }

        return $this->render('niveledu/edit.html.twig', array(
            'nivelEdu' => $nivelEdu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a nivelEdu entity.
     *
     */
    public function deleteAction(Request $request, NivelEdu $nivelEdu)
    {
        $form = $this->createDeleteForm($nivelEdu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nivelEdu);
            $em->flush();
        }

        return $this->redirectToRoute('niveledu_index');
    }

    /**
     * Creates a form to delete a nivelEdu entity.
     *
     * @param NivelEdu $nivelEdu The nivelEdu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NivelEdu $nivelEdu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('niveledu_delete', array('id' => $nivelEdu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
