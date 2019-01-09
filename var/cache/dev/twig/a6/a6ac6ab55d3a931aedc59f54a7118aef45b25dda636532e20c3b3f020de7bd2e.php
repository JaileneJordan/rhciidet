<?php

/* subdireccion/index.html.twig */
class __TwigTemplate_44d2fb8d65f05f65e8aad192f21591446964f29efc803c28f48705b4c6ccd62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "subdireccion/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subdireccion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "subdireccion/index.html.twig"));

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
        // line 255
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
  <h1>Subdirección</h1>

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
<!--plantilla predefinida subdireccion-
      <h1>Subdireccions list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Subdirector</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subdireccions"] ?? $this->getContext($context, "subdireccions")));
        foreach ($context['_seq'] as $context["_key"] => $context["subdireccion"]) {
            // line 37
            echo "              <tr>
                  <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_show", array("id" => $this->getAttribute($context["subdireccion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subdireccion"], "id", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["subdireccion"], "nombre", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["subdireccion"], "subdirector", array()), "html", null, true);
            echo "</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_show", array("id" => $this->getAttribute($context["subdireccion"], "id", array()))), "html", null, true);
            echo "\">show</a>
                          </li>
                          <li>
                              <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_edit", array("id" => $this->getAttribute($context["subdireccion"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subdireccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_new");
        echo "\">Create a new subdireccion</a>
          </li>
      </ul>
<!-fin plantilla predefinida subdireccion-->

        <a class=\"btn btn-app\"  href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_new");
        echo "\" >
          <i class=\"fa fa-plus-square\"></i> Agregar Subdirección
        </a>
          <!--<div class=\"modal fade\" id=\"agregarSubdireccion\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Subdirección</h4>
                </div>
                <div class=\"modal-body\">
                  <form id=\"subdireccion\" action=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_new");
        echo "\" method=\"POST \">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Subdirección <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idSubdireccion\" name=\"idSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirección <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreSubdireccion\" name=\"nombreSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirector <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreSubdirector\" name=\"nombreSubdirector\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                  </div>
                </form>
                </div>

              </div>
            </div>
          </div>
          <!-Termina Acciones Agregar-->

          <!--Empiezan Acciones Modificar-
          <a class=\"btn btn-app\" data-toggle=\"modal\"  href=\"\">
            <i class=\"fa fa-edit\"></i> Modificar Subdirección
          </a>
            <div class=\"modal fade\" id=\"modificarSubdireccion\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Subdirección</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Subdirección <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idSubdireccion\" name=\"idSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirección <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreSubdireccion\" name=\"nombreSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirector <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreSubdirector\" name=\"sueldo\" required=\"nombreSubdirector\" class=\"form-control col-md-7 col-xs-12\">
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

            <!--Empiezan Acciones Eliminar->
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarSubdireccion\">
              <i class=\"fa fa-close\"></i> Eliminar Subdirección
            </a>
              <div class=\"modal fade\" id=\"eliminarSubdireccion\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Eliminar Subdirección</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Subdirección <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idSubdireccion\" name=\"idSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirección <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreSubdireccion\" name=\"nombreSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirector <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreSubdirector\" name=\"nombreSubdirector\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
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
                <h2>Lista de Subdirección</h2>
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
                              <th>Id Subdirección</th>
                              <th>Nombre de Subdirección</th>
                              <th>Nombre del Subdirector</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subdireccions"] ?? $this->getContext($context, "subdireccions")));
        foreach ($context['_seq'] as $context["_key"] => $context["subdireccion"]) {
            // line 234
            echo "                              <tr>
                                  <td><a href=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_show", array("id" => $this->getAttribute($context["subdireccion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subdireccion"], "id", array()), "html", null, true);
            echo "</a></td>
                                  <td>";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["subdireccion"], "nombreSubd", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["subdireccion"], "subdirector", array()), "html", null, true);
            echo "</td>
                                  <td>
                                    <center><a href=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_edit", array("id" => $this->getAttribute($context["subdireccion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">Editar</a></center>
                                  </td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subdireccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
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
        return "subdireccion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 243,  362 => 239,  357 => 237,  353 => 236,  347 => 235,  344 => 234,  340 => 233,  179 => 75,  164 => 63,  156 => 58,  149 => 53,  137 => 47,  131 => 44,  124 => 40,  120 => 39,  114 => 38,  111 => 37,  107 => 36,  77 => 8,  68 => 7,  57 => 255,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Subdirección</h1>

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
<!--plantilla predefinida subdireccion-
      <h1>Subdireccions list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Subdirector</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          {% for subdireccion in subdireccions %}
              <tr>
                  <td><a href=\"{{ path('subdireccion_show', { 'id': subdireccion.id }) }}\">{{ subdireccion.id }}</a></td>
                  <td>{{ subdireccion.nombre }}</td>
                  <td>{{ subdireccion.subdirector }}</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"{{ path('subdireccion_show', { 'id': subdireccion.id }) }}\">show</a>
                          </li>
                          <li>
                              <a href=\"{{ path('subdireccion_edit', { 'id': subdireccion.id }) }}\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          {% endfor %}
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('subdireccion_new') }}\">Create a new subdireccion</a>
          </li>
      </ul>
<!-fin plantilla predefinida subdireccion-->

        <a class=\"btn btn-app\"  href=\"{{ path('subdireccion_new') }}\" >
          <i class=\"fa fa-plus-square\"></i> Agregar Subdirección
        </a>
          <!--<div class=\"modal fade\" id=\"agregarSubdireccion\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Subdirección</h4>
                </div>
                <div class=\"modal-body\">
                  <form id=\"subdireccion\" action=\"{{ path('subdireccion_new') }}\" method=\"POST \">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Subdirección <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idSubdireccion\" name=\"idSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirección <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreSubdireccion\" name=\"nombreSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirector <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreSubdirector\" name=\"nombreSubdirector\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                  </div>
                </form>
                </div>

              </div>
            </div>
          </div>
          <!-Termina Acciones Agregar-->

          <!--Empiezan Acciones Modificar-
          <a class=\"btn btn-app\" data-toggle=\"modal\"  href=\"\">
            <i class=\"fa fa-edit\"></i> Modificar Subdirección
          </a>
            <div class=\"modal fade\" id=\"modificarSubdireccion\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Subdirección</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Subdirección <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idSubdireccion\" name=\"idSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirección <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreSubdireccion\" name=\"nombreSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirector <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreSubdirector\" name=\"sueldo\" required=\"nombreSubdirector\" class=\"form-control col-md-7 col-xs-12\">
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

            <!--Empiezan Acciones Eliminar->
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarSubdireccion\">
              <i class=\"fa fa-close\"></i> Eliminar Subdirección
            </a>
              <div class=\"modal fade\" id=\"eliminarSubdireccion\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Eliminar Subdirección</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Subdirección <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idSubdireccion\" name=\"idSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirección <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreSubdireccion\" name=\"nombreSubdireccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre de Subdirector <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreSubdirector\" name=\"nombreSubdirector\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
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
                <h2>Lista de Subdirección</h2>
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
                              <th>Id Subdirección</th>
                              <th>Nombre de Subdirección</th>
                              <th>Nombre del Subdirector</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for subdireccion in subdireccions %}
                              <tr>
                                  <td><a href=\"{{ path('subdireccion_show', { 'id': subdireccion.id }) }}\">{{ subdireccion.id }}</a></td>
                                  <td>{{ subdireccion.nombreSubd }}</td>
                                  <td>{{ subdireccion.subdirector }}</td>
                                  <td>
                                    <center><a href=\"{{ path('subdireccion_edit', { 'id': subdireccion.id }) }}\" class=\"btn btn-dark\">Editar</a></center>
                                  </td>
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
", "subdireccion/index.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\subdireccion\\index.html.twig");
    }
}
