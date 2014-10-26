<?php

/* TopxiaWebBundle:CourseThread:question-block.html.twig */
class __TwigTemplate_a21aaa0ddd0bd1f62e9e9447e1427b6ae8e5c70382f43211e06fb914ff28b60f extends Twig_Template
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
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if ($_threads_) {
            // line 2
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">最新问答</h3>
  </div>
  <div class=\"panel-body\">
  \t<ul class=\"text-list\">
  \t\t";
            // line 8
            if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_threads_);
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 9
                echo "  \t\t<li>
        <a href=\"";
                // line 10
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_thread_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "title"), "html", null, true);
                echo "</a>
      </li>
  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  \t</ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:question-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  30 => 8,  22 => 2,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  74 => 19,  62 => 16,  59 => 15,  56 => 14,  39 => 11,  35 => 9,  19 => 1,  53 => 5,  32 => 8,  25 => 5,  23 => 2,  20 => 1,  113 => 38,  110 => 37,  105 => 26,  100 => 19,  88 => 29,  83 => 28,  78 => 27,  73 => 24,  71 => 18,  64 => 19,  54 => 13,  49 => 10,  31 => 7,  29 => 2,  69 => 21,  66 => 20,  63 => 6,  58 => 16,  55 => 15,  52 => 13,  46 => 9,  43 => 12,  40 => 8,  37 => 3,  34 => 6,  28 => 4,  26 => 3,);
    }
}
