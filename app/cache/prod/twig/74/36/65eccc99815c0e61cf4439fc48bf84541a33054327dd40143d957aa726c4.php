<?php

/* TopxiaWebBundle:MyNotebook:index.html.twig */
class __TwigTemplate_743665eccc99815c0e61cf4439fc48bf84541a33054327dd40143d957aa726c4 extends Twig_Template
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
        $context["side_nav"] = "my-notes";
        // line 6
        $context["script_controller"] = "my/notebooks";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的课程 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的笔记</div>
  <div class=\"panel-body\">
    <ul class=\"media-list notebook-list\" id=\"notebook-list\">
      ";
        // line 14
        if (isset($context["courseMembers"])) { $_courseMembers_ = $context["courseMembers"]; } else { $_courseMembers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courseMembers_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 15
            echo "        ";
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            $context["course"] = $this->getAttribute($_courses_, $this->getAttribute($_member_, "courseId"), array(), "array");
            // line 16
            echo "        <div class=\"media\">
          <img class=\"pull-left media-object\" src=\"";
            // line 17
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), "large"), "html", null, true);
            echo "\">
          <div class=\"media-body\">
            <h4 class=\"media-heading\">";
            // line 19
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "</h4>
            <div class=\"notebook-metas\">
              <span class=\"notebook-number\">共 ";
            // line 21
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_member_, "noteNum"), "html", null, true);
            echo " 篇笔记</span>
            </div>
            <div class=\"notebook-metas\">
              ";
            // line 24
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (($this->getAttribute($_member_, "noteLastUpdateTime") > 0)) {
                // line 25
                echo "                <span class=\"notebook-time\">最后更新 ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_member_, "noteLastUpdateTime")), "html", null, true);
                echo "</span>
              ";
            }
            // line 27
            echo "              <a class=\"pull-right notebook-go\" href=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_notebook_show", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">查看笔记</a>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <li class=\"empty\">你还没有写过笔记</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
    ";
        // line 35
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo " 
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyNotebook:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  112 => 34,  105 => 32,  93 => 27,  86 => 25,  83 => 24,  76 => 21,  70 => 19,  64 => 17,  61 => 16,  56 => 15,  50 => 14,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
