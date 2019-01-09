<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/* Añadimos los componentes que permitirán el uso de nuevas clases ************************/
  use Symfony\Component\HttpFoundation\Session\Session; // Permite usar sesiones
  use Symfony\Component\HttpFoundation\Response;        // Permite usar el método Response
/******************************************************************************************/

class UserController extends Controller
{
    public function loginUSerAction(Request $request){
      /* si existe el objeto User nos rediriges a home            */
      if( is_object($this->getUser()) ){
        return $this->redirect('index_user');
      }
      //Llamamos al servicio de autenticacion
      $authenticationUtils = $this->get('security.authentication_utils');
      // conseguir el error del login si falla
      $error = $authenticationUtils->getLastAuthenticationError();
      // ultimo nombre de usuario que se ha intentado identificar
      $lastUsername = $authenticationUtils->getLastUsername();
      return $this->render(
              'user/loginUser.html.twig', array(
                  'last_username' => $lastUsername,
                  'error' => $error,
              ));

    }

    public function index_userAction(Request $request){
      // indicamos la vista al indexUser
      return $this->render('user/indexUser.html.twig');
    }

    public function perfil_userAction(Request $request){
      // indicamos la vista al perfilUser
      return $this->render('user/perfilUser.html.twig');
    }

    public function horario_userAction(Request $request){
      // indicamos la vista al horarioUser
      return $this->render('user/horarioUser.html.twig');
    }

    public function tramite_userAction(Request $request){
      // indicamos la vista al tramiteUser
      return $this->render('user/tramitesUser.html.twig');
    }
}
