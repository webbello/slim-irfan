<?php

/* partials/footer.twig */
class __TwigTemplate_248e7c77f078555980d3bd2e205b2600cfae747caf4e32f1ccf969b604e506e4 extends Twig_Template
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
        echo "  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href=\"http://iirs.gov.in\">Mobile Apps: Geotagging/Disaster Data Collection
</a>.</strong> All rights
    reserved.
  </footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href=\"http://iirs.gov.in\">Mobile Apps: Geotagging/Disaster Data Collection
</a>.</strong> All rights
    reserved.
  </footer>", "partials/footer.twig", "D:\\xampp\\htdocs\\edusat-lms-slim\\templates\\partials\\footer.twig");
    }
}
