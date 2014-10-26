<?php

/* TopxiaWebBundle:Bootstrap:panel.html.twig */
class __TwigTemplate_3fc023c2b36b66118b44cd51109d086a230066b65f735ffaff5b42b8f00a220d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        $context["id"] = ((array_key_exists("id", $context)) ? (_twig_default_filter($_id_, null)) : (null));
        // line 2
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($_class_, null)) : (null));
        // line 3
        echo "<div ";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if ($_id_) {
            echo "id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" ";
        }
        echo "class=\"panel panel-default ";
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        if ($_class_) {
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
        }
        echo "\">
  <div class=\"panel-heading\">";
        // line 4
        $this->displayBlock('heading', $context, $blocks);
        echo "</div>
  <div class=\"panel-body\">";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
</div>";
    }

    // line 4
    public function block_heading($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  48 => 5,  44 => 4,  27 => 3,  24 => 2,  21 => 1,  140 => 38,  129 => 28,  118 => 26,  116 => 25,  106 => 23,  96 => 21,  86 => 19,  76 => 17,  73 => 16,  70 => 15,  62 => 9,  59 => 5,  53 => 39,  51 => 38,  47 => 36,  45 => 8,  41 => 6,  38 => 5,  31 => 3,  546 => 243,  537 => 236,  534 => 235,  528 => 234,  512 => 229,  503 => 227,  500 => 226,  477 => 221,  468 => 219,  465 => 218,  446 => 213,  437 => 211,  434 => 210,  415 => 205,  406 => 203,  403 => 202,  384 => 197,  375 => 195,  372 => 194,  368 => 193,  363 => 192,  360 => 191,  357 => 190,  346 => 183,  334 => 175,  322 => 167,  308 => 157,  297 => 150,  285 => 142,  273 => 134,  261 => 126,  249 => 118,  243 => 114,  234 => 94,  222 => 86,  207 => 77,  199 => 75,  191 => 69,  184 => 65,  181 => 64,  174 => 60,  171 => 59,  165 => 55,  159 => 51,  156 => 50,  145 => 43,  139 => 39,  125 => 25,  115 => 19,  111 => 17,  107 => 15,  104 => 14,  101 => 13,  98 => 12,  92 => 11,  46 => 10,  43 => 9,  40 => 8,  33 => 3,  28 => 6,  26 => 5,);
    }
}
