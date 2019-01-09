<?php

/* admin/accesoAdmin.html.twig */
class __TwigTemplate_f139480a7d69d83085a4e436922deea5c70721d44a5e4cea5f46235728c1bcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/accesoAdmin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accesoAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accesoAdmin.html.twig"));

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
        // line 71
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
  <h1>Accesos</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <!--Empieza lista-->
              <div class=\"x_content\">
                <br />
                  <!-- Tabla dinamica -->
                  <div class=\"col-md-12 col-sm-12 col-xs-12\">
                         <div class=\"x_panel\">
                           <div class=\"x_title\">
                             <h2>Lista de Accesos</h2>
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
                                  <th>Clave Empleado</th>
                                  <th>Nombre</th>
                                  <th>Apellido Paterno</th>
                                  <th>Apellido Materno</th>
                                  <th>Tipo Usuario</th>
                                  <th>Nombre Usuario</th>
                                  <th>Contraseña</th>
                                </tr>
                              </thead>
                                  <tbody>
                                  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empleados"] ?? $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 47
            echo "                                      <tr>
                                          <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "claveEmpleado", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nombre", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aPaterno", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "aMaterno", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "idAcceso", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nombre", array()), "html", null, true);
            echo "</td>
                                          <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "password", array()), "html", null, true);
            echo "</td>
                                      </tr>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                  </tbody>
                            </table>
                          </div>
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
        return "admin/accesoAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  148 => 54,  144 => 53,  140 => 52,  136 => 51,  132 => 50,  128 => 49,  124 => 48,  121 => 47,  117 => 46,  75 => 6,  66 => 5,  55 => 71,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
  <h1>Accesos</h1>
  <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <ul class=\"nav navbar-right panel_toolbox\">
          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <!--Empieza lista-->
              <div class=\"x_content\">
                <br />
                  <!-- Tabla dinamica -->
                  <div class=\"col-md-12 col-sm-12 col-xs-12\">
                         <div class=\"x_panel\">
                           <div class=\"x_title\">
                             <h2>Lista de Accesos</h2>
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
                                  <th>Clave Empleado</th>
                                  <th>Nombre</th>
                                  <th>Apellido Paterno</th>
                                  <th>Apellido Materno</th>
                                  <th>Tipo Usuario</th>
                                  <th>Nombre Usuario</th>
                                  <th>Contraseña</th>
                                </tr>
                              </thead>
                                  <tbody>
                                  {% for empleado in empleados %}
                                      <tr>
                                          <td>{{ empleado.claveEmpleado }}</td>
                                          <td>{{ empleado.nombre }}</td>
                                          <td>{{ empleado.aPaterno }}</td>
                                          <td>{{ empleado.aMaterno }}</td>
                                          <td>{{ empleado.idAcceso }}</td>
                                          <td>{{ empleado.nombre }}</td>
                                          <td>{{ empleado.password }}</td>
                                      </tr>
                                  {% endfor %}
                                  </tbody>
                            </table>
                          </div>
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
", "admin/accesoAdmin.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\admin\\accesoAdmin.html.twig");
    }
}
