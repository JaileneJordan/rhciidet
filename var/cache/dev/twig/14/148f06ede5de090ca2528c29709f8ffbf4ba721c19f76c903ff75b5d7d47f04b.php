<?php

/* licencia/index.html.twig */
class __TwigTemplate_1ce5a14630f3187a61e26fc89edc3a795041961cb1f3b1ffc8106dfeb502e7c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "licencia/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "licencia/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "licencia/index.html.twig"));

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
<!-- page content -->

";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 264
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
  <h1>Licencias</h1>

  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <!--Empiezan Acciones Agregar-->
      <div class=\"x_title\">
        <h2>Acciones</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <!--<h1>Licencias list</h1>

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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licencias"] ?? $this->getContext($context, "licencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["licencium"]) {
            // line 35
            echo "              <tr>
                  <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_show", array("id" => $this->getAttribute($context["licencium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["licencium"], "id", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["licencium"], "nombre", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["licencium"], "activo", array()), "html", null, true);
            echo "</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_show", array("id" => $this->getAttribute($context["licencium"], "id", array()))), "html", null, true);
            echo "\">show</a>
                          </li>
                          <li>
                              <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_edit", array("id" => $this->getAttribute($context["licencium"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licencium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_new");
        echo "\">Create a new licencium</a>
          </li>
      </ul>-->

        <a class=\"btn btn-app\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_new");
        echo "\">
          <i class=\"fa fa-plus-square\"></i> Agregar Licencia
        </a>
          <!--<div class=\"modal fade\" id=\"agregarLicencia\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Licencia</h4>
                </div>
                  <div class=\"modal-body\">
                    <form id=\"agrega_licencia\" action=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_new");
        echo "\" method=\"POST\">

                      <div class=\"form-group\" >
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idLicencia\" name=\"idLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"tipoLicencia\" name=\"tipoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                  </form>
                </div>
              </div>
            </div>

          <!-Termina Acciones Agregar->

          <!-Empiezan Acciones Modificar->
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarLicencia\">
            <i class=\"fa fa-edit\"></i> Modificar Licencia
          </a>
            <div class=\"modal fade\" id=\"modificarLicencia\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Licencia</h4>
                  </div>
                  <div class=\"modal-body\">
                    <form id=\"modificar_licencia\" action=\"\" method=\"POST\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idLicencia\" name=\"idLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"tipoLicencia\" name=\"tipoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                  </form>
                </div>
              </div>
            </div>
            <!-Termina Acciones Modificar->

            <!-Empiezan Acciones Eliminar->
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarLicencia\">
              <i class=\"fa fa-close\"></i> Eliminar Licencia
            </a>
              <div class=\"modal fade\" id=\"eliminarLicencia\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Eliminar Licencia</h4>
                    </div>
                    <div class=\"modal-body\">
                      <form id=\"eliminar_licencia\" action=\"\" method=\"POST\">
                        <div class=\"form-group\">
                          <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Licencia <span class=\"required\">*</span>
                          </label>
                          <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"idLicencia\" name=\"idLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                          </div>
                          <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                        </br>
                        <div class=\"form-group\">
                          <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Licencia <span class=\"required\">*</span>
                          </label>
                          <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"tipoLicencia\" name=\"tipoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                          </div>
                        </div>
                        </br>
                        </br>
                        <div class=\"form-group\">
                          <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Activo <span class=\"required\">*</span>
                          </label>
                          <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"activoLicencia\" name=\"activoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                          </div>
                        </div>
                        </br>

                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Eliminar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-Termina Acciones Eliminar-->

              <!--Empieza lista-->
              <div class=\"x_title\">
                <h2>Lista de Licencias</h2>
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
                              <th>Id Licencia</th>
                              <th>Tipo de Licencia</th>
                              <th>Activo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licencias"] ?? $this->getContext($context, "licencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["licencium"]) {
            // line 245
            echo "                              <tr>
                                  <td><a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_show", array("id" => $this->getAttribute($context["licencium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["licencium"], "id", array()), "html", null, true);
            echo "</a></td>
                                  <td>";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($context["licencium"], "nombre", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["licencium"], "activo", array()), "html", null, true);
            echo "</td>
                                  <td><center><a href=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_edit", array("id" => $this->getAttribute($context["licencium"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">Editar</a></center></td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licencium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                          </tbody>
                        </table>
                      </div>
                  </div>
                  <!--termina tabla -->
              </div>
              <!--Termina Lista -->
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
        return "licencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 252,  372 => 249,  368 => 248,  364 => 247,  358 => 246,  355 => 245,  351 => 244,  176 => 72,  161 => 60,  154 => 56,  147 => 51,  135 => 45,  129 => 42,  122 => 38,  118 => 37,  112 => 36,  109 => 35,  105 => 34,  77 => 8,  68 => 7,  57 => 264,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Licencias</h1>

  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <!--Empiezan Acciones Agregar-->
      <div class=\"x_title\">
        <h2>Acciones</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <!--<h1>Licencias list</h1>

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
          {% for licencium in licencias %}
              <tr>
                  <td><a href=\"{{ path('licencia_show', { 'id': licencium.id }) }}\">{{ licencium.id }}</a></td>
                  <td>{{ licencium.nombre }}</td>
                  <td>{{ licencium.activo }}</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"{{ path('licencia_show', { 'id': licencium.id }) }}\">show</a>
                          </li>
                          <li>
                              <a href=\"{{ path('licencia_edit', { 'id': licencium.id }) }}\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          {% endfor %}
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('licencia_new') }}\">Create a new licencium</a>
          </li>
      </ul>-->

        <a class=\"btn btn-app\" href=\"{{ path('licencia_new') }}\">
          <i class=\"fa fa-plus-square\"></i> Agregar Licencia
        </a>
          <!--<div class=\"modal fade\" id=\"agregarLicencia\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Licencia</h4>
                </div>
                  <div class=\"modal-body\">
                    <form id=\"agrega_licencia\" action=\"{{ path('licencia_new') }}\" method=\"POST\">

                      <div class=\"form-group\" >
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idLicencia\" name=\"idLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"tipoLicencia\" name=\"tipoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                  </form>
                </div>
              </div>
            </div>

          <!-Termina Acciones Agregar->

          <!-Empiezan Acciones Modificar->
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarLicencia\">
            <i class=\"fa fa-edit\"></i> Modificar Licencia
          </a>
            <div class=\"modal fade\" id=\"modificarLicencia\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Licencia</h4>
                  </div>
                  <div class=\"modal-body\">
                    <form id=\"modificar_licencia\" action=\"\" method=\"POST\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idLicencia\" name=\"idLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Licencia <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"tipoLicencia\" name=\"tipoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                  </form>
                </div>
              </div>
            </div>
            <!-Termina Acciones Modificar->

            <!-Empiezan Acciones Eliminar->
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarLicencia\">
              <i class=\"fa fa-close\"></i> Eliminar Licencia
            </a>
              <div class=\"modal fade\" id=\"eliminarLicencia\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Eliminar Licencia</h4>
                    </div>
                    <div class=\"modal-body\">
                      <form id=\"eliminar_licencia\" action=\"\" method=\"POST\">
                        <div class=\"form-group\">
                          <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Licencia <span class=\"required\">*</span>
                          </label>
                          <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"idLicencia\" name=\"idLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                          </div>
                          <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                        </div>
                        </br>
                        <div class=\"form-group\">
                          <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Tipo de Licencia <span class=\"required\">*</span>
                          </label>
                          <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"tipoLicencia\" name=\"tipoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                          </div>
                        </div>
                        </br>
                        </br>
                        <div class=\"form-group\">
                          <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Activo <span class=\"required\">*</span>
                          </label>
                          <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <input type=\"text\" id=\"activoLicencia\" name=\"activoLicencia\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                          </div>
                        </div>
                        </br>

                      </div>
                      <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Eliminar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-Termina Acciones Eliminar-->

              <!--Empieza lista-->
              <div class=\"x_title\">
                <h2>Lista de Licencias</h2>
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
                              <th>Id Licencia</th>
                              <th>Tipo de Licencia</th>
                              <th>Activo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for licencium in licencias %}
                              <tr>
                                  <td><a href=\"{{ path('licencia_show', { 'id': licencium.id }) }}\">{{ licencium.id }}</a></td>
                                  <td>{{ licencium.nombre }}</td>
                                  <td>{{ licencium.activo }}</td>
                                  <td><center><a href=\"{{ path('licencia_edit', { 'id': licencium.id }) }}\" class=\"btn btn-dark\">Editar</a></center></td>
                              </tr>
                          {% endfor %}
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <!--termina tabla -->
              </div>
              <!--Termina Lista -->
          </div>
        </div>
        <br />
      </div>
{% endblock %}
<!-- /page content -->
{% endblock %}
", "licencia/index.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\licencia\\index.html.twig");
    }
}
