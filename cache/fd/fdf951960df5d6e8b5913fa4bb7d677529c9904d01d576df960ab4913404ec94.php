<?php

/* auth/signin.twig */
class __TwigTemplate_60786d79e60a28c59aecd52ff4fd3d3e3378a4525f3104433aad916fce8cfbdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/login.twig", "auth/signin.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/login.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"../../index2.html\"><b>Irfan</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class=\"login-box-body\">
    <p class=\"login-box-msg\">Sign in to start your session</p>

    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signin"), "html", null, true);
        echo "\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href=\"#\">I forgot my password</a><br>
    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signup"), "html", null, true);
        echo "\" class=\"text-center\">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
";
    }

    public function getTemplateName()
    {
        return "auth/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 47,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base/login.twig' %}

{% block content %}
<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"../../index2.html\"><b>Irfan</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class=\"login-box-body\">
    <p class=\"login-box-msg\">Sign in to start your session</p>

    <form action=\"{{ path_for('auth.signin') }}\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href=\"#\">I forgot my password</a><br>
    <a href=\"{{ path_for('auth.signup')}}\" class=\"text-center\">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
{% endblock %}", "auth/signin.twig", "D:\\xampp\\htdocs\\edusat-lms-slim\\templates\\auth\\signin.twig");
    }
}
