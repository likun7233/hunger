<?php

/* TopxiaWebBundle:MyTeaching:threads.html.twig */
class __TwigTemplate_b39e317f64fc890f409c081acc05ecc0d441cb53739e042918367c34e1276228 extends Twig_Template
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
        // line 20
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "question")) {
            // line 21
            $context["side_nav"] = "my-teaching-questions";
        } elseif (($_type_ == "discussion")) {
            // line 23
            $context["side_nav"] = "my-teaching-discussions";
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 

";
        // line 5
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "question")) {
            // line 6
            echo "\t学员问答
";
            // line 7
            $context["side_nav"] = "my-teaching-questions";
            // line 8
            echo "
";
        } elseif (($_type_ == "discussion")) {
            // line 10
            echo "\t学员话题
";
            // line 11
            $context["side_nav"] = "my-teaching-discussions";
            // line 12
            echo "
";
        }
        // line 14
        echo "
- ";
        // line 15
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
<div class=\"panel panel-default panel-col\">
  \t<div class=\"panel-heading\">
\t\t";
        // line 30
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (($_type_ == "question")) {
            // line 31
            echo "\t\t\t学员问答
\t\t";
        } elseif (($_type_ == "discussion")) {
            // line 33
            echo "\t\t\t学员话题
\t\t";
        }
        // line 35
        echo "\t</div>

  <div class=\"panel-body\">

    ";
        // line 39
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if ($_threads_) {
            // line 40
            echo "\t    ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            $this->env->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig")->display(array_merge($context, array("type" => $_type_)));
            // line 41
            echo "\t  ";
        } else {
            // line 42
            echo "\t  
\t  \t";
            // line 43
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "question")) {
                // line 44
                echo "\t\t\t<div class=\"empty\">您的课程中还没有学员提问过...</div>
\t\t";
            } elseif (($_type_ == "discussion")) {
                // line 46
                echo "\t\t\t<div class=\"empty\">您的课程中还没有学员话题...</div>
\t\t";
            }
            // line 48
            echo "\t    
\t  ";
        }
        // line 50
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  124 => 48,  120 => 46,  116 => 44,  113 => 43,  110 => 42,  107 => 41,  103 => 40,  100 => 39,  94 => 35,  90 => 33,  86 => 31,  83 => 30,  78 => 27,  75 => 26,  68 => 15,  65 => 14,  61 => 12,  59 => 11,  56 => 10,  52 => 8,  50 => 7,  47 => 6,  44 => 5,  38 => 3,  32 => 23,  29 => 21,  26 => 20,);
    }
}
