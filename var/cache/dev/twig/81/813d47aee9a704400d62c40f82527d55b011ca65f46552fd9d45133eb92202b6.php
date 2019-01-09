<?php

/* index.html.twig */
class __TwigTemplate_34219ffbbdc8c84fc20a068b14c18ef7a40f08125d1cdf22318cb4d99821d5b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

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
        echo "<div id=\"headletra\">
    <spam>Sistema De Recursos Humanos CIIDET</spam>
</div>
<div id=\"container\">
    <div id=\"wrapper\" align=\"center\">
        <h1>Iniciar Sesión</h1>
        <div id=\"imagen\">
            <img src=\"/public/img/User-Lock.png\" alt=\"\">
            <img src=\"/public/img/User-Lock.png\" alt=\"\">
            <img src=\"/public/img/User.png\" alt=\"\">
        </div>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginAdmin");
        echo "\"><button type=\"button\" class=\"boton_personalizado boton_personalizado:hover\" >Administrador</button></a>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginAdminxDep");
        echo "\"><button type=\"button\" class=\"boton_personalizado boton_personalizado:hover\" >Administrador por Departamento</button></a>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("loginUser");
        echo "\"><button type=\"button\" class=\"boton_personalizado boton_personalizado:hover\" >Usuario</button></a>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "<style>
    body {
        background: rgb(255, 255, 255);
    }
    h1, h2 {
        padding: 3px;
        line-height: 1.2;
        margin: 0.5px;
        color: rgb(109, 15, 7);
    }
    h1 {
        font-size: 36px;
    }
    h2 {
        font-size: 21px;
        margin-bottom: 1em;
    }
    p {
        margin: 0 0 1em 0;
    }
    a:hover {
        text-decoration: none;
    }
    code {
        background: #F5F5F5;
        max-width: 100px;
        padding: 1px 6px;
        word-wrap: break-word;
    }
    #wrapper {
        background: rgb(213,217,220);
        margin-top: 0.5px auto;
        max-width: 800px;
        width: 50%;
        height: 500px;
    }
    #container {
        padding: 0.5%;
        margin-bottom: 5%;
    }
    #imagen {
        margin-right: 5%;
        margin-left: 5%;
        padding-left: 1px;
        right: 100px;
        left: 126px;
    }
    .boton_personalizado{
        text-decoration: none;
        padding: 10px;
        font-weight: 600;
        font-size: 20px;
        color: #ffffff;
        background-color: rgb(109, 15, 7);
        border-radius: 6px;
        border: 2px solid rgb(109, 15, 7);
        width: 180px;
        margin-left: 1%;
        margin-right: 2%;
    }
    .boton_personalizado:hover{
        color: rgb(109, 15, 7);
        background-color: rgb(199, 199, 199);
    }

    @media (min-width: 768px) {
        #wrapper { width: 95%; height: 400px; margin: 2em auto; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 106,  181 => 105,  97 => 27,  88 => 26,  72 => 17,  68 => 16,  64 => 15,  51 => 4,  42 => 3,  11 => 1,);
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
<div id=\"headletra\">
    <spam>Sistema De Recursos Humanos CIIDET</spam>
</div>
<div id=\"container\">
    <div id=\"wrapper\" align=\"center\">
        <h1>Iniciar Sesión</h1>
        <div id=\"imagen\">
            <img src=\"/public/img/User-Lock.png\" alt=\"\">
            <img src=\"/public/img/User-Lock.png\" alt=\"\">
            <img src=\"/public/img/User.png\" alt=\"\">
        </div>
        <a href=\"{{ path(\"loginAdmin\") }}\"><button type=\"button\" class=\"boton_personalizado boton_personalizado:hover\" >Administrador</button></a>
        <a href=\"{{ path( \"loginAdminxDep\") }}\"><button type=\"button\" class=\"boton_personalizado boton_personalizado:hover\" >Administrador por Departamento</button></a>
        <a href=\"{{ path( \"loginUser\") }}\"><button type=\"button\" class=\"boton_personalizado boton_personalizado:hover\" >Usuario</button></a>

    </div>
</div>

{% endblock %}



{% block stylesheets %}
<style>
    body {
        background: rgb(255, 255, 255);
    }
    h1, h2 {
        padding: 3px;
        line-height: 1.2;
        margin: 0.5px;
        color: rgb(109, 15, 7);
    }
    h1 {
        font-size: 36px;
    }
    h2 {
        font-size: 21px;
        margin-bottom: 1em;
    }
    p {
        margin: 0 0 1em 0;
    }
    a:hover {
        text-decoration: none;
    }
    code {
        background: #F5F5F5;
        max-width: 100px;
        padding: 1px 6px;
        word-wrap: break-word;
    }
    #wrapper {
        background: rgb(213,217,220);
        margin-top: 0.5px auto;
        max-width: 800px;
        width: 50%;
        height: 500px;
    }
    #container {
        padding: 0.5%;
        margin-bottom: 5%;
    }
    #imagen {
        margin-right: 5%;
        margin-left: 5%;
        padding-left: 1px;
        right: 100px;
        left: 126px;
    }
    .boton_personalizado{
        text-decoration: none;
        padding: 10px;
        font-weight: 600;
        font-size: 20px;
        color: #ffffff;
        background-color: rgb(109, 15, 7);
        border-radius: 6px;
        border: 2px solid rgb(109, 15, 7);
        width: 180px;
        margin-left: 1%;
        margin-right: 2%;
    }
    .boton_personalizado:hover{
        color: rgb(109, 15, 7);
        background-color: rgb(199, 199, 199);
    }

    @media (min-width: 768px) {
        #wrapper { width: 95%; height: 400px; margin: 2em auto; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}



{% block javascripts %}

{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\index.html.twig");
    }
}
