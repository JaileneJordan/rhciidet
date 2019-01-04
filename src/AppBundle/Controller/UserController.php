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
      // indicamos la vista al loginUser
      return $this->render('user/loginUser.html.twig');
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
