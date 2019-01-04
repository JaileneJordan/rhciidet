<?php

/* horario/index.html.twig */
class __TwigTemplate_23169e48b44a0c0f993e95df96d10289e2479158b5eb47271bb5ac83e31e2666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/index.html.twig"));

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
        echo "    <h1>Horarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lunm</th>
                <th>Marm</th>
                <th>Mierm</th>
                <th>Juem</th>
                <th>Vierm</th>
                <th>Lunv</th>
                <th>Marv</th>
                <th>Mierv</th>
                <th>Juev</th>
                <th>Vierv</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horarios"] ?? $this->getContext($context, "horarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_show", array("id" => $this->getAttribute($context["horario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["horario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            if ($this->getAttribute($context["horario"], "lunm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "lunm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["horario"], "marm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "marm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["horario"], "mierm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "mierm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["horario"], "juem", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "juem", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["horario"], "vierm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "vierm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["horario"], "lunv", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "lunv", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["horario"], "marv", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "marv", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["horario"], "mierv", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "mierv", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["horario"], "juev", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "juev", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["horario"], "vierv", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "vierv", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_show", array("id" => $this->getAttribute($context["horario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_edit", array("id" => $this->getAttribute($context["horario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_new");
        echo "\">Create a new horario</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "horario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 54,  165 => 49,  153 => 43,  147 => 40,  138 => 36,  132 => 35,  126 => 34,  120 => 33,  114 => 32,  108 => 31,  102 => 30,  96 => 29,  90 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Horarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lunm</th>
                <th>Marm</th>
                <th>Mierm</th>
                <th>Juem</th>
                <th>Vierm</th>
                <th>Lunv</th>
                <th>Marv</th>
                <th>Mierv</th>
                <th>Juev</th>
                <th>Vierv</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for horario in horarios %}
            <tr>
                <td><a href=\"{{ path('horario_show', { 'id': horario.id }) }}\">{{ horario.id }}</a></td>
                <td>{% if horario.lunm %}{{ horario.lunm|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.marm %}{{ horario.marm|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.mierm %}{{ horario.mierm|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.juem %}{{ horario.juem|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.vierm %}{{ horario.vierm|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.lunv %}{{ horario.lunv|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.marv %}{{ horario.marv|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.mierv %}{{ horario.mierv|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.juev %}{{ horario.juev|date('H:i:s') }}{% endif %}</td>
                <td>{% if horario.vierv %}{{ horario.vierv|date('H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('horario_show', { 'id': horario.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('horario_edit', { 'id': horario.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('horario_new') }}\">Create a new horario</a>
        </li>
    </ul>
{% endblock %}
", "horario/index.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\horario\\index.html.twig");
    }
}
