<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_ec7d8ee3ffebe427a0986dc852f33fdaa0effbca878d32c3862a3c1416bf970d extends Twig_Template
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
        // line 14
        echo "
";
        // line 22
        echo "
";
        // line 45
        echo "
";
    }

    // line 1
    public function getuser_avatar($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a class=\"user-link user-avatar-link ";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\" href=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">
    <img src=\"";
            // line 3
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "smallAvatar"), ""), "html", null, true);
            echo "\">
  </a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getuser_link($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "  ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 9
                echo "    <a ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ($_class_) {
                    echo "class=\"";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "\"";
                }
                echo " href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 11
                echo "    <span class=\"text-muted\">用户已删除</span>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getflash_messages()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 17
                echo "    ";
                if (isset($context["flashMessages"])) { $_flashMessages_ = $context["flashMessages"]; } else { $_flashMessages_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_flashMessages_);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 18
                    echo "      <div class=\"alert alert-";
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    echo twig_escape_filter($this->env, $_type_, "html", null, true);
                    echo "\">";
                    if (isset($context["flashMessage"])) { $_flashMessage_ = $context["flashMessage"]; } else { $_flashMessage_ = null; }
                    echo $_flashMessage_;
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getbytesToSize($_bytes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $_bytes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "  ";
            ob_start();
            // line 25
            echo "      
      ";
            // line 26
            $context["kilobyte"] = 1024;
            // line 27
            echo "      ";
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            $context["megabyte"] = ($_kilobyte_ * 1024);
            // line 28
            echo "      ";
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            $context["gigabyte"] = ($_megabyte_ * 1024);
            // line 29
            echo "      ";
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            $context["terabyte"] = ($_gigabyte_ * 1024);
            // line 30
            echo "
      ";
            // line 31
            if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
            if (($_bytes_ < $_kilobyte_)) {
                // line 32
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                echo twig_escape_filter($this->env, ($_bytes_ . " B"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_megabyte_)) {
                // line 34
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_kilobyte_), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_gigabyte_)) {
                // line 36
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_megabyte_), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif (($_bytes_ < $_terabyte_)) {
                // line 38
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_gigabyte_), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 40
                echo "          ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_terabyte_), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 42
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 46
    public function getpaginator($_paginator = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "  ";
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if (($this->getAttribute($_paginator_, "lastPage") > 1)) {
                // line 48
                echo "    <ul  class=\"pagination\">
      ";
                // line 49
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage") == $this->getAttribute($_paginator_, "firstPage"))) {
                    // line 50
                    echo "        <li class=\"disabled\"><span>上一页</span></li>
      ";
                } else {
                    // line 52
                    echo "        <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "previousPage")), "method"), "html", null, true);
                    echo "\">上一页</a></li>
      ";
                }
                // line 54
                echo "      ";
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_paginator_, "pages"));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 55
                    echo "        <li ";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    if (($_page_ == $this->getAttribute($_paginator_, "currentPage"))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $_page_), "method"), "html", null, true);
                    echo "\">";
                    if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                    echo twig_escape_filter($this->env, $_page_, "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "
      ";
                // line 58
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($this->getAttribute($_paginator_, "currentPage") == $this->getAttribute($_paginator_, "lastPage"))) {
                    // line 59
                    echo "        <li class=\"disabled\"><span>下一页</span></li>
      ";
                } else {
                    // line 61
                    echo "        <li><a  href=\"";
                    if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "getPageUrl", array(0 => $this->getAttribute($_paginator_, "nextPage")), "method"), "html", null, true);
                    echo "\">下一页</a></li>
      ";
                }
                // line 63
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 63,  322 => 61,  318 => 59,  315 => 58,  312 => 57,  292 => 55,  275 => 50,  272 => 49,  269 => 48,  241 => 42,  233 => 40,  225 => 38,  217 => 36,  209 => 34,  202 => 32,  188 => 29,  175 => 25,  172 => 24,  146 => 20,  133 => 18,  127 => 17,  121 => 16,  112 => 15,  77 => 8,  65 => 7,  51 => 3,  42 => 2,  22 => 22,  19 => 14,  429 => 135,  418 => 136,  416 => 135,  409 => 131,  394 => 129,  389 => 128,  374 => 119,  371 => 118,  365 => 115,  360 => 112,  356 => 111,  342 => 102,  338 => 101,  333 => 100,  327 => 98,  316 => 93,  309 => 90,  307 => 89,  302 => 87,  297 => 86,  291 => 84,  279 => 52,  271 => 79,  265 => 47,  254 => 46,  248 => 71,  237 => 68,  235 => 67,  230 => 66,  220 => 62,  214 => 58,  206 => 56,  198 => 54,  196 => 53,  184 => 28,  181 => 43,  178 => 26,  173 => 37,  166 => 26,  157 => 23,  141 => 19,  136 => 13,  131 => 12,  111 => 141,  109 => 140,  106 => 139,  104 => 42,  93 => 40,  89 => 38,  87 => 37,  81 => 9,  74 => 30,  71 => 29,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  48 => 13,  44 => 12,  40 => 11,  29 => 2,  27 => 1,  39 => 4,  28 => 7,  26 => 6,  758 => 271,  738 => 265,  731 => 263,  728 => 262,  722 => 260,  719 => 259,  712 => 256,  704 => 255,  696 => 254,  693 => 253,  689 => 252,  686 => 251,  682 => 249,  675 => 247,  672 => 246,  665 => 243,  657 => 242,  654 => 241,  650 => 240,  646 => 239,  643 => 238,  639 => 236,  636 => 235,  632 => 233,  628 => 231,  624 => 230,  620 => 229,  616 => 228,  612 => 226,  608 => 224,  605 => 223,  597 => 222,  587 => 219,  582 => 218,  579 => 217,  574 => 216,  571 => 215,  567 => 214,  556 => 213,  546 => 205,  543 => 204,  537 => 200,  531 => 199,  519 => 197,  515 => 196,  510 => 195,  504 => 191,  500 => 190,  497 => 189,  494 => 188,  489 => 185,  486 => 184,  480 => 180,  474 => 179,  461 => 174,  454 => 172,  450 => 170,  447 => 169,  439 => 168,  432 => 165,  427 => 164,  424 => 118,  420 => 162,  415 => 161,  407 => 155,  403 => 154,  400 => 153,  395 => 150,  390 => 147,  387 => 127,  381 => 124,  375 => 141,  364 => 134,  359 => 133,  347 => 104,  343 => 129,  334 => 127,  324 => 97,  321 => 124,  313 => 123,  304 => 119,  299 => 118,  293 => 115,  290 => 114,  286 => 54,  283 => 82,  280 => 111,  277 => 109,  273 => 107,  267 => 104,  255 => 98,  250 => 97,  243 => 70,  238 => 93,  227 => 65,  222 => 88,  216 => 84,  211 => 83,  204 => 79,  199 => 76,  195 => 31,  192 => 30,  189 => 73,  186 => 71,  180 => 27,  174 => 66,  161 => 23,  156 => 62,  153 => 22,  149 => 21,  144 => 20,  137 => 55,  132 => 52,  128 => 51,  125 => 50,  122 => 48,  118 => 11,  110 => 42,  105 => 39,  99 => 11,  96 => 37,  91 => 34,  88 => 33,  85 => 32,  83 => 31,  79 => 29,  72 => 26,  66 => 23,  61 => 20,  58 => 19,  52 => 14,  45 => 12,  41 => 10,  38 => 9,  33 => 3,  30 => 1,  25 => 45,);
    }
}
