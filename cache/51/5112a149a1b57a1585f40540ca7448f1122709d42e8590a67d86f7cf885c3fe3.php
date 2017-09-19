<?php

/* index.html.twig */
class __TwigTemplate_bb0a842407d0d2fcb5a2af0dc5644268c05bd5ad57b73d375e174a5103bca3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  ";
        // line 4
        $this->loadTemplate("partials/head.twig", "index.html.twig", 4)->display($context);
        // line 5
        echo "</head>
<body class=\"hold-transition skin-blue fixed sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">

  
  ";
        // line 11
        $this->loadTemplate("partials/main-header.twig", "index.html.twig", 11)->display($context);
        // line 12
        echo "  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
  ";
        // line 16
        $this->loadTemplate("partials/left-sidebar.twig", "index.html.twig", 16)->display($context);
        // line 17
        echo "  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Welcome to weather watch services for CSSTEAP 
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"dashboard\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
      </ol>
    </section>
    <!-- Main content -->

    <section class=\"content\">
        ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        echo " 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  ";
        // line 38
        $this->loadTemplate("partials/footer.twig", "index.html.twig", 38)->display($context);
        // line 39
        echo "
  <!-- Control Sidebar -->
  ";
        // line 41
        $this->loadTemplate("partials/control-sidebar.twig", "index.html.twig", 41)->display($context);
        // line 42
        echo "  <!-- /.control-sidebar -->
  
</div>

<!-- ./wrapper -->
";
        // line 47
        $this->loadTemplate("partials/footer-script.twig", "index.html.twig", 47)->display($context);
        // line 48
        echo "</body>
</html>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        echo " ";
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
        return array (  94 => 33,  88 => 48,  86 => 47,  79 => 42,  77 => 41,  73 => 39,  71 => 38,  63 => 33,  45 => 17,  43 => 16,  37 => 12,  35 => 11,  27 => 5,  25 => 4,  20 => 1,);
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
<html>
<head>
  {% include 'partials/head.twig' %}
</head>
<body class=\"hold-transition skin-blue fixed sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">

  
  {% include 'partials/main-header.twig' %}
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
  {% include 'partials/left-sidebar.twig' %}
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Welcome to weather watch services for CSSTEAP 
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"dashboard\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
      </ol>
    </section>
    <!-- Main content -->

    <section class=\"content\">
        {% block content %} {% endblock content %} 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {% include 'partials/footer.twig' %}

  <!-- Control Sidebar -->
  {% include 'partials/control-sidebar.twig' %}
  <!-- /.control-sidebar -->
  
</div>

<!-- ./wrapper -->
{% include 'partials/footer-script.twig' %}
</body>
</html>
", "index.html.twig", "D:\\xampp\\htdocs\\edusat-lms-slim\\templates\\index.html.twig");
    }
}
