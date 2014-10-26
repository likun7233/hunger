<?php

/* TopxiaWebBundle:MyQuiz:layout.html.twig */
class __TwigTemplate_4f158f54e6ed7c394bb83e3d9a5641c73f0678e5a3c2165c85c726a58164a421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:My:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "my-quiz";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的考试 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"panel panel-default panel-col\">

\t<div class=\"panel-heading\">
\t\t我的考试
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"";
        // line 14
        if (isset($context["myQuizActive"])) { $_myQuizActive_ = $context["myQuizActive"]; } else { $_myQuizActive_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("myQuizActive", $context)) ? (_twig_default_filter($_myQuizActive_, "")) : ("")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">考试记录</a></li>
\t\t\t<li class=\"";
        // line 15
        if (isset($context["favoriteActive"])) { $_favoriteActive_ = $context["favoriteActive"]; } else { $_favoriteActive_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("favoriteActive", $context)) ? (_twig_default_filter($_favoriteActive_, "")) : ("")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_show_favorite_question");
        echo "\">收藏的题目</a></li>
\t\t</ul>
\t\t<br>
\t\t";
        // line 18
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "\t\t
\t</div>
</div>
";
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  58 => 15,  51 => 14,  32 => 3,  27 => 4,  116 => 23,  112 => 21,  105 => 19,  101 => 17,  87 => 16,  84 => 15,  81 => 14,  76 => 18,  72 => 12,  67 => 18,  49 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
