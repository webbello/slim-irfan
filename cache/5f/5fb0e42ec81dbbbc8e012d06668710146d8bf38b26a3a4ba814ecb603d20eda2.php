<?php

/* partials/main-header.twig */
class __TwigTemplate_9b496fad9d27c40c6656fc12e22c9aa90fdf684c727bbad5fb43496643d8b930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"dashboard\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><img src=\"img/CSSTEAP-logo.jpg\" class=\"img-circle\" width=\"40\" alt=\"User Image\"></span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><img src=\"img/CSSTEAP-logo.jpg\" class=\"img-circle\" width=\"60\" alt=\"User Image\"> <b>CSS</b>TEAP</span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>
      ";
        // line 20
        echo "      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
         ";
        // line 22
        if ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "check", array())) {
            // line 23
            echo "          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"../dist/img/user2-160x160.jpg\" class=\"user-image\">
              <span class=\"hidden-xs\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "user", array()), "name", array()), "html", null, true);
            echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"../dist/img/user2-160x160.jpg\" class=\"img-circle\">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Followers</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Sales</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signout"), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        ";
        } else {
            // line 66
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signin"), "html", null, true);
            echo "\"> Sign In <i class=\"fa fa-sign-in\"></i> </a></li>
        ";
        }
        // line 68
        echo "
        </ul>
      </div>
    </nav>

  </header>";
    }

    public function getTemplateName()
    {
        return "partials/main-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 68,  96 => 66,  87 => 60,  51 => 27,  45 => 23,  43 => 22,  39 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"dashboard\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><img src=\"img/CSSTEAP-logo.jpg\" class=\"img-circle\" width=\"40\" alt=\"User Image\"></span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><img src=\"img/CSSTEAP-logo.jpg\" class=\"img-circle\" width=\"60\" alt=\"User Image\"> <b>CSS</b>TEAP</span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>
      {# <h3 class=\"text-center\">Real Time Weather & Disaster Watch for Sri Lanka</h3>  #}
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
         {% if auth.check %}
          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"../dist/img/user2-160x160.jpg\" class=\"user-image\">
              <span class=\"hidden-xs\">{{ auth.user.name }}</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"../dist/img/user2-160x160.jpg\" class=\"img-circle\">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Followers</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Sales</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"{{ path_for('auth.signout')}}\" class=\"btn btn-default btn-flat\">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        {% else %}
          <li><a href=\"{{ path_for('auth.signin')}}\"> Sign In <i class=\"fa fa-sign-in\"></i> </a></li>
        {% endif %}

        </ul>
      </div>
    </nav>

  </header>", "partials/main-header.twig", "D:\\xampp\\htdocs\\edusat-lms-slim\\templates\\partials\\main-header.twig");
    }
}
