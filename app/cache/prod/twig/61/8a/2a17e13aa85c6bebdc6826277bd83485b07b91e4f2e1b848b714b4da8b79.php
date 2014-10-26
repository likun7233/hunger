<?php

/* TopxiaWebBundle:MyQuiz:teacher-test-layout.html.twig */
class __TwigTemplate_618a2a17e13aa85c6bebdc6826277bd83485b07b91e4f2e1b848b714b4da8b79 extends Twig_Template
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
        // line 4
        $context["side_nav"] = "my-teaching-check";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的批阅 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"panel panel-default panel-col\">

\t<div class=\"panel-heading\">
\t\t我的批阅
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"";
        // line 14
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "reviewing")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
        echo "\">未批阅</a></li>
\t\t\t<li class=\"";
        // line 15
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "finished")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_finished");
        echo "\">已批阅</a></li>
\t\t</ul>
\t\t<br>
\t\t";
        // line 19
        echo "\t\t";
        $this->env->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig")->display($context);
        // line 20
        echo "\t\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:teacher-test-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  70 => 19,  59 => 15,  50 => 14,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
