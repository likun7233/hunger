<?php

/* TopxiaAdminBundle:System:ip-blacklist.html.twig */
class __TwigTemplate_004ac07096b6b3184632c3130386e41c21a289a79f2178d94f5ae76185d7eb6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "ip_blacklist";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "IP黑名单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"page-header\"><h1>IP黑名单</h1></div>

";
        // line 11
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form method=\"post\">
\t<textarea id=\"ips\" name=\"ips\" rows=\"18\" class=\"form-control\">";
        // line 14
        if (isset($context["ips"])) { $_ips_ = $context["ips"]; } else { $_ips_ = null; }
        if ($_ips_) {
            if (isset($context["ips"])) { $_ips_ = $context["ips"]; } else { $_ips_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_ips_, "ips"), "html", null, true);
        }
        // line 15
        echo "</textarea>

  <div class=\"help-block\">一行一个IP，被加入黑名单的IP将被禁止访问！暂不支持网段的封锁!</div>
  <input type=\"submit\" class=\"btn btn-primary\" value=\"提交\">
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:ip-blacklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  59 => 15,  53 => 14,  46 => 11,  41 => 8,  38 => 7,  31 => 3,  26 => 5,);
    }
}
