<?php

/* TopxiaWebBundle:Search:index.html.twig */
class __TwigTemplate_529004ab15e419b9fd883c2869b224af789a8e75c862afd3146c96094228c2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Default:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "搜索：";
        if (isset($context["keywords"])) { $_keywords_ = $context["keywords"]; } else { $_keywords_ = null; }
        echo twig_escape_filter($this->env, $_keywords_, "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-row-wrap container-gap\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"page-header\"><h1>搜索</h1></div>
    </div>
  </div>

  <div class=\"row row-3-9\">
    <div class=\"col-md-9\" style=\"min-height:300px;\">

      <form class=\"well well-sm\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">
        <div class=\"input-group input-group-lg\">
          <input type=\"text\" class=\"form-control\" name=\"q\" value=\"";
        // line 19
        if (isset($context["keywords"])) { $_keywords_ = $context["keywords"]; } else { $_keywords_ = null; }
        echo twig_escape_filter($this->env, $_keywords_, "html", null, true);
        echo "\">
          <span class=\"input-group-btn\">
            <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
          </span>
        </div>
      </form>

      ";
        // line 26
        if (isset($context["keywords"])) { $_keywords_ = $context["keywords"]; } else { $_keywords_ = null; }
        if ($_keywords_) {
            // line 27
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if ($_courses_) {
                // line 28
                echo "          ";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => $_courses_, "view" => "list")));
                echo "
          ";
                // line 29
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
                echo " 
        ";
            } else {
                // line 31
                echo "          <div class=\"empty\">没有搜到相关课程，请换个关键词试试！</div>
        ";
            }
            // line 33
            echo "      ";
        } else {
            // line 34
            echo "        <div class=\"empty\">请输入搜索关键词！</div>
      ";
        }
        // line 36
        echo "    </div>
    <div class=\"col-md-3\">

    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  98 => 34,  95 => 33,  91 => 31,  84 => 29,  78 => 28,  74 => 27,  71 => 26,  60 => 19,  55 => 17,  42 => 6,  39 => 5,  29 => 3,);
    }
}
