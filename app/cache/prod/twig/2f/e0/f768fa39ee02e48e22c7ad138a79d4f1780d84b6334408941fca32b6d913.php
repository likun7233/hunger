<?php

/* TopxiaWebBundle:MyCourse:layout.html.twig */
class __TwigTemplate_2fe0f768fa39ee02e48e22c7ad138a79d4f1780d84b6334408941fca32b6d913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:My:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-learning";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的学习 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  65 => 16,  58 => 14,  52 => 13,  48 => 12,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
