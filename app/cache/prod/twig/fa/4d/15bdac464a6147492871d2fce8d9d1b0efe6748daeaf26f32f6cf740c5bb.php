<?php

/* TopxiaAdminBundle:System:layout.html.twig */
class __TwigTemplate_fa4d15bdac464a6147492871d2fce8d9d1b0efe6748daeaf26f32f6cf740c5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-2\">
    ";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 26
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 28
        $this->displayBlock('main', $context, $blocks);
        // line 29
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "      <div class=\"list-group\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_setting_site");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "site")) {
            echo "active";
        }
        echo "\">站点设置</a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "operation")) {
            echo "active";
        }
        echo "\">全局设置</a>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_setting_payment");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "paymentGlobal")) {
            echo "active";
        }
        echo "\">支付设置</a>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_setting_auth");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "user_set")) {
            echo "active";
        }
        echo "\">用户相关设置</a>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "client")) {
            echo "active";
        }
        echo "\">移动客户端设置</a>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("admin_setting_ip_blacklist");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "ip_blacklist")) {
            echo "active";
        }
        echo "\">IP黑名单</a>

        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("admin_optimize");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "optimize")) {
            echo "active";
        }
        echo "\">优化和备份</a>   

       ";
        // line 18
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud")) {
            // line 19
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_cloud_bill");
            echo "\" class=\"list-group-item ";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            if (($_menu_ == "bill")) {
                echo "active";
            }
            echo "\">云视频账单</a>
       ";
        }
        // line 21
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "analysis")) {
            echo "active";
        }
        echo "\">数据统计</a>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getUrl("admin_logs");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "logs")) {
            echo "active";
        }
        echo "\">系统日志</a>

      </div>
    ";
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 28,  135 => 21,  124 => 19,  112 => 16,  102 => 14,  93 => 13,  84 => 12,  75 => 11,  66 => 10,  57 => 9,  54 => 8,  51 => 7,  46 => 29,  44 => 28,  38 => 7,  35 => 6,  32 => 5,  27 => 3,  309 => 177,  293 => 165,  280 => 156,  255 => 135,  235 => 119,  221 => 109,  208 => 100,  195 => 91,  182 => 82,  169 => 73,  159 => 71,  155 => 70,  145 => 22,  132 => 60,  122 => 18,  118 => 57,  108 => 56,  94 => 46,  81 => 37,  68 => 28,  52 => 16,  43 => 9,  40 => 26,  33 => 3,  28 => 6,  26 => 5,);
    }
}
