<?php

/* TopxiaWebBundle:CourseThread:latest-block.html.twig */
class __TwigTemplate_0270c5c01044bbe0565c689162c280e50ad21bd5b12d641111f5334e3cf53624 extends Twig_Template
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
            echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">最新讨论</h3>
\t\t</div>
\t\t<div id=\"scroll-threads\" class=\"panel-body\">

\t\t\t<ul class=\"text-list\">
\t\t\t\t";
            // line 9
            if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_threads_);
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 10
                echo "\t\t\t\t\t<li class=\"clearfix\">
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"text-muted pull-right\">";
                // line 12
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_thread_, "createdTime"), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                // line 13
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" >";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_thread_, "title"), 15);
                echo "</a>\t

\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:latest-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  40 => 12,  36 => 10,  208 => 48,  204 => 46,  199 => 43,  178 => 39,  172 => 37,  164 => 36,  153 => 35,  148 => 34,  144 => 33,  139 => 32,  121 => 31,  110 => 22,  86 => 18,  75 => 17,  66 => 15,  61 => 14,  33 => 10,  30 => 9,  21 => 2,  247 => 72,  239 => 69,  226 => 61,  218 => 57,  214 => 55,  200 => 51,  188 => 48,  183 => 47,  177 => 46,  173 => 45,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  127 => 28,  123 => 26,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 21,  91 => 15,  80 => 14,  70 => 16,  65 => 12,  62 => 11,  59 => 17,  49 => 8,  39 => 6,  35 => 5,  31 => 9,  27 => 3,  22 => 2,  19 => 1,  933 => 255,  930 => 254,  927 => 253,  922 => 251,  919 => 250,  872 => 243,  870 => 242,  867 => 241,  864 => 240,  859 => 238,  856 => 237,  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 59,  216 => 74,  211 => 73,  206 => 52,  201 => 69,  197 => 67,  193 => 49,  185 => 42,  179 => 61,  174 => 60,  170 => 44,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 13,  34 => 3,  29 => 13,);
    }
}
