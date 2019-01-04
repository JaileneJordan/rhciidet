<?php

namespace AppBundle\Controller;

use AppBundle\Entity\StatusEdu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Statusedu controller.
 *
 */
class StatusEduController extends Controller
{
    /**
     * Lists all statusEdu entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $statusEdus = $em->getRepository('AppBundle:StatusEdu')->findAll();

        return $this->render('statusedu/index.html.twig', array(
            'statusEdus' => $statusEdus,
        ));
    }

    /**
     * Creates a new statusEdu entity.
     *
     */
    public function newAction(Request $request)
    {
        $statusEdu = new Statusedu();
        $form = $this->createForm('AppBundle\Form\StatusEduType', $statusEdu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($statusEdu);
            $em->flush();

            return $this->redirectToRoute('statusedu_show', array('id' => $statusEdu->getId()));
        }

        return $this->render('statusedu/new.html.twig', array(
            'statusEdu' => $statusEdu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a statusEdu entity.
     *
     */
    public function showAction(StatusEdu $statusEdu)
    {
        $deleteForm = $this->createDeleteForm($statusEdu);

        return $this->render('statusedu/show.html.twig', array(
            'statusEdu' => $statusEdu,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing statusEdu entity.
     *
     */
    public function editAction(Request $request, StatusEdu $statusEdu)
    {
        $deleteForm = $this->createDeleteForm($statusEdu);
        $editForm = $this->createForm('AppBundle\Form\StatusEduType', $statusEdu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('statusedu_edit', array('id' => $statusEdu->getId()));
        }

        return $this->render('statusedu/edit.html.twig', array(
            'statusEdu' => $statusEdu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a statusEdu entity.
     *
     */
    public function deleteAction(Request $request, StatusEdu $statusEdu)
    {
        $form = $this->createDeleteForm($statusEdu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($statusEdu);
            $em->flush();
        }

        return $this->redirectToRoute('statusedu_index');
    }

    /**
     * Creates a form to delete a statusEdu entity.
     *
     * @param StatusEdu $statusEdu The statusEdu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StatusEdu $statusEdu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('statusedu_delete', array('id' => $statusEdu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
