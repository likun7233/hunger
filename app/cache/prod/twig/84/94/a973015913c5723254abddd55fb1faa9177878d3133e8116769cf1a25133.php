<?php

/* TopxiaWebBundle:MyThread:discussions.html.twig */
class __TwigTemplate_8494a973015913c5723254abddd55fb1faa9177878d3133e8116769cf1a25133 extends Twig_Template
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
        $context["side_nav"] = "my-discussions";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的话题 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的话题</div>

  <div class=\"panel-body\">

    ";
        // line 14
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if ($_threads_) {
            // line 15
            echo "\t    ";
            $this->env->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig")->display(array_merge($context, array("type" => "discussion")));
            // line 16
            echo "\t  ";
        } else {
            // line 17
            echo "\t    <div class=\"empty\">你还没有发表过话题</div>
\t  ";
        }
        // line 19
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:discussions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
