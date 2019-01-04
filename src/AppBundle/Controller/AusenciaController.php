<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ausencia;
use AppBundle\Form\Type\AusenciaType;
use AppBundle\Form\Type\EmpleadoType;
use AppBundle\Entity\Empleado;
use AppBundle\Entity\Licencia;
use AppBundle\Form\Type\LicenciaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Ausencium controller.
 *
 */
class AusenciaController extends Controller
{
    /**
     * Lists all ausencium entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $ausencias = $em->getRepository('AppBundle:Ausencia')->findAll();


        $dql = "SELECT
                e.claveEmpleado, e.nombre, e.aPaterno, e.aMaterno, l.nombreLic, a.constancia, a.fechaInicial, a.fechaFinal, a.totalDias
                FROM AppBundle:Empleado e
                INNER JOIN AppBundle:Ausencia a WITH e.id = a.idEmpleado
                INNER JOIN AppBundle:Licencia l WITH l.id = a.idLicencia";

                $result = $em->createQuery($dql)->getResult();

        

        return $this->render('ausencia/index.html.twig', array(
            'ausencias' => $ausencias,
            'result' => $result,
        ));
    }

    /**
     * Creates a new ausencium entity.
     *
     */
    public function newAction(Request $request)
    {
        $ausencium = new Ausencia();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('AppBundle\Form\AusenciaType', $ausencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ausencium);
            $em->flush();

            return $this->redirectToRoute('ausencia_show', array('id' => $ausencium->getId()));
        }

        $dql = "SELECT
                e.claveEmpleado, e.nombre, e.aPaterno, e.aMaterno, l.nombreLic, a.constancia, a.fechaInicial, a.fechaFinal, a.totalDias
                FROM AppBundle:Empleado e
                INNER JOIN AppBundle:Ausencia a WITH e.id = a.idEmpleado
                INNER JOIN AppBundle:Licencia l WITH l.id = a.idLicencia";

                $result = $em->createQuery($dql)->getResult();

        return $this->render('ausencia/new.html.twig', array(
            'ausencium' => $ausencium,
            'result' => $result,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ausencium entity.
     *
     */
    public function showAction(Ausencia $ausencium)
    {
        $deleteForm = $this->createDeleteForm($ausencium);

        return $this->render('ausencia/show.html.twig', array(
            'ausencium' => $ausencium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ausencium entity.
     *
     */
    public function editAction(Request $request, Ausencia $ausencium)
    {
        $deleteForm = $this->createDeleteForm($ausencium);
        $editForm = $this->createForm('AppBundle\Form\AusenciaType', $ausencium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ausencia_edit', array('id' => $ausencium->getId()));
        }

        return $this->render('ausencia/edit.html.twig', array(
            'ausencium' => $ausencium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ausencium entity.
     *
     */
    public function deleteAction(Request $request, Ausencia $ausencium)
    {
        $form = $this->createDeleteForm($ausencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ausencium);
            $em->flush();
        }

        return $this->redirectToRoute('ausencia_index');
    }

    /**
     * Creates a form to delete a ausencium entity.
     *
     * @param Ausencia $ausencium The ausencium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ausencia $ausencium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ausencia_delete', array('id' => $ausencium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
