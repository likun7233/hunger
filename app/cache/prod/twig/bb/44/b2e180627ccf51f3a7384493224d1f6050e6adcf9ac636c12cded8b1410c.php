<?php

/* TopxiaWebBundle:MyThread:questions.html.twig */
class __TwigTemplate_bb44b2e180627ccf51f3a7384493224d1f6050e6adcf9ac636c12cded8b1410c extends Twig_Template
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
        $context["side_nav"] = "my-questions";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的问答 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "

<div class=\"panel panel-default panel-col\">
\t

  <div class=\"panel-heading\">我的问答
  </div>

  <div class=\"panel-body\">
  \t
    ";
        // line 18
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if ($_threads_) {
            // line 19
            echo "\t    ";
            $this->env->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig")->display(array_merge($context, array("type" => "question")));
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "      <div class=\"empty\">暂无提问的记录</div>
    ";
        }
        // line 23
        echo "
  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  62 => 21,  59 => 20,  56 => 19,  53 => 18,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
