<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Licencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Licencium controller.
 *
 */
class LicenciaController extends Controller
{
    /**
     * Lists all licencium entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $licencias = $em->getRepository('AppBundle:Licencia')->findAll();

        return $this->render('licencia/index.html.twig', array(
            'licencias' => $licencias,
        ));
    }

    /**
     * Creates a new licencium entity.
     *
     */
    public function newAction(Request $request)
    {
        $licencium = new Licencia();
        $form = $this->createForm('AppBundle\Form\LicenciaType', $licencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($licencium);
            $em->flush();

            return $this->redirectToRoute('licencia_show', array('id' => $licencium->getId()));
        }

        return $this->render('licencia/new.html.twig', array(
            'licencium' => $licencium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a licencium entity.
     *
     */
    public function showAction(Licencia $licencium)
    {
        $deleteForm = $this->createDeleteForm($licencium);

        return $this->render('licencia/show.html.twig', array(
            'licencium' => $licencium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing licencium entity.
     *
     */
    public function editAction(Request $request, Licencia $licencium)
    {
        $deleteForm = $this->createDeleteForm($licencium);
        $editForm = $this->createForm('AppBundle\Form\LicenciaType', $licencium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('licencia_edit', array('id' => $licencium->getId()));
        }

        return $this->render('licencia/edit.html.twig', array(
            'licencium' => $licencium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a licencium entity.
     *
     */
    public function deleteAction(Request $request, Licencia $licencium)
    {
        $form = $this->createDeleteForm($licencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($licencium);
            $em->flush();
        }

        return $this->redirectToRoute('licencia_index');
    }

    /**
     * Creates a form to delete a licencium entity.
     *
     * @param Licencia $licencium The licencium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Licencia $licencium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('licencia_delete', array('id' => $licencium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
