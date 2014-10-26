<?php

/* TopxiaWebBundle:Course:latest-members-block.html.twig */
class __TwigTemplate_4b30dde533f45590343f62f57d3f3782f45bffd7f128af1f92a543d7c8405793 extends Twig_Template
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
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
        if ($_students_) {
            // line 3
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">最新学员</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"user-grids\">
\t\t";
            // line 9
            if (isset($context["students"])) { $_students_ = $context["students"]; } else { $_students_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_students_);
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 10
                echo "\t\t\t";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
                $context["user"] = $this->getAttribute($_users_, $this->getAttribute($_student_, "userId"), array(), "array");
                // line 11
                echo "\t\t\t<li>
\t\t\t\t";
                // line 12
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $_web_macro_->getuser_avatar($_user_);
                echo "
\t\t\t\t<p>";
                // line 13
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo $_web_macro_->getuser_link($_user_);
                echo "</p>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:latest-members-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  42 => 11,  37 => 10,  32 => 9,  24 => 3,  45 => 12,  40 => 12,  36 => 10,  208 => 48,  204 => 46,  199 => 43,  178 => 39,  172 => 37,  164 => 36,  153 => 35,  148 => 34,  144 => 33,  139 => 32,  121 => 31,  110 => 22,  86 => 18,  75 => 17,  66 => 15,  61 => 14,  33 => 10,  30 => 9,  21 => 2,  247 => 72,  239 => 69,  226 => 61,  218 => 57,  214 => 55,  200 => 51,  188 => 48,  183 => 47,  177 => 46,  173 => 45,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  127 => 28,  123 => 26,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 21,  91 => 15,  80 => 14,  70 => 16,  65 => 12,  62 => 16,  59 => 17,  49 => 8,  39 => 6,  35 => 5,  31 => 9,  27 => 3,  22 => 2,  19 => 1,  933 => 255,  930 => 254,  927 => 253,  922 => 251,  919 => 250,  872 => 243,  870 => 242,  867 => 241,  864 => 240,  859 => 238,  856 => 237,  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 59,  216 => 74,  211 => 73,  206 => 52,  201 => 69,  197 => 67,  193 => 49,  185 => 42,  179 => 61,  174 => 60,  170 => 44,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 13,  34 => 3,  29 => 13,);
    }
}
