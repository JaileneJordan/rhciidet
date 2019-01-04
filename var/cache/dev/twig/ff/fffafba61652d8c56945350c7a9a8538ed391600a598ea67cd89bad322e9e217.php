<?php

/* tramite/index.html.twig */
class __TwigTemplate_d806e1eed65abfec8d7e6ff06a0c20fd29ef3b920e9de60fbd257140407fe65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "tramite/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tramite/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tramite/index.html.twig"));

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
        // line 260
        echo "<!-- /page content -->
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

      <!--<h1>Tramites list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Activo</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tramites"] ?? $this->getContext($context, "tramites")));
        foreach ($context['_seq'] as $context["_key"] => $context["tramite"]) {
            // line 32
            echo "              <tr>
                  <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_show", array("id" => $this->getAttribute($context["tramite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tramite"], "id", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tramite"], "nombre", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tramite"], "activo", array()), "html", null, true);
            echo "</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_show", array("id" => $this->getAttribute($context["tramite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                          </li>
                          <li>
                              <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_edit", array("id" => $this->getAttribute($context["tramite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tramite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_new");
        echo "\">Create a new tramite</a>
          </li>
      </ul>-->

      <div class=\"x_content\">
        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
          <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#acciones\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Acciones</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#peticionTramites\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Peticion de Trámites</a>
            </li>
          </ul>
          <div id=\"myTabContent\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"acciones\" aria-labelledby=\"home-tab\">
              <form id=\"tramite\">
                <a class=\"btn btn-app\" href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_new");
        echo "\">
                  <i class=\"fa fa-plus-square\"></i> Agregar Trámite
                </a>
                  <!--<div class=\"modal fade\" id=\"agregarTramite\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!- Modal content->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Agregar Trámite</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Trámite <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <input type=\"text\" id=\"idTramite\" name=\"idTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                            </div>
                          </div>
                          </br>
                          </br>
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Trámite <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <input type=\"text\" id=\"nombreTramite\" name=\"nombreTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                                  <option>Si</option>
                                  <option>No</option>
                                </select>
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
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarTramite\">
                    <i class=\"fa fa-edit\"></i> Modificar Trámite
                  </a>
                    <div class=\"modal fade\" id=\"modificarTramite\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!- Modal content->
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Modificar Trámite</h4>
                          </div>
                          <div class=\"modal-body\">
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Trámite <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idTramite\" name=\"idTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                              <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                            </div>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Trámite <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"nombreTramite\" name=\"nombreTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                                    <option>Si</option>
                                    <option>No</option>
                                  </select>
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

                      <!--Empieza lista-->
                      <div class=\"x_title\">
                        <h2>Lista de Trámites</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <br />
                          <!--empieza tabla -->
                          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                              <div class=\"clearfix\"></div>
                              <div class=\"x_content\">
                                <table class=\"table table-bordered\">
                                  <thead>
                                    <tr>
                                      <th>Id Trámite</th>
                                      <th>Nombre del Trámite</th>
                                      <th>Activo</th>
                                      <th>Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tramites"] ?? $this->getContext($context, "tramites")));
        foreach ($context['_seq'] as $context["_key"] => $context["tramite"]) {
            // line 197
            echo "                                      <tr>
                                          <td><a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_show", array("id" => $this->getAttribute($context["tramite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tramite"], "id", array()), "html", null, true);
            echo "</a></td>
                                          <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["tramite"], "nombre", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($context["tramite"], "activo", array()), "html", null, true);
            echo "</td>
                                          <td><center><a href=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_edit", array("id" => $this->getAttribute($context["tramite"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">Editar</a></center></td>
                                      </tr>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tramite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                                  </tbody>
                                </table>
                              </div>
                          </div>
                          <!--termina tabla -->
                      </div>
                      <!--Termina Lista -->
                    </form>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"peticionTramites\" aria-labelledby=\"profile-tab\">
                    <h4>Lista de los trámites que han solicitado los empleados.</h4>
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
        return "tramite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 204,  321 => 201,  317 => 200,  313 => 199,  307 => 198,  304 => 197,  300 => 196,  169 => 68,  151 => 53,  144 => 48,  132 => 42,  126 => 39,  119 => 35,  115 => 34,  109 => 33,  106 => 32,  102 => 31,  75 => 6,  66 => 5,  55 => 260,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

      <!--<h1>Tramites list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Activo</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          {% for tramite in tramites %}
              <tr>
                  <td><a href=\"{{ path('tramite_show', { 'id': tramite.id }) }}\">{{ tramite.id }}</a></td>
                  <td>{{ tramite.nombre }}</td>
                  <td>{{ tramite.activo }}</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"{{ path('tramite_show', { 'id': tramite.id }) }}\">show</a>
                          </li>
                          <li>
                              <a href=\"{{ path('tramite_edit', { 'id': tramite.id }) }}\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          {% endfor %}
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('tramite_new') }}\">Create a new tramite</a>
          </li>
      </ul>-->

      <div class=\"x_content\">
        <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
          <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#acciones\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Acciones</a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#peticionTramites\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Peticion de Trámites</a>
            </li>
          </ul>
          <div id=\"myTabContent\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"acciones\" aria-labelledby=\"home-tab\">
              <form id=\"tramite\">
                <a class=\"btn btn-app\" href=\"{{ path('tramite_new') }}\">
                  <i class=\"fa fa-plus-square\"></i> Agregar Trámite
                </a>
                  <!--<div class=\"modal fade\" id=\"agregarTramite\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!- Modal content->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Agregar Trámite</h4>
                        </div>
                        <div class=\"modal-body\">
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Trámite <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <input type=\"text\" id=\"idTramite\" name=\"idTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                            </div>
                          </div>
                          </br>
                          </br>
                          <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Trámite <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                              <input type=\"text\" id=\"nombreTramite\" name=\"nombreTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                                  <option>Si</option>
                                  <option>No</option>
                                </select>
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
                  <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarTramite\">
                    <i class=\"fa fa-edit\"></i> Modificar Trámite
                  </a>
                    <div class=\"modal fade\" id=\"modificarTramite\" role=\"dialog\">
                      <div class=\"modal-dialog\">
                        <!- Modal content->
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Modificar Trámite</h4>
                          </div>
                          <div class=\"modal-body\">
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Trámite <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"idTramite\" name=\"idTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                              </div>
                              <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                            </div>
                            </br>
                            <div class=\"form-group\">
                              <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Trámite <span class=\"required\">*</span>
                              </label>
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                <input type=\"text\" id=\"nombreTramite\" name=\"nombreTramite\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                                    <option>Si</option>
                                    <option>No</option>
                                  </select>
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

                      <!--Empieza lista-->
                      <div class=\"x_title\">
                        <h2>Lista de Trámites</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <br />
                          <!--empieza tabla -->
                          <div class=\"col-md-12 col-sm-12 col-xs-12\">
                              <div class=\"clearfix\"></div>
                              <div class=\"x_content\">
                                <table class=\"table table-bordered\">
                                  <thead>
                                    <tr>
                                      <th>Id Trámite</th>
                                      <th>Nombre del Trámite</th>
                                      <th>Activo</th>
                                      <th>Acciones</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  {% for tramite in tramites %}
                                      <tr>
                                          <td><a href=\"{{ path('tramite_show', { 'id': tramite.id }) }}\">{{ tramite.id }}</a></td>
                                          <td>{{ tramite.nombre }}</td>
                                          <td>{{ tramite.activo }}</td>
                                          <td><center><a href=\"{{ path('tramite_edit', { 'id': tramite.id }) }}\" class=\"btn btn-dark\">Editar</a></center></td>
                                      </tr>
                                  {% endfor %}
                                  </tbody>
                                </table>
                              </div>
                          </div>
                          <!--termina tabla -->
                      </div>
                      <!--Termina Lista -->
                    </form>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"peticionTramites\" aria-labelledby=\"profile-tab\">
                    <h4>Lista de los trámites que han solicitado los empleados.</h4>
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
", "tramite/index.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\tramite\\index.html.twig");
    }
}
