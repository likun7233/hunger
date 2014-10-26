<?php

/* TopxiaWebBundle:MyCourse:nav-pill.html.twig */
class __TwigTemplate_433879dd874f204fc361da0723934efd46d02df6dc5e6897eae1be1461a01427 extends Twig_Template
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
        echo "<ul class=\"nav nav-pills\">
\t<li";
        // line 2
        if (isset($context["tab_nav"])) { $_tab_nav_ = $context["tab_nav"]; } else { $_tab_nav_ = null; }
        if (($_tab_nav_ == "learning")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">学习中</a></li>
\t<li";
        // line 3
        if (isset($context["tab_nav"])) { $_tab_nav_ = $context["tab_nav"]; } else { $_tab_nav_ = null; }
        if (($_tab_nav_ == "learned")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learned");
        echo "\">已学完</a></li>
\t<li";
        // line 4
        if (isset($context["tab_nav"])) { $_tab_nav_ = $context["tab_nav"]; } else { $_tab_nav_ = null; }
        if (($_tab_nav_ == "favorited")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_favorited");
        echo "\">收藏</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  22 => 2,  19 => 1,  69 => 18,  65 => 16,  58 => 14,  52 => 13,  48 => 12,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
