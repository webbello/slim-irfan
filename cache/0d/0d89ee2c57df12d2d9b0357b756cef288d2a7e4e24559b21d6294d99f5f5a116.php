<?php

/* partials/left-sidebar.twig */
class __TwigTemplate_028d3d3cfa716794388ce9d99c32867ce26fa2995496c7c52c531f85ceab252b extends Twig_Template
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
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
<!--       <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>Mohammed Irfan</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
          <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\" data-widget=\"tree\">
        <li class=\"header\">Meteorological Forecast</li>
        <li <?php echo (\$data['url'] == '/dashboard') ? 'class=active' : ''; ?>>
          <a href=\"dashboard\">
            <i class=\"fa fa-dashboard\"></i> <span>Home</span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-dashboard\"></i> <span>Rainfall</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"rainfall\" value=\"6hr\" id=\"checkbox-6hr-rainfall\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"rainfall\" value=\"12hr\" id=\"checkbox-12hr-rainfall\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"rainfall\" value=\"24hr\" id=\"checkbox-24hr-rainfall\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-files-o\"></i>
            <span>Surface Temperature</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"surface-temperature\" value=\"6hr\" id=\"checkbox-6hr-surface-temperature\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-temperature\" value=\"12hr\" id=\"checkbox-12hr-surface-temperature\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-temperature\" value=\"24hr\" id=\"checkbox-24hr-surface-temperature\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-th\"></i> <span>Relative Humidity</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"relative-humidity\" value=\"6hr\" id=\"checkbox-6hr-relative-humidity\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"relative-humidity\" value=\"12hr\" id=\"checkbox-12hr-relative-humidity\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"relative-humidity\" value=\"24hr\" id=\"checkbox-24hr-relative-humidity\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i>
            <span>Surface Wind Speed</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"surface-wind-speed\" value=\"6hr\" id=\"checkbox-6hr-surface-wind-speed\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-speed\" value=\"12hr\" id=\"checkbox-12hr-surface-wind-speed\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-speed\" value=\"24hr\" id=\"checkbox-24hr-surface-wind-speed\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-laptop\"></i>
            <span>Surface Wind Direction</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"surface-wind-direction\" value=\"6hr\" id=\"checkbox-6hr-surface-wind-direction\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-direction\" value=\"12hr\" id=\"checkbox-12hr-surface-wind-direction\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-direction\" value=\"24hr\" id=\"checkbox-24hr-surface-wind-direction\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Sea State</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\"><input type=\"checkbox\"> Wave Height</a></li>
            <li><a href=\"#\"><input type=\"checkbox\"> Sea Surface Current</a></li>
            <li><a href=\"#\"><input type=\"checkbox\"></i> Sea Surface Temp</a></li>
          </ul>
        </li>
        <li <?php echo (\$data['url'] == '/gis') ? 'class=active' : ''; ?> >
          <a href=\"gis\">
            <i class=\"fa fa-calendar\"></i> <span>GIS Viewer</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>";
    }

    public function getTemplateName()
    {
        return "partials/left-sidebar.twig";
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
        return new Twig_Source("<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
<!--       <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>Mohammed Irfan</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
          <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\" data-widget=\"tree\">
        <li class=\"header\">Meteorological Forecast</li>
        <li <?php echo (\$data['url'] == '/dashboard') ? 'class=active' : ''; ?>>
          <a href=\"dashboard\">
            <i class=\"fa fa-dashboard\"></i> <span>Home</span>
          </a>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-dashboard\"></i> <span>Rainfall</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"rainfall\" value=\"6hr\" id=\"checkbox-6hr-rainfall\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"rainfall\" value=\"12hr\" id=\"checkbox-12hr-rainfall\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"rainfall\" value=\"24hr\" id=\"checkbox-24hr-rainfall\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-files-o\"></i>
            <span>Surface Temperature</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"surface-temperature\" value=\"6hr\" id=\"checkbox-6hr-surface-temperature\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-temperature\" value=\"12hr\" id=\"checkbox-12hr-surface-temperature\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-temperature\" value=\"24hr\" id=\"checkbox-24hr-surface-temperature\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-th\"></i> <span>Relative Humidity</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"relative-humidity\" value=\"6hr\" id=\"checkbox-6hr-relative-humidity\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"relative-humidity\" value=\"12hr\" id=\"checkbox-12hr-relative-humidity\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"relative-humidity\" value=\"24hr\" id=\"checkbox-24hr-relative-humidity\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-pie-chart\"></i>
            <span>Surface Wind Speed</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"surface-wind-speed\" value=\"6hr\" id=\"checkbox-6hr-surface-wind-speed\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-speed\" value=\"12hr\" id=\"checkbox-12hr-surface-wind-speed\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-speed\" value=\"24hr\" id=\"checkbox-24hr-surface-wind-speed\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-laptop\"></i>
            <span>Surface Wind Direction</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a><input type=\"radio\" name=\"surface-wind-direction\" value=\"6hr\" id=\"checkbox-6hr-surface-wind-direction\"> 06 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-direction\" value=\"12hr\" id=\"checkbox-12hr-surface-wind-direction\"> 12 hr</a></li>
            <li><a><input type=\"radio\" name=\"surface-wind-direction\" value=\"24hr\" id=\"checkbox-24hr-surface-wind-direction\"> 24 hr</a></li>
          </ul>
        </li>
        <li class=\"treeview\">
          <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Sea State</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"#\"><input type=\"checkbox\"> Wave Height</a></li>
            <li><a href=\"#\"><input type=\"checkbox\"> Sea Surface Current</a></li>
            <li><a href=\"#\"><input type=\"checkbox\"></i> Sea Surface Temp</a></li>
          </ul>
        </li>
        <li <?php echo (\$data['url'] == '/gis') ? 'class=active' : ''; ?> >
          <a href=\"gis\">
            <i class=\"fa fa-calendar\"></i> <span>GIS Viewer</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>", "partials/left-sidebar.twig", "D:\\xampp\\htdocs\\edusat-lms-slim\\templates\\partials\\left-sidebar.twig");
    }
}
