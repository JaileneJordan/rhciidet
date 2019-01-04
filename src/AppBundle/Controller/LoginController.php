<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\Empleado;

class LoginController extends Controller
{

  public function loginAction(Request $request, AuthenticationUtils $authenticationUtils){

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
}
