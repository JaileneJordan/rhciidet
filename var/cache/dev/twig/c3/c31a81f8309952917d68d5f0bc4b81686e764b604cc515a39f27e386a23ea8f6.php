<?php

/* escolaridad/show.html.twig */
class __TwigTemplate_ee75d12cd5f266c626c41deae68a167939df850b7fc90e7530df149ba46b5e42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "escolaridad/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "escolaridad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "escolaridad/show.html.twig"));

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
        echo "    <h1>Escolaridad</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombreplantel</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "nombrePlantel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombretitulo</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "nombreTitulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechafin</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "fechaFin", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "fechaFin", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Numcedula</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "numCedula", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observaciones</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "observaciones", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "estado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("escolaridad_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("escolaridad_edit", array("id" => $this->getAttribute(($context["escolaridad"] ?? $this->getContext($context, "escolaridad")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "escolaridad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 47,  117 => 44,  111 => 41,  101 => 34,  94 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Escolaridad</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ escolaridad.id }}</td>
            </tr>
            <tr>
                <th>Nombreplantel</th>
                <td>{{ escolaridad.nombrePlantel }}</td>
            </tr>
            <tr>
                <th>Nombretitulo</th>
                <td>{{ escolaridad.nombreTitulo }}</td>
            </tr>
            <tr>
                <th>Fechafin</th>
                <td>{% if escolaridad.fechaFin %}{{ escolaridad.fechaFin|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Numcedula</th>
                <td>{{ escolaridad.numCedula }}</td>
            </tr>
            <tr>
                <th>Observaciones</th>
                <td>{{ escolaridad.observaciones }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ escolaridad.estado }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('escolaridad_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('escolaridad_edit', { 'id': escolaridad.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "escolaridad/show.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\escolaridad\\show.html.twig");
    }
}
