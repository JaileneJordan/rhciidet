<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_homepage'));
            }

            return $ret;
        }
        not_app_homepage:

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/login')) {
                // loginAdmin
                if ('/loginAdmin' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::loginAdminAction',  '_route' => 'loginAdmin',);
                }

                // login
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ('/login_check' === $pathinfo) {
                    return array('_route' => 'login_check');
                }

                // loginUser
                if ('/loginUser' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginUserAction',  '_route' => 'loginUser',);
                }

                // loginAdminxDep
                if ('/loginAdminxDep' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminxDepController::loginAdminxDepAction',  '_route' => 'loginAdminxDep',);
                }

            }

            // logout
            if ('/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/licencia')) {
                // licencia_index
                if ('/licencia' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\LicenciaController::indexAction',  '_route' => 'licencia_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_licencia_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'licencia_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_licencia_index;
                    }

                    return $ret;
                }
                not_licencia_index:

                // licencia_show
                if (preg_match('#^/licencia/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_show')), array (  '_controller' => 'AppBundle\\Controller\\LicenciaController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_licencia_show;
                    }

                    return $ret;
                }
                not_licencia_show:

                // licencia_new
                if ('/licencia/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\LicenciaController::newAction',  '_route' => 'licencia_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_licencia_new;
                    }

                    return $ret;
                }
                not_licencia_new:

                // licencia_edit
                if (preg_match('#^/licencia/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\LicenciaController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_licencia_edit;
                    }

                    return $ret;
                }
                not_licencia_edit:

                // licencia_delete
                if (preg_match('#^/licencia/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\LicenciaController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_licencia_delete;
                    }

                    return $ret;
                }
                not_licencia_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/perfil')) {
            // perfil_admin
            if ('/perfil_admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::perfilAction',  '_route' => 'perfil_admin',);
            }

            // perfil_user
            if ('/perfil' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::perfil_userAction',  '_route' => 'perfil_user',);
            }

            // perfil
            if ('/perfil' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminxDepController::perfilAction',  '_route' => 'perfil',);
            }

        }

        elseif (0 === strpos($pathinfo, '/puesto')) {
            // puesto_index
            if ('/puesto' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PuestoController::indexAction',  '_route' => 'puesto_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_puesto_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'puesto_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_puesto_index;
                }

                return $ret;
            }
            not_puesto_index:

            // puesto_show
            if (preg_match('#^/puesto/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'puesto_show')), array (  '_controller' => 'AppBundle\\Controller\\PuestoController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_puesto_show;
                }

                return $ret;
            }
            not_puesto_show:

            // puesto_new
            if ('/puesto/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PuestoController::newAction',  '_route' => 'puesto_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_puesto_new;
                }

                return $ret;
            }
            not_puesto_new:

            // puesto_edit
            if (preg_match('#^/puesto/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'puesto_edit')), array (  '_controller' => 'AppBundle\\Controller\\PuestoController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_puesto_edit;
                }

                return $ret;
            }
            not_puesto_edit:

            // puesto_delete
            if (preg_match('#^/puesto/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'puesto_delete')), array (  '_controller' => 'AppBundle\\Controller\\PuestoController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_puesto_delete;
                }

                return $ret;
            }
            not_puesto_delete:

        }

        elseif (0 === strpos($pathinfo, '/index')) {
            // index
            if ('/index' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'index',);
            }

            // index_user
            if ('/index_user' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::index_userAction',  '_route' => 'index_user',);
            }

            // indexAdminxdep
            if ('/indexAdminxdep' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminxDepController::indexAdminxdepAction',  '_route' => 'indexAdminxdep',);
            }

        }

        // info_empleado
        if ('/info_empleado' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::infoempleadoAction',  '_route' => 'info_empleado',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // acceso
            if ('/acceso' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::accesoAction',  '_route' => 'acceso',);
            }

            // antiguedad
            if ('/antiguedad' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::antiguedadAction',  '_route' => 'antiguedad',);
            }

            if (0 === strpos($pathinfo, '/ausencia')) {
                // ausencia_index
                if ('/ausencia' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\AusenciaController::indexAction',  '_route' => 'ausencia_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_ausencia_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ausencia_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_ausencia_index;
                    }

                    return $ret;
                }
                not_ausencia_index:

                // ausencia_show
                if (preg_match('#^/ausencia/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'ausencia_show')), array (  '_controller' => 'AppBundle\\Controller\\AusenciaController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_ausencia_show;
                    }

                    return $ret;
                }
                not_ausencia_show:

                // ausencia_new
                if ('/ausencia/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\AusenciaController::newAction',  '_route' => 'ausencia_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_ausencia_new;
                    }

                    return $ret;
                }
                not_ausencia_new:

                // ausencia_edit
                if (preg_match('#^/ausencia/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'ausencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\AusenciaController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_ausencia_edit;
                    }

                    return $ret;
                }
                not_ausencia_edit:

                // ausencia_delete
                if (preg_match('#^/ausencia/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'ausencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\AusenciaController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_ausencia_delete;
                    }

                    return $ret;
                }
                not_ausencia_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/horario')) {
            // horario_user
            if ('/horario' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::horario_userAction',  '_route' => 'horario_user',);
            }

            // horario
            if ('/horario' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminxDepController::horarioAction',  '_route' => 'horario',);
            }

            // horario_index
            if ('/horario' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\HorarioController::indexAction',  '_route' => 'horario_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_horario_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'horario_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_horario_index;
                }

                return $ret;
            }
            not_horario_index:

            // horario_show
            if (preg_match('#^/horario/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_show')), array (  '_controller' => 'AppBundle\\Controller\\HorarioController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_horario_show;
                }

                return $ret;
            }
            not_horario_show:

            // horario_new
            if ('/horario/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\HorarioController::newAction',  '_route' => 'horario_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_horario_new;
                }

                return $ret;
            }
            not_horario_new:

            // horario_edit
            if (preg_match('#^/horario/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_edit')), array (  '_controller' => 'AppBundle\\Controller\\HorarioController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_horario_edit;
                }

                return $ret;
            }
            not_horario_edit:

            // horario_delete
            if (preg_match('#^/horario/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_delete')), array (  '_controller' => 'AppBundle\\Controller\\HorarioController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_horario_delete;
                }

                return $ret;
            }
            not_horario_delete:

        }

        elseif (0 === strpos($pathinfo, '/tramite')) {
            // tramite_user
            if ('/tramite' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::tramite_userAction',  '_route' => 'tramite_user',);
            }

            // tramite
            if ('/tramite' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminxDepController::tramiteAction',  '_route' => 'tramite',);
            }

            // tramite_index
            if ('/tramite' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\TramiteController::indexAction',  '_route' => 'tramite_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_tramite_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'tramite_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_tramite_index;
                }

                return $ret;
            }
            not_tramite_index:

            // tramite_show
            if (preg_match('#^/tramite/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'tramite_show')), array (  '_controller' => 'AppBundle\\Controller\\TramiteController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_tramite_show;
                }

                return $ret;
            }
            not_tramite_show:

            // tramite_new
            if ('/tramite/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\TramiteController::newAction',  '_route' => 'tramite_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tramite_new;
                }

                return $ret;
            }
            not_tramite_new:

            // tramite_edit
            if (preg_match('#^/tramite/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'tramite_edit')), array (  '_controller' => 'AppBundle\\Controller\\TramiteController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tramite_edit;
                }

                return $ret;
            }
            not_tramite_edit:

            // tramite_delete
            if (preg_match('#^/tramite/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'tramite_delete')), array (  '_controller' => 'AppBundle\\Controller\\TramiteController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_tramite_delete;
                }

                return $ret;
            }
            not_tramite_delete:

        }

        // carga_horario
        if ('/carga_horario' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\AdminxDepController::cargaHorarioAction',  '_route' => 'carga_horario',);
        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // categoria_index
            if ('/categoria' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoriaController::indexAction',  '_route' => 'categoria_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_categoria_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'categoria_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_categoria_index;
                }

                return $ret;
            }
            not_categoria_index:

            // categoria_show
            if (preg_match('#^/categoria/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'AppBundle\\Controller\\CategoriaController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_categoria_show;
                }

                return $ret;
            }
            not_categoria_show:

            // categoria_new
            if ('/categoria/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\CategoriaController::newAction',  '_route' => 'categoria_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_categoria_new;
                }

                return $ret;
            }
            not_categoria_new:

            // categoria_edit
            if (preg_match('#^/categoria/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoriaController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_categoria_edit;
                }

                return $ret;
            }
            not_categoria_edit:

            // categoria_delete
            if (preg_match('#^/categoria/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoriaController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_categoria_delete;
                }

                return $ret;
            }
            not_categoria_delete:

        }

        elseif (0 === strpos($pathinfo, '/departamento')) {
            // departamento_index
            if ('/departamento' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_departamento_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'departamento_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_departamento_index;
                }

                return $ret;
            }
            not_departamento_index:

            // departamento_show
            if (preg_match('#^/departamento/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_show')), array (  '_controller' => 'AppBundle\\Controller\\DepartamentoController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_departamento_show;
                }

                return $ret;
            }
            not_departamento_show:

            // departamento_new
            if ('/departamento/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_departamento_new;
                }

                return $ret;
            }
            not_departamento_new:

            // departamento_edit
            if (preg_match('#^/departamento/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'AppBundle\\Controller\\DepartamentoController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_departamento_edit;
                }

                return $ret;
            }
            not_departamento_edit:

            // departamento_delete
            if (preg_match('#^/departamento/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_delete')), array (  '_controller' => 'AppBundle\\Controller\\DepartamentoController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_departamento_delete;
                }

                return $ret;
            }
            not_departamento_delete:

        }

        elseif (0 === strpos($pathinfo, '/docsoficiales')) {
            // docsoficiales_index
            if ('/docsoficiales' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DocsOficialesController::indexAction',  '_route' => 'docsoficiales_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_docsoficiales_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'docsoficiales_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_docsoficiales_index;
                }

                return $ret;
            }
            not_docsoficiales_index:

            // docsoficiales_show
            if (preg_match('#^/docsoficiales/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'docsoficiales_show')), array (  '_controller' => 'AppBundle\\Controller\\DocsOficialesController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_docsoficiales_show;
                }

                return $ret;
            }
            not_docsoficiales_show:

            // docsoficiales_new
            if ('/docsoficiales/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DocsOficialesController::newAction',  '_route' => 'docsoficiales_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_docsoficiales_new;
                }

                return $ret;
            }
            not_docsoficiales_new:

            // docsoficiales_edit
            if (preg_match('#^/docsoficiales/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'docsoficiales_edit')), array (  '_controller' => 'AppBundle\\Controller\\DocsOficialesController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_docsoficiales_edit;
                }

                return $ret;
            }
            not_docsoficiales_edit:

            // docsoficiales_delete
            if (preg_match('#^/docsoficiales/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'docsoficiales_delete')), array (  '_controller' => 'AppBundle\\Controller\\DocsOficialesController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_docsoficiales_delete;
                }

                return $ret;
            }
            not_docsoficiales_delete:

        }

        elseif (0 === strpos($pathinfo, '/empleado')) {
            // empleado_index
            if ('/empleado' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\EmpleadoController::indexAction',  '_route' => 'empleado_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_empleado_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'empleado_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_empleado_index;
                }

                return $ret;
            }
            not_empleado_index:

            // empleado_show
            if (preg_match('#^/empleado/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_show')), array (  '_controller' => 'AppBundle\\Controller\\EmpleadoController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_empleado_show;
                }

                return $ret;
            }
            not_empleado_show:

            // empleado_new
            if ('/empleado/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\EmpleadoController::newAction',  '_route' => 'empleado_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_empleado_new;
                }

                return $ret;
            }
            not_empleado_new:

            // empleado_edit
            if (preg_match('#^/empleado/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_edit')), array (  '_controller' => 'AppBundle\\Controller\\EmpleadoController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_empleado_edit;
                }

                return $ret;
            }
            not_empleado_edit:

            // empleado_delete
            if (preg_match('#^/empleado/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_delete')), array (  '_controller' => 'AppBundle\\Controller\\EmpleadoController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_empleado_delete;
                }

                return $ret;
            }
            not_empleado_delete:

        }

        elseif (0 === strpos($pathinfo, '/escolaridad')) {
            // escolaridad_index
            if ('/escolaridad' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\EscolaridadController::indexAction',  '_route' => 'escolaridad_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_escolaridad_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'escolaridad_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_escolaridad_index;
                }

                return $ret;
            }
            not_escolaridad_index:

            // escolaridad_show
            if (preg_match('#^/escolaridad/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'escolaridad_show')), array (  '_controller' => 'AppBundle\\Controller\\EscolaridadController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_escolaridad_show;
                }

                return $ret;
            }
            not_escolaridad_show:

            // escolaridad_new
            if ('/escolaridad/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\EscolaridadController::newAction',  '_route' => 'escolaridad_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_escolaridad_new;
                }

                return $ret;
            }
            not_escolaridad_new:

            // escolaridad_edit
            if (preg_match('#^/escolaridad/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'escolaridad_edit')), array (  '_controller' => 'AppBundle\\Controller\\EscolaridadController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_escolaridad_edit;
                }

                return $ret;
            }
            not_escolaridad_edit:

            // escolaridad_delete
            if (preg_match('#^/escolaridad/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'escolaridad_delete')), array (  '_controller' => 'AppBundle\\Controller\\EscolaridadController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_escolaridad_delete;
                }

                return $ret;
            }
            not_escolaridad_delete:

        }

        elseif (0 === strpos($pathinfo, '/niveledu')) {
            // niveledu_index
            if ('/niveledu' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\NivelEduController::indexAction',  '_route' => 'niveledu_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_niveledu_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'niveledu_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_niveledu_index;
                }

                return $ret;
            }
            not_niveledu_index:

            // niveledu_show
            if (preg_match('#^/niveledu/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'niveledu_show')), array (  '_controller' => 'AppBundle\\Controller\\NivelEduController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_niveledu_show;
                }

                return $ret;
            }
            not_niveledu_show:

            // niveledu_new
            if ('/niveledu/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\NivelEduController::newAction',  '_route' => 'niveledu_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_niveledu_new;
                }

                return $ret;
            }
            not_niveledu_new:

            // niveledu_edit
            if (preg_match('#^/niveledu/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'niveledu_edit')), array (  '_controller' => 'AppBundle\\Controller\\NivelEduController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_niveledu_edit;
                }

                return $ret;
            }
            not_niveledu_edit:

            // niveledu_delete
            if (preg_match('#^/niveledu/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'niveledu_delete')), array (  '_controller' => 'AppBundle\\Controller\\NivelEduController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_niveledu_delete;
                }

                return $ret;
            }
            not_niveledu_delete:

        }

        elseif (0 === strpos($pathinfo, '/registrotramite')) {
            // registrotramite_index
            if ('/registrotramite' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\RegistroTramiteController::indexAction',  '_route' => 'registrotramite_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_registrotramite_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'registrotramite_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_registrotramite_index;
                }

                return $ret;
            }
            not_registrotramite_index:

            // registrotramite_show
            if (preg_match('#^/registrotramite/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'registrotramite_show')), array (  '_controller' => 'AppBundle\\Controller\\RegistroTramiteController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_registrotramite_show;
                }

                return $ret;
            }
            not_registrotramite_show:

            // registrotramite_new
            if ('/registrotramite/new' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\RegistroTramiteController::newAction',  '_route' => 'registrotramite_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_registrotramite_new;
                }

                return $ret;
            }
            not_registrotramite_new:

            // registrotramite_edit
            if (preg_match('#^/registrotramite/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'registrotramite_edit')), array (  '_controller' => 'AppBundle\\Controller\\RegistroTramiteController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_registrotramite_edit;
                }

                return $ret;
            }
            not_registrotramite_edit:

            // registrotramite_delete
            if (preg_match('#^/registrotramite/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'registrotramite_delete')), array (  '_controller' => 'AppBundle\\Controller\\RegistroTramiteController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_registrotramite_delete;
                }

                return $ret;
            }
            not_registrotramite_delete:

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/semestre')) {
                // semestre_index
                if ('/semestre' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\SemestreController::indexAction',  '_route' => 'semestre_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_semestre_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'semestre_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_semestre_index;
                    }

                    return $ret;
                }
                not_semestre_index:

                // semestre_show
                if (preg_match('#^/semestre/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_show')), array (  '_controller' => 'AppBundle\\Controller\\SemestreController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_semestre_show;
                    }

                    return $ret;
                }
                not_semestre_show:

                // semestre_new
                if ('/semestre/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\SemestreController::newAction',  '_route' => 'semestre_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_semestre_new;
                    }

                    return $ret;
                }
                not_semestre_new:

                // semestre_edit
                if (preg_match('#^/semestre/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_edit')), array (  '_controller' => 'AppBundle\\Controller\\SemestreController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_semestre_edit;
                    }

                    return $ret;
                }
                not_semestre_edit:

                // semestre_delete
                if (preg_match('#^/semestre/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'semestre_delete')), array (  '_controller' => 'AppBundle\\Controller\\SemestreController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_semestre_delete;
                    }

                    return $ret;
                }
                not_semestre_delete:

            }

            elseif (0 === strpos($pathinfo, '/statusedu')) {
                // statusedu_index
                if ('/statusedu' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StatusEduController::indexAction',  '_route' => 'statusedu_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_statusedu_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'statusedu_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_statusedu_index;
                    }

                    return $ret;
                }
                not_statusedu_index:

                // statusedu_show
                if (preg_match('#^/statusedu/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'statusedu_show')), array (  '_controller' => 'AppBundle\\Controller\\StatusEduController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_statusedu_show;
                    }

                    return $ret;
                }
                not_statusedu_show:

                // statusedu_new
                if ('/statusedu/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\StatusEduController::newAction',  '_route' => 'statusedu_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_statusedu_new;
                    }

                    return $ret;
                }
                not_statusedu_new:

                // statusedu_edit
                if (preg_match('#^/statusedu/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'statusedu_edit')), array (  '_controller' => 'AppBundle\\Controller\\StatusEduController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_statusedu_edit;
                    }

                    return $ret;
                }
                not_statusedu_edit:

                // statusedu_delete
                if (preg_match('#^/statusedu/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'statusedu_delete')), array (  '_controller' => 'AppBundle\\Controller\\StatusEduController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_statusedu_delete;
                    }

                    return $ret;
                }
                not_statusedu_delete:

            }

            elseif (0 === strpos($pathinfo, '/subdireccion')) {
                // subdireccion_index
                if ('/subdireccion' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\SubdireccionController::indexAction',  '_route' => 'subdireccion_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_subdireccion_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'subdireccion_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_subdireccion_index;
                    }

                    return $ret;
                }
                not_subdireccion_index:

                // subdireccion_show
                if (preg_match('#^/subdireccion/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'subdireccion_show')), array (  '_controller' => 'AppBundle\\Controller\\SubdireccionController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_subdireccion_show;
                    }

                    return $ret;
                }
                not_subdireccion_show:

                // subdireccion_new
                if ('/subdireccion/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\SubdireccionController::newAction',  '_route' => 'subdireccion_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_subdireccion_new;
                    }

                    return $ret;
                }
                not_subdireccion_new:

                // subdireccion_edit
                if (preg_match('#^/subdireccion/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'subdireccion_edit')), array (  '_controller' => 'AppBundle\\Controller\\SubdireccionController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_subdireccion_edit;
                    }

                    return $ret;
                }
                not_subdireccion_edit:

                // subdireccion_delete
                if (preg_match('#^/subdireccion/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'subdireccion_delete')), array (  '_controller' => 'AppBundle\\Controller\\SubdireccionController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_subdireccion_delete;
                    }

                    return $ret;
                }
                not_subdireccion_delete:

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
