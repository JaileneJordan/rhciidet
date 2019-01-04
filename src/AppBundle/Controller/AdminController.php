<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;
/* Añadimos los componentes que permitirán el uso de nuevas clases ************************/
use AppBundle\Entity\Empleado;
use AppBundle\Entity\Escolaridad;
use AppBundle\Entity\Horario;
use Symfony\Component\HttpFoundation\Session\Session; // Permite usar sesiones
use Symfony\Component\HttpFoundation\Response;        // Permite usar el método Response
/******************************************************************************************/


class AdminController extends Controller
{

  public function loginAdminAction(Request $request){
    //Llamamos al servicio de autenticacion
    $authenticationUtils = $this->get('security.authentication_utils');

    // conseguir el error del login si falla
    $error = $authenticationUtils->getLastAuthenticationError();

    // ultimo nombre de usuario que se ha intentado identificar
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render(
            'admin/loginAdmin.html.twig', array(
                'last_username' => $lastUsername,
                'error' => $error,
            ));
  }

  public function indexAction(Request $request){
    // indicamos la vista al indexAdmin
    return $this->render('admin/indexAdmin.html.twig');
  }

  public function perfilAction(Request $request){
    // indicamos la vista al perfilAdmin
    return $this->render('admin/perfilAdmin.html.twig');
  }

  public function accesoAction(Request $request){
    //busca los datos de la entidad empleado
    $em = $this->getDoctrine()->getManager();

    $empleados = $em->getRepository('AppBundle:Empleado')->findAll();

    // indicamos la vista al accesoAdmin
    return $this->render('admin/accesoAdmin.html.twig', array(
        'empleados' => $empleados,
    ));
  }

  public function antiguedadAction(Request $request){
    //busca los datos de la entidad empleado
    $em = $this->getDoctrine()->getManager();

    $empleados = $em->getRepository('AppBundle:Empleado')->findAll();

    // indicamos la vista al antiguedadAdmin
    return $this->render('admin/antiguedadAdmin.html.twig', array(
        'empleados' => $empleados,
    ));
  }

  public function infoempleadoAction(Request $request){
    // indicamos la vista al infoempleadoAdmin
    return $this->render('admin/infoempleadoAdmin.html.twig');
  }

    /*public function empleadoAction(Request $request){
    // indicamos la vista al empleadosAdmin
    return $this->render('@App/admin/empleadosAdmin.html.twig');
  }

  public function ausenciaAction(Request $request){
    // indicamos la vista al ausenciaAdmin
    return $this->render('@App/admin/ausenciaAdmin.html.twig');
  }

  public function subdireccionAction(Request $request){
    // indicamos la vista al subdireccionAdmin
    return $this->render('@App/admin/subdireccionAdmin.html.twig');
  }

  public function departamentoAction(Request $request){
    // indicamos la vista al departamentoAdmin
    return $this->render('@App/admin/departamentoAdmin.html.twig');
  }

  public function licenciaAction(Request $request){
    // indicamos la vista al licenciaAdmin
    return $this->render('@App/admin/licenciaAdmin.html.twig');
  }

  public function puestoAction(Request $request){
    // indicamos la vista al puestoAdmin
    return $this->render('@App/admin/puestoAdmin.html.twig');
  }

  public function categoriaAction(Request $request){
    // indicamos la vista al categoriaAdmin
    return $this->render('@App/admin/categoriaAdmin.html.twig');
  }

  public function docs_oficialesAction(Request $request){
    // indicamos la vista al docsoficAdmin
    return $this->render('@App/admin/docsoficAdmin.html.twig');
  }

  public function nivel_eduAction(Request $request){
    // indicamos la vista al niveleduAdmin
    return $this->render('@App/admin/niveleduAdmin.html.twig');
  }

  public function status_eduAction(Request $request){
    // indicamos la vista al statuseduAdmin
    return $this->render('@App/admin/statuseduAdmin.html.twig');
  }

  public function carga_tramiteAction(Request $request){
    // indicamos la vista al tramitesAdmin
    return $this->render('@App/admin/tramitesAdmin.html.twig');
  }*/

}
