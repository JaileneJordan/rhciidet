<?php

/* admin/loginAdmin.html.twig */
class __TwigTemplate_bb0da8a7fa5308a037edf41b7f8a97cf6f592ae3c4740b44514a12cb9b612814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/loginAdmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/loginAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/loginAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Login Administrador
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

<div id=\"headletra\">
    <spam>Iniciar Sesión como Administrador</spam>
</div>
<div class=\"container\">
    <div class=\"card card-container\">
        <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
        <p id=\"profile-name\" class=\"profile-name-card\"></p>

        ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()));
            echo "
        ";
        }
        // line 20
        echo "        ";
        if ((isset($context["last_username"]) || array_key_exists("last_username", $context))) {
            // line 21
            echo "            ";
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
            echo "
        ";
        }
        // line 23
        echo "

        <form action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-signin\">

            <input type=\"text\" id=\"username\" name=\"_username\"  value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Usuario\" required autofocus/>


            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\" required/>

            ";
        // line 37
        echo "
            <input type=\"hidden\" name=\"_target_path\" value=\"/index_user\" />
            <input class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\" value=\"Iniciar Sesión\" />
        </form>

            <div id=\"remember\" class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"remember-me\"> Recordar
                </label>
            </div>
        <a href=\"#\" class=\"forgot-password\">
            ¿Olvidó la contraseña?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 56
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"bootstrap-css\"/>
<style>
    #headletra{
        float: right;
        text-align: center;
        color:rgb(199, 199, 199);
        font: small-caps 300%/200% serif;
        padding-right: 425px;
    }
    .card-container.card {
        max-width: 350px;
        padding: 40px 40px;
    }
    .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }
    /*
     * Card component
     */
    .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
    .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    /*
     * Form styles
     */
    .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
    }
    .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin #inputEmail,
    .form-signin #inputPassword {
        direction: ltr;
        height: 44px;
        font-size: 16px;
    }
    .form-signin input[type=email],
    .form-signin input[type=password],
    .form-signin input[type=text],
    .form-signin button {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin .form-control:focus {
        border-color: rgb(109, 15, 7);
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(109, 15, 7);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(109, 15, 7);
    }
    .btn.btn-signin {
        /*background-color: #4d90fe; */
        background-color: rgb(109, 15, 7);
        /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
    }
    .btn.btn-signin:hover,
    .btn.btn-signin:active,
    .btn.btn-signin:focus {
        background-color: rgb(109, 15, 7);
    }
    .forgot-password {
        color: rgb(109, 15, 7);
    }
    .forgot-password:hover,
    .forgot-password:active,
    .forgot-password:focus{
        color: rgb(109, 15, 7);
    }

</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 188
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//code.jquery.com/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$( document ).ready(function() {
        // DOM ready

        // Test data
        /*
        * To test the script you should discomment the function
        * testLocalStorageData and refresh the page. The function
        * will load some test data and the loadProfile
        * will do the changes in the UI
        */
        // testLocalStorageData();
        // Load profile if it exits
        loadProfile();
    });

    /**
    * Function that gets the data of the profile in case
    * thar it has already saved in localstorage. Only the
    * UI will be update in case that all data is available
    *
    * A not existing key in localstorage return null
    *
    */
    function getLocalProfile(callback){
        var profileImgSrc      = localStorage.getItem(\"PROFILE_IMG_SRC\");
        var profileName        = localStorage.getItem(\"PROFILE_NAME\");
        var profileReAuthEmail = localStorage.getItem(\"PROFILE_REAUTH_EMAIL\");

        if(profileName !== null
                && profileReAuthEmail !== null
                && profileImgSrc !== null) {
            callback(profileImgSrc, profileName, profileReAuthEmail);
        }
    }

    /**
    * Main function that load the profile if exists
    * in localstorage
    */
    function loadProfile() {
        if(!supportsHTML5Storage()) { return false; }
        // we have to provide to the callback the basic
        // information to set the profile
        getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
            //changes in the UI
            \$(\"#profile-img\").attr(\"src\",profileImgSrc);
            \$(\"#profile-name\").html(profileName);
            \$(\"#reauth-email\").html(profileReAuthEmail);
            \$(\"#inputEmail\").hide();
            \$(\"#remember\").hide();
        });
    }

    /**
    * function that checks if the browser supports HTML5
    * local storage
    *
    * @returns {boolean}
    */
    function supportsHTML5Storage() {
        try {
            return 'localStorage' in window && window['localStorage'] !== null;
        } catch (e) {
            return false;
        }
    }

    /**
    * Test data. This data will be safe by the web app
    * in the first successful login of a auth user.
    * To Test the scripts, delete the localstorage data
    * and comment this call.
    *
    * @returns {boolean}
    */
    function testLocalStorageData() {
        if(!supportsHTML5Storage()) { return false; }
        localStorage.setItem(\"PROFILE_IMG_SRC\", \"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" );
        localStorage.setItem(\"PROFILE_NAME\", \"César Izquierdo Tello\");
        localStorage.setItem(\"PROFILE_REAUTH_EMAIL\", \"oneaccount@gmail.com\");
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/loginAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 189,  306 => 188,  297 => 187,  158 => 57,  153 => 56,  144 => 55,  118 => 37,  110 => 27,  105 => 25,  101 => 23,  95 => 21,  92 => 20,  86 => 18,  84 => 17,  72 => 7,  63 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
{% block title %}
    Login Administrador
{% endblock %}

{% block body %}


<div id=\"headletra\">
    <spam>Iniciar Sesión como Administrador</spam>
</div>
<div class=\"container\">
    <div class=\"card card-container\">
        <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
        <p id=\"profile-name\" class=\"profile-name-card\"></p>

        {% if is_granted ('ROLE_USER') %}
            {{ dump(app.user) }}
        {% endif %}
        {% if last_username is defined %}
            {{ last_username }}
        {% endif %}


        <form action=\"{{ path('login_check') }}\" method=\"post\" class=\"form-signin\">

            <input type=\"text\" id=\"username\" name=\"_username\"  value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"Usuario\" required autofocus/>


            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\" required/>

            {#
            Si quieres controlar la url a la que el usuario
            es redirigido al enviar correctamente el formulario
            <input type=\"hidden\" name=\"_target_path\" value=\"/index\" />
            #}

            <input type=\"hidden\" name=\"_target_path\" value=\"/index_user\" />
            <input class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\" value=\"Iniciar Sesión\" />
        </form>

            <div id=\"remember\" class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"remember-me\"> Recordar
                </label>
            </div>
        <a href=\"#\" class=\"forgot-password\">
            ¿Olvidó la contraseña?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->

{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('../vendors/bootstrap/dist/css/bootstrap.min.css') }}\" type=\"text/css\" />
<link href=\"{{ asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}\" rel=\"stylesheet\" id=\"bootstrap-css\"/>
<style>
    #headletra{
        float: right;
        text-align: center;
        color:rgb(199, 199, 199);
        font: small-caps 300%/200% serif;
        padding-right: 425px;
    }
    .card-container.card {
        max-width: 350px;
        padding: 40px 40px;
    }
    .btn {
        font-weight: 700;
        height: 36px;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
        cursor: default;
    }
    /*
     * Card component
     */
    .card {
        background-color: #F7F7F7;
        /* just in case there no content*/
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        /* shadows and rounded borders */
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }
    .profile-img-card {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    /*
     * Form styles
     */
    .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
    }
    .reauth-email {
        display: block;
        color: #404040;
        line-height: 2;
        margin-bottom: 10px;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin #inputEmail,
    .form-signin #inputPassword {
        direction: ltr;
        height: 44px;
        font-size: 16px;
    }
    .form-signin input[type=email],
    .form-signin input[type=password],
    .form-signin input[type=text],
    .form-signin button {
        width: 100%;
        display: block;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin .form-control:focus {
        border-color: rgb(109, 15, 7);
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(109, 15, 7);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(109, 15, 7);
    }
    .btn.btn-signin {
        /*background-color: #4d90fe; */
        background-color: rgb(109, 15, 7);
        /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
        padding: 0px;
        font-weight: 700;
        font-size: 14px;
        height: 36px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: none;
        -o-transition: all 0.218s;
        -moz-transition: all 0.218s;
        -webkit-transition: all 0.218s;
        transition: all 0.218s;
    }
    .btn.btn-signin:hover,
    .btn.btn-signin:active,
    .btn.btn-signin:focus {
        background-color: rgb(109, 15, 7);
    }
    .forgot-password {
        color: rgb(109, 15, 7);
    }
    .forgot-password:hover,
    .forgot-password:active,
    .forgot-password:focus{
        color: rgb(109, 15, 7);
    }

</style>
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('//code.jquery.com/jquery-1.11.1.min.js') }}\"></script>
<script>
    \$( document ).ready(function() {
        // DOM ready

        // Test data
        /*
        * To test the script you should discomment the function
        * testLocalStorageData and refresh the page. The function
        * will load some test data and the loadProfile
        * will do the changes in the UI
        */
        // testLocalStorageData();
        // Load profile if it exits
        loadProfile();
    });

    /**
    * Function that gets the data of the profile in case
    * thar it has already saved in localstorage. Only the
    * UI will be update in case that all data is available
    *
    * A not existing key in localstorage return null
    *
    */
    function getLocalProfile(callback){
        var profileImgSrc      = localStorage.getItem(\"PROFILE_IMG_SRC\");
        var profileName        = localStorage.getItem(\"PROFILE_NAME\");
        var profileReAuthEmail = localStorage.getItem(\"PROFILE_REAUTH_EMAIL\");

        if(profileName !== null
                && profileReAuthEmail !== null
                && profileImgSrc !== null) {
            callback(profileImgSrc, profileName, profileReAuthEmail);
        }
    }

    /**
    * Main function that load the profile if exists
    * in localstorage
    */
    function loadProfile() {
        if(!supportsHTML5Storage()) { return false; }
        // we have to provide to the callback the basic
        // information to set the profile
        getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
            //changes in the UI
            \$(\"#profile-img\").attr(\"src\",profileImgSrc);
            \$(\"#profile-name\").html(profileName);
            \$(\"#reauth-email\").html(profileReAuthEmail);
            \$(\"#inputEmail\").hide();
            \$(\"#remember\").hide();
        });
    }

    /**
    * function that checks if the browser supports HTML5
    * local storage
    *
    * @returns {boolean}
    */
    function supportsHTML5Storage() {
        try {
            return 'localStorage' in window && window['localStorage'] !== null;
        } catch (e) {
            return false;
        }
    }

    /**
    * Test data. This data will be safe by the web app
    * in the first successful login of a auth user.
    * To Test the scripts, delete the localstorage data
    * and comment this call.
    *
    * @returns {boolean}
    */
    function testLocalStorageData() {
        if(!supportsHTML5Storage()) { return false; }
        localStorage.setItem(\"PROFILE_IMG_SRC\", \"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" );
        localStorage.setItem(\"PROFILE_NAME\", \"César Izquierdo Tello\");
        localStorage.setItem(\"PROFILE_REAUTH_EMAIL\", \"oneaccount@gmail.com\");
    }
</script>
{% endblock %}
", "admin/loginAdmin.html.twig", "C:\\xampp\\htdocs\\rhciidet\\app\\Resources\\views\\admin\\loginAdmin.html.twig");
    }
}
