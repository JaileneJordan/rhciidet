<?php

/* categoria/index.html.twig */
class __TwigTemplate_1ffc8c75ce9e602abe93c5ece5976c20450e3c63749664a5ae26bd264f106bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "categoria/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

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
        // line 230
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
  <h1>Categorías</h1>
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

      <!--<h1>Categorias list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>Activo</th>
                  <th>Sueldo</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorium"]) {
            // line 35
            echo "              <tr>
                  <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_show", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "id", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "descripcion", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "activo", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "sueldo", array()), "html", null, true);
            echo "</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_show", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\">show</a>
                          </li>
                          <li>
                              <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_edit", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_new");
        echo "\">Create a new categorium</a>
          </li>
      </ul>-->

      <form id=\"categoria\">
        <a class=\"btn btn-app\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_new");
        echo "\">
          <i class=\"fa fa-plus-square\"></i> Agregar Categoría
        </a>
          <!--<div class=\"modal fade\" id=\"agregarCategoria\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Categoría</h4>
                </div>
                <div class=\"modal-body\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Categoría <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idCategoria\" name=\"idCategoria\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Descirpción <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"descripcioncatego\" name=\"descripcioncatego\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Sueldo <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"sueldo\" name=\"sueldo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarCategoria\">
            <i class=\"fa fa-edit\"></i> Modificar Categoría
          </a>
            <div class=\"modal fade\" id=\"modificarCategoria\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Categoría</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Categoría <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idCategoria\" name=\"idCategoria\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Descripción <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"descripcioncatego\" name=\"descripcioncatego\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Sueldo <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"sueldo\" name=\"sueldo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                <h2>Lista de Categorías</h2>
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
                              <th>Id Categoría</th>
                              <th>Descripción</th>
                              <th>Sueldo</th>
                              <th>Activo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorium"]) {
            // line 209
            echo "                              <tr>
                                  <td><a href=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_show", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "id", array()), "html", null, true);
            echo "</a></td>
                                  <td>";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "descripcion", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "sueldo", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorium"], "activo", array()), "html", null, true);
            echo "</td>
                                  <td><center><a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_edit", array("id" => $this->getAttribute($context["categorium"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">Editar</a></center></td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                          </tbody>
                        </table>
                      </div>
                  </div>
                  <!--termina tabla -->
              </div>
              <!--Termina Lista -->
            </form>
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
        return "categoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 217,  340 => 214,  336 => 213,  332 => 212,  328 => 211,  322 => 210,  319 => 209,  315 => 208,  166 => 62,  158 => 57,  151 => 52,  139 => 46,  133 => 43,  126 => 39,  122 => 38,  118 => 37,  112 => 36,  109 => 35,  105 => 34,  75 => 6,  66 => 5,  55 => 230,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Categorías</h1>
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

      <!--<h1>Categorias list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>Activo</th>
                  <th>Sueldo</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          {% for categorium in categorias %}
              <tr>
                  <td><a href=\"{{ path('categoria_show', { 'id': categorium.id }) }}\">{{ categorium.id }}</a></td>
                  <td>{{ categorium.descripcion }}</td>
                  <td>{{ categorium.activo }}</td>
                  <td>{{ categorium.sueldo }}</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"{{ path('categoria_show', { 'id': categorium.id }) }}\">show</a>
                          </li>
                          <li>
                              <a href=\"{{ path('categoria_edit', { 'id': categorium.id }) }}\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          {% endfor %}
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('categoria_new') }}\">Create a new categorium</a>
          </li>
      </ul>-->

      <form id=\"categoria\">
        <a class=\"btn btn-app\" href=\"{{ path('categoria_new') }}\">
          <i class=\"fa fa-plus-square\"></i> Agregar Categoría
        </a>
          <!--<div class=\"modal fade\" id=\"agregarCategoria\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Categoría</h4>
                </div>
                <div class=\"modal-body\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Categoría <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idCategoria\" name=\"idCategoria\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Descirpción <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"descripcioncatego\" name=\"descripcioncatego\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Sueldo <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"sueldo\" name=\"sueldo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarCategoria\">
            <i class=\"fa fa-edit\"></i> Modificar Categoría
          </a>
            <div class=\"modal fade\" id=\"modificarCategoria\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Categoría</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Categoría <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idCategoria\" name=\"idCategoria\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Descripción <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"descripcioncatego\" name=\"descripcioncatego\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Sueldo <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"sueldo\" name=\"sueldo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                <h2>Lista de Categorías</h2>
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
                              <th>Id Categoría</th>
                              <th>Descripción</th>
                              <th>Sueldo</th>
                              <th>Activo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for categorium in categorias %}
                              <tr>
                                  <td><a href=\"{{ path('categoria_show', { 'id': categorium.id }) }}\">{{ categorium.id }}</a></td>
                                  <td>{{ categorium.descripcion }}</td>
                                  <td>{{ categorium.sueldo }}</td>
                                  <td>{{ categorium.activo }}</td>
                                  <td><center><a href=\"{{ path('categoria_edit', { 'id': categorium.id }) }}\" class=\"btn btn-dark\">Editar</a></center></td>
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
        </div>
        <br />
      </div>
{% endblock %}
<!-- /page content -->
{% endblock %}
", "categoria/index.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\categoria\\index.html.twig");
    }
}
