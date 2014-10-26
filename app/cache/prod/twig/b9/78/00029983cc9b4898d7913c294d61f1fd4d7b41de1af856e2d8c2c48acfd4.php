<?php

/* TopxiaWebBundle:MyOrder:index.html.twig */
class __TwigTemplate_b97800029983cc9b4898d7913c294d61f1fd4d7b41de1af856e2d8c2c48acfd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:MyOrder:layout.html.twig");

        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyOrder:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "my/orders";
        // line 5
        $context["main_nav"] = "orders";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main_body($context, array $blocks = array())
    {
        // line 8
        echo "  <table class=\"table table-striped table-hover\" id=\"orders-table\">
    <thead>
      <th>名称</th>
      <th>成交时间</th>
      <th>价格</th>
      <th>状态</th>
    </thead>
    <tbody>
      ";
        // line 16
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_orders_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 17
            echo "        <tr>
          <td>
            ";
            // line 19
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            if (($this->getAttribute($_order_, "targetType") == "course")) {
                // line 20
                echo "              <a href=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_order_, "targetId"))), "html", null, true);
                echo "\" target=\"_blank\">";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                echo "</a>
            ";
            } elseif (($this->getAttribute($_order_, "targetType") == "vip")) {
                // line 22
                echo "              <a href=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($_order_, "targetId"))), "html", null, true);
                echo "\" target=\"_blank\">";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 24
                echo "              ";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "title"), "html", null, true);
                echo "
            ";
            }
            // line 26
            echo "            <div class=\"text-sm text-muted\">
              订单号：";
            // line 27
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "sn"), "html", null, true);
            echo "
            </div>
          </td>
          <td>";
            // line 30
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_order_, "createdTime"), "Y-n-d H:i"), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "amount"), "html", null, true);
            echo "元</td>
          <td>
            ";
            // line 33
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("orderStatus:html", $this->getAttribute($_order_, "status"));
            echo "
            <div class=\"actions\">
              ";
            // line 35
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            if (($this->getAttribute($_order_, "status") == "refunding")) {
                // line 36
                echo "                <a href=\"javascript:;\" class=\"text-sm cancel-refund\" data-url=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute($_order_, "id"))), "html", null, true);
                echo "\">取消退款</a>
              ";
            }
            // line 38
            echo "            </div>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <tr>
          <td colspan=\"20\" class=\"empty\">无订单记录</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  130 => 42,  122 => 38,  115 => 36,  112 => 35,  106 => 33,  100 => 31,  95 => 30,  88 => 27,  85 => 26,  78 => 24,  68 => 22,  58 => 20,  55 => 19,  51 => 17,  45 => 16,  35 => 8,  32 => 7,  27 => 5,  25 => 3,);
    }
}
