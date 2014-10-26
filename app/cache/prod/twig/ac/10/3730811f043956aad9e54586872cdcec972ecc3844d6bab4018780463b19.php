<?php

/* TopxiaWebBundle:Course:teachers-block.html.twig */
class __TwigTemplate_ac103730811f043956aad9e54586872cdcec972ecc3844d6bab4018780463b19 extends Twig_Template
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
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">课程教师</h3>
  </div>
  <div class=\"panel-body\">

    ";
        // line 9
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "teacherIds")) {
            // line 10
            echo "      <div class=\"teacher-carousel ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_course_, "teacherIds")) == 1)) {
                echo "teacher-carousel-onlyone";
            }
            echo "\">
        <div class=\"carousel slide\" id=\"teacher-carousel\">
          <div class=\"carousel-inner\">
            ";
            // line 13
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teacherIds"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                // line 14
                echo "              ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                $context["user"] = $this->getAttribute($_users_, $_teacherId_, array(), "array");
                // line 15
                echo "              ";
                if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                if ($_profiles_) {
                    // line 16
                    echo "              ";
                    if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                    if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                    $context["profile"] = $this->getAttribute($_profiles_, $_teacherId_, array(), "array");
                    // line 17
                    echo "              <div class=\"item ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "first")) {
                        echo "active";
                    }
                    echo "\" data-id=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 18
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                    echo "\"><img src=\"";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "largeAvatar"), "large"), "html", null, true);
                    echo "\" class=\"avatar\"></a>
              </div>
              ";
                }
                // line 21
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "          </div>
          <a class=\"left carousel-control\" href=\"#teacher-carousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
          </a>
          <a class=\"right carousel-control\" href=\"#teacher-carousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
          </a>
        </div>
        <div class=\"teacher-detail\" id=\"teacher-detail\">
            ";
            // line 31
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "teacherIds"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                // line 32
                echo "              ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                $context["user"] = $this->getAttribute($_users_, $_teacherId_, array(), "array");
                // line 33
                echo "              ";
                if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                if ($_profiles_) {
                    // line 34
                    echo "              ";
                    if (isset($context["profiles"])) { $_profiles_ = $context["profiles"]; } else { $_profiles_ = null; }
                    if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                    $context["profile"] = $this->getAttribute($_profiles_, $_teacherId_, array(), "array");
                    // line 35
                    echo "            <div class=\"teacher-item teacher-item-";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
                    echo " ";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "first")) {
                        echo "teacher-item-active";
                    }
                    echo "\">
              <div class=\"nickname\"><a href=\"";
                    // line 36
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                    echo "\">";
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                    echo "</a></div>
              <div class=\"title\">";
                    // line 37
                    if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_user_, "title"), "html", null, true);
                    echo "</div>
              <div class=\"divider\"></div>
              <div class=\"about\">";
                    // line 39
                    if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                    echo $this->getAttribute($_profile_, "about");
                    echo "</div>
            </div>
            ";
                }
                // line 42
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </div>
      </div>
    ";
        } else {
            // line 46
            echo "      <div class=\"empty\">该课程尚未设置教师</div>
    ";
        }
        // line 48
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:teachers-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 48,  204 => 46,  199 => 43,  178 => 39,  172 => 37,  164 => 36,  153 => 35,  148 => 34,  144 => 33,  139 => 32,  121 => 31,  110 => 22,  86 => 18,  75 => 17,  66 => 15,  61 => 14,  33 => 10,  30 => 9,  21 => 2,  247 => 72,  239 => 69,  226 => 61,  218 => 57,  214 => 55,  200 => 51,  188 => 48,  183 => 47,  177 => 46,  173 => 45,  167 => 43,  152 => 38,  146 => 36,  142 => 34,  138 => 32,  134 => 30,  127 => 28,  123 => 26,  116 => 24,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 21,  91 => 15,  80 => 14,  70 => 16,  65 => 12,  62 => 11,  59 => 10,  49 => 8,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  22 => 2,  19 => 1,  933 => 255,  930 => 254,  927 => 253,  922 => 251,  919 => 250,  872 => 243,  870 => 242,  867 => 241,  864 => 240,  859 => 238,  856 => 237,  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 59,  216 => 74,  211 => 73,  206 => 52,  201 => 69,  197 => 67,  193 => 49,  185 => 42,  179 => 61,  174 => 60,  170 => 44,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 22,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 13,  34 => 3,  29 => 13,);
    }
}
