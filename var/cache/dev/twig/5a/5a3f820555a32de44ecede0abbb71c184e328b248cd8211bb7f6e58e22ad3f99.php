<?php

/* user/perfilUser.html.twig */
class __TwigTemplate_c226a1d57ea66484123aa51c9e858c788b7ed49d6915d567ceaa4fa329265aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseUsuario.html.twig", "user/perfilUser.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseUsuario.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/perfilUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/perfilUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!-- page content -->

";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 202
        echo "<!-- /page content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"right_col\" role=\"main\">
  <h1>Información del Empleado</h1>
  <a class=\"btn btn-app\" href=\"indexUser.html\">
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
              </form>
            </div>
            <!--Termina datos personales-->

            <!--empieza escolaridad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/perfilUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 8,  67 => 7,  56 => 202,  54 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseUsuario.html.twig' %}


{% block body %}
<!-- page content -->

{% block content %}
<div class=\"right_col\" role=\"main\">
  <h1>Información del Empleado</h1>
  <a class=\"btn btn-app\" href=\"indexUser.html\">
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
              </form>
            </div>
            <!--Termina datos personales-->

            <!--empieza escolaridad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">
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
{% endblock %}
<!-- /page content -->
{% endblock %}
", "user/perfilUser.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\user\\perfilUser.html.twig");
    }
}
