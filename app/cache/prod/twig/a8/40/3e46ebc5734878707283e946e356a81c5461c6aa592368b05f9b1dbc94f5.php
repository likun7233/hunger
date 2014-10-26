<?php

/* TopxiaAdminBundle::macro.html.twig */
class __TwigTemplate_a8403e46ebc5734878707283e946e356a81c5461c6aa592368b05f9b1dbc94f5 extends Twig_Template
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
        // line 8
        echo "
";
    }

    // line 1
    public function getuser_link($_user = null, $_class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
            "class" => $_class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($_user_) {
                // line 3
                echo "\t\t<a ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if ($_class_) {
                    echo "class=\"";
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">用户已删除</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getbytesToSize($_bytes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $_bytes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            $context["megabyte"] = ($_kilobyte_ * 1024);
            // line 14
            echo "\t    ";
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            $context["gigabyte"] = ($_megabyte_ * 1024);
            // line 15
            echo "\t    ";
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            $context["terabyte"] = ($_gigabyte_ * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
            if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
            if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
            if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
            if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
            if (($_bytes_ < $_kilobyte_)) {
                // line 18
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                echo twig_escape_filter($this->env, ($_bytes_ . " B"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_megabyte_)) {
                // line 20
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["kilobyte"])) { $_kilobyte_ = $context["kilobyte"]; } else { $_kilobyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_kilobyte_), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_gigabyte_)) {
                // line 22
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["megabyte"])) { $_megabyte_ = $context["megabyte"]; } else { $_megabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_megabyte_), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif (($_bytes_ < $_terabyte_)) {
                // line 24
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["gigabyte"])) { $_gigabyte_ = $context["gigabyte"]; } else { $_gigabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_gigabyte_), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                if (isset($context["bytes"])) { $_bytes_ = $context["bytes"]; } else { $_bytes_ = null; }
                if (isset($context["terabyte"])) { $_terabyte_ = $context["terabyte"]; } else { $_terabyte_ = null; }
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ($_bytes_ / $_terabyte_), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 28,  127 => 22,  119 => 20,  112 => 18,  102 => 16,  98 => 15,  94 => 14,  85 => 11,  82 => 10,  58 => 5,  40 => 3,  36 => 2,  24 => 1,  19 => 8,  246 => 75,  241 => 71,  236 => 21,  230 => 13,  223 => 78,  221 => 77,  218 => 76,  216 => 75,  209 => 71,  198 => 63,  190 => 62,  186 => 61,  181 => 58,  170 => 56,  168 => 55,  165 => 54,  159 => 51,  152 => 50,  143 => 26,  134 => 48,  125 => 47,  115 => 46,  113 => 45,  93 => 30,  90 => 13,  87 => 28,  80 => 24,  76 => 23,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  54 => 17,  48 => 15,  46 => 14,  38 => 12,  23 => 1,  146 => 86,  139 => 82,  135 => 24,  128 => 76,  121 => 72,  105 => 17,  101 => 59,  88 => 12,  83 => 46,  71 => 9,  64 => 25,  49 => 15,  44 => 12,  42 => 13,  35 => 6,  32 => 5,  27 => 3,  25 => 2,);
    }
}
