<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
/* Añadimos los componentes que permitirán el uso de nuevas clases ************************/
  use Symfony\Component\HttpFoundation\Session\Session; // Permite usar sesiones
  use Symfony\Component\HttpFoundation\Response;        // Permite usar el método Response
/******************************************************************************************/


class AdminxDepController extends Controller
{
  public function loginAdminxDepAction(Request $request){
    // indicamos la vista al loginAdmin
    return $this->render('adminxdep/loginAdminxdep.html.twig');
  }

  public function indexAdminxdepAction(Request $request){
    // indicamos la vista al indexAdmin
    return $this->render('adminxdep/indexAdminxdep.html.twig');
  }

  public function perfilAction(Request $request){
    // indicamos la vista al perfilAdmin
    return $this->render('adminxdep/perfilAdminxdep.html.twig');
  }

  public function horarioAction(Request $request){
    // indicamos la vista al perfilAdmin
    return $this->render('adminxdep/horarioAdminxdep.html.twig');
  }

  public function tramiteAction(Request $request){
    // indicamos la vista al tramitesAdmin
    return $this->render('adminxdep/tramitesAdminxdep.html.twig');
  }

  public function cargaHorarioAction(Request $request){
    // indicamos la vista al perfilAdmin
    return $this->render('adminxdep/cargaempleadoAdminxdep.html.twig');
  }

}
