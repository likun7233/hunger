<?php

/* TopxiaWebBundle:Group:group-member-nav-pill.html.twig */
class __TwigTemplate_d6f56df4df186b47f6da05d336b46b70ae6dacc00f5445a93fa9c83cb99bb232 extends Twig_Template
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
        echo "\t <ul class=\"nav nav-pills\">
      <li ";
        // line 2
        if (isset($context["tab_nav"])) { $_tab_nav_ = $context["tab_nav"]; } else { $_tab_nav_ = null; }
        if (($_tab_nav_ == "index")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">小组主页</a></li>
      <li ";
        // line 3
        if (isset($context["tab_nav"])) { $_tab_nav_ = $context["tab_nav"]; } else { $_tab_nav_ = null; }
        if (($_tab_nav_ == "join")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_join");
        echo "\">加入的小组</a></li>
      <li ";
        // line 4
        if (isset($context["tab_nav"])) { $_tab_nav_ = $context["tab_nav"]; } else { $_tab_nav_ = null; }
        if (($_tab_nav_ == "thread")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_threads");
        echo "\">发起的话题</a></li>
      <li ";
        // line 5
        if (isset($context["tab_nav"])) { $_tab_nav_ = $context["tab_nav"]; } else { $_tab_nav_ = null; }
        if (($_tab_nav_ == "post")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_posts");
        echo "\">回复的话题</a></li>
    </ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  31 => 3,  22 => 2,  19 => 1,  169 => 55,  163 => 49,  154 => 46,  146 => 40,  142 => 36,  133 => 33,  125 => 27,  122 => 24,  113 => 21,  109 => 19,  107 => 18,  101 => 14,  98 => 13,  90 => 9,  43 => 8,  40 => 4,  33 => 3,  28 => 6,  26 => 5,);
    }
}
