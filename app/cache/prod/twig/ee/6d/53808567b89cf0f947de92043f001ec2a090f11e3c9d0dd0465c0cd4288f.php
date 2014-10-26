<?php

/* TopxiaWebBundle:Default:latest-reviews-block.html.twig */
class __TwigTemplate_ee6d53808567b89cf0f947de92043f001ec2a090f11e3c9d0dd0465c0cd4288f extends Twig_Template
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
        if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
        if ($_reviews_) {
            // line 2
            echo "\t<div class=\"es-box\">
\t\t<div class=\"es-box-heading\"><h2>学员评价</h2></div>
\t<ul class=\"media-list latest-review-list\">
\t\t";
            // line 5
            if (isset($context["reviews"])) { $_reviews_ = $context["reviews"]; } else { $_reviews_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_reviews_);
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "\t\t  ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                $context["author"] = (($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_review_, "userId"), array(), "array"), null)) : (null));
                // line 7
                echo "\t\t  ";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_review_, "courseId"), array(), "array"), null)) : (null));
                // line 8
                echo "\t\t  ";
                if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($_author_ && $_course_)) {
                    // line 9
                    echo "\t\t\t  <li class=\"media\">
\t\t\t  \t<a href=\"";
                    // line 10
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_author_, "id"))), "html", null, true);
                    echo "\" class=\"author-picture-link\">
\t\t\t\t  \t<img class=\"author-picture\" src=\"";
                    // line 11
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_author_, "smallAvatar"), ""), "html", null, true);
                    echo "\">
\t\t\t  \t</a>
\t\t\t  \t<a href=\"";
                    // line 13
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_author_, "id"))), "html", null, true);
                    echo "\" class=\"author-nickname\">";
                    if (isset($context["author"])) { $_author_ = $context["author"]; } else { $_author_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_author_, "nickname"), "html", null, true);
                    echo "</a> <span class=\"text-muted\">说：</span> <br>
\t\t\t  \t<div class=\"review-content\">";
                    // line 14
                    if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_review_, "content"), 50);
                    echo "</div>

\t\t\t\t  <div class=\"review-footer\">
\t\t\t\t\t  <a href=\"";
                    // line 17
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                    echo "\" class=\"course-title\"> 《 ";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
                    echo " 》</a>
\t\t\t\t\t  <span class=\"divider\"></span>
\t\t\t\t\t  <span class=\"stars-";
                    // line 19
                    if (isset($context["review"])) { $_review_ = $context["review"]; } else { $_review_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_review_, "rating"), "html", null, true);
                    echo "\">&nbsp;</span>
\t\t\t\t  </div>
\t\t\t  </li>
\t\t  ";
                }
                // line 23
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:latest-reviews-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  69 => 14,  55 => 11,  50 => 10,  47 => 9,  37 => 7,  32 => 6,  54 => 10,  49 => 9,  36 => 7,  124 => 17,  114 => 14,  92 => 10,  84 => 8,  35 => 5,  31 => 4,  329 => 63,  322 => 61,  318 => 59,  315 => 58,  312 => 57,  292 => 55,  275 => 50,  272 => 49,  269 => 48,  241 => 42,  233 => 40,  225 => 38,  217 => 36,  209 => 34,  202 => 32,  188 => 29,  175 => 25,  172 => 24,  146 => 20,  133 => 18,  127 => 17,  121 => 16,  112 => 15,  77 => 8,  65 => 7,  51 => 3,  42 => 8,  22 => 2,  19 => 1,  429 => 135,  418 => 136,  416 => 135,  409 => 131,  394 => 129,  389 => 128,  374 => 119,  371 => 118,  365 => 115,  360 => 112,  356 => 111,  342 => 102,  338 => 101,  333 => 100,  327 => 98,  316 => 93,  309 => 90,  307 => 89,  302 => 87,  297 => 86,  291 => 84,  279 => 52,  271 => 79,  265 => 47,  254 => 46,  248 => 71,  237 => 68,  235 => 67,  230 => 66,  220 => 62,  214 => 58,  206 => 56,  198 => 54,  196 => 53,  184 => 28,  181 => 43,  178 => 26,  173 => 37,  166 => 26,  157 => 23,  141 => 19,  136 => 13,  131 => 12,  111 => 141,  109 => 140,  106 => 139,  104 => 42,  93 => 23,  89 => 38,  87 => 9,  81 => 7,  74 => 30,  71 => 29,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  48 => 6,  44 => 8,  40 => 11,  29 => 2,  27 => 5,  39 => 4,  28 => 6,  26 => 6,  758 => 271,  738 => 265,  731 => 263,  728 => 262,  722 => 260,  719 => 259,  712 => 256,  704 => 255,  696 => 254,  693 => 253,  689 => 252,  686 => 251,  682 => 249,  675 => 247,  672 => 246,  665 => 243,  657 => 242,  654 => 241,  650 => 240,  646 => 239,  643 => 238,  639 => 236,  636 => 235,  632 => 233,  628 => 231,  624 => 230,  620 => 229,  616 => 228,  612 => 226,  608 => 224,  605 => 223,  597 => 222,  587 => 219,  582 => 218,  579 => 217,  574 => 216,  571 => 215,  567 => 214,  556 => 213,  546 => 205,  543 => 204,  537 => 200,  531 => 199,  519 => 197,  515 => 196,  510 => 195,  504 => 191,  500 => 190,  497 => 189,  494 => 188,  489 => 185,  486 => 184,  480 => 180,  474 => 179,  461 => 174,  454 => 172,  450 => 170,  447 => 169,  439 => 168,  432 => 165,  427 => 164,  424 => 118,  420 => 162,  415 => 161,  407 => 155,  403 => 154,  400 => 153,  395 => 150,  390 => 147,  387 => 127,  381 => 124,  375 => 141,  364 => 134,  359 => 133,  347 => 104,  343 => 129,  334 => 127,  324 => 97,  321 => 124,  313 => 123,  304 => 119,  299 => 118,  293 => 115,  290 => 114,  286 => 54,  283 => 82,  280 => 111,  277 => 109,  273 => 107,  267 => 104,  255 => 98,  250 => 97,  243 => 70,  238 => 93,  227 => 65,  222 => 88,  216 => 84,  211 => 83,  204 => 79,  199 => 76,  195 => 31,  192 => 30,  189 => 73,  186 => 71,  180 => 27,  174 => 66,  161 => 23,  156 => 62,  153 => 22,  149 => 21,  144 => 20,  137 => 55,  132 => 52,  128 => 51,  125 => 50,  122 => 48,  118 => 16,  110 => 12,  105 => 39,  99 => 24,  96 => 37,  91 => 34,  88 => 33,  85 => 19,  83 => 31,  79 => 29,  72 => 26,  66 => 23,  61 => 13,  58 => 19,  52 => 14,  45 => 12,  41 => 10,  38 => 9,  33 => 3,  30 => 1,  25 => 45,);
    }
}
