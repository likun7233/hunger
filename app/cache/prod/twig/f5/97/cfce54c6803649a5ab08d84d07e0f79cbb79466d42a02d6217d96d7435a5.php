<?php

/* TopxiaAdminBundle:App:layout.html.twig */
class __TwigTemplate_f597cfce54c6803649a5ab08d84d07e0f79cbb79466d42a02d6217d96d7435a5 extends Twig_Template
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
        $context["nav"] = "app";
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
        // line 22
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 24
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">应用管理</div>
        <div class=\"list-group\">
          <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_app_center");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "center")) {
            echo "active";
        }
        echo "\">应用中心</a>
          <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_app_installed");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "installed")) {
            echo "active";
        }
        echo "\">已安装应用</a>
          <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "upgrades")) {
            echo "active";
        }
        echo "\">检查应用更新</a>
          <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_app_logs");
        echo "\" class=\"list-group-item ";
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        if (($_menu_ == "logs")) {
            echo "active";
        }
        echo "\">应用更新日志</a>
        </div>

      </div>


    ";
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  87 => 15,  78 => 14,  69 => 13,  60 => 12,  54 => 8,  51 => 7,  44 => 24,  40 => 22,  35 => 6,  32 => 5,  27 => 3,  157 => 54,  149 => 51,  146 => 50,  142 => 48,  135 => 46,  131 => 45,  127 => 43,  124 => 42,  117 => 39,  110 => 36,  105 => 35,  102 => 34,  98 => 32,  95 => 31,  90 => 30,  81 => 28,  76 => 25,  71 => 24,  66 => 23,  55 => 14,  49 => 12,  46 => 25,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
