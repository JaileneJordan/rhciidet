<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Escolaridad;
use AppBundle\Entity\Empleado;
use AppBundle\Form\Type\EmpleadoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Escolaridad controller.
 *
 */
class EscolaridadController extends Controller
{
    /**
     * Lists all escolaridad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $escolaridads = $em->getRepository('AppBundle:Escolaridad')->findAll();

        $dql = "SELECT
                e.claveEmpleado, e.nombre, d.nombreDep, s.nombreSubd, e.clavePresupuestal, ni.nombreNe,se.nombreSe,do.nombreDoc,es.nombreTitulo,es.nombrePlantel,es.estado,es.fechaFin,es.numCedula,es.observaciones,es.id
                FROM AppBundle:Escolaridad es INNER JOIN AppBundle:Empleado e WITH es.idEmpleado = e.id
                INNER JOIN AppBundle:Departamento d WITH d.id = e.idDepto
                INNER JOIN AppBundle:Subdireccion s WITH s.id = e.idSubdireccion
                INNER JOIN AppBundle:NivelEdu ni WITH ni.id = es.idNiveledu
                INNER JOIN AppBundle:StatusEdu se WITH se.id = es.idStatusedu
                INNER JOIN AppBundle:DocsOficiales do WITH do.id = es.idDocsofi";

                $result = $em->createQuery($dql)->getResult();

        return $this->render('escolaridad/index.html.twig', array(
            'escolaridads' => $escolaridads,
            'result' => $result,
        ));
    }

    /**
     * Creates a new escolaridad entity.
     *
     */
    public function newAction(Request $request)
    {
        $escolaridad = new Escolaridad();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm('AppBundle\Form\EscolaridadType', $escolaridad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($escolaridad);
            $em->flush();

            return $this->redirectToRoute('escolaridad_show', array('id' => $escolaridad->getId()));
        }

        $dql = "SELECT
                e.claveEmpleado, e.nombre, d.nombre, s.nombre, e.clavePresupuestal, ni.nombre,se.nombre,do.nombre,es.nombreTitulo,es.nombrePlantel,es.estado,es.fechaFin,es.numCedula,es.observaciones,es.id
                FROM AppBundle:Escolaridad es INNER JOIN AppBundle:Empleado e WITH es.idEmpleado = e.id
                INNER JOIN AppBundle:Departamento d WITH d.id = e.idDepto
                INNER JOIN AppBundle:Subdireccion s WITH s.id = e.idSubdireccion
                INNER JOIN AppBundle:NivelEdu ni WITH ni.id = es.idNiveledu
                INNER JOIN AppBundle:StatusEdu se WITH se.id = es.idStatusedu
                INNER JOIN AppBundle:DocsOficiales do WITH do.id = es.idDocsofi";

                $result = $em->createQuery($dql)->getResult();

        return $this->render('escolaridad/new.html.twig', array(
            'escolaridad' => $escolaridad,
            'result' => $result,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a escolaridad entity.
     *
     */
    public function showAction(Escolaridad $escolaridad)
    {
        $empleado = new Empleado();

        $deleteForm = $this->createDeleteForm($escolaridad);

        return $this->render('escolaridad/show.html.twig', array(
            'escolaridad' => $escolaridad,
            'empleado' => $empleado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing escolaridad entity.
     *
     */
    public function editAction(Request $request, Escolaridad $escolaridad)
    {
        $deleteForm = $this->createDeleteForm($escolaridad);
        $editForm = $this->createForm('AppBundle\Form\EscolaridadType', $escolaridad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('escolaridad_edit', array('id' => $escolaridad->getId()));
        }

        return $this->render('escolaridad/edit.html.twig', array(
            'escolaridad' => $escolaridad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a escolaridad entity.
     *
     */
    public function deleteAction(Request $request, Escolaridad $escolaridad)
    {
        $form = $this->createDeleteForm($escolaridad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($escolaridad);
            $em->flush();
        }

        return $this->redirectToRoute('escolaridad_index');
    }

    /**
     * Creates a form to delete a escolaridad entity.
     *
     * @param Escolaridad $escolaridad The escolaridad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Escolaridad $escolaridad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('escolaridad_delete', array('id' => $escolaridad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
