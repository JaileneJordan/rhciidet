<?php

/* semestre/index.html.twig */
class __TwigTemplate_2caec7adbe82d2292438e62ca6c73ac7a3593920cf652c1f3862c7a370150507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "semestre/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "semestre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "semestre/index.html.twig"));

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
        // line 231
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
  <h1>Semestres</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
        <br />
        <form id=\"semestre\">
        <!--Empiezan Acciones Agregar-->
        <div class=\"x_title\">
          <h2>Acciones</h2>
          <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
          </ul>
          <div class=\"clearfix\"></div>
        </div>

        <!--<h1>Semestres list</h1>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Semestre</th>
                    <th>Year</th>
                    <th>Activo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["semestres"] ?? $this->getContext($context, "semestres")));
        foreach ($context['_seq'] as $context["_key"] => $context["semestre"]) {
            // line 36
            echo "                <tr>
                    <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_show", array("id" => $this->getAttribute($context["semestre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "semestre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "year", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "activo", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_show", array("id" => $this->getAttribute($context["semestre"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_edit", array("id" => $this->getAttribute($context["semestre"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semestre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_new");
        echo "\">Create a new semestre</a>
            </li>
        </ul>-->

        <a class=\"btn btn-app\"  href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_new");
        echo "\">
          <i class=\"fa fa-plus-square\"></i> Agregar Semestre
        </a>
          <!--<div class=\"modal fade\" id=\"agregarSemestre\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Semestre</h4>
                </div>
                <div class=\"modal-body\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Semestre <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idSemestre\" name=\"idSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Semestre <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"Semestre\" name=\"Semestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"yearSemestre\" name=\"yearSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarSemestre\">
            <i class=\"fa fa-edit\"></i> Modificar Semestre
          </a>
            <div class=\"modal fade\" id=\"modificarSemestre\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Semestre</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Semestre <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idSemestre\" name=\"idSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Semestre<span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"Semestre\" name=\"Semestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año<span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"yearSemestre\" name=\"yearSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                <h2>Lista de Semestres</h2>
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
                              <th>Id Semestre</th>
                              <th>Semestre</th>
                              <th>Año</th>
                              <th>Activo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["semestres"] ?? $this->getContext($context, "semestres")));
        foreach ($context['_seq'] as $context["_key"] => $context["semestre"]) {
            // line 210
            echo "                              <tr>
                                  <td><a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_show", array("id" => $this->getAttribute($context["semestre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "id", array()), "html", null, true);
            echo "</a></td>
                                  <td>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "semestre", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "year", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["semestre"], "activo", array()), "html", null, true);
            echo "</td>
                                  <td><center><a href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_edit", array("id" => $this->getAttribute($context["semestre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">Editar</a></center></td>
                              </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semestre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
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
        return "semestre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 218,  341 => 215,  337 => 214,  333 => 213,  329 => 212,  323 => 211,  320 => 210,  316 => 209,  166 => 62,  159 => 58,  152 => 53,  140 => 47,  134 => 44,  127 => 40,  123 => 39,  119 => 38,  113 => 37,  110 => 36,  106 => 35,  75 => 6,  66 => 5,  55 => 231,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Semestres</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
        <br />
        <form id=\"semestre\">
        <!--Empiezan Acciones Agregar-->
        <div class=\"x_title\">
          <h2>Acciones</h2>
          <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
          </ul>
          <div class=\"clearfix\"></div>
        </div>

        <!--<h1>Semestres list</h1>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Semestre</th>
                    <th>Year</th>
                    <th>Activo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for semestre in semestres %}
                <tr>
                    <td><a href=\"{{ path('semestre_show', { 'id': semestre.id }) }}\">{{ semestre.id }}</a></td>
                    <td>{{ semestre.semestre }}</td>
                    <td>{{ semestre.year }}</td>
                    <td>{{ semestre.activo }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('semestre_show', { 'id': semestre.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('semestre_edit', { 'id': semestre.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"{{ path('semestre_new') }}\">Create a new semestre</a>
            </li>
        </ul>-->

        <a class=\"btn btn-app\"  href=\"{{ path('semestre_new') }}\">
          <i class=\"fa fa-plus-square\"></i> Agregar Semestre
        </a>
          <!--<div class=\"modal fade\" id=\"agregarSemestre\" role=\"dialog\">
            <div class=\"modal-dialog\">
              <!- Modal content->
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  <h4 class=\"modal-title\">Agregar Semestre</h4>
                </div>
                <div class=\"modal-body\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Semestre <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"idSemestre\" name=\"idSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Semestre <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"Semestre\" name=\"Semestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
                  </div>
                  </br>
                  </br>
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año <span class=\"required\">*</span>
                    </label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                      <input type=\"text\" id=\"yearSemestre\" name=\"yearSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
          <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarSemestre\">
            <i class=\"fa fa-edit\"></i> Modificar Semestre
          </a>
            <div class=\"modal fade\" id=\"modificarSemestre\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modificar Semestre</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Semestre <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idSemestre\" name=\"idSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                      <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                    </div>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Semestre<span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"Semestre\" name=\"Semestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Año<span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"yearSemestre\" name=\"yearSemestre\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                <h2>Lista de Semestres</h2>
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
                              <th>Id Semestre</th>
                              <th>Semestre</th>
                              <th>Año</th>
                              <th>Activo</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          {% for semestre in semestres %}
                              <tr>
                                  <td><a href=\"{{ path('semestre_show', { 'id': semestre.id }) }}\">{{ semestre.id }}</a></td>
                                  <td>{{ semestre.semestre }}</td>
                                  <td>{{ semestre.year }}</td>
                                  <td>{{ semestre.activo }}</td>
                                  <td><center><a href=\"{{ path('semestre_edit', { 'id': semestre.id }) }}\" class=\"btn btn-dark\">Editar</a></center></td>
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
", "semestre/index.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\semestre\\index.html.twig");
    }
}
