<?php

/* TopxiaWebBundle:Course:announcement-block.html.twig */
class __TwigTemplate_801a5f97fa31089113d841635f2c1b65f9a355fc8aa11d3fdf9dd0979ba11805 extends Twig_Template
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
        if (isset($context["canManage"])) { $_canManage_ = $context["canManage"]; } else { $_canManage_ = null; }
        if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
        if ($_canManage_) {
            // line 2
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">
\t\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 5
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_add", array("courseId" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\" class=\"btn btn-link btn-xs\"><span class=\"glyphicon glyphicon-plus\"></span> 添加公告</a>
\t\t</div>
\t\t<h3 class=\"panel-title\">课程公告</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"media-list announcement-list\">
\t\t\t";
            // line 11
            if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_announcements_);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 12
                echo "\t\t\t\t<li class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 15
                if (isset($context["canTake"])) { $_canTake_ = $context["canTake"]; } else { $_canTake_ = null; }
                if ($_canTake_) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_show", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t<span class=\"pull-right text-muted text-sm\">";
                // line 22
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_announcement_, "createdTime"), "Y-m-d H:i"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<a class=\"text-muted text-sm mrm action\" href=\"javascript:;\" data-target=\"#modal\"  data-toggle=\"modal\" data-url=\"";
                // line 23
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_update", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> 修改</a>
\t\t\t\t\t\t\t\t<a class=\"text-muted text-sm action\" href=\"#\" data-role=\"delete\" data-url=\"";
                // line 24
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_delete", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 28
                echo "<div class=\"empty\">暂无课程公告</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t</ul>
\t</div>
</div>\t

";
        } elseif ($_announcements_) {
            // line 35
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">课程公告</h3>
\t</div>

\t<div class=\"panel-body\">
\t\t<ul class=\"media-list announcement-list\">
\t\t\t";
            // line 42
            if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_announcements_);
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 43
                echo "\t\t\t\t<li class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 46
                if (isset($context["canTake"])) { $_canTake_ = $context["canTake"]; } else { $_canTake_ = null; }
                if ($_canTake_) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_show", array("courseId" => $this->getAttribute($_course_, "id"), "id" => $this->getAttribute($_announcement_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" >";
                    if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_announcement_, "content"), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t</ul>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  147 => 49,  136 => 47,  128 => 43,  107 => 30,  100 => 28,  77 => 22,  73 => 20,  63 => 18,  44 => 12,  38 => 11,  28 => 5,  23 => 2,  51 => 13,  42 => 11,  37 => 10,  32 => 9,  24 => 3,  45 => 12,  40 => 12,  36 => 10,  208 => 48,  204 => 46,  199 => 43,  178 => 39,  172 => 37,  164 => 36,  153 => 35,  148 => 34,  144 => 33,  139 => 32,  121 => 31,  110 => 22,  86 => 18,  75 => 17,  66 => 15,  61 => 14,  33 => 10,  30 => 9,  21 => 2,  247 => 72,  239 => 69,  226 => 61,  218 => 57,  214 => 55,  200 => 51,  188 => 48,  183 => 47,  177 => 46,  173 => 45,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  127 => 28,  123 => 42,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 21,  91 => 15,  80 => 14,  70 => 16,  65 => 12,  62 => 16,  59 => 17,  49 => 15,  39 => 6,  35 => 5,  31 => 9,  27 => 3,  22 => 2,  19 => 1,  933 => 255,  930 => 254,  927 => 253,  922 => 251,  919 => 250,  872 => 243,  870 => 242,  867 => 241,  864 => 240,  859 => 238,  856 => 237,  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 59,  216 => 74,  211 => 73,  206 => 52,  201 => 69,  197 => 67,  193 => 49,  185 => 42,  179 => 61,  174 => 60,  170 => 44,  166 => 55,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 46,  131 => 40,  124 => 37,  118 => 33,  114 => 35,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 24,  85 => 17,  82 => 23,  79 => 15,  72 => 10,  64 => 8,  52 => 16,  46 => 6,  43 => 13,  34 => 3,  29 => 13,);
    }
}
