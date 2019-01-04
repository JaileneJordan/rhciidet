<?php

/* baseAdmin.html.twig */
class __TwigTemplate_7475eea2b39bcb1751c765b607dc9bef63d4eb291231255e1307621866a82588 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

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
        // line 39
        echo "
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
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
                Nombre del Admin</span>
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
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><i class=\"fa fa-home\"></i> Inicio </a>
                  </li>
                  <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("perfil_admin");
        echo "\"><i class=\"fa fa-user\"></i>Mi perfil</a></li>
                  <li><a><i class=\"fa fa-check-square\"></i> Control de: <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("empleado_index");
        echo "\">Empleados</a></li>
                      <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("escolaridad_index");
        echo "\">Escolaridad</a></li>
                      <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceso");
        echo "\">Accesos</a></li>
                      <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ausencia_index");
        echo "\">Ausencias</a></li>
                      <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("antiguedad");
        echo "\">Antigüedad</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-university\"></i> Áreas <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subdireccion_index");
        echo "\">Subdirección</a></li>
                      <li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departamento_index");
        echo "\">Departamentos</a></li>
                    </ul>
                  </li>
                  <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licencia_index");
        echo "\"><i class=\"fa fa-bookmark\"></i>Licencias</a></li>
                  <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("puesto_index");
        echo "\"><i class=\"fa fa-briefcase\"></i>Puestos </a></li>
                  <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semestre_index");
        echo "\"><i class=\"fa fa-calendar\"></i> Semestres </a></li>
                  <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categoria_index");
        echo "\"><i class=\"fa fa-sitemap\"></i> Categorías </a></li>
                  <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("docsoficiales_index");
        echo "\"><i class=\"fa fa-folder-o\"></i> Documentos Oficiales </a></li>
                  <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("niveledu_index");
        echo "\"><i class=\"fa fa-mortar-board\"></i> Nivel Educativo </a></li>
                  <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statusedu_index");
        echo "\"><i class=\"fa fa-line-chart\"></i> Status Educativo </a></li>
                  <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tramite_index");
        echo "\"><i class=\"fa fa-file-o\"></i> Trámites </a></li>
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
                    <img src=\"/public/img/userinterfaz.png\" alt=\"\">Nombre Admin
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"";
        // line 121
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
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 132
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
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 213
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

        echo "Sistema RH: Módulo Administrador ";
        
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
    <!-- Datatables -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- JQVMap -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 130
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "  <!-- jQuery -->
  <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Bootstrap -->
  <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <!-- FastClick -->
  <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
  <!-- NProgress -->
  <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
  <!-- Chart.js -->
  <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
  <!-- gauge.js -->
  <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap-progressbar -->
  <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
  <!-- iCheck -->
  <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Skycons -->
  <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
  <!-- Flot -->
  <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
  <!-- Flot plugins -->
  <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
  <!-- DateJS -->
  <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
  <!-- JQVMap -->
  <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap-daterangepicker -->
  <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
  <!-- Datatables -->
  <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

  <!-- Custom Theme Scripts -->
  <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 211,  556 => 208,  552 => 207,  548 => 206,  544 => 205,  540 => 204,  536 => 203,  532 => 202,  528 => 201,  524 => 200,  520 => 199,  516 => 198,  512 => 197,  508 => 196,  504 => 195,  500 => 194,  495 => 192,  491 => 191,  486 => 189,  482 => 188,  478 => 187,  473 => 185,  468 => 183,  464 => 182,  460 => 181,  455 => 179,  451 => 178,  447 => 177,  443 => 176,  439 => 175,  434 => 173,  429 => 171,  424 => 169,  419 => 167,  414 => 165,  409 => 163,  404 => 161,  399 => 159,  394 => 157,  391 => 156,  382 => 155,  365 => 130,  355 => 131,  352 => 130,  343 => 129,  331 => 37,  325 => 34,  320 => 32,  315 => 30,  310 => 28,  306 => 27,  302 => 26,  298 => 25,  294 => 24,  289 => 22,  284 => 20,  279 => 18,  274 => 16,  268 => 14,  259 => 13,  241 => 11,  230 => 213,  228 => 155,  203 => 132,  201 => 129,  190 => 121,  164 => 98,  160 => 97,  156 => 96,  152 => 95,  148 => 94,  144 => 93,  140 => 92,  136 => 91,  130 => 88,  126 => 87,  118 => 82,  114 => 81,  110 => 80,  106 => 79,  102 => 78,  96 => 75,  91 => 73,  63 => 48,  52 => 39,  50 => 13,  45 => 11,  40 => 9,  30 => 1,);
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

    <title>{% block title %}Sistema RH: Módulo Administrador {% endblock %}</title>

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
    <!-- Datatables -->
    <link href=\"{{ asset ('assets/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\" rel=\"stylesheet\">
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
              <a href=\"{{ path(\"index\") }}\" class=\"site_title\"><img src=\"/public/img/logonuevo50-copia.png\" ></img> <span>Sistema RH</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"/public/img/userinterfaz.png\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Bienvenido/a,</br>
                Nombre del Admin</span>
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
                  <li><a href=\"{{ path(\"index\") }}\"><i class=\"fa fa-home\"></i> Inicio </a>
                  </li>
                  <li><a href=\"{{ path(\"perfil_admin\") }}\"><i class=\"fa fa-user\"></i>Mi perfil</a></li>
                  <li><a><i class=\"fa fa-check-square\"></i> Control de: <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path(\"empleado_index\") }}\">Empleados</a></li>
                      <li><a href=\"{{ path(\"escolaridad_index\") }}\">Escolaridad</a></li>
                      <li><a href=\"{{ path(\"acceso\") }}\">Accesos</a></li>
                      <li><a href=\"{{ path(\"ausencia_index\") }}\">Ausencias</a></li>
                      <li><a href=\"{{ path(\"antiguedad\") }}\">Antigüedad</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-university\"></i> Áreas <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path(\"subdireccion_index\") }}\">Subdirección</a></li>
                      <li><a href=\"{{ path(\"departamento_index\") }}\">Departamentos</a></li>
                    </ul>
                  </li>
                  <li><a href=\"{{ path(\"licencia_index\") }}\"><i class=\"fa fa-bookmark\"></i>Licencias</a></li>
                  <li><a href=\"{{ path(\"puesto_index\") }}\"><i class=\"fa fa-briefcase\"></i>Puestos </a></li>
                  <li><a href=\"{{ path(\"semestre_index\") }}\"><i class=\"fa fa-calendar\"></i> Semestres </a></li>
                  <li><a href=\"{{ path(\"categoria_index\") }}\"><i class=\"fa fa-sitemap\"></i> Categorías </a></li>
                  <li><a href=\"{{ path(\"docsoficiales_index\") }}\"><i class=\"fa fa-folder-o\"></i> Documentos Oficiales </a></li>
                  <li><a href=\"{{ path(\"niveledu_index\") }}\"><i class=\"fa fa-mortar-board\"></i> Nivel Educativo </a></li>
                  <li><a href=\"{{ path(\"statusedu_index\") }}\"><i class=\"fa fa-line-chart\"></i> Status Educativo </a></li>
                  <li><a href=\"{{ path(\"tramite_index\") }}\"><i class=\"fa fa-file-o\"></i> Trámites </a></li>
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
                    <img src=\"/public/img/userinterfaz.png\" alt=\"\">Nombre Admin
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
  <!-- Datatables -->
  <script src=\"{{ asset ('/assets/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
  <script src=\"{{ asset ('/assets/datatables.net-scroller/js/dataTables.scroller.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/jszip/dist/jszip.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/pdfmake/build/pdfmake.min.js') }}\"></script>
  <script src=\"{{ asset ('/assets/pdfmake/build/vfs_fonts.js') }}\"></script>

  <!-- Custom Theme Scripts -->
  <script src=\"{{ asset ('/build/js/custom.min.js') }}\"></script>
  {% endblock %}
</html>
", "baseAdmin.html.twig", "C:\\xampp\\htdocs\\rhciidet_success\\app\\Resources\\views\\baseAdmin.html.twig");
    }
}
