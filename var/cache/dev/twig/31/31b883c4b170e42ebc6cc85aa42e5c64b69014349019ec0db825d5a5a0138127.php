<?php

/* user/tramitesUser.html.twig */
class __TwigTemplate_aca32e4d1f5f5feefb5a33993686b65ab16222ee454652958ce8341dd39649ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseUsuario.html.twig", "user/tramitesUser.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/tramitesUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/tramitesUser.html.twig"));

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
        // line 115
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
  <h1>Trámites</h1>

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
            <li role=\"presentation\" class=\"active\"><a href=\"#solicitarTramite\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">solicitar Trámite</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#listaTramites\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Trámites solicitados</a>
            </li>
          </ul>
          <div id=\"myTabContent\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"solicitarTramite\" aria-labelledby=\"home-tab\">
              <form id=\"tramite\">
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Tipo de Trámite<span class=\"required\">*</span>
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
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha en que solicita el Trámite <span class=\"required\">*</span>
                  </label>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
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
                <center><button type=\"submit\" class=\"btn btn-default\">Ver</button></center>
              </form>
            </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"listaTramites\" aria-labelledby=\"profile-tab\">
                    <h4>Lista de los trámites que ha solicitado.</h4>
                    <!--empieza tabla -->
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"clearfix\"></div>
                        <div class=\"x_content\">
                          <table class=\"table table-bordered\">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Subdirección</th>
                                <th>Departamento</th>
                                <th>Puesto</th>
                                <th>Id Trámite</th>
                                <th>Nombre del Trámite</th>
                                <th>Fecha</th>
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
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <!--termina tabla -->
                  </div>
                </div>
              </div>

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
        return "user/tramitesUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 7,  67 => 6,  56 => 115,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Trámites</h1>

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
            <li role=\"presentation\" class=\"active\"><a href=\"#solicitarTramite\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">solicitar Trámite</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#listaTramites\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Trámites solicitados</a>
            </li>
          </ul>
          <div id=\"myTabContent\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"solicitarTramite\" aria-labelledby=\"home-tab\">
              <form id=\"tramite\">
                <div class=\"form-group\">
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Tipo de Trámite<span class=\"required\">*</span>
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
                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Fecha en que solicita el Trámite <span class=\"required\">*</span>
                  </label>
                    <div class=\"col-md-3 col-sm-3 col-xs-12\">
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
                <center><button type=\"submit\" class=\"btn btn-default\">Ver</button></center>
              </form>
            </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"listaTramites\" aria-labelledby=\"profile-tab\">
                    <h4>Lista de los trámites que ha solicitado.</h4>
                    <!--empieza tabla -->
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"clearfix\"></div>
                        <div class=\"x_content\">
                          <table class=\"table table-bordered\">
                            <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Subdirección</th>
                                <th>Departamento</th>
                                <th>Puesto</th>
                                <th>Id Trámite</th>
                                <th>Nombre del Trámite</th>
                                <th>Fecha</th>
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
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <!--termina tabla -->
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <br />
      </div>
{% endblock %}
<!-- /page content -->
{% endblock %}
", "user/tramitesUser.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\user\\tramitesUser.html.twig");
    }
}
