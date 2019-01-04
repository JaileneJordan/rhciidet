<?php

/* ausencia/show.html.twig */
class __TwigTemplate_59967ed9f65cc3949d31a6675a87dcfe95d050b244a9591a0c8ee4e36503047b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ausencia/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ausencia/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ausencia/show.html.twig"));

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
        echo "    <h1>Ausencium</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Constancia</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "constancia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechainicial</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechaInicial", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechaInicial", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafinal</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechaFinal", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechaFinal", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Totaldias</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "totalDias", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechagobfed</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechagobfed", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechagobfed", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechasep</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechasep", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechasep", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechatec</th>
                <td>";
        // line 38
        if ($this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechatec", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechatec", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechaciidet</th>
                <td>";
        // line 42
        if ($this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechaciidet", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "fechaciidet", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ausencia_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ausencia_edit", array("id" => $this->getAttribute(($context["ausencium"] ?? $this->getContext($context, "ausencium")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
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
        return "ausencia/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  147 => 55,  141 => 52,  135 => 49,  123 => 42,  114 => 38,  105 => 34,  96 => 30,  89 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Ausencium</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ausencium.id }}</td>
            </tr>
            <tr>
                <th>Constancia</th>
                <td>{{ ausencium.constancia }}</td>
            </tr>
            <tr>
                <th>Fechainicial</th>
                <td>{% if ausencium.fechaInicial %}{{ ausencium.fechaInicial|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechafinal</th>
                <td>{% if ausencium.fechaFinal %}{{ ausencium.fechaFinal|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Totaldias</th>
                <td>{{ ausencium.totalDias }}</td>
            </tr>
            <tr>
                <th>Fechagobfed</th>
                <td>{% if ausencium.fechagobfed %}{{ ausencium.fechagobfed|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechasep</th>
                <td>{% if ausencium.fechasep %}{{ ausencium.fechasep|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechatec</th>
                <td>{% if ausencium.fechatec %}{{ ausencium.fechatec|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechaciidet</th>
                <td>{% if ausencium.fechaciidet %}{{ ausencium.fechaciidet|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('ausencia_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('ausencia_edit', { 'id': ausencium.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "ausencia/show.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\ausencia\\show.html.twig");
    }
}
