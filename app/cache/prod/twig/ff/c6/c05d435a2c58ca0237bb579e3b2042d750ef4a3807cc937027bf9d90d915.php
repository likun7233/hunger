<?php

/* TopxiaAdminBundle:Default:index.html.twig */
class __TwigTemplate_ffc6c05d435a2c58ca0237bb579e3b2042d750ef4a3807cc937027bf9d90d915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"page-header\">
  <h1>管理中心</h1>
</div>

";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "  
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div id=\"app-upgrade-alert\" class=\"alert alert-info alert-dismissable hide\" data-url=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades_count");
            echo "\" data-upgrade-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
            echo "\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
      </div>
    </div>

 <div class=\"col-md-6\">
  <div class=\"panel panel-default\">
  
    <div class=\"panel-heading clearfix\">
     <span class=\"pull-right\" style=\"display:block\">
         <span id=\"onlineNum\" data-url=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("admin_online_count");
            echo "\">正在载入在线人数...</span>（<span id=\"loginNum\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_login_count");
            echo "\">正在载入登陆人数...</span>）
     </span>
     <h3 class=\"panel-title pull-left\" id=\"operation-analysis-title\" data-url=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("admin_operation_analysis");
            echo "\"> 数据统计

     </h3>
    </div>
    <div id=\"operation-analysis-table\" >
      <div class=\"empty\">正在载入数据，请稍等。</div>
    </div>
  </div>
</div>
";
            // line 46
            echo "    <div class=\"col-md-6\">
       <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\" id=\"system-status-title\" data-url=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("admin_system_status");
            echo "\">系统状态</h3>
        </div>
        <div id=\"system-status\" >
          <div class=\"empty\">正在载入数据，请稍等。</div>
        </div>
      </div>
    </div>
    <div id=\"popular-courses-panel\" class=\"col-md-6\">
       <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <select id=\"popular-courses-type\" class=\"pull-right\" data-url=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("admin_popular_courses");
            echo "\">
              ";
            // line 60
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("dateType"), $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "dateType"), "method"));
            echo "
          </select>
          <h3 class=\"panel-title\">受欢迎课程</h3>
        </div>
        <div id=\"popular-courses-table\">
        \t<div class=\"empty\">正在载入数据，请稍等。</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    ";
            // line 72
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:unsolvedQuestionsBlock"));
            echo "
  </div>

  <div class=\"row\">
    ";
            // line 76
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:latestPaidOrdersBlock"));
            echo "
  </div>

";
        } else {
            // line 80
            echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <h4>欢迎来到";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
            echo "管理后台</h4>
    </div>
  </div>
";
        }
        // line 86
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 86,  139 => 82,  135 => 80,  128 => 76,  121 => 72,  105 => 60,  101 => 59,  88 => 49,  83 => 46,  71 => 27,  64 => 25,  49 => 15,  44 => 12,  42 => 11,  35 => 6,  32 => 5,  27 => 4,  25 => 3,);
    }
}
