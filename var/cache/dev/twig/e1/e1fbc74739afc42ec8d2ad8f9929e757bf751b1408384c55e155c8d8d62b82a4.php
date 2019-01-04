<?php

/* admin/infoempleadoAdmin.html.twig */
class __TwigTemplate_c40b94a2632b44f6e3915b32d4936d7ff31dcdb8c0268eef2bc20e4c99ca1a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/infoempleadoAdmin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/infoempleadoAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/infoempleadoAdmin.html.twig"));

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
        // line 1148
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
  <h1>Información del Empleado</h1>
  <a class=\"btn btn-app\" href=\"";
        // line 9
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarPersonal\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarPersonal\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                    </div>
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarDireccion\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarDireccion\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                    </div>
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarContacto\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarContacto\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarLaboral\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarLaboral\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarAcceso\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarAcceso\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--Termina datos personales-->

            <!--empieza escolaridad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">
              <!--Empiezan Acciones Agregar-->
              <div class=\"x_title\">
                <h2>Acciones</h2>
                <ul class=\"nav navbar-right panel_toolbox\">

                  </li>
                </ul>
                <div class=\"clearfix\"></div>
              </div>

              <form id=\"escolaridad\">
                <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#agregarEscolaridad\">
                  <i class=\"fa fa-plus-square\"></i> Agregar Escolaridad
                </a>
                  <div class=\"modal fade\" id=\"agregarEscolaridad\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
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
                  <!--Termina Acciones Agregar-->

                  <!--Empiezan Acciones Modificar-->
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarEscolaridad\">
                    <i class=\"fa fa-edit\"></i> Modificar Escolaridad
                  </a>
                    <div class=\"modal fade\" id=\"modificarEscolaridad\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                    <!--Termina Acciones Modificar-->

                    <!--Empiezan Acciones Eliminar-->
                    <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarEscolaridad\">
                      <i class=\"fa fa-close\"></i> Eliminar Escolaridad
                    </a>
                      <div class=\"modal fade\" id=\"eliminarEscolaridad\" role=\"dialog\">
                        <div class=\"modal-dialog\">
                          <!-- Modal content-->
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
                      <!--Termina Acciones Eliminar-->

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
        return "admin/infoempleadoAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  76 => 7,  67 => 6,  56 => 1148,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarPersonal\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarPersonal\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                    </div>
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarDireccion\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarDireccion\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                    </div>
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarContacto\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarContacto\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarLaboral\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarLaboral\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                <div class=\"ln_solid\"></div>
                <div class=\"form-group\">
                  <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-5\">
                    <!-- Trigger the modal with a button -->
                    <button type=\"button\" class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#modalModificarAcceso\">Modificar</button>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"modalModificarAcceso\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--Termina datos personales-->

            <!--empieza escolaridad-->
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"escolaridadEmpleado\" aria-labelledby=\"profile-tab\">
              <!--Empiezan Acciones Agregar-->
              <div class=\"x_title\">
                <h2>Acciones</h2>
                <ul class=\"nav navbar-right panel_toolbox\">

                  </li>
                </ul>
                <div class=\"clearfix\"></div>
              </div>

              <form id=\"escolaridad\">
                <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#agregarEscolaridad\">
                  <i class=\"fa fa-plus-square\"></i> Agregar Escolaridad
                </a>
                  <div class=\"modal fade\" id=\"agregarEscolaridad\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
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
                  <!--Termina Acciones Agregar-->

                  <!--Empiezan Acciones Modificar-->
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarEscolaridad\">
                    <i class=\"fa fa-edit\"></i> Modificar Escolaridad
                  </a>
                    <div class=\"modal fade\" id=\"modificarEscolaridad\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!-- Modal content-->
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
                    <!--Termina Acciones Modificar-->

                    <!--Empiezan Acciones Eliminar-->
                    <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarEscolaridad\">
                      <i class=\"fa fa-close\"></i> Eliminar Escolaridad
                    </a>
                      <div class=\"modal fade\" id=\"eliminarEscolaridad\" role=\"dialog\">
                        <div class=\"modal-dialog\">
                          <!-- Modal content-->
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
                      <!--Termina Acciones Eliminar-->

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
", "admin/infoempleadoAdmin.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\admin\\infoempleadoAdmin.html.twig");
    }
}
