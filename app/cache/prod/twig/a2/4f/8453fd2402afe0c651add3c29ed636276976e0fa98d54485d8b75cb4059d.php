<?php

/* TopxiaWebBundle:Course:countdown.html.twig */
class __TwigTemplate_a24f8453fd2402afe0c651add3c29ed636276976e0fa98d54485d8b75cb4059d extends Twig_Template
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
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("free_limit") && ($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_coming"))) {
            // line 2
            echo "  <span class=\"countdown\">
    <span class=\"text-info\">";
            // line 3
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeStartTime"), "m"), "html", null, true);
            echo "</span>
    <span class=\"text-muted\">月</span>
    <span class=\"text-info\">";
            // line 5
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeStartTime"), "d"), "html", null, true);
            echo "</span>
    <span class=\"text-muted\">日</span>
    <span class=\"text-info\">";
            // line 7
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeStartTime"), "H"), "html", null, true);
            echo "</span>
    <span class=\"text-info\">:</span>
    <span class=\"text-info\">";
            // line 9
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeStartTime"), "i"), "html", null, true);
            echo "</span>
  </span>
  <span class=\"label label-primary\">即将限免</span>
";
        }
        // line 13
        echo "
";
        // line 14
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("free_limit") && ($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_now"))) {
            // line 15
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["countdown"] = $this->env->getExtension('topxia_web_twig')->getCountdownTime($this->getAttribute($_course_, "freeEndTime"));
            // line 16
            echo "  <span class=\"text-danger countdown\" data-endtime=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "freeEndTime"), "Y-n-d H:i:s"), "html", null, true);
            echo "\">仅剩
    <span class=\"days\">";
            // line 17
            if (isset($context["countdown"])) { $_countdown_ = $context["countdown"]; } else { $_countdown_ = null; }
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($_countdown_, "days")), "html", null, true);
            echo "</span>天
    <span class=\"hours\">";
            // line 18
            if (isset($context["countdown"])) { $_countdown_ = $context["countdown"]; } else { $_countdown_ = null; }
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($_countdown_, "hours")), "html", null, true);
            echo "</span>时
    <span class=\"minutes\">";
            // line 19
            if (isset($context["countdown"])) { $_countdown_ = $context["countdown"]; } else { $_countdown_ = null; }
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($_countdown_, "minutes")), "html", null, true);
            echo "</span>分
    <span class=\"seconds\">";
            // line 20
            if (isset($context["countdown"])) { $_countdown_ = $context["countdown"]; } else { $_countdown_ = null; }
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($_countdown_, "seconds")), "html", null, true);
            echo "</span>秒
  </span>
  <span class=\"label label-danger\">正在限免</span> 
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:countdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  72 => 18,  67 => 17,  61 => 16,  57 => 15,  54 => 14,  37 => 7,  31 => 5,  25 => 3,  291 => 79,  273 => 74,  266 => 71,  261 => 70,  256 => 69,  252 => 67,  249 => 66,  246 => 65,  243 => 64,  239 => 62,  236 => 61,  232 => 60,  225 => 59,  221 => 57,  217 => 56,  214 => 55,  211 => 54,  204 => 52,  200 => 51,  193 => 49,  190 => 48,  184 => 46,  174 => 42,  166 => 41,  151 => 38,  147 => 37,  143 => 35,  133 => 32,  126 => 29,  118 => 28,  115 => 27,  111 => 26,  107 => 25,  104 => 24,  100 => 22,  97 => 21,  93 => 19,  89 => 17,  85 => 16,  77 => 19,  73 => 12,  69 => 10,  66 => 9,  58 => 8,  48 => 5,  43 => 9,  40 => 3,  22 => 2,  19 => 1,  223 => 52,  219 => 50,  212 => 48,  206 => 47,  203 => 46,  191 => 43,  181 => 45,  171 => 41,  168 => 40,  161 => 37,  158 => 40,  155 => 39,  150 => 32,  139 => 29,  136 => 33,  125 => 27,  122 => 26,  117 => 25,  108 => 24,  103 => 23,  94 => 22,  81 => 15,  78 => 10,  63 => 8,  51 => 13,  33 => 5,  28 => 3,);
    }
}
