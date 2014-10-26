<?php

/* TopxiaWebBundle:MyOrder:layout.html.twig */
class __TwigTemplate_dfea20fed1f90c227c59ff68b11528222167b193cf8b105ad62bcac12afd98a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:My:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-orders";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的订单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的订单</div>
  <div class=\"panel-body\">

    ";
        // line 12
        if (isset($context["main_nav"])) { $_main_nav_ = $context["main_nav"]; } else { $_main_nav_ = null; }
        $context["main_nav"] = ((array_key_exists("main_nav", $context)) ? (_twig_default_filter($_main_nav_, null)) : (null));
        // line 13
        echo "    <ul class=\"nav nav-pills nav-pills-mini clearfix\">
      <li";
        // line 14
        if (isset($context["main_nav"])) { $_main_nav_ = $context["main_nav"]; } else { $_main_nav_ = null; }
        if (($_main_nav_ == "orders")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders");
        echo "\">全部订单</a></li>
      <li";
        // line 15
        if (isset($context["main_nav"])) { $_main_nav_ = $context["main_nav"]; } else { $_main_nav_ = null; }
        if (($_main_nav_ == "refunds")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_refunds");
        echo "\">退款记录</a></li>
    </ul>

    ";
        // line 18
        $this->displayBlock('main_body', $context, $blocks);
        // line 19
        echo "  </div>
</div>
";
    }

    // line 18
    public function block_main_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  76 => 19,  74 => 18,  63 => 15,  54 => 14,  48 => 12,  42 => 8,  39 => 7,  139 => 46,  130 => 42,  122 => 38,  115 => 36,  112 => 35,  106 => 33,  100 => 31,  95 => 30,  88 => 27,  85 => 26,  78 => 24,  68 => 22,  58 => 20,  55 => 19,  51 => 13,  45 => 16,  35 => 8,  32 => 3,  27 => 5,  25 => 3,);
    }
}
