<?php

/* admin/perfilAdmin.html.twig */
class __TwigTemplate_8eca023b9bbd3f7f76d0bfae4ce9335a0261c833963e2b5073f5a30f7e854a65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/perfilAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/perfilAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/perfilAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 1037
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<!-- page content -->
<div class=\"right_col\" role=\"main\">
  <h1>Mi perfil</h1>
  <a class=\"btn btn-app\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">
    <i class=\"fa fa-arrow-left\"></i> Regresar
  </a>


  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\">
        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
          <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#datosEmpleado\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Datos del Empleado</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#escolaridadEmpleado\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Escolaridad</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#horarioEmpleado\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Horario</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#antiguedadEmpleado\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Antigüedad</a>
            </li>
          </ul>
          <!-- empieza datos personales -->
          <div id=\"myTabContent\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"datosEmpleado\" aria-labelledby=\"home-tab\">
              <div class=\"x_title\">
                <h2>Datos Personales</h2>
                <div class=\"clearfix\"></div>
              </div>
              <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">
                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Nombre: </label></br>
                    <label>Apellido Paterno: </label></br>
                    <label>Apellido Materno: </label></br>
                    <label>RFC: </label></br>
                    <label>Curp: </label></br>
                  </div>
                  <div class=\"control-label col-md-5 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Fecha Nacimiento: </label></br>
                    <label>Lugar de Nacimiento: </label></br>
                    <label>Género: </label></br>
                    <label>Estado Civil: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Dirección</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Calle: </label></br>
                    <label>Num. Exterior: </label></br>
                    <label>Colonia: </label></br>
                    <label>C.P.: </label></br>
                    <label>Municipio: </label></br>
                    <label>Estado: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Contacto</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Teléfono: </label></br>
                    <label>Correo: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Datos Laborales</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Fecha Ingreso Gob. Fed.: </label></br>
                    <label>Fecha Ingreso Sep.: </label></br>
                    <label>Fecha Ingreso Tec.: </label></br>
                    <label>Fecha Ingreso CIIDET: </label></br>
                    <label>Clave Empleado: </label></br>
                    <label>Clave Presupuestal: </label></br>
                  </div>
                  <div class=\"control-label col-md-5 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Interinato: </label></br>
                    <label>Subdirección: </label></br>
                    <label>Departamento: </label></br>
                    <label>Puesto: </label></br>
                    <label>Categoría: </label></br>
                    <label>Activo: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Acceso al Sistema</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Tipo de Usuario: </label></br>
                    <label>Nombre de Usuario: </label></br>
                    <label>Contraseña: </label></br>
                  </div>
                </div>
              </form>
            </div>
            <!--Termina datos personales-->

            <!--empieza escolaridad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">


              <form id=\"escolaridad\">
                      <!--Empieza lista-->
                      <div class=\"x_title\">
                        <h2>Lista de Escolaridad</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <!--empieza tabla -->
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <div class=\"clearfix\"></div>
                            <div class=\"x_content\">
                              <table class=\"table table-bordered\">
                                <thead>
                                  <tr>
                                    <th>Id Escolaridad</th>
                                    <th>Nivel Escolar</th>
                                    <th>Documentación Oficial</th>
                                    <th>Grado</th>
                                    <th>Nombre Titulación</th>
                                    <th>Nombre de la Institución</th>
                                    <th>Estado</th>
                                    <th>Fecha Titulación</th>
                                    <th>Num. Cédula</th>
                                    <th>Último grado de Estudios</th>
                                    <th>Observaciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <th></th>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                        <!--termina tabla -->
                      </div>
                      <!--Termina Lista -->
                    </form>
            </div>
            <!--termina escolaridad-->

            <!--empieza horario-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"horarioEmpleado\" aria-labelledby=\"profile-tab\">
              <div class=\"x_title\">
                <h2>Horario</h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                  </li>
                </ul>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">
                <br />
                <!--Empiezan Acciones Agregar-->
                <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#agregarHorario\">
                  <i class=\"fa fa-plus-square\"></i> Agregar Horario
                </a>
                <div class=\"modal fade\" id=\"agregarHorario\" role=\"dialog\">
                  <div class=\"modal-dialog\">
                  <!-- Modal content-->
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Agregar Horario</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Horario <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <input type=\"text\" id=\"idHorario\" name=\"idHorario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                            </div>
                          </div>
                          </br>
                          </br>
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Semestre <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <select class=\"form-control\">
                                <option selected disabled>Elegir...</option>
                                <option>Enero - Junio</option>
                                <option>Julio - Diciembre</option>
                              </select>
                            </div>
                            </br>
                            </br>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idYear\" name=\"idYear\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Matutino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatLun\" name=\"entradaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatLun\" name=\"salidaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMar\" name=\"entradaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMar\" name=\"salidaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMier\" name=\"entradaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMier\" name=\"salidaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatJue\" name=\"entradaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatJue\" name=\"salidaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatVier\" name=\"entradaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatVier\" name=\"salidaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Verpertino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesLun\" name=\"entradaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesLun\" name=\"salidaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMar\" name=\"entradaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMar\" name=\"salidaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMier\" name=\"entradaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMier\" name=\"salidaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesJue\" name=\"entradaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesJue\" name=\"salidaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesVier\" name=\"entradaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesVier\" name=\"salidaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Termina Acciones Agregar-->

                  <!--Empiezan Acciones Modificar-->
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarHorario\">
                    <i class=\"fa fa-edit\"></i> Modificar Horario
                  </a>
                  <div class=\"modal fade\" id=\"modificarHorario\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                    <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Modificar Horario</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Semestre <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <select class=\"form-control\">
                                <option selected disabled>Elegir...</option>
                                <option>Enero - Junio</option>
                                <option>Julio - Diciembre</option>
                              </select>
                            </div>
                            </br>
                            </br>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idYear\" name=\"idYear\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                            </br>
                            </br>
                            <h4>Horario Matutino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatLun\" name=\"entradaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatLun\" name=\"salidaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMar\" name=\"entradaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMar\" name=\"salidaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMier\" name=\"entradaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMier\" name=\"salidaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatJue\" name=\"entradaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatJue\" name=\"salidaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatVier\" name=\"entradaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatVier\" name=\"salidaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Verpertino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesLun\" name=\"entradaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesLun\" name=\"salidaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMar\" name=\"entradaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMar\" name=\"salidaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMier\" name=\"entradaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMier\" name=\"salidaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesJue\" name=\"entradaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesJue\" name=\"salidaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesVier\" name=\"entradaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesVier\" name=\"salidaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Termina Acciones Modificar-->

                  <!--Empiezan Acciones Eliminar-->
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarHorario\">
                    <i class=\"fa fa-close\"></i> Eliminar Horario
                  </a>
                  <div class=\"modal fade\" id=\"eliminarHorario\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Eliminar Horario</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Semestre <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <select class=\"form-control\">
                                <option selected disabled>Elegir...</option>
                                <option>Enero - Junio</option>
                                <option>Julio - Diciembre</option>
                              </select>
                            </div>
                            </br>
                            </br>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idYear\" name=\"idYear\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                            </br>
                            </br>
                            <h4>Horario Matutino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatLun\" name=\"entradaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatLun\" name=\"salidaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMar\" name=\"entradaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMar\" name=\"salidaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMier\" name=\"entradaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMier\" name=\"salidaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatJue\" name=\"entradaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatJue\" name=\"salidaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatVier\" name=\"entradaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatVier\" name=\"salidaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Verpertino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesLun\" name=\"entradaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesLun\" name=\"salidaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMar\" name=\"entradaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMar\" name=\"salidaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMier\" name=\"entradaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMier\" name=\"salidaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesJue\" name=\"entradaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesJue\" name=\"salidaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesVier\" name=\"entradaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesVier\" name=\"salidaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Termina Acciones Eliminar-->

                <!--empieza  check de semestre -->
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Semestre<span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <select class=\"form-control\">
                      <option selected disabled>Elegir...</option>
                      <option>Julio - Diciembre</option>
                    </select>
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"yearHorario\" name=\"yearHorario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <center><button type=\"submit\" class=\"btn btn-default\">Ver</button></center>
                <!--termina  check de semestre -->

                <!--empieza tabla -->
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                      <div class=\"clearfix\"></div>

                    <div class=\"x_content\">

                      <table class=\"table table-bordered\">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope=\"row\">Entrada Matutino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\">Salida Matutino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\">Entrada Vespertino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\">Salida Vespertino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones:</label>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <input type=\"text\" id=\"observacionesHorario\" name=\"observacionesHorario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      </br>
                      </br>
                      </br>
                      </br>
                      </br>
                      <center>
                        <a class=\"btn btn-app\" >
                          <i class=\"fa fa-print\"></i> Imprimir
                        </a>
                      </center>
                    </div>
                    <!--termina tabla -->
                  </div>
                </div>
            </div>
            <!--termina horario-->

            <!--empieza antiguedad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"antiguedadEmpleado\" aria-labelledby=\"profile-tab\">
              <div class=\"x_title\">
                <h2>Antigüedad</h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                </ul>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">
                <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">

                  <div class=\"form-group\">
                    <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                      <label>Antigüedad:</label></br>
                      <label>Días de Ausencia:</label></br>
                      <label>Días Efectivos:</label></br>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!--termina antiguedad-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/perfilAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  75 => 6,  66 => 5,  55 => 1037,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}

{% block content %}
<!-- page content -->
<div class=\"right_col\" role=\"main\">
  <h1>Mi perfil</h1>
  <a class=\"btn btn-app\" href=\"{{ path(\"index\") }}\">
    <i class=\"fa fa-arrow-left\"></i> Regresar
  </a>


  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\">
        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
          <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#datosEmpleado\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Datos del Empleado</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#escolaridadEmpleado\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Escolaridad</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#horarioEmpleado\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Horario</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#antiguedadEmpleado\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Antigüedad</a>
            </li>
          </ul>
          <!-- empieza datos personales -->
          <div id=\"myTabContent\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"datosEmpleado\" aria-labelledby=\"home-tab\">
              <div class=\"x_title\">
                <h2>Datos Personales</h2>
                <div class=\"clearfix\"></div>
              </div>
              <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">
                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Nombre: </label></br>
                    <label>Apellido Paterno: </label></br>
                    <label>Apellido Materno: </label></br>
                    <label>RFC: </label></br>
                    <label>Curp: </label></br>
                  </div>
                  <div class=\"control-label col-md-5 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Fecha Nacimiento: </label></br>
                    <label>Lugar de Nacimiento: </label></br>
                    <label>Género: </label></br>
                    <label>Estado Civil: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Dirección</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Calle: </label></br>
                    <label>Num. Exterior: </label></br>
                    <label>Colonia: </label></br>
                    <label>C.P.: </label></br>
                    <label>Municipio: </label></br>
                    <label>Estado: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Contacto</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Teléfono: </label></br>
                    <label>Correo: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Datos Laborales</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Fecha Ingreso Gob. Fed.: </label></br>
                    <label>Fecha Ingreso Sep.: </label></br>
                    <label>Fecha Ingreso Tec.: </label></br>
                    <label>Fecha Ingreso CIIDET: </label></br>
                    <label>Clave Empleado: </label></br>
                    <label>Clave Presupuestal: </label></br>
                  </div>
                  <div class=\"control-label col-md-5 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Interinato: </label></br>
                    <label>Subdirección: </label></br>
                    <label>Departamento: </label></br>
                    <label>Puesto: </label></br>
                    <label>Categoría: </label></br>
                    <label>Activo: </label></br>
                  </div>
                </div>

                <div class=\"x_title\">
                  <h2>Acceso al Sistema</h2>
                  <ul class=\"nav navbar-right panel_toolbox\">
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"form-group\">
                  <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                    <label>Tipo de Usuario: </label></br>
                    <label>Nombre de Usuario: </label></br>
                    <label>Contraseña: </label></br>
                  </div>
                </div>
              </form>
            </div>
            <!--Termina datos personales-->

            <!--empieza escolaridad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">


              <form id=\"escolaridad\">
                      <!--Empieza lista-->
                      <div class=\"x_title\">
                        <h2>Lista de Escolaridad</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <!--empieza tabla -->
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <div class=\"clearfix\"></div>
                            <div class=\"x_content\">
                              <table class=\"table table-bordered\">
                                <thead>
                                  <tr>
                                    <th>Id Escolaridad</th>
                                    <th>Nivel Escolar</th>
                                    <th>Documentación Oficial</th>
                                    <th>Grado</th>
                                    <th>Nombre Titulación</th>
                                    <th>Nombre de la Institución</th>
                                    <th>Estado</th>
                                    <th>Fecha Titulación</th>
                                    <th>Num. Cédula</th>
                                    <th>Último grado de Estudios</th>
                                    <th>Observaciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <th></th>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                        <!--termina tabla -->
                      </div>
                      <!--Termina Lista -->
                    </form>
            </div>
            <!--termina escolaridad-->

            <!--empieza horario-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"horarioEmpleado\" aria-labelledby=\"profile-tab\">
              <div class=\"x_title\">
                <h2>Horario</h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                  </li>
                </ul>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">
                <br />
                <!--Empiezan Acciones Agregar-->
                <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#agregarHorario\">
                  <i class=\"fa fa-plus-square\"></i> Agregar Horario
                </a>
                <div class=\"modal fade\" id=\"agregarHorario\" role=\"dialog\">
                  <div class=\"modal-dialog\">
                  <!-- Modal content-->
                    <div class=\"modal-content\">
                      <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Agregar Horario</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Horario <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <input type=\"text\" id=\"idHorario\" name=\"idHorario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                            </div>
                          </div>
                          </br>
                          </br>
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Semestre <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <select class=\"form-control\">
                                <option selected disabled>Elegir...</option>
                                <option>Enero - Junio</option>
                                <option>Julio - Diciembre</option>
                              </select>
                            </div>
                            </br>
                            </br>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idYear\" name=\"idYear\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Matutino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatLun\" name=\"entradaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatLun\" name=\"salidaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMar\" name=\"entradaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMar\" name=\"salidaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMier\" name=\"entradaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMier\" name=\"salidaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatJue\" name=\"entradaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatJue\" name=\"salidaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatVier\" name=\"entradaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatVier\" name=\"salidaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Verpertino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesLun\" name=\"entradaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesLun\" name=\"salidaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMar\" name=\"entradaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMar\" name=\"salidaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMier\" name=\"entradaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMier\" name=\"salidaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesJue\" name=\"entradaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesJue\" name=\"salidaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesVier\" name=\"entradaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesVier\" name=\"salidaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Termina Acciones Agregar-->

                  <!--Empiezan Acciones Modificar-->
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarHorario\">
                    <i class=\"fa fa-edit\"></i> Modificar Horario
                  </a>
                  <div class=\"modal fade\" id=\"modificarHorario\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                    <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Modificar Horario</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Semestre <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <select class=\"form-control\">
                                <option selected disabled>Elegir...</option>
                                <option>Enero - Junio</option>
                                <option>Julio - Diciembre</option>
                              </select>
                            </div>
                            </br>
                            </br>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idYear\" name=\"idYear\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                            </br>
                            </br>
                            <h4>Horario Matutino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatLun\" name=\"entradaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatLun\" name=\"salidaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMar\" name=\"entradaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMar\" name=\"salidaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMier\" name=\"entradaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMier\" name=\"salidaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatJue\" name=\"entradaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatJue\" name=\"salidaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatVier\" name=\"entradaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatVier\" name=\"salidaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Verpertino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesLun\" name=\"entradaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesLun\" name=\"salidaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMar\" name=\"entradaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMar\" name=\"salidaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMier\" name=\"entradaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMier\" name=\"salidaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesJue\" name=\"entradaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesJue\" name=\"salidaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesVier\" name=\"entradaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesVier\" name=\"salidaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            </br>
                            </br>
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Termina Acciones Modificar-->

                  <!--Empiezan Acciones Eliminar-->
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarHorario\">
                    <i class=\"fa fa-close\"></i> Eliminar Horario
                  </a>
                  <div class=\"modal fade\" id=\"eliminarHorario\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Eliminar Horario</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Semestre <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <select class=\"form-control\">
                                <option selected disabled>Elegir...</option>
                                <option>Enero - Junio</option>
                                <option>Julio - Diciembre</option>
                              </select>
                            </div>
                            </br>
                            </br>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idYear\" name=\"idYear\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                            </br>
                            </br>
                            <h4>Horario Matutino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatLun\" name=\"entradaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatLun\" name=\"salidaMatLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMar\" name=\"entradaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMar\" name=\"salidaMatMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatMier\" name=\"entradaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatMier\" name=\"salidaMatMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatJue\" name=\"entradaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatJue\" name=\"salidaMatJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaMatVier\" name=\"entradaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaMatVier\" name=\"salidaMatVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <h4>Horario Verpertino</h4>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesLun\" name=\"entradaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Lunes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesLun\" name=\"salidaVesLun\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMar\" name=\"entradaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Martes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMar\" name=\"salidaVesMar\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesMier\" name=\"entradaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Miércoles <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesMier\" name=\"salidaVesMier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesJue\" name=\"entradaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Jueves <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesJue\" name=\"salidaVesJue\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Entrada Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"entradaVesVier\" name=\"entradaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Salida Viernes <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"salidaVesVier\" name=\"salidaVesVier\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                              </div>
                            </div>
                            </br>
                            </br>
                        </div>
                        <div class=\"modal-footer\">
                          <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Termina Acciones Eliminar-->

                <!--empieza  check de semestre -->
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Semestre<span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <select class=\"form-control\">
                      <option selected disabled>Elegir...</option>
                      <option>Julio - Diciembre</option>
                    </select>
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"yearHorario\" name=\"yearHorario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <center><button type=\"submit\" class=\"btn btn-default\">Ver</button></center>
                <!--termina  check de semestre -->

                <!--empieza tabla -->
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                      <div class=\"clearfix\"></div>

                    <div class=\"x_content\">

                      <table class=\"table table-bordered\">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope=\"row\">Entrada Matutino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\">Salida Matutino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\">Entrada Vespertino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope=\"row\">Salida Vespertino</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones:</label>
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                          <input type=\"text\" id=\"observacionesHorario\" name=\"observacionesHorario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                      </div>
                      </br>
                      </br>
                      </br>
                      </br>
                      </br>
                      <center>
                        <a class=\"btn btn-app\" >
                          <i class=\"fa fa-print\"></i> Imprimir
                        </a>
                      </center>
                    </div>
                    <!--termina tabla -->
                  </div>
                </div>
            </div>
            <!--termina horario-->

            <!--empieza antiguedad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"antiguedadEmpleado\" aria-labelledby=\"profile-tab\">
              <div class=\"x_title\">
                <h2>Antigüedad</h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                </ul>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"x_content\">
                <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">

                  <div class=\"form-group\">
                    <div class=\"control-label col-md-3 col-sm-6 col-xs-12\" align=\"right\">
                      <label>Antigüedad:</label></br>
                      <label>Días de Ausencia:</label></br>
                      <label>Días Efectivos:</label></br>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!--termina antiguedad-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
{% endblock %}

{% endblock %}
", "admin/perfilAdmin.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\admin\\perfilAdmin.html.twig");
    }
}
