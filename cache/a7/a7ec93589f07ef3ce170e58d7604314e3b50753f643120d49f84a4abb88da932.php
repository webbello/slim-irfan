<?php

/* auth/signup.twig */
class __TwigTemplate_e11b51504e803bee9edeb079c7e8c5b1b16aa5ca9053ff922a4ac093d749ff50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/login.twig", "auth/signup.twig", 1);
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
        echo "<div class=\"register-box\">
  <div class=\"register-logo\">
    <a href=\"../../index2.html\"><b>Irfan</b>LTE</a>
  </div>

  <div class=\"register-box-body\">
    <p class=\"login-box-msg\">Register a new membership</p>

    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signup"), "html", null, true);
        echo "\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" name=\"fullName\" class=\"form-control\" placeholder=\"Full name\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"retypePassword\" class=\"form-control\" placeholder=\"Retype password\">
        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\" name=\"agree\"> I agree to the <a href=\"#\">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
        Google+</a>
    </div>

    <a href=\"login.html\" class=\"text-center\">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
";
    }

    public function getTemplateName()
    {
        return "auth/signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"register-box\">
  <div class=\"register-logo\">
    <a href=\"../../index2.html\"><b>Irfan</b>LTE</a>
  </div>

  <div class=\"register-box-body\">
    <p class=\"login-box-msg\">Register a new membership</p>

    <form action=\"{{ path_for('auth.signup') }}\" method=\"post\">
      <div class=\"form-group has-feedback\">
        <input type=\"text\" name=\"fullName\" class=\"form-control\" placeholder=\"Full name\">
        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\">
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
      </div>
      <div class=\"form-group has-feedback\">
        <input type=\"password\" name=\"retypePassword\" class=\"form-control\" placeholder=\"Retype password\">
        <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-8\">
          <div class=\"checkbox icheck\">
            <label>
              <input type=\"checkbox\" name=\"agree\"> I agree to the <a href=\"#\">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
          <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class=\"social-auth-links text-center\">
      <p>- OR -</p>
      <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using
        Facebook</a>
      <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using
        Google+</a>
    </div>

    <a href=\"login.html\" class=\"text-center\">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
{% endblock %}", "auth/signup.twig", "D:\\xampp\\htdocs\\edusat-lms-slim\\templates\\auth\\signup.twig");
    }
}
