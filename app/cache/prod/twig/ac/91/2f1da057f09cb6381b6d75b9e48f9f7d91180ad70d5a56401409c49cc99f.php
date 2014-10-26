<?php

/* TopxiaWebBundle:MyQuiz:my-quiz.html.twig */
class __TwigTemplate_ac912f1da057f09cb6381b6d75b9e48f9f7d91180ad70d5a56401409c49cc99f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:MyQuiz:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyQuiz:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的考试记录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if (isset($context["myTestpaperResults"])) { $_myTestpaperResults_ = $context["myTestpaperResults"]; } else { $_myTestpaperResults_ = null; }
        if ($_myTestpaperResults_) {
            // line 8
            echo "    <table class=\"table table-striped table-hover\">
    \t<tbody>
    \t\t";
            // line 10
            if (isset($context["myTestpaperResults"])) { $_myTestpaperResults_ = $context["myTestpaperResults"]; } else { $_myTestpaperResults_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_myTestpaperResults_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["myTestpaperResult"]) {
                // line 11
                echo "    \t\t\t";
                if (isset($context["myTestpapers"])) { $_myTestpapers_ = $context["myTestpapers"]; } else { $_myTestpapers_ = null; }
                if (isset($context["myTestpaperResult"])) { $_myTestpaperResult_ = $context["myTestpaperResult"]; } else { $_myTestpaperResult_ = null; }
                $context["myTestpaper"] = (($this->getAttribute($_myTestpapers_, $this->getAttribute($_myTestpaperResult_, "testId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_myTestpapers_, $this->getAttribute($_myTestpaperResult_, "testId"), array(), "array"), null)) : (null));
                // line 12
                echo "    \t\t\t";
                if (isset($context["myTestpaper"])) { $_myTestpaper_ = $context["myTestpaper"]; } else { $_myTestpaper_ = null; }
                if ($_myTestpaper_) {
                    // line 13
                    echo "    \t\t\t\t";
                    if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                    if (isset($context["myTestpaper"])) { $_myTestpaper_ = $context["myTestpaper"]; } else { $_myTestpaper_ = null; }
                    $context["course"] = $this->getAttribute($_courses_, $this->env->getExtension('topxia_web_twig')->getCourseidFilter($this->getAttribute($_myTestpaper_, "target")), array(), "array");
                    // line 14
                    echo "    \t\t\t";
                }
                // line 15
                echo "    \t\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:MyQuiz:my-quiz-tr.html.twig")->display($context);
                // line 16
                echo "    \t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['myTestpaperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    \t</tbody>
    </table>
    ";
            // line 19
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
            echo "
  ";
        } else {
            // line 21
            echo "    <div class=\"empty\">还没有参加过任何考试</div>
  ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  112 => 21,  105 => 19,  101 => 17,  87 => 16,  84 => 15,  81 => 14,  76 => 13,  72 => 12,  67 => 11,  49 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
