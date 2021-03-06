<?php

/* TopxiaWebBundle:Course:dashboard-nav.html.twig */
class __TwigTemplate_7f383fd2822061285bcf22a8382136a62e827c33bf1a350f3604957367c60534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'course_dashboard_nav' => array($this, 'block_course_dashboard_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"nav nav-tabs course-dashboard-tabs clearfix\" id=\"course-tabs\">
  ";
        // line 2
        $this->displayBlock('course_dashboard_nav', $context, $blocks);
        // line 8
        echo "</ul>";
    }

    // line 2
    public function block_course_dashboard_nav($context, array $blocks = array())
    {
        // line 3
        echo "\t<li class=\"";
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (($_nav_ == "lesson")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">课时</a></li>
\t<li class=\"";
        // line 4
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (($_nav_ == "thread")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">讨论区</a></li>
\t<li class=\"";
        // line 5
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (($_nav_ == "material")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">资料区</a></li>
  <li class=\"";
        // line 6
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (($_nav_ == "info")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
        echo "\">课程信息</a></li>
  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:dashboard-nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  32 => 3,  25 => 8,  23 => 2,  20 => 1,  113 => 38,  110 => 37,  105 => 23,  100 => 19,  88 => 29,  83 => 28,  78 => 27,  73 => 24,  71 => 23,  64 => 19,  54 => 13,  49 => 10,  31 => 7,  29 => 2,  69 => 21,  66 => 20,  63 => 6,  58 => 16,  55 => 15,  52 => 14,  46 => 9,  43 => 4,  40 => 8,  37 => 3,  34 => 6,  28 => 4,  26 => 3,);
    }
}
