<?php

/* horario/show.html.twig */
class __TwigTemplate_cc257014a7641969af1b4a3c87cfa5b51874328abb3d6b88bccd8f86e3752ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horario/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horario/show.html.twig"));

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
        echo "    <h1>Horario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lunm</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "lunm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "lunm", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Marm</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "marm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "marm", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Mierm</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "mierm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "mierm", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Juem</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "juem", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "juem", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Vierm</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "vierm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "vierm", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lunv</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "lunv", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "lunv", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Marv</th>
                <td>";
        // line 38
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "marv", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "marv", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Mierv</th>
                <td>";
        // line 42
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "mierv", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "mierv", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Juev</th>
                <td>";
        // line 46
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "juev", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "juev", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Vierv</th>
                <td>";
        // line 50
        if ($this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "vierv", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "vierv", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario_edit", array("id" => $this->getAttribute(($context["horario"] ?? $this->getContext($context, "horario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
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
        return "horario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 65,  169 => 63,  163 => 60,  157 => 57,  145 => 50,  136 => 46,  127 => 42,  118 => 38,  109 => 34,  100 => 30,  91 => 26,  82 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Horario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ horario.id }}</td>
            </tr>
            <tr>
                <th>Lunm</th>
                <td>{% if horario.lunm %}{{ horario.lunm|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Marm</th>
                <td>{% if horario.marm %}{{ horario.marm|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Mierm</th>
                <td>{% if horario.mierm %}{{ horario.mierm|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Juem</th>
                <td>{% if horario.juem %}{{ horario.juem|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Vierm</th>
                <td>{% if horario.vierm %}{{ horario.vierm|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Lunv</th>
                <td>{% if horario.lunv %}{{ horario.lunv|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Marv</th>
                <td>{% if horario.marv %}{{ horario.marv|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Mierv</th>
                <td>{% if horario.mierv %}{{ horario.mierv|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Juev</th>
                <td>{% if horario.juev %}{{ horario.juev|date('H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Vierv</th>
                <td>{% if horario.vierv %}{{ horario.vierv|date('H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('horario_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('horario_edit', { 'id': horario.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "horario/show.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\horario\\show.html.twig");
    }
}
