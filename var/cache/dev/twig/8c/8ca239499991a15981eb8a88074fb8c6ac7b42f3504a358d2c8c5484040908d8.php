<?php

/* statusedu/index.html.twig */
class __TwigTemplate_27a308733ab8c113506a5a49b85784646af7e2f69bbe6d87734fc8b997e94632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "statusedu/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "statusedu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "statusedu/index.html.twig"));

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
        // line 209
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
  <h1>Status Educativo</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
        <br />
        <!--Empiezan Acciones Agregar-->
        <div class=\"x_title\">
          <h2>Acciones</h2>
          <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
          </ul>
          <div class=\"clearfix\"></div>
        </div>

        <!--<h1>Statusedus list</h1>

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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusEdus"] ?? $this->getContext($context, "statusEdus")));
        foreach ($context['_seq'] as $context["_key"] => $context["statusEdu"]) {
            // line 34
            echo "                <tr>
                    <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_show", array("id" => $this->getAttribute($context["statusEdu"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["statusEdu"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["statusEdu"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["statusEdu"], "activo", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_show", array("id" => $this->getAttribute($context["statusEdu"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_edit", array("id" => $this->getAttribute($context["statusEdu"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statusEdu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_new");
        echo "\">Create a new statusEdu</a>
            </li>
        </ul>-->

        <form id=\"statusEdu\">
          <a class=\"btn btn-app\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_new");
        echo "\">
            <i class=\"fa fa-plus-square\"></i> Agregar Status Edu.
          </a>
            <!--<div class=\"modal fade\" id=\"agregarStatusEdu\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Agregar Status Edu.</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Status Edu. <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idStatusEdu\" name=\"idStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Status Edu. <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreStatusEdu\" name=\"nombreStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarStatusEdu\">
              <i class=\"fa fa-edit\"></i> Modificar Status Edu.
            </a>
              <div class=\"modal fade\" id=\"modificarStatusEdu\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Modificar Status Edu.</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Status Edu. <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idStatusEdu\" name=\"idStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Status Edu. <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreStatusEdu\" name=\"nombreStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                  <h2>Lista de Status Educativo</h2>
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
                                <th>Id Satus Educativo</th>
                                <th>Nombre del Status Educativo</th>
                                <th>Activo</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                            ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusEdus"] ?? $this->getContext($context, "statusEdus")));
        foreach ($context['_seq'] as $context["_key"] => $context["statusEdu"]) {
            // line 189
            echo "                                <tr>
                                    <td><a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_show", array("id" => $this->getAttribute($context["statusEdu"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["statusEdu"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["statusEdu"], "nombreSe", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["statusEdu"], "activo", array()), "html", null, true);
            echo "</td>
                                    <td><center><a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_edit", array("id" => $this->getAttribute($context["statusEdu"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark\">Editar</a></center></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statusEdu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                            </tbody>
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
        return "statusedu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 196,  313 => 193,  309 => 192,  305 => 191,  299 => 190,  296 => 189,  292 => 188,  161 => 60,  153 => 55,  146 => 50,  134 => 44,  128 => 41,  121 => 37,  117 => 36,  111 => 35,  108 => 34,  104 => 33,  75 => 6,  66 => 5,  55 => 209,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Status Educativo</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
        <br />
        <!--Empiezan Acciones Agregar-->
        <div class=\"x_title\">
          <h2>Acciones</h2>
          <ul class=\"nav navbar-right panel_toolbox\">
            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
            </li>
          </ul>
          <div class=\"clearfix\"></div>
        </div>

        <!--<h1>Statusedus list</h1>

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
            {% for statusEdu in statusEdus %}
                <tr>
                    <td><a href=\"{{ path('statusedu_show', { 'id': statusEdu.id }) }}\">{{ statusEdu.id }}</a></td>
                    <td>{{ statusEdu.nombre }}</td>
                    <td>{{ statusEdu.activo }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('statusedu_show', { 'id': statusEdu.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('statusedu_edit', { 'id': statusEdu.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"{{ path('statusedu_new') }}\">Create a new statusEdu</a>
            </li>
        </ul>-->

        <form id=\"statusEdu\">
          <a class=\"btn btn-app\" href=\"{{ path('statusedu_new') }}\">
            <i class=\"fa fa-plus-square\"></i> Agregar Status Edu.
          </a>
            <!--<div class=\"modal fade\" id=\"agregarStatusEdu\" role=\"dialog\">
              <div class=\"modal-dialog\">
                <!- Modal content->
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Agregar Status Edu.</h4>
                  </div>
                  <div class=\"modal-body\">
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Status Edu. <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"idStatusEdu\" name=\"idStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" disabled=\"disabled\">
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class=\"form-group\">
                      <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Status Edu. <span class=\"required\">*</span>
                      </label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombreStatusEdu\" name=\"nombreStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
            <a class=\"btn btn-app\" data-toggle=\"modal\" data-target=\"#modificarStatusEdu\">
              <i class=\"fa fa-edit\"></i> Modificar Status Edu.
            </a>
              <div class=\"modal fade\" id=\"modificarStatusEdu\" role=\"dialog\">
                <div class=\"modal-dialog\">
                  <!- Modal content->
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      <h4 class=\"modal-title\">Modificar Status Edu.</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Id Status Edu. <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"idStatusEdu\" name=\"idStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                        </div>
                        <button type=\"button\" class=\"btn btn-dark\">Buscar</button>
                      </div>
                      </br>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nombre del Status Edu. <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"nombreStatusEdu\" name=\"nombreStatusEdu\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                  <h2>Lista de Status Educativo</h2>
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
                                <th>Id Satus Educativo</th>
                                <th>Nombre del Status Educativo</th>
                                <th>Activo</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                            {% for statusEdu in statusEdus %}
                                <tr>
                                    <td><a href=\"{{ path('statusedu_show', { 'id': statusEdu.id }) }}\">{{ statusEdu.id }}</a></td>
                                    <td>{{ statusEdu.nombreSe }}</td>
                                    <td>{{ statusEdu.activo }}</td>
                                    <td><center><a href=\"{{ path('statusedu_edit', { 'id': statusEdu.id }) }}\" class=\"btn btn-dark\">Editar</a></center></td>
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
", "statusedu/index.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\statusedu\\index.html.twig");
    }
}
