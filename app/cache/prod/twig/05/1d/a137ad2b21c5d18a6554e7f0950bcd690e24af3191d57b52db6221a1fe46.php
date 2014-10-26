<?php

/* TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig */
class __TwigTemplate_051da137ad2b21c5d18a6554e7f0950bcd690e24af3191d57b52db6221a1fe46 extends Twig_Template
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
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t <h3 class=\"panel-title\">最新购买记录</h3>
\t\t</div>
    ";
        // line 7
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        if ($_orders_) {
            // line 8
            echo "      <table class=\"table table-condensed table-bordered table-striped table-hover\">
  \t    <thead>
  \t      <tr>
  \t        <th width=\"50%\">订单名称</th>
  \t        <th width=\"10%\">金额</th>
  \t        <th width=\"10%\">购买人</th>
  \t        <th width=\"20%\">付款方式</th>
  \t      </tr>
  \t    </thead>
        <tbody>
          ";
            // line 18
            if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_orders_);
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 19
                echo "            <tr>
            \t<td>
  \t\t          ";
                // line 21
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                if (($this->getAttribute($_order_, "targetType") == "course")) {
                    // line 22
                    echo "                  <a href=\"";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_order_, "targetId"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                    echo "</a>
                ";
                } elseif (($this->getAttribute($_order_, "targetType") == "vip")) {
                    // line 24
                    echo "              \t\t<a href=\"";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($_order_, "targetId"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                    echo "</a>
              \t";
                } else {
                    // line 26
                    echo "  \t            \t";
                    if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                    echo "
              \t";
                }
                // line 28
                echo "            \t</td>
              <td class=\"money-text\">";
                // line 29
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "amount"), "html", null, true);
                echo " 元</td>
              <td>
              \t";
                // line 31
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo $_admin_macro_->getuser_link($this->getAttribute($_users_, $this->getAttribute($_order_, "userId"), array(), "array"));
                echo "
              </td>
              <td>
              \t<span class=\"text-sm\">";
                // line 34
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($_order_, "payment")), "--"), "html", null, true);
                echo "  / ";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_order_, "paidTime"), "Y-n-d H:i"), "html", null, true);
                echo "</span>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 41
            echo "      <div class=\"empty\">暂无最新购买记录</div>
    ";
        }
        // line 43
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  114 => 38,  100 => 34,  91 => 31,  75 => 26,  55 => 22,  52 => 21,  43 => 18,  31 => 8,  28 => 7,  172 => 63,  163 => 58,  155 => 55,  148 => 53,  145 => 52,  136 => 49,  132 => 47,  124 => 43,  106 => 40,  77 => 31,  70 => 28,  65 => 24,  61 => 25,  56 => 24,  51 => 23,  39 => 13,  21 => 2,  151 => 28,  127 => 22,  119 => 41,  112 => 41,  102 => 16,  98 => 15,  94 => 14,  85 => 29,  82 => 28,  58 => 5,  40 => 3,  36 => 12,  24 => 1,  19 => 1,  246 => 75,  241 => 71,  236 => 21,  230 => 13,  223 => 78,  221 => 77,  218 => 76,  216 => 75,  209 => 71,  198 => 63,  190 => 62,  186 => 61,  181 => 58,  170 => 56,  168 => 61,  165 => 54,  159 => 51,  152 => 50,  143 => 26,  134 => 48,  125 => 47,  115 => 46,  113 => 45,  93 => 37,  90 => 36,  87 => 28,  80 => 24,  76 => 23,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  54 => 17,  48 => 19,  46 => 14,  38 => 12,  23 => 1,  146 => 86,  139 => 82,  135 => 24,  128 => 45,  121 => 72,  105 => 17,  101 => 59,  88 => 12,  83 => 33,  71 => 9,  64 => 25,  49 => 15,  44 => 12,  42 => 13,  35 => 6,  32 => 5,  27 => 6,  25 => 2,);
    }
}
