<?php

/* empleado/show.html.twig */
class __TwigTemplate_a2b90459fff0234b117da4aa2ac704d327527c15f2a85959c755e672ee1c51db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "empleado/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empleado/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empleado/show.html.twig"));

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
     <!--page content -->

    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 1414
        echo "    <!-- /page content -->
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
        echo "    <div class=\"right_col\" role=\"main\">
      <h1>Información del Empleado</h1>
      <a class=\"btn btn-app\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_index");
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
            <!--<h1>Empleado</h1>

            <table>
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Claveempleado</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "claveEmpleado", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "nombre", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Apaterno</th>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "aPaterno", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Amaterno</th>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "aMaterno", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Rfc</th>
                        <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "rfc", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Curp</th>
                        <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "curp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nss</th>
                        <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "nss", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Ley</th>
                        <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "ley", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Calle</th>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "calle", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Numext</th>
                        <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "numExt", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Colonia</th>
                        <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "colonia", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cp</th>
                        <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "cp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Municipio</th>
                        <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "municipio", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "estado", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "telefono", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Edocivil</th>
                        <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "edoCivil", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fechanacimiento</th>
                        <td>";
        // line 99
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Lugarnacimiento</th>
                        <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "lugarNacimiento", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Genero</th>
                        <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "genero", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fechainigobsep</th>
                        <td>";
        // line 111
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniGobSep", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniGobSep", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fechainisep</th>
                        <td>";
        // line 115
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniSep", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniSep", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fechainitec</th>
                        <td>";
        // line 119
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniTec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniTec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fechainiciidet</th>
                        <td>";
        // line 123
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniCiidet", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniCiidet", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Clavepresupuestal</th>
                        <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "clavePresupuestal", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "password", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <ul>
                <li>
                    <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_index");
        echo "\">Back to the list</a>
                </li>
                <li>
                    <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_edit", array("id" => $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                </li>
                <li>
                    ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" value=\"Delete\">
                    ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </li>
            </ul>-->
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

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Nombre: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" required=\"required\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "nombre", array()), "html", null, true);
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha de Nacimiento: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 179
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Apellido Paterno: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "aPaterno", array()), "html", null, true);
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Lugar de Nacimiento: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "lugarNacimiento", array()), "html", null, true);
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Apellido Materno: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "aMaterno", array()), "html", null, true);
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\"> Género: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "genero", array()), "html", null, true);
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">RFC: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "rfc", array()), "html", null, true);
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Estado Civil: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "edoCivil", array()), "html", null, true);
        echo "\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Curp: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "curp", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">

                        <!-- Modal
                        <div class=\"modal fade\" id=\"modalModificarPersonal\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                             Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Datos Personales</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nombreEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Paterno <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"ap\" name=\"ap\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Materno <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"am\" name=\"am\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">RFC <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"rfc\" name=\"rfc\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Curp <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"curp\" name=\"curp\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Nacimiento <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                       <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                        <fieldset>
                                          <div class=\"control-group\">
                                            <div class=\"controls\">
                                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                                <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                              </div>
                                            </div>
                                          </div>
                                        </fieldset>
                                    </div>
                                  </div>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Lugar de Nacimiento <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"lugarnacimiento\" name=\"lugarnacimiento\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                  </div>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Género <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <select class=\"form-control\">
                                          <option selected disabled>Elegir...</option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Estado Civil <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <select class=\"form-control\">
                                          <option selected disabled>Elegir...</option>
                                          <option>opcion 1</option>
                                          <option>opcion 2</option>
                                        </select>
                                      </div>
                                  </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>-->
                      </div>
                    </div>
                    <div class=\"x_title\">
                      <h2>Dirección</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Calle: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" required=\"required\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "calle", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">  C.P.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "cp", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Num. Exterior: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "numExt", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Municipio: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "municipio", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Colonia: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "colonia", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Estado: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "estado", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">

                        <!-- Modal
                        <div class=\"modal fade\" id=\"modalModificarDireccion\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Dirección</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Calle <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"calleDireccionE\" name=\"calleDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Exterior <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nExtDireccionE\" name=\"nExtDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Colonia <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"colDireccionE\" name=\"colDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">C.P. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"cpDireccionE\" name=\"cpDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Municipio <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"municipioDireccionE\" name=\"municipioDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"estadoDireccionE\" name=\"estadoDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>-->
                      </div>
                    </div>

                    <div class=\"x_title\">
                      <h2>Contacto</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Teléfono: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "telefono", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Correo: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"\">
                      </div>
                    </div>
                    <!--<div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                         Trigger the modal with a button
                        <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarContacto\">Modificar</button>
                         Modal
                        <div class=\"modal fade\" id=\"modalModificarContacto\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                             Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Contacto</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Teléfono <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"telefonoE\" name=\"telefonoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Correo <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <div class=\"x_title\">
                      <h2>Datos Laborales</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso Gob. Fed.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 508
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniGobSep", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniGobSep", array()), "Y-m-d"), "html", null, true);
        }
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Interinato: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "interinato", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso Sep.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 520
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniSep", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniSep", array()), "Y-m-d"), "html", null, true);
        }
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Subdirección: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "idSubdireccion", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso Tec.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 532
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniTec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniTec", array()), "Y-m-d"), "html", null, true);
        }
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Departamento: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "idDepto", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso CIIDET: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 544
        if ($this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniCiidet", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "fechaIniCiidet", array()), "Y-m-d"), "html", null, true);
        }
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Puesto: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "idPuesto", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Clave Empleado: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "claveEmpleado", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Categoría: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "idCategoria", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Clave Presupuestal: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "clavePresupuestal", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Activo: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "activo", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Número de Seguro Social: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"\">
                      </div>
                    </div>
                    <!--<div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                         Trigger the modal with a button
                        <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarLaboral\">Modificar</button>
                        <Modal -
                        <div class=\"modal fade\" id=\"modalModificarLaboral\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            - Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Datos Laborales</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Gob. Sep. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fIGobSep\" name=\"fIGobSep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Sep. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fISep\" name=\"fISep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Tec. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fITec\" name=\"fITec\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso CIIDET <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fICiidet\" name=\"fICiidet\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Empleado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"claveEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Presupuestal <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"clavePresE\" name=\"clavePresE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Interinato <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>Si</option>
                                      <option>No</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Departamento <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Puesto <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Categoría <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Activo <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>si</option>
                                      <option>no</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <div class=\"x_title\">
                      <h2>Acceso al Sistema</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Tipo de Usuario: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "idAcceso", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Contraseña: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "password", array()), "html", null, true);
        echo "\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Nombre de Usuario: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "nombre", array()), "html", null, true);
        echo "\">
                      </div>
                    </div>
                    <!--
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                        <!- Trigger the modal with a button -
                        <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarAcceso\">Modificar</button>
                        <!- Modal -
                        <div class=\"modal fade\" id=\"modalModificarAcceso\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            <!- Modal content-
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Acceso</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Usuario <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>si</option>
                                      <option>no</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Contraseña <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <a href=\"";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_edit", array("id" => $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->
                    <div class=\"ln_solid\"></div>
                    <center><a href=\"";
        // line 785
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_edit", array("id" => $this->getAttribute(($context["empleado"] ?? $this->getContext($context, "empleado")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-dark\">Editar</button></center>
                  </form>
                </div>
                <!--Termina datos personales-->

                <!--empieza escolaridad-->
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">
                  <!--Empiezan Acciones Agregar-->
                  <!--<div class=\"x_title\">
                    <h2>Acciones</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">

                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>-->

                  <form id=\"escolaridad\" action=\"\">
                    <!--<a class=\"btn btn-app\" data-toggle=\"modal\" href=\"";
        // line 803
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("escolaridad_new");
        echo "\">
                      <i class=\"fa fa-plus-square\"></i> Agregar Escolaridad
                    </a>
                      <div class=\"modal fade\" id=\"agregarEscolaridad\" role=\"dialog\">
                        <div class=\"modal-dialog\">
                          <!- Modal content->
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                              <h4 class=\"modal-title\">Agregar Escolaridad</h4>
                            </div>
                            <div class=\"modal-body\">
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Escolaridad <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"idEscolaridad\" name=\"idescolaridad\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nivel Escolar <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Documentación Oficial <span class=\"required\">*</span>
                                </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Grado <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"gradoEscE\" name=\"gradoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre Titulación <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"nombreTitulacionEscE\" name=\"nombreTitulacionEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de la Institución <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"nombreInstEscE\" name=\"nombreInstEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"estadoEscE\" name=\"estadoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Titulación <span class=\"required\">*</span>
                                </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                      <fieldset>
                                        <div class=\"control-group\">
                                          <div class=\"controls\">
                                            <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                              <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                              <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                              <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                            </div>
                                          </div>
                                        </div>
                                      </fieldset>
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Cédula <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Último Grado de Estudios <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <select class=\"form-control\">
                                        <option selected disabled>Elegir...</option>
                                        <option>si</option>
                                        <option>no</option>
                                      </select>
                                    </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"observacionesEscE\" name=\"observacionesEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      <!-Termina Acciones Agregar-->

                      <!--Empiezan Acciones Modificar->
                      <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarEscolaridad\">
                        <i class=\"fa fa-edit\"></i> Modificar Escolaridad
                      </a>
                        <div class=\"modal fade\" id=\"modificarEscolaridad\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            <!- Modal content->
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Escolaridad</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Escolaridad <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"idEscolaridad\" name=\"idEscolaridad\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                  <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                                </div>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nivel Escolar <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Documentación Oficial <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <select class=\"form-control\">
                                        <option selected disabled>Elegir...</option>
                                        <option>opcion 1</option>
                                        <option>opcion 2</option>
                                      </select>
                                    </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Grado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"gradoEscE\" name=\"gradoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre Titulación <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nombreTitulacionEscE\" name=\"nombreTitulacionEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de la Institución <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nombreInstEscE\" name=\"nombreInstEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"estadoEscE\" name=\"estadoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Titulación <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                       <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                        <fieldset>
                                          <div class=\"control-group\">
                                            <div class=\"controls\">
                                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                                <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                              </div>
                                            </div>
                                          </div>
                                        </fieldset>
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Cédula <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Último Grado de Estudios <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <select class=\"form-control\">
                                          <option selected disabled>Elegir...</option>
                                          <option>si</option>
                                          <option>no</option>
                                        </select>
                                      </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"observacionesEscE\" name=\"observacionesEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                  </div>
                                  </br>
                                  </div>
                                  <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <!-Termina Acciones Modificar-->

                        <!--Empiezan Acciones Eliminar-->
                        <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarEscolaridad\">
                          <i class=\"fa fa-close\"></i> Eliminar Escolaridad
                        </a>
                          <!--<div class=\"modal fade\" id=\"eliminarEscolaridad\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                              <!- Modal content->
                              <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                  <h4 class=\"modal-title\">Eliminar Escolaridad</h4>
                                </div>
                                <div class=\"modal-body\">
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Escolaridad <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"idEscolaridad\" name=\"idEscolaridad\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                    <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                                  </div>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nivel Escolar <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Documentación Oficial <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Grado <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"gradoEscE\" name=\"gradoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre Titulación <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nombreTitulacionEscE\" name=\"nombreTitulacionEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de la Institución <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nombreInstEscE\" name=\"nombreInstEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"estadoEscE\" name=\"estadoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Titulación <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                         <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                          <fieldset>
                                            <div class=\"control-group\">
                                              <div class=\"controls\">
                                                <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                                  <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                                  <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                                  <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                                </div>
                                              </div>
                                            </div>
                                          </fieldset>
                                      </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"form-group\">
                                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Cédula <span class=\"required\">*</span>
                                      </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                      </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"form-group\">
                                      <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Último Grado de Estudios <span class=\"required\">*</span>
                                      </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                      </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"form-group\">
                                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones <span class=\"required\">*</span>
                                      </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"observacionesEscE\" name=\"observacionesEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                      </div>
                                    </div>
                                    </br>
                                    </div>
                                    <div class=\"modal-footer\">
                                      <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Eliminar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          <!-Termina Acciones Eliminar-->

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
                                        <th>Nivel Escolar</th>
                                        <th>Documentación Oficial</th>
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empleado/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 803,  1065 => 785,  1054 => 777,  1013 => 739,  1004 => 733,  995 => 727,  839 => 574,  830 => 568,  821 => 562,  812 => 556,  803 => 550,  792 => 544,  783 => 538,  772 => 532,  763 => 526,  752 => 520,  743 => 514,  732 => 508,  671 => 450,  589 => 371,  580 => 365,  571 => 359,  562 => 353,  553 => 347,  544 => 341,  421 => 221,  412 => 215,  403 => 209,  394 => 203,  385 => 197,  376 => 191,  367 => 185,  356 => 179,  347 => 173,  317 => 146,  312 => 144,  306 => 141,  300 => 138,  290 => 131,  283 => 127,  274 => 123,  265 => 119,  256 => 115,  247 => 111,  240 => 107,  233 => 103,  224 => 99,  217 => 95,  210 => 91,  203 => 87,  196 => 83,  189 => 79,  182 => 75,  175 => 71,  168 => 67,  161 => 63,  154 => 59,  147 => 55,  140 => 51,  133 => 47,  126 => 43,  119 => 39,  112 => 35,  105 => 31,  81 => 10,  77 => 8,  68 => 7,  57 => 1414,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

     <!--page content -->

    {% block content %}
    <div class=\"right_col\" role=\"main\">
      <h1>Información del Empleado</h1>
      <a class=\"btn btn-app\" href=\"{{ path(\"empleado_index\") }}\">
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
            <!--<h1>Empleado</h1>

            <table>
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ empleado.id }}</td>
                    </tr>
                    <tr>
                        <th>Claveempleado</th>
                        <td>{{ empleado.claveEmpleado }}</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{ empleado.nombre }}</td>
                    </tr>
                    <tr>
                        <th>Apaterno</th>
                        <td>{{ empleado.aPaterno }}</td>
                    </tr>
                    <tr>
                        <th>Amaterno</th>
                        <td>{{ empleado.aMaterno }}</td>
                    </tr>
                    <tr>
                        <th>Rfc</th>
                        <td>{{ empleado.rfc }}</td>
                    </tr>
                    <tr>
                        <th>Curp</th>
                        <td>{{ empleado.curp }}</td>
                    </tr>
                    <tr>
                        <th>Nss</th>
                        <td>{{ empleado.nss }}</td>
                    </tr>
                    <tr>
                        <th>Ley</th>
                        <td>{{ empleado.ley }}</td>
                    </tr>
                    <tr>
                        <th>Calle</th>
                        <td>{{ empleado.calle }}</td>
                    </tr>
                    <tr>
                        <th>Numext</th>
                        <td>{{ empleado.numExt }}</td>
                    </tr>
                    <tr>
                        <th>Colonia</th>
                        <td>{{ empleado.colonia }}</td>
                    </tr>
                    <tr>
                        <th>Cp</th>
                        <td>{{ empleado.cp }}</td>
                    </tr>
                    <tr>
                        <th>Municipio</th>
                        <td>{{ empleado.municipio }}</td>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <td>{{ empleado.estado }}</td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td>{{ empleado.telefono }}</td>
                    </tr>
                    <tr>
                        <th>Edocivil</th>
                        <td>{{ empleado.edoCivil }}</td>
                    </tr>
                    <tr>
                        <th>Fechanacimiento</th>
                        <td>{% if empleado.fechaNacimiento %}{{ empleado.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Lugarnacimiento</th>
                        <td>{{ empleado.lugarNacimiento }}</td>
                    </tr>
                    <tr>
                        <th>Genero</th>
                        <td>{{ empleado.genero }}</td>
                    </tr>
                    <tr>
                        <th>Fechainigobsep</th>
                        <td>{% if empleado.fechaIniGobSep %}{{ empleado.fechaIniGobSep|date('Y-m-d') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Fechainisep</th>
                        <td>{% if empleado.fechaIniSep %}{{ empleado.fechaIniSep|date('Y-m-d') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Fechainitec</th>
                        <td>{% if empleado.fechaIniTec %}{{ empleado.fechaIniTec|date('Y-m-d') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Fechainiciidet</th>
                        <td>{% if empleado.fechaIniCiidet %}{{ empleado.fechaIniCiidet|date('Y-m-d') }}{% endif %}</td>
                    </tr>
                    <tr>
                        <th>Clavepresupuestal</th>
                        <td>{{ empleado.clavePresupuestal }}</td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>{{ empleado.password }}</td>
                    </tr>
                </tbody>
            </table>

            <ul>
                <li>
                    <a href=\"{{ path('empleado_index') }}\">Back to the list</a>
                </li>
                <li>
                    <a href=\"{{ path('empleado_edit', { 'id': empleado.id }) }}\">Edit</a>
                </li>
                <li>
                    {{ form_start(delete_form) }}
                        <input type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </li>
            </ul>-->
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

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Nombre: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" required=\"required\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.nombre }}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha de Nacimiento: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{% if empleado.fechaNacimiento %}{{ empleado.fechaNacimiento|date('Y-m-d') }}{% endif %}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Apellido Paterno: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.aPaterno }}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Lugar de Nacimiento: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.lugarNacimiento }}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Apellido Materno: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.aMaterno }}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\"> Género: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.genero }}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">RFC: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.rfc }}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Estado Civil: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.edoCivil }}\">
                        </div>

                        <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Curp: <span disabled=\"disabled\"></span>
                        </label>
                        <div class=\"col-md-3 col-sm-6 col-xs-12\">
                          <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.curp }}\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">

                        <!-- Modal
                        <div class=\"modal fade\" id=\"modalModificarPersonal\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                             Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Datos Personales</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nombreEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Paterno <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"ap\" name=\"ap\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Materno <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"am\" name=\"am\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">RFC <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"rfc\" name=\"rfc\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Curp <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"curp\" name=\"curp\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Nacimiento <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                       <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                        <fieldset>
                                          <div class=\"control-group\">
                                            <div class=\"controls\">
                                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                                <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                              </div>
                                            </div>
                                          </div>
                                        </fieldset>
                                    </div>
                                  </div>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Lugar de Nacimiento <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"lugarnacimiento\" name=\"lugarnacimiento\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                  </div>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Género <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <select class=\"form-control\">
                                          <option selected disabled>Elegir...</option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Estado Civil <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <select class=\"form-control\">
                                          <option selected disabled>Elegir...</option>
                                          <option>opcion 1</option>
                                          <option>opcion 2</option>
                                        </select>
                                      </div>
                                  </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>-->
                      </div>
                    </div>
                    <div class=\"x_title\">
                      <h2>Dirección</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Calle: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" required=\"required\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.calle }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">  C.P.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.cp }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Num. Exterior: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.numExt }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Municipio: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.municipio }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Colonia: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.colonia }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Estado: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.estado }}\">
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">

                        <!-- Modal
                        <div class=\"modal fade\" id=\"modalModificarDireccion\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Dirección</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Calle <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"calleDireccionE\" name=\"calleDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Exterior <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nExtDireccionE\" name=\"nExtDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Colonia <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"colDireccionE\" name=\"colDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">C.P. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"cpDireccionE\" name=\"cpDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Municipio <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"municipioDireccionE\" name=\"municipioDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"estadoDireccionE\" name=\"estadoDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>-->
                      </div>
                    </div>

                    <div class=\"x_title\">
                      <h2>Contacto</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Teléfono: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.telefono }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Correo: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"\">
                      </div>
                    </div>
                    <!--<div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                         Trigger the modal with a button
                        <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarContacto\">Modificar</button>
                         Modal
                        <div class=\"modal fade\" id=\"modalModificarContacto\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                             Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Contacto</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Teléfono <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"telefonoE\" name=\"telefonoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Correo <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <div class=\"x_title\">
                      <h2>Datos Laborales</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso Gob. Fed.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{% if empleado.fechaIniGobSep %}{{ empleado.fechaIniGobSep|date('Y-m-d') }}{% endif %}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Interinato: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.interinato }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso Sep.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{% if empleado.fechaIniSep %}{{ empleado.fechaIniSep|date('Y-m-d') }}{% endif %}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Subdirección: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.idSubdireccion }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso Tec.: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{% if empleado.fechaIniTec %}{{ empleado.fechaIniTec|date('Y-m-d') }}{% endif %}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Departamento: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.idDepto }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Fecha Ingreso CIIDET: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{% if empleado.fechaIniCiidet %}{{ empleado.fechaIniCiidet|date('Y-m-d') }}{% endif %}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Puesto: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.idPuesto }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Clave Empleado: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.claveEmpleado }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Categoría: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.idCategoria }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Clave Presupuestal: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.clavePresupuestal }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Activo: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.activo }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Número de Seguro Social: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"\">
                      </div>
                    </div>
                    <!--<div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                         Trigger the modal with a button
                        <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarLaboral\">Modificar</button>
                        <Modal -
                        <div class=\"modal fade\" id=\"modalModificarLaboral\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            - Modal content
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Datos Laborales</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Gob. Sep. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fIGobSep\" name=\"fIGobSep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Sep. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fISep\" name=\"fISep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Tec. <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fITec\" name=\"fITec\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso CIIDET <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"fICiidet\" name=\"fICiidet\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Empleado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"claveEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Presupuestal <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"clavePresE\" name=\"clavePresE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Interinato <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>Si</option>
                                      <option>No</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Departamento <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Puesto <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Categoría <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Activo <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>si</option>
                                      <option>no</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <div class=\"x_title\">
                      <h2>Acceso al Sistema</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Tipo de Usuario: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.idAcceso }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Contraseña: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.password }}\">
                      </div>

                      <label class=\"control-label col-md-3 col-sm-6 col-xs-12\" for=\"first-name\">Nombre de Usuario: <span disabled=\"disabled\"></span>
                      </label>
                      <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <input type=\"text\" class=\"form-control col-md-3  col-sm-6 col-xs-12\" disabled=\"disabled\" value=\"{{ empleado.nombre }}\">
                      </div>
                    </div>
                    <!--
                    <div class=\"form-group\">
                      <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                        <!- Trigger the modal with a button -
                        <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarAcceso\">Modificar</button>
                        <!- Modal -
                        <div class=\"modal fade\" id=\"modalModificarAcceso\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            <!- Modal content-
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Acceso</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Usuario <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>si</option>
                                      <option>no</option>
                                    </select>
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Contraseña <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                              </div>
                              <div class=\"modal-footer\">
                                <a href=\"{{ path('empleado_edit', { 'id': empleado.id }) }}\"><button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>-->
                    <div class=\"ln_solid\"></div>
                    <center><a href=\"{{ path('empleado_edit', { 'id': empleado.id }) }}\"><button type=\"button\" class=\"btn btn-dark\">Editar</button></center>
                  </form>
                </div>
                <!--Termina datos personales-->

                <!--empieza escolaridad-->
                <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">
                  <!--Empiezan Acciones Agregar-->
                  <!--<div class=\"x_title\">
                    <h2>Acciones</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">

                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>-->

                  <form id=\"escolaridad\" action=\"\">
                    <!--<a class=\"btn btn-app\" data-toggle=\"modal\" href=\"{{ path('escolaridad_new') }}\">
                      <i class=\"fa fa-plus-square\"></i> Agregar Escolaridad
                    </a>
                      <div class=\"modal fade\" id=\"agregarEscolaridad\" role=\"dialog\">
                        <div class=\"modal-dialog\">
                          <!- Modal content->
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                              <h4 class=\"modal-title\">Agregar Escolaridad</h4>
                            </div>
                            <div class=\"modal-body\">
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Escolaridad <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"idEscolaridad\" name=\"idescolaridad\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nivel Escolar <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Documentación Oficial <span class=\"required\">*</span>
                                </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <select class=\"form-control\">
                                      <option selected disabled>Elegir...</option>
                                      <option>opcion 1</option>
                                      <option>opcion 2</option>
                                    </select>
                                  </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Grado <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"gradoEscE\" name=\"gradoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre Titulación <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"nombreTitulacionEscE\" name=\"nombreTitulacionEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de la Institución <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"nombreInstEscE\" name=\"nombreInstEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                  <input type=\"text\" id=\"estadoEscE\" name=\"estadoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                </div>
                              </div>
                              </br>
                              </br>
                              <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Titulación <span class=\"required\">*</span>
                                </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                      <fieldset>
                                        <div class=\"control-group\">
                                          <div class=\"controls\">
                                            <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                              <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                              <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                              <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                            </div>
                                          </div>
                                        </div>
                                      </fieldset>
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Cédula <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Último Grado de Estudios <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <select class=\"form-control\">
                                        <option selected disabled>Elegir...</option>
                                        <option>si</option>
                                        <option>no</option>
                                      </select>
                                    </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"observacionesEscE\" name=\"observacionesEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                              </div>
                              <div class=\"modal-footer\">
                                <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      <!-Termina Acciones Agregar-->

                      <!--Empiezan Acciones Modificar->
                      <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarEscolaridad\">
                        <i class=\"fa fa-edit\"></i> Modificar Escolaridad
                      </a>
                        <div class=\"modal fade\" id=\"modificarEscolaridad\" role=\"dialog\">
                          <div class=\"modal-dialog\">
                            <!- Modal content->
                            <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Modificar Escolaridad</h4>
                              </div>
                              <div class=\"modal-body\">
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Escolaridad <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"idEscolaridad\" name=\"idEscolaridad\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                  <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                                </div>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nivel Escolar <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Documentación Oficial <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <select class=\"form-control\">
                                        <option selected disabled>Elegir...</option>
                                        <option>opcion 1</option>
                                        <option>opcion 2</option>
                                      </select>
                                    </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Grado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"gradoEscE\" name=\"gradoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre Titulación <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nombreTitulacionEscE\" name=\"nombreTitulacionEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de la Institución <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"nombreInstEscE\" name=\"nombreInstEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                  </label>
                                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    <input type=\"text\" id=\"estadoEscE\" name=\"estadoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                  </div>
                                </div>
                                </br>
                                </br>
                                <div class=\"form-group\">
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Titulación <span class=\"required\">*</span>
                                  </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                       <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                        <fieldset>
                                          <div class=\"control-group\">
                                            <div class=\"controls\">
                                              <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                                <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                                <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                                <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                              </div>
                                            </div>
                                          </div>
                                        </fieldset>
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Cédula <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Último Grado de Estudios <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <select class=\"form-control\">
                                          <option selected disabled>Elegir...</option>
                                          <option>si</option>
                                          <option>no</option>
                                        </select>
                                      </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"observacionesEscE\" name=\"observacionesEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                  </div>
                                  </br>
                                  </div>
                                  <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <!-Termina Acciones Modificar-->

                        <!--Empiezan Acciones Eliminar-->
                        <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarEscolaridad\">
                          <i class=\"fa fa-close\"></i> Eliminar Escolaridad
                        </a>
                          <!--<div class=\"modal fade\" id=\"eliminarEscolaridad\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                              <!- Modal content->
                              <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                  <h4 class=\"modal-title\">Eliminar Escolaridad</h4>
                                </div>
                                <div class=\"modal-body\">
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Escolaridad <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"idEscolaridad\" name=\"idEscolaridad\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                    </div>
                                    <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                                  </div>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nivel Escolar <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Documentación Oficial <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nivelEscE\" name=\"nivelEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Grado <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"gradoEscE\" name=\"gradoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre Titulación <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nombreTitulacionEscE\" name=\"nombreTitulacionEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de la Institución <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"nombreInstEscE\" name=\"nombreInstEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                      <input type=\"text\" id=\"estadoEscE\" name=\"estadoEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                    </div>
                                  </div>
                                  </br>
                                  </br>
                                  <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha de Titulación <span class=\"required\">*</span>
                                    </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                         <div class=\"daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay\"><div class=\"calendar left single\" style=\"display: block;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control active\" type=\"text\" name=\"daterangepicker_start\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th class=\"prev available\"><i class=\"fa fa-chevron-left glyphicon glyphicon-chevron-left\"></i></th><th colspan=\"5\" class=\"month\">Oct 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Lun</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">25</td><td class=\"off available\" data-title=\"r0c1\">26</td><td class=\"off available\" data-title=\"r0c2\">27</td><td class=\"off available\" data-title=\"r0c3\">28</td><td class=\"off available\" data-title=\"r0c4\">29</td><td class=\"off available\" data-title=\"r0c5\">30</td><td class=\"weekend available\" data-title=\"r0c6\">1</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">2</td><td class=\"available\" data-title=\"r1c1\">3</td><td class=\"available\" data-title=\"r1c2\">4</td><td class=\"available\" data-title=\"r1c3\">5</td><td class=\"available\" data-title=\"r1c4\">6</td><td class=\"available\" data-title=\"r1c5\">7</td><td class=\"weekend available\" data-title=\"r1c6\">8</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">9</td><td class=\"available\" data-title=\"r2c1\">10</td><td class=\"available\" data-title=\"r2c2\">11</td><td class=\"available\" data-title=\"r2c3\">12</td><td class=\"available\" data-title=\"r2c4\">13</td><td class=\"available\" data-title=\"r2c5\">14</td><td class=\"weekend available\" data-title=\"r2c6\">15</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">16</td><td class=\"available\" data-title=\"r3c1\">17</td><td class=\"today active start-date active end-date available\" data-title=\"r3c2\">18</td><td class=\"available\" data-title=\"r3c3\">19</td><td class=\"available\" data-title=\"r3c4\">20</td><td class=\"available\" data-title=\"r3c5\">21</td><td class=\"weekend available\" data-title=\"r3c6\">22</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">23</td><td class=\"available\" data-title=\"r4c1\">24</td><td class=\"available\" data-title=\"r4c2\">25</td><td class=\"available\" data-title=\"r4c3\">26</td><td class=\"available\" data-title=\"r4c4\">27</td><td class=\"available\" data-title=\"r4c5\">28</td><td class=\"weekend available\" data-title=\"r4c6\">29</td></tr><tr><td class=\"weekend available\" data-title=\"r5c0\">30</td><td class=\"available\" data-title=\"r5c1\">31</td><td class=\"off available\" data-title=\"r5c2\">1</td><td class=\"off available\" data-title=\"r5c3\">2</td><td class=\"off available\" data-title=\"r5c4\">3</td><td class=\"off available\" data-title=\"r5c5\">4</td><td class=\"weekend off available\" data-title=\"r5c6\">5</td></tr></tbody></table></div></div><div class=\"calendar right\" style=\"display: none;\"><div class=\"daterangepicker_input\"><input class=\"input-mini form-control\" type=\"text\" name=\"daterangepicker_end\" value=\"\" style=\"display: none;\"><i class=\"fa fa-calendar glyphicon glyphicon-calendar\" style=\"display: none;\"></i><div class=\"calendar-time\" style=\"display: none;\"><div></div><i class=\"fa fa-clock-o glyphicon glyphicon-time\"></i></div></div><div class=\"calendar-table\"><table class=\"table-condensed\"><thead><tr><th></th><th colspan=\"5\" class=\"month\">Nov 2016</th><th class=\"next available\"><i class=\"fa fa-chevron-right glyphicon glyphicon-chevron-right\"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class=\"weekend off available\" data-title=\"r0c0\">30</td><td class=\"off available\" data-title=\"r0c1\">31</td><td class=\"available\" data-title=\"r0c2\">1</td><td class=\"available\" data-title=\"r0c3\">2</td><td class=\"available\" data-title=\"r0c4\">3</td><td class=\"available\" data-title=\"r0c5\">4</td><td class=\"weekend available\" data-title=\"r0c6\">5</td></tr><tr><td class=\"weekend available\" data-title=\"r1c0\">6</td><td class=\"available\" data-title=\"r1c1\">7</td><td class=\"available\" data-title=\"r1c2\">8</td><td class=\"available\" data-title=\"r1c3\">9</td><td class=\"available\" data-title=\"r1c4\">10</td><td class=\"available\" data-title=\"r1c5\">11</td><td class=\"weekend available\" data-title=\"r1c6\">12</td></tr><tr><td class=\"weekend available\" data-title=\"r2c0\">13</td><td class=\"available\" data-title=\"r2c1\">14</td><td class=\"available\" data-title=\"r2c2\">15</td><td class=\"available\" data-title=\"r2c3\">16</td><td class=\"available\" data-title=\"r2c4\">17</td><td class=\"available\" data-title=\"r2c5\">18</td><td class=\"weekend available\" data-title=\"r2c6\">19</td></tr><tr><td class=\"weekend available\" data-title=\"r3c0\">20</td><td class=\"available\" data-title=\"r3c1\">21</td><td class=\"available\" data-title=\"r3c2\">22</td><td class=\"available\" data-title=\"r3c3\">23</td><td class=\"available\" data-title=\"r3c4\">24</td><td class=\"available\" data-title=\"r3c5\">25</td><td class=\"weekend available\" data-title=\"r3c6\">26</td></tr><tr><td class=\"weekend available\" data-title=\"r4c0\">27</td><td class=\"available\" data-title=\"r4c1\">28</td><td class=\"available\" data-title=\"r4c2\">29</td><td class=\"available\" data-title=\"r4c3\">30</td><td class=\"off available\" data-title=\"r4c4\">1</td><td class=\"off available\" data-title=\"r4c5\">2</td><td class=\"weekend off available\" data-title=\"r4c6\">3</td></tr><tr><td class=\"weekend off available\" data-title=\"r5c0\">4</td><td class=\"off available\" data-title=\"r5c1\">5</td><td class=\"off available\" data-title=\"r5c2\">6</td><td class=\"off available\" data-title=\"r5c3\">7</td><td class=\"off available\" data-title=\"r5c4\">8</td><td class=\"off available\" data-title=\"r5c5\">9</td><td class=\"weekend off available\" data-title=\"r5c6\">10</td></tr></tbody></table></div></div><div class=\"ranges\" style=\"display: none;\"><div class=\"range_inputs\"><button class=\"applyBtn btn btn-sm btn-success\" type=\"button\">Apply</button> <button class=\"cancelBtn btn btn-sm btn-default\" type=\"button\">Cancel</button></div></div></div>


                                          <fieldset>
                                            <div class=\"control-group\">
                                              <div class=\"controls\">
                                                <div class=\"col-md-11 xdisplay_inputx form-group has-feedback\">
                                                  <input type=\"text\" class=\"form-control has-feedback-left\" id=\"single_cal4\" placeholder=\"First Name\" aria-describedby=\"inputSuccess2Status4\">
                                                  <span class=\"fa fa-calendar-o form-control-feedback left\" aria-hidden=\"true\"></span>
                                                  <span id=\"inputSuccess2Status4\" class=\"sr-only\">(success)</span>
                                                </div>
                                              </div>
                                            </div>
                                          </fieldset>
                                      </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"form-group\">
                                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Cédula <span class=\"required\">*</span>
                                      </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                      </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"form-group\">
                                      <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Último Grado de Estudios <span class=\"required\">*</span>
                                      </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"numCedulaEscE\" name=\"numCedulaEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                      </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class=\"form-group\">
                                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Observaciones <span class=\"required\">*</span>
                                      </label>
                                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        <input type=\"text\" id=\"observacionesEscE\" name=\"observacionesEscE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                                      </div>
                                    </div>
                                    </br>
                                    </div>
                                    <div class=\"modal-footer\">
                                      <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Eliminar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          <!-Termina Acciones Eliminar-->

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
                                        <th>Nivel Escolar</th>
                                        <th>Documentación Oficial</th>
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
    {% endblock %}
    <!-- /page content -->
{% endblock %}
", "empleado/show.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\empleado\\show.html.twig");
    }
}
