<?php

/* admin/antiguedadAdmin.html.twig */
class __TwigTemplate_2639e671148672d562b72d9ba87522811e3daf67bd82d86e1c5521a318bdf676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/antiguedadAdmin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/antiguedadAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/antiguedadAdmin.html.twig"));

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
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "<!-- /page content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"right_col\" role=\"main\">
  <h1>Antigüedad</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">

      <!--Empieza ver Antigüedad-->
      <div class=\"x_title\">
        <h2>Ver Antigüedad</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\">
        <br />
        <form id=\"antiguedadAdmin\" data-parsley-validate class=\"form-horizontal form-label-left\">

          <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Antigüedad a la fecha de <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-3\">
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
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Antigüedad en base a la cúal se hará el cálculo <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <select class=\"form-control\">
                <option selected disabled>Elegir...</option>
                <option>Antigüedad F. Gobierno Federal</option>
                <option>Antigüedad F. SEP</option>
                <option>Antigüedad F. Sub. Tecnológicos</option>
                <option>Antigüedad F. CIIDET</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
              <button class=\"btn btn-dark\" type=\"button\">Ver</button>
            </div>
          </div>
        </form>
          <!--Termina ver Antigüedad-->


          <!-- Tabla dinamica -->
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                 <div class=\"x_panel\">
                   <div class=\"x_title\">
                     <h2>Lista de Empleados <small>Antigüedad</small></h2>
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
                           <th>RFC</th>
                           <th>Curp</th>
                           <th>Clave Presupuestal</th>
                           <th>Departamento</th>
                           <th>Subdirección</th>
                           <th>FI Gob. Fed.</th>
                           <th>FI Sep.</th>
                           <th>FI Sis. Tec.</th>
                           <th>FI CIIDET</th>
                           <th>Activo</th>
                           <th>Interinato</th>
                           <th>Antigüedad</th>
                           <th>Días de Ausencia</th>
                           <th>Días Efectivos</th>
                         </tr>
                       </thead>
                       <tbody>
                       ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empleados"] ?? $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 105
            echo "                           <tr>
                               <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "claveEmpleado", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nombre", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aPaterno", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aMaterno", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "rfc", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "curp", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "clavePresupuestal", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "idDepto", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "idSubdireccion", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 115
            if ($this->getAttribute($context["empleado"], "fechaIniGobSep", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniGobSep", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 116
            if ($this->getAttribute($context["empleado"], "fechaIniSep", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniSep", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 117
            if ($this->getAttribute($context["empleado"], "fechaIniTec", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniTec", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 118
            if ($this->getAttribute($context["empleado"], "fechaIniCiidet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empleado"], "fechaIniCiidet", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                               <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "activo", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "interinato", array()), "html", null, true);
            echo "</td>
                               <td></td>
                               <td></td>
                               <td></td>
                           </tr>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
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
        return "admin/antiguedadAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 126,  246 => 120,  242 => 119,  236 => 118,  230 => 117,  224 => 116,  218 => 115,  214 => 114,  210 => 113,  206 => 112,  202 => 111,  198 => 110,  194 => 109,  190 => 108,  186 => 107,  182 => 106,  179 => 105,  175 => 104,  76 => 7,  67 => 6,  56 => 140,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Antigüedad</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">

      <!--Empieza ver Antigüedad-->
      <div class=\"x_title\">
        <h2>Ver Antigüedad</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\">
        <br />
        <form id=\"antiguedadAdmin\" data-parsley-validate class=\"form-horizontal form-label-left\">

          <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Antigüedad a la fecha de <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-3\">
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
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Antigüedad en base a la cúal se hará el cálculo <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <select class=\"form-control\">
                <option selected disabled>Elegir...</option>
                <option>Antigüedad F. Gobierno Federal</option>
                <option>Antigüedad F. SEP</option>
                <option>Antigüedad F. Sub. Tecnológicos</option>
                <option>Antigüedad F. CIIDET</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
              <button class=\"btn btn-dark\" type=\"button\">Ver</button>
            </div>
          </div>
        </form>
          <!--Termina ver Antigüedad-->


          <!-- Tabla dinamica -->
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                 <div class=\"x_panel\">
                   <div class=\"x_title\">
                     <h2>Lista de Empleados <small>Antigüedad</small></h2>
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
                           <th>RFC</th>
                           <th>Curp</th>
                           <th>Clave Presupuestal</th>
                           <th>Departamento</th>
                           <th>Subdirección</th>
                           <th>FI Gob. Fed.</th>
                           <th>FI Sep.</th>
                           <th>FI Sis. Tec.</th>
                           <th>FI CIIDET</th>
                           <th>Activo</th>
                           <th>Interinato</th>
                           <th>Antigüedad</th>
                           <th>Días de Ausencia</th>
                           <th>Días Efectivos</th>
                         </tr>
                       </thead>
                       <tbody>
                       {% for empleado in empleados %}
                           <tr>
                               <td>{{ empleado.claveEmpleado }}</td>
                               <td>{{ empleado.nombre }}</td>
                               <td>{{ empleado.aPaterno }}</td>
                               <td>{{ empleado.aMaterno }}</td>
                               <td>{{ empleado.rfc }}</td>
                               <td>{{ empleado.curp }}</td>
                               <td>{{ empleado.clavePresupuestal }}</td>
                               <td>{{ empleado.idDepto }}</td>
                               <td>{{ empleado.idSubdireccion }}</td>
                               <td>{% if empleado.fechaIniGobSep %}{{ empleado.fechaIniGobSep|date('Y-m-d') }}{% endif %}</td>
                               <td>{% if empleado.fechaIniSep %}{{ empleado.fechaIniSep|date('Y-m-d') }}{% endif %}</td>
                               <td>{% if empleado.fechaIniTec %}{{ empleado.fechaIniTec|date('Y-m-d') }}{% endif %}</td>
                               <td>{% if empleado.fechaIniCiidet %}{{ empleado.fechaIniCiidet|date('Y-m-d') }}{% endif %}</td>
                               <td>{{ empleado.activo }}</td>
                               <td>{{ empleado.interinato }}</td>
                               <td></td>
                               <td></td>
                               <td></td>
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
", "admin/antiguedadAdmin.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\admin\\antiguedadAdmin.html.twig");
    }
}
