<?php

/* baseAdminxdep.html.twig */
class __TwigTemplate_c0f9018847c7dcc64a9cb9db581546258d27f542bc33de0f2c2359d71c865ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseAdminxdep.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseAdminxdep.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/public/img/faviconciidet2.ico"), "html", null, true);
        echo "\" type=\"image/ico\" />

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdminxdep");
        echo "\" class=\"site_title\"><img src=\"/public/img/logonuevo50-copia.png\" ></img> <span>Sistema RH</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"/public/img/userinterfaz.png\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Bienvenido/a,</br>
                Nombre del Admin x Dep</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexAdminxdep");
        echo "\"><i class=\"fa fa-home\"></i> Inicio </a>
                  </li>
                  <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perfil");
        echo "\"><i class=\"fa fa-user\"></i>Mi perfil</a></li>
                  <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horario");
        echo "\"><i class=\"fa fa-clock-o\"></i>Mi horario </a></li>
                  <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite");
        echo "\"><i class=\"fa fa-file-o\"></i> Trámites </a></li>
                  <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carga_horario");
        echo "\"><i class=\"fa fa-arrow-up\"></i> Horario de Empleados </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"/public/img/userinterfaz.png\" alt=\"\">Nombre Admin x Dep
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "        <!-- footer content -->
        <footer>
          <div id=\"footer\">
            <center><img src=\"/public/img/logo_footer_sep.png\" />
                <div id=\"footerletra\">
                    <p>Av. Universidad No. 282 Pte., Col. Centro, C.P. 76000, Querétaro, Qro.<br>
                        Conmutador: 01 (442) 216 - 3746 y 47<br>
                        www.ciidet.edu.mx
                    </p>
                </div>
            </center>
        </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>




  </body>

  ";
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 172
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema RH: Módulo Administrador por Departamento ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/public/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- NProgress -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- iCheck -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- JQVMap -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "  <!-- jQuery -->
  <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Bootstrap -->
  <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <!-- FastClick -->
  <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
  <!-- NProgress -->
  <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
  <!-- Chart.js -->
  <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
  <!-- gauge.js -->
  <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap-progressbar -->
  <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
  <!-- iCheck -->
  <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Skycons -->
  <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
  <!-- Flot -->
  <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
  <!-- Flot plugins -->
  <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
  <!-- DateJS -->
  <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
  <!-- JQVMap -->
  <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap-daterangepicker -->
  <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

  <!-- Custom Theme Scripts -->
  <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAdminxdep.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 170,  419 => 167,  415 => 166,  410 => 164,  406 => 163,  402 => 162,  397 => 160,  392 => 158,  388 => 157,  384 => 156,  379 => 154,  375 => 153,  371 => 152,  367 => 151,  363 => 150,  358 => 148,  353 => 146,  348 => 144,  343 => 142,  338 => 140,  333 => 138,  328 => 136,  323 => 134,  318 => 132,  315 => 131,  306 => 130,  289 => 105,  279 => 106,  276 => 105,  267 => 104,  255 => 32,  249 => 29,  244 => 27,  239 => 25,  233 => 22,  228 => 20,  223 => 18,  218 => 16,  212 => 14,  203 => 13,  185 => 11,  174 => 172,  172 => 130,  147 => 107,  145 => 104,  134 => 96,  108 => 73,  104 => 72,  100 => 71,  96 => 70,  91 => 68,  63 => 43,  52 => 34,  50 => 13,  45 => 11,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"{{ asset ('/public/img/faviconciidet2.ico') }}\" type=\"image/ico\" />

    <title>{% block title %}Sistema RH: Módulo Administrador por Departamento {% endblock %}</title>

    {% block stylesheets %}
    <link href=\"{{ asset ('/public/css/base.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Bootstrap -->
    <link href=\"{{ asset ('assets/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Font Awesome -->
    <link href=\"{{ asset ('assets/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- NProgress -->
    <link href=\"{{ asset ('assets/nprogress/nprogress.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- iCheck -->
    <link href=\"{{ asset ('assets/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- bootstrap-progressbar -->
    <link href=\"{{ asset ('assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- JQVMap -->
    <link href=\"{{ asset ('assets/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"{{ asset ('assets/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom Theme Style -->
    <link href=\"{{ asset ('build/css/custom.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    {% endblock %}

  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"{{ path(\"indexAdminxdep\") }}\" class=\"site_title\"><img src=\"/public/img/logonuevo50-copia.png\" ></img> <span>Sistema RH</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"/public/img/userinterfaz.png\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Bienvenido/a,</br>
                Nombre del Admin x Dep</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a href=\"{{ path(\"indexAdminxdep\") }}\"><i class=\"fa fa-home\"></i> Inicio </a>
                  </li>
                  <li><a href=\"{{ path(\"perfil\") }}\"><i class=\"fa fa-user\"></i>Mi perfil</a></li>
                  <li><a href=\"{{ path(\"horario\") }}\"><i class=\"fa fa-clock-o\"></i>Mi horario </a></li>
                  <li><a href=\"{{ path(\"tramite\") }}\"><i class=\"fa fa-file-o\"></i> Trámites </a></li>
                  <li><a href=\"{{ path(\"carga_horario\") }}\"><i class=\"fa fa-arrow-up\"></i> Horario de Empleados </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"/public/img/userinterfaz.png\" alt=\"\">Nombre Admin x Dep
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"{{ path(\"app_homepage\") }}\"><i class=\"fa fa-sign-out pull-right\"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        {% block body %}
        {% block content %}{% endblock %}
        {% endblock %}
        <!-- footer content -->
        <footer>
          <div id=\"footer\">
            <center><img src=\"/public/img/logo_footer_sep.png\" />
                <div id=\"footerletra\">
                    <p>Av. Universidad No. 282 Pte., Col. Centro, C.P. 76000, Querétaro, Qro.<br>
                        Conmutador: 01 (442) 216 - 3746 y 47<br>
                        www.ciidet.edu.mx
                    </p>
                </div>
            </center>
        </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>




  </body>

  {% block javascripts %}
  <!-- jQuery -->
  <script src=\"{{ asset ('/assets/jquery/dist/jquery.min.js') }}\"></script>
  <!-- Bootstrap -->
  <script src=\"{{ asset ('/assets/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
  <!-- FastClick -->
  <script src=\"{{ asset ('/assets/fastclick/lib/fastclick.js') }}\"></script>
  <!-- NProgress -->
  <script src=\"{{ asset ('/assets/nprogress/nprogress.js') }}\"></script>
  <!-- Chart.js -->
  <script src=\"{{ asset ('/assets/Chart.js/dist/Chart.min.js') }}\"></script>
  <!-- gauge.js -->
  <script src=\"{{ asset ('/assets/gauge.js/dist/gauge.min.js') }}\"></script>
  <!-- bootstrap-progressbar -->
  <script src=\"{{ asset ('/assets/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
  <!-- iCheck -->
  <script src=\"{{ asset ('/assets/iCheck/icheck.min.js') }}\"></script>
  <!-- Skycons -->
  <script src=\"{{ asset ('/assets/skycons/skycons.js') }}\"></script>
  <!-- Flot -->
  <script src=\"{{ asset ('/assets/Flot/jquery.flot.js') }}\"></script>
  <script src=\"{{ asset ('/assets/Flot/jquery.flot.pie.js') }}\"></script>
  <script src=\"{{ asset ('/assets/Flot/jquery.flot.time.js') }}\"></script>
  <script src=\"{{ asset ('/assets/Flot/jquery.flot.stack.js') }}\"></script>
  <script src=\"{{ asset ('/assets/Flot/jquery.flot.resize.js') }}\"></script>
  <!-- Flot plugins -->
  <script src=\"{{ asset ('/assets/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
  <script src=\"{{ asset ('/assets/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/flot.curvedlines/curvedLines.js') }}\"></script>
  <!-- DateJS -->
  <script src=\"{{ asset ('/assets/DateJS/build/date.js') }}\"></script>
  <!-- JQVMap -->
  <script src=\"{{ asset ('/assets/jqvmap/dist/jquery.vmap.js') }}\"></script>
  <script src=\"{{ asset ('/assets/jqvmap/dist/maps/jquery.vmap.world.js') }}\"></script>
  <script src=\"{{ asset ('/assets/jqvmap/examples/js/jquery.vmap.sampledata.js') }}\"></script>
  <!-- bootstrap-daterangepicker -->
  <script src=\"{{ asset ('/assets/moment/min/moment.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

  <!-- Custom Theme Scripts -->
  <script src=\"{{ asset ('/build/js/custom.min.js') }}\"></script>
  {% endblock %}
</html>
", "baseAdminxdep.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\baseAdminxdep.html.twig");
    }
}
