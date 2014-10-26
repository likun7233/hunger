<?php

/* TopxiaAdminBundle:OperationAnalysis:register.table.html.twig */
class __TwigTemplate_7f346e22849893739caf0148eaa1d0e5fc929c6d4b801fd5e4890d88fbdaa6e5 extends Twig_Template
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
        echo "      <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
          <thead>
            <tr>
              <th>用户名</th>
              <th>注册邮箱</th>
              <th>注册来源</th>
              <th>IP地址</th>
              <th>注册时间</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 12
        if (isset($context["registerDetail"])) { $_registerDetail_ = $context["registerDetail"]; } else { $_registerDetail_ = null; }
        if ($_registerDetail_) {
            // line 13
            echo "            ";
            if (isset($context["registerDetail"])) { $_registerDetail_ = $context["registerDetail"]; } else { $_registerDetail_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_registerDetail_);
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 14
                echo "              <tr>
                <td>";
                // line 15
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "nickname"), "html", null, true);
                echo "</td>
                <td>";
                // line 16
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "email"), "html", null, true);
                echo "</td>
                <td>";
                // line 17
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (($this->getAttribute($_data_, "type") == "default")) {
                    echo "网站注册
                  ";
                } elseif (($this->getAttribute($_data_, "type") == "weibo")) {
                    // line 18
                    echo "新浪微博
                  ";
                } elseif (($this->getAttribute($_data_, "type") == "qq")) {
                    // line 19
                    echo "QQ
                  ";
                } elseif (($this->getAttribute($_data_, "type") == "renren")) {
                    // line 20
                    echo "人人
                  ";
                } elseif (($this->getAttribute($_data_, "type") == "discuz")) {
                    // line 21
                    echo "discuz
                  ";
                } elseif (($this->getAttribute($_data_, "type") == "phpwind")) {
                    // line 22
                    echo "phpwind
                  ";
                }
                // line 23
                echo "</td>
                <td>";
                // line 24
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "createdIp"), "html", null, true);
                echo "</td>
                <td>";
                // line 25
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_data_, "createdTime"), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "          </tbody>
      </table>    
      ";
        // line 31
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:register.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  101 => 29,  88 => 25,  80 => 23,  76 => 22,  64 => 19,  60 => 18,  54 => 17,  49 => 16,  44 => 15,  41 => 14,  32 => 12,  19 => 1,  194 => 65,  179 => 61,  168 => 60,  161 => 55,  157 => 53,  154 => 52,  143 => 45,  132 => 38,  119 => 32,  108 => 28,  98 => 28,  90 => 21,  83 => 24,  75 => 14,  72 => 21,  69 => 12,  62 => 8,  53 => 65,  51 => 12,  47 => 10,  45 => 8,  38 => 5,  35 => 13,  30 => 3,  28 => 2,  71 => 16,  68 => 20,  65 => 9,  55 => 67,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }
}
