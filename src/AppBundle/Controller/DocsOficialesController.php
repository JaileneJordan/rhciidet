<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DocsOficiales;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Docsoficiale controller.
 *
 */
class DocsOficialesController extends Controller
{
    /**
     * Lists all docsOficiale entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $docsOficiales = $em->getRepository('AppBundle:DocsOficiales')->findAll();

        return $this->render('docsoficiales/index.html.twig', array(
            'docsOficiales' => $docsOficiales,
        ));
    }

    /**
     * Creates a new docsOficiale entity.
     *
     */
    public function newAction(Request $request)
    {
        $docsOficiale = new Docsoficiales();
        $form = $this->createForm('AppBundle\Form\DocsOficialesType', $docsOficiale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($docsOficiale);
            $em->flush();

            return $this->redirectToRoute('docsoficiales_show', array('id' => $docsOficiale->getId()));
        }

        return $this->render('docsoficiales/new.html.twig', array(
            'docsOficiale' => $docsOficiale,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a docsOficiale entity.
     *
     */
    public function showAction(DocsOficiales $docsOficiale)
    {
        $deleteForm = $this->createDeleteForm($docsOficiale);

        return $this->render('docsoficiales/show.html.twig', array(
            'docsOficiale' => $docsOficiale,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing docsOficiale entity.
     *
     */
    public function editAction(Request $request, DocsOficiales $docsOficiale)
    {
        $deleteForm = $this->createDeleteForm($docsOficiale);
        $editForm = $this->createForm('AppBundle\Form\DocsOficialesType', $docsOficiale);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('docsoficiales_edit', array('id' => $docsOficiale->getId()));
        }

        return $this->render('docsoficiales/edit.html.twig', array(
            'docsOficiale' => $docsOficiale,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a docsOficiale entity.
     *
     */
    public function deleteAction(Request $request, DocsOficiales $docsOficiale)
    {
        $form = $this->createDeleteForm($docsOficiale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($docsOficiale);
            $em->flush();
        }

        return $this->redirectToRoute('docsoficiales_index');
    }

    /**
     * Creates a form to delete a docsOficiale entity.
     *
     * @param DocsOficiales $docsOficiale The docsOficiale entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DocsOficiales $docsOficiale)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('docsoficiales_delete', array('id' => $docsOficiale->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
