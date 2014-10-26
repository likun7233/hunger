<?php

/* TopxiaWebBundle:CourseLesson:item-list-multi.html.twig */
class __TwigTemplate_e9b14384a6b9bd9cf32cbb3ebc5d82e70d0008ced42213b004351c022c1d1b5e extends Twig_Template
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
        echo "<div class=\"course-item-list-multi\">
";
        // line 2
        if (isset($context["groupedItems"])) { $_groupedItems_ = $context["groupedItems"]; } else { $_groupedItems_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groupedItems_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 3
            echo "\t";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (($this->getAttribute($_group_, "type") == "chapter")) {
                // line 4
                echo "\t\t";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context["chapter"] = $this->getAttribute($_group_, "data");
                // line 5
                echo "\t\t";
                if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                if (($this->getAttribute($_chapter_, "type") == "unit")) {
                    // line 6
                    echo "\t\t\t<h4>第 ";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "number"), "html", null, true);
                    echo " 节： <strong>";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "title"), "html", null, true);
                    echo "</strong></h4>
\t\t";
                } else {
                    // line 8
                    echo "\t\t\t<h3>第 ";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "number"), "html", null, true);
                    echo " 章：　<strong>";
                    if (isset($context["chapter"])) { $_chapter_ = $context["chapter"]; } else { $_chapter_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_chapter_, "title"), "html", null, true);
                    echo "</strong></h3>
\t\t";
                }
                // line 10
                echo "\t";
            } else {
                // line 11
                echo "\t\t<ul class=\"row\">
\t\t\t";
                // line 12
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "data"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 13
                    echo "\t\t\t\t<li class=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "type") == "live")) {
                        echo "col-md-6 live-item";
                    } else {
                        echo "col-md-4";
                    }
                    echo " clearfix item\">
\t\t\t\t\t<a class=\"item-object item-object-";
                    // line 14
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
                    echo "\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_preview", array("courseId" => $this->getAttribute($_item_, "courseId"), "lessonId" => $this->getAttribute($_item_, "id"))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 15
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if ($this->getAttribute($_item_, "free")) {
                        echo "<span class=\"item-free\"></span>";
                    }
                    // line 16
                    echo "\t\t\t\t\t\t<span class=\"item-icon\"></span>
\t\t\t\t\t\t";
                    // line 17
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "status") == "published")) {
                        // line 18
                        echo "\t\t\t\t\t\t\t<span class=\"item-length\">
\t\t\t\t\t\t\t\t";
                        // line 19
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        if (($this->getAttribute($_item_, "type") == "text")) {
                            // line 20
                            echo "\t\t\t\t\t\t\t\t\t图文
\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "type") == "testpaper")) {
                            // line 22
                            echo "\t\t\t\t\t\t\t\t\t试卷
\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "type") == "live")) {
                            // line 24
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "type") == "ppt")) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\tPPT
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 28
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($_item_, "length")), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 30
                        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t<span class=\"item-length\">未发布</span>
\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"item-body\">
\t\t\t\t\t\t<div class=\"item-seq-name\">课时";
                    // line 36
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number"), "html", null, true);
                    echo ":</div>
\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 38
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_preview", array("courseId" => $this->getAttribute($_item_, "courseId"), "lessonId" => $this->getAttribute($_item_, "id"))), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "\">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-muted\" style=\"font-weight:normal;font-size:12px;color:#aaa;\">

\t\t\t\t\t\t\t\t";
                    // line 43
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "type") == "live")) {
                        // line 44
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 45
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        if (isset($context["currentTime"])) { $_currentTime_ = $context["currentTime"]; } else { $_currentTime_ = null; }
                        if (($this->getAttribute($_item_, "startTime") > $_currentTime_)) {
                            // line 46
                            echo "\t\t\t\t\t\t\t\t\t\t<span>";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "m月d日"), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 47
                            if (isset($context["weeks"])) { $_weeks_ = $context["weeks"]; } else { $_weeks_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($_weeks_);
                            foreach ($context['_seq'] as $context["key"] => $context["week"]) {
                                // line 48
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                                if (($_key_ == twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "w"))) {
                                    // line 49
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t星期";
                                    if (isset($context["week"])) { $_week_ = $context["week"]; } else { $_week_ = null; }
                                    echo twig_escape_filter($this->env, $_week_, "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 51
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 52
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "startTime"), "H：i"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute($_item_, "startTime") <= $_currentTime_) && ($this->getAttribute($_item_, "endTime") >= $_currentTime_))) {
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"text-warning\">正在直播中</span>
\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute($_item_, "endTime") < $_currentTime_)) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t<span>直播结束</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 59
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "
\t\t\t\t\t\t\t</div>



\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t</ul>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:item-list-multi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 72,  239 => 69,  226 => 61,  218 => 57,  214 => 55,  200 => 51,  188 => 48,  183 => 47,  177 => 46,  173 => 45,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  127 => 28,  123 => 26,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 16,  91 => 15,  80 => 14,  70 => 13,  65 => 12,  62 => 11,  59 => 10,  49 => 8,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  22 => 2,  19 => 1,  933 => 255,  930 => 254,  927 => 253,  922 => 251,  919 => 250,  872 => 243,  870 => 242,  867 => 241,  864 => 240,  859 => 238,  856 => 237,  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 59,  216 => 74,  211 => 73,  206 => 52,  201 => 69,  197 => 67,  193 => 49,  185 => 63,  179 => 61,  174 => 60,  170 => 44,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}
