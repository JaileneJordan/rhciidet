<?php

/* empleado/index.html.twig */
class __TwigTemplate_c9038c0908c7dc9e5116d408796bdcb0f83c731013b61c23469524c4de8dbf85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "empleado/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empleado/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empleado/index.html.twig"));

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
        echo "<!-- page content -->
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 549
        echo "  <!-- /page content -->
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
        echo "<div class=\"right_col\" role=\"main\">
  <h1>Empleados</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <!--Empiezan Acciones-->
      <div class=\"x_title\">
        <h2>Acciones</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
<!--plantilla predefinida
      <h1>Empleados list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Claveempleado</th>
                  <th>Nombre</th>
                  <th>Apaterno</th>
                  <th>Amaterno</th>
                  <th>Rfc</th>
                  <th>Curp</th>
                  <th>Nss</th>
                  <th>Ley</th>
                  <th>Calle</th>
                  <th>Numext</th>
                  <th>Colonia</th>
                  <th>Cp</th>
                  <th>Municipio</th>
                  <th>Estado</th>
                  <th>Telefono</th>
                  <th>Edocivil</th>
                  <th>Fechanacimiento</th>
                  <th>Lugarnacimiento</th>
                  <th>Genero</th>
                  <th>Fechainigobsep</th>
                  <th>Fechainisep</th>
                  <th>Fechainitec</th>
                  <th>Fechainiciidet</th>
                  <th>Clavepresupuestal</th>
                  <th>Password</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empleados"] ?? $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 56
            echo "              <tr>
                  <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "id", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "claveEmpleado", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nombre", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aPaterno", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aMaterno", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "rfc", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "curp", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nss", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "ley", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "calle", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "numExt", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "colonia", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "cp", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "municipio", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "estado", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "telefono", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "edoCivil", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 74
            if ($this->getAttribute($context["empleado"], "fechaNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                  <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "lugarNacimiento", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "genero", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 77
            if ($this->getAttribute($context["empleado"], "fechaIniGobSep", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniGobSep", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                  <td>";
            // line 78
            if ($this->getAttribute($context["empleado"], "fechaIniSep", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniSep", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                  <td>";
            // line 79
            if ($this->getAttribute($context["empleado"], "fechaIniTec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniTec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                  <td>";
            // line 80
            if ($this->getAttribute($context["empleado"], "fechaIniCiidet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniCiidet", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                  <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "clavePresupuestal", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "password", array()), "html", null, true);
            echo "</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">show</a>
                          </li>
                          <li>
                              <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_edit", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_new");
        echo "\">Create a new empleado</a>
          </li>
      </ul>
final plantilla predefinida-->

      <form id=\"empleado\">
        <a class=\"btn btn-app\"  href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_new");
        echo "\">
          <i class=\"fa fa-plus-square\"></i> Agregar Empleado
        </a>
        <div class=\"modal fade\" id=\"agregarEmpleado\" role=\"dialog\">
          <div class=\"modal-dialog\">
          <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Agregar Empleado</h4>
              </div>
              <div class=\"modal-body\">
                <h4>Datos Personales</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"nombreEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Paterno <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"ap\" name=\"ap\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Materno <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"am\" name=\"am\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">RFC <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"rfc\" name=\"rfc\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Curp <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"curp\" name=\"curp\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
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
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Lugar de Nacimiento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"lugarnacimiento\" name=\"lugarnacimiento\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
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
                  </br>
                </br>
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
                </br>
                </br>
                <h4>Dirección</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Calle <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"calleDireccionE\" name=\"calleDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Exterior <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"nExtDireccionE\" name=\"nExtDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Colonia <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"colDireccionE\" name=\"colDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">C.P. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"cpDireccionE\" name=\"cpDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Municipio <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"municipioDireccionE\" name=\"municipioDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"estadoDireccionE\" name=\"estadoDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <h4>Contacto</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Teléfono <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"telefonoE\" name=\"telefonoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Correo <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <h4>Datos Laborales</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Gob. Sep. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fIGobSep\" name=\"fIGobSep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Sep. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fISep\" name=\"fISep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Tec. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fITec\" name=\"fITec\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso CIIDET <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fICiidet\" name=\"fICiidet\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Empleado <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"claveEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Presupuestal <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"clavePresE\" name=\"clavePresE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
              </br>
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
              </br>
              </br>
              <h4>Acceso al Sistema </h4>
              <div class=\"form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Acceso <span class=\"required\">*</span>
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
              </br>
              <div class=\"form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Contraseña <span class=\"required\">*</span>
                </label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                  <input type=\"password\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
        </form>
        <!--Termina Acciones-->



      <div class=\"x_content\">
        <br />
          <!-- Tabla dinamica -->
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                 <div class=\"x_panel\">
                   <div class=\"x_title\">
                     <h2>Lista de Empleados <small>Datos Generales</small></h2>
                     <ul class=\"nav navbar-right panel_toolbox\">
                     </ul>
                     <div class=\"clearfix\"></div>
                   </div>
                   <div class=\"x_content\">
                     <p class=\"text-muted font-13 m-b-30\">

                     </p>
                     <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                       <thead>
                         <tr>
                           <th>Clave</th>
                           <th>Nombre</th>
                           <th>Apellido Paterno</th>
                           <th>Apellido Materno</th>
                           <th>Género</th>
                           <th>RFC</th>
                           <th>Curp</th>
                           <th>Clave Presupuestal</th>
                           <th>Departamento</th>
                           <th>Subdirección</th>
                           <th>Puesto</th>
                           <th>Categoría</th>
                           <th>FI Gob. Fed.</th>
                           <th>FI Sep.</th>
                           <th>FI Sis. Tec.</th>
                           <th>FI CIIDET</th>
                           <th>Interinato</th>
                           <th>Activo</th>
                           <th>Ver Empleado</th>
                         </tr>
                       </thead>
                       <tbody>
                       ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empleados"] ?? $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 508
            echo "                           <tr>

                               <td>";
            // line 510
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "claveEmpleado", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 511
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nombre", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 512
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aPaterno", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 513
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aMaterno", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 514
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "genero", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 515
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "rfc", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 516
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "curp", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 517
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "clavePresupuestal", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 518
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "idDepto", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 519
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "idSubdireccion", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 520
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "idPuesto", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 521
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "idCategoria", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 522
            if ($this->getAttribute($context["empleado"], "fechaIniGobSep", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniGobSep", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 523
            if ($this->getAttribute($context["empleado"], "fechaIniSep", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniSep", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 524
            if ($this->getAttribute($context["empleado"], "fechaIniTec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniTec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 525
            if ($this->getAttribute($context["empleado"], "fechaIniCiidet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniCiidet", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 526
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "interinato", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 527
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "activo", array()), "html", null, true);
            echo "</td>
                               <td>
                                 <a href=\"";
            // line 529
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\" target=\"_self\"> <input type=\"button\" name=\"verEmpleado\" value=\"Ver\" class=\"btn btn-dark\"/></a>
                               </td>
                            </tr>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo "                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
     <!-- Final de tabla dinamica -->

      </div>
    </div>
  </div>

  <br />

</div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empleado/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 533,  779 => 529,  774 => 527,  770 => 526,  764 => 525,  758 => 524,  752 => 523,  746 => 522,  742 => 521,  738 => 520,  734 => 519,  730 => 518,  726 => 517,  722 => 516,  718 => 515,  714 => 514,  710 => 513,  706 => 512,  702 => 511,  698 => 510,  694 => 508,  690 => 507,  286 => 106,  277 => 100,  270 => 95,  258 => 89,  252 => 86,  245 => 82,  241 => 81,  235 => 80,  229 => 79,  223 => 78,  217 => 77,  213 => 76,  209 => 75,  203 => 74,  199 => 73,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  179 => 68,  175 => 67,  171 => 66,  167 => 65,  163 => 64,  159 => 63,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  133 => 57,  130 => 56,  126 => 55,  75 => 6,  66 => 5,  55 => 549,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
<!-- page content -->
{% block content %}
<div class=\"right_col\" role=\"main\">
  <h1>Empleados</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <!--Empiezan Acciones-->
      <div class=\"x_title\">
        <h2>Acciones</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
<!--plantilla predefinida
      <h1>Empleados list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Claveempleado</th>
                  <th>Nombre</th>
                  <th>Apaterno</th>
                  <th>Amaterno</th>
                  <th>Rfc</th>
                  <th>Curp</th>
                  <th>Nss</th>
                  <th>Ley</th>
                  <th>Calle</th>
                  <th>Numext</th>
                  <th>Colonia</th>
                  <th>Cp</th>
                  <th>Municipio</th>
                  <th>Estado</th>
                  <th>Telefono</th>
                  <th>Edocivil</th>
                  <th>Fechanacimiento</th>
                  <th>Lugarnacimiento</th>
                  <th>Genero</th>
                  <th>Fechainigobsep</th>
                  <th>Fechainisep</th>
                  <th>Fechainitec</th>
                  <th>Fechainiciidet</th>
                  <th>Clavepresupuestal</th>
                  <th>Password</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          {% for empleado in empleados %}
              <tr>
                  <td><a href=\"{{ path('empleado_show', { 'id': empleado.id }) }}\">{{ empleado.id }}</a></td>
                  <td>{{ empleado.claveEmpleado }}</td>
                  <td>{{ empleado.nombre }}</td>
                  <td>{{ empleado.aPaterno }}</td>
                  <td>{{ empleado.aMaterno }}</td>
                  <td>{{ empleado.rfc }}</td>
                  <td>{{ empleado.curp }}</td>
                  <td>{{ empleado.nss }}</td>
                  <td>{{ empleado.ley }}</td>
                  <td>{{ empleado.calle }}</td>
                  <td>{{ empleado.numExt }}</td>
                  <td>{{ empleado.colonia }}</td>
                  <td>{{ empleado.cp }}</td>
                  <td>{{ empleado.municipio }}</td>
                  <td>{{ empleado.estado }}</td>
                  <td>{{ empleado.telefono }}</td>
                  <td>{{ empleado.edoCivil }}</td>
                  <td>{% if empleado.fechaNacimiento %}{{ empleado.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>
                  <td>{{ empleado.lugarNacimiento }}</td>
                  <td>{{ empleado.genero }}</td>
                  <td>{% if empleado.fechaIniGobSep %}{{ empleado.fechaIniGobSep|date('Y-m-d') }}{% endif %}</td>
                  <td>{% if empleado.fechaIniSep %}{{ empleado.fechaIniSep|date('Y-m-d') }}{% endif %}</td>
                  <td>{% if empleado.fechaIniTec %}{{ empleado.fechaIniTec|date('Y-m-d') }}{% endif %}</td>
                  <td>{% if empleado.fechaIniCiidet %}{{ empleado.fechaIniCiidet|date('Y-m-d') }}{% endif %}</td>
                  <td>{{ empleado.clavePresupuestal }}</td>
                  <td>{{ empleado.password }}</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"{{ path('empleado_show', { 'id': empleado.id }) }}\">show</a>
                          </li>
                          <li>
                              <a href=\"{{ path('empleado_edit', { 'id': empleado.id }) }}\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          {% endfor %}
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('empleado_new') }}\">Create a new empleado</a>
          </li>
      </ul>
final plantilla predefinida-->

      <form id=\"empleado\">
        <a class=\"btn btn-app\"  href=\"{{ path('empleado_new') }}\">
          <i class=\"fa fa-plus-square\"></i> Agregar Empleado
        </a>
        <div class=\"modal fade\" id=\"agregarEmpleado\" role=\"dialog\">
          <div class=\"modal-dialog\">
          <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Agregar Empleado</h4>
              </div>
              <div class=\"modal-body\">
                <h4>Datos Personales</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"nombreEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Paterno <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"ap\" name=\"ap\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Apellido Materno <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"am\" name=\"am\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">RFC <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"rfc\" name=\"rfc\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Curp <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"curp\" name=\"curp\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
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
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Lugar de Nacimiento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"lugarnacimiento\" name=\"lugarnacimiento\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
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
                  </br>
                </br>
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
                </br>
                </br>
                <h4>Dirección</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Calle <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"calleDireccionE\" name=\"calleDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Num. Exterior <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"nExtDireccionE\" name=\"nExtDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Colonia <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"colDireccionE\" name=\"colDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">C.P. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"cpDireccionE\" name=\"cpDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Municipio <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"municipioDireccionE\" name=\"municipioDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Estado <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"estadoDireccionE\" name=\"estadoDireccionE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <h4>Contacto</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Teléfono <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"telefonoE\" name=\"telefonoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Correo <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <h4>Datos Laborales</h4>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Gob. Sep. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fIGobSep\" name=\"fIGobSep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Sep. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fISep\" name=\"fISep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso Tec. <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fITec\" name=\"fITec\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha Ingreso CIIDET <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"fICiidet\" name=\"fICiidet\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Empleado <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"claveEmpleado\" name=\"claveEmpleado\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Clave Presupuestal <span class=\"required\">*</span>
                  </label>
                  <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <input type=\"text\" id=\"clavePresE\" name=\"clavePresE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                  </div>
                </div>
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
                </br>
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
                </br>
              </br>
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
              </br>
              </br>
              <h4>Acceso al Sistema </h4>
              <div class=\"form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Acceso <span class=\"required\">*</span>
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
              </br>
              <div class=\"form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Contraseña <span class=\"required\">*</span>
                </label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                  <input type=\"password\" id=\"correoE\" name=\"correoE\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
        </form>
        <!--Termina Acciones-->



      <div class=\"x_content\">
        <br />
          <!-- Tabla dinamica -->
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                 <div class=\"x_panel\">
                   <div class=\"x_title\">
                     <h2>Lista de Empleados <small>Datos Generales</small></h2>
                     <ul class=\"nav navbar-right panel_toolbox\">
                     </ul>
                     <div class=\"clearfix\"></div>
                   </div>
                   <div class=\"x_content\">
                     <p class=\"text-muted font-13 m-b-30\">

                     </p>
                     <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\">
                       <thead>
                         <tr>
                           <th>Clave</th>
                           <th>Nombre</th>
                           <th>Apellido Paterno</th>
                           <th>Apellido Materno</th>
                           <th>Género</th>
                           <th>RFC</th>
                           <th>Curp</th>
                           <th>Clave Presupuestal</th>
                           <th>Departamento</th>
                           <th>Subdirección</th>
                           <th>Puesto</th>
                           <th>Categoría</th>
                           <th>FI Gob. Fed.</th>
                           <th>FI Sep.</th>
                           <th>FI Sis. Tec.</th>
                           <th>FI CIIDET</th>
                           <th>Interinato</th>
                           <th>Activo</th>
                           <th>Ver Empleado</th>
                         </tr>
                       </thead>
                       <tbody>
                       {% for empleado in empleados %}
                           <tr>

                               <td>{{ empleado.claveEmpleado }}</td>
                               <td>{{ empleado.nombre }}</td>
                               <td>{{ empleado.aPaterno }}</td>
                               <td>{{ empleado.aMaterno }}</td>
                               <td>{{ empleado.genero }}</td>
                               <td>{{ empleado.rfc }}</td>
                               <td>{{ empleado.curp }}</td>
                               <td>{{ empleado.clavePresupuestal }}</td>
                               <td>{{ empleado.idDepto }}</td>
                               <td>{{ empleado.idSubdireccion }}</td>
                               <td>{{ empleado.idPuesto }}</td>
                               <td>{{ empleado.idCategoria }}</td>
                               <td>{% if empleado.fechaIniGobSep %}{{ empleado.fechaIniGobSep|date('Y-m-d') }}{% endif %}</td>
                               <td>{% if empleado.fechaIniSep %}{{ empleado.fechaIniSep|date('Y-m-d') }}{% endif %}</td>
                               <td>{% if empleado.fechaIniTec %}{{ empleado.fechaIniTec|date('Y-m-d') }}{% endif %}</td>
                               <td>{% if empleado.fechaIniCiidet %}{{ empleado.fechaIniCiidet|date('Y-m-d') }}{% endif %}</td>
                               <td>{{ empleado.interinato }}</td>
                               <td>{{ empleado.activo }}</td>
                               <td>
                                 <a href=\"{{ path('empleado_show', { 'id': empleado.id }) }}\" target=\"_self\"> <input type=\"button\" name=\"verEmpleado\" value=\"Ver\" class=\"btn btn-dark\"/></a>
                               </td>
                            </tr>
                       {% endfor %}
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
     <!-- Final de tabla dinamica -->

      </div>
    </div>
  </div>

  <br />

</div>

  {% endblock %}
  <!-- /page content -->
{% endblock %}
", "empleado/index.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\empleado\\index.html.twig");
    }
}
