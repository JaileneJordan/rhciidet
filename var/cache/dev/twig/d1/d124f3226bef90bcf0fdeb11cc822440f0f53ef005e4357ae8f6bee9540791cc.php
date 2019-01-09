<?php

/* departamento/index.html.twig */
class __TwigTemplate_77c6076f21c2cc282bf1604957eb12d48f83032eb529a29c5b5341f423b42436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "departamento/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamento/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "departamento/index.html.twig"));

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
        // line 288
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
  <h1>Departamentos</h1>

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

      <!--<h1>Departamentos list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Jefe</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departamentos"] ?? $this->getContext($context, "departamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 37
            echo "              <tr>
                  <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_show", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "id", array()), "html", null, true);
            echo "</a></td>
                  <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "nombre", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "jefe", array()), "html", null, true);
            echo "</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_show", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\">show</a>
                          </li>
                          <li>
                              <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_edit", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_new");
        echo "\">Create a new departamento</a>
          </li>
      </ul>-->

      <form id=\"departamento\">
        <a class=\"btn btn-app\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_new");
        echo "\">
          <i class=\"fa fa-plus-square\"></i> Agregar Departamento
        </a>
          <!--<div class=\"modal fade\" id=\"agregarDepto\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Departamento</h4>
                </div>
                <div class=\"modal-body\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Departamento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idDepto\" name=\"idDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Departamento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreDepto\" name=\"nombreDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del jefe de Departamento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreJefeDep\" name=\"nombreJefeDep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección al que pertenece <span class=\"required\">*</span>
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
                </div>
                <div class=\"modal-footer\">
                  <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                </div>
              </div>
            </div>
          </div>
          <!-Termina Acciones Agregar-->

          <!--Empiezan Acciones Modificar->
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarDepto\">
            <i class=\"fa fa-edit\"></i> Modificar Departamento
          </a>
            <div class=\"modal fade\" id=\"modificarDepto\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Departamento</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Departamento <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idDepto\" name=\"idDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Departamento <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreDepto\" name=\"nombreDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del jefe de Departamento <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreJefeDep\" name=\"nombreJefeDep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección al que pertenece <span class=\"required\">*</span>
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

                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-Termina Acciones Modificar-->

            <!--Empiezan Acciones Eliminar->
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarDepto\">
              <i class=\"fa fa-close\"></i> Eliminar Departamento
            </a>
              <div class=\"modal fade\" id=\"eliminarDepto\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Eliminar Departamento</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Departamento <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idDepto\" name=\"idDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Departamento <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreDepto\" name=\"nombreDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del jefe de Departamento <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreJefeDep\" name=\"nombreJefeDep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección al que pertenece <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"subdireccionDepto\" name=\"subdireccionDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
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
                <h2>Lista de Departamentos</h2>
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
                              <th>Id Departamento</th>
                              <th>Nombre del Departamento</th>
                              <th>Nombre del jefe de Departamento</th>
                              <th>Subdirección al que pertenece</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departamentos"] ?? $this->getContext($context, "departamentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["departamento"]) {
            // line 267
            echo "                              <tr>
                                  <td><a href=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_show", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "id", array()), "html", null, true);
            echo "</a></td>
                                  <td>";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "nombreDep", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "jefe", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute($context["departamento"], "idSubdireccion", array()), "html", null, true);
            echo "</td>
                                  <td><center><a href=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_edit", array("id" => $this->getAttribute($context["departamento"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">Editar</a></center></td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
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
        return "departamento/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 275,  395 => 272,  391 => 271,  387 => 270,  383 => 269,  377 => 268,  374 => 267,  370 => 266,  164 => 63,  156 => 58,  149 => 53,  137 => 47,  131 => 44,  124 => 40,  120 => 39,  114 => 38,  111 => 37,  107 => 36,  77 => 8,  68 => 7,  57 => 288,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Departamentos</h1>

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

      <!--<h1>Departamentos list</h1>

      <table>
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Jefe</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
          {% for departamento in departamentos %}
              <tr>
                  <td><a href=\"{{ path('departamento_show', { 'id': departamento.id }) }}\">{{ departamento.id }}</a></td>
                  <td>{{ departamento.nombre }}</td>
                  <td>{{ departamento.jefe }}</td>
                  <td>
                      <ul>
                          <li>
                              <a href=\"{{ path('departamento_show', { 'id': departamento.id }) }}\">show</a>
                          </li>
                          <li>
                              <a href=\"{{ path('departamento_edit', { 'id': departamento.id }) }}\">edit</a>
                          </li>
                      </ul>
                  </td>
              </tr>
          {% endfor %}
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('departamento_new') }}\">Create a new departamento</a>
          </li>
      </ul>-->

      <form id=\"departamento\">
        <a class=\"btn btn-app\" href=\"{{ path('departamento_new') }}\">
          <i class=\"fa fa-plus-square\"></i> Agregar Departamento
        </a>
          <!--<div class=\"modal fade\" id=\"agregarDepto\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Departamento</h4>
                </div>
                <div class=\"modal-body\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Departamento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idDepto\" name=\"idDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Departamento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreDepto\" name=\"nombreDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del jefe de Departamento <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"nombreJefeDep\" name=\"nombreJefeDep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección al que pertenece <span class=\"required\">*</span>
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
                </div>
                <div class=\"modal-footer\">
                  <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Agregar</button>
                </div>
              </div>
            </div>
          </div>
          <!-Termina Acciones Agregar-->

          <!--Empiezan Acciones Modificar->
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarDepto\">
            <i class=\"fa fa-edit\"></i> Modificar Departamento
          </a>
            <div class=\"modal fade\" id=\"modificarDepto\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Departamento</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Departamento <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idDepto\" name=\"idDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Departamento <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreDepto\" name=\"nombreDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del jefe de Departamento <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreJefeDep\" name=\"nombreJefeDep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección al que pertenece <span class=\"required\">*</span>
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

                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">Modificar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-Termina Acciones Modificar-->

            <!--Empiezan Acciones Eliminar->
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#eliminarDepto\">
              <i class=\"fa fa-close\"></i> Eliminar Departamento
            </a>
              <div class=\"modal fade\" id=\"eliminarDepto\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Eliminar Departamento</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Departamento <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idDepto\" name=\"idDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Departamento <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreDepto\" name=\"nombreDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del jefe de Departamento <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreJefeDep\" name=\"nombreJefeDep\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                        </div>
                      </div>
                      </br>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-3\" for=\"last-name\">Subdirección al que pertenece <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"subdireccionDepto\" name=\"subdireccionDepto\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
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
                <h2>Lista de Departamentos</h2>
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
                              <th>Id Departamento</th>
                              <th>Nombre del Departamento</th>
                              <th>Nombre del jefe de Departamento</th>
                              <th>Subdirección al que pertenece</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for departamento in departamentos %}
                              <tr>
                                  <td><a href=\"{{ path('departamento_show', { 'id': departamento.id }) }}\">{{ departamento.id }}</a></td>
                                  <td>{{ departamento.nombreDep }}</td>
                                  <td>{{ departamento.jefe }}</td>
                                  <td>{{ departamento.idSubdireccion }}</td>
                                  <td><center><a href=\"{{ path('departamento_edit', { 'id': departamento.id }) }}\" class=\"btn btn-dark\">Editar</a></center></td>
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
", "departamento/index.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\departamento\\index.html.twig");
    }
}
