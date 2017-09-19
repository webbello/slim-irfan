<?php

/* base/login.twig */
class __TwigTemplate_e87b096d4ac6d082ac1ee7fcac379f9f0090882de22acc1a2989de54aa0dd6c6 extends Twig_Template
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
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.7 -->
  <link rel=\"stylesheet\" href=\"css/bootstrap3/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"css/AdminLTE.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"css/blue.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition login-page\">
";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo " 

<!-- jQuery 3 -->
<script src=\"js/dashboard/jquery.min.js\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"js/dashboard/bootstrap.min.js\"></script>
<!-- iCheck -->
<script src=\"js/icheck.min.js\"></script>
<script>
  \$(function () {
    \$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        echo " 

";
    }

    public function getTemplateName()
    {
        return "base/login.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  54 => 33,  52 => 31,  20 => 1,);
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
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.7 -->
  <link rel=\"stylesheet\" href=\"css/bootstrap3/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"css/AdminLTE.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"css/blue.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
</head>
<body class=\"hold-transition login-page\">
{% block content %} 

{% endblock content %} 

<!-- jQuery 3 -->
<script src=\"js/dashboard/jquery.min.js\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"js/dashboard/bootstrap.min.js\"></script>
<!-- iCheck -->
<script src=\"js/icheck.min.js\"></script>
<script>
  \$(function () {
    \$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
", "base/login.twig", "D:\\xampp\\htdocs\\edusat-lms-slim\\templates\\base\\login.twig");
    }
}
