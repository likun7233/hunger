<?php

/* TopxiaWebBundle:Login:social-logins-block.html.twig */
class __TwigTemplate_5639e34dde3b59919111b959fcdb1991ae8f6df37cda104d02507d4614107d2d extends Twig_Template
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
        $context["settings"] = $this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array());
        // line 2
        echo "
";
        // line 3
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "enabled"), false)) : (false))) {
            // line 4
            echo "\t<div class=\"social-logins\">
\t\t";
            // line 5
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($_settings_, "weibo_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "weibo_enabled"), false)) : (false))) {
                // line 6
                echo "\t\t  <a href=\"";
                if (isset($context["targetPath"])) { $_targetPath_ = $context["targetPath"]; } else { $_targetPath_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind", array("type" => "weibo", "_target_path" => ((array_key_exists("targetPath", $context)) ? (_twig_default_filter($_targetPath_, "")) : ("")))), "html", null, true);
                echo "\" class=\"social-login-btn\"><i class=\"social-icon social-icon-weibo\"></i>微博帐号登录</a>
\t\t";
            }
            // line 8
            echo "
\t\t";
            // line 9
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($_settings_, "qq_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "qq_enabled"), false)) : (false))) {
                // line 10
                echo "\t\t  <a href=\"";
                if (isset($context["targetPath"])) { $_targetPath_ = $context["targetPath"]; } else { $_targetPath_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind", array("type" => "qq", "_target_path" => ((array_key_exists("targetPath", $context)) ? (_twig_default_filter($_targetPath_, "")) : ("")))), "html", null, true);
                echo "\" class=\"social-login-btn\"><i class=\"social-icon social-icon-qq\"></i>QQ帐号登录</a>
\t\t";
            }
            // line 12
            echo "
\t\t";
            // line 13
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($_settings_, "renren_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "renren_enabled"), false)) : (false))) {
                // line 14
                echo "\t\t  <a href=\"";
                if (isset($context["targetPath"])) { $_targetPath_ = $context["targetPath"]; } else { $_targetPath_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind", array("type" => "renren", "_target_path" => ((array_key_exists("targetPath", $context)) ? (_twig_default_filter($_targetPath_, "")) : ("")))), "html", null, true);
                echo "\" class=\"social-login-btn\"><i class=\"social-icon social-icon-renren\"></i>人人帐号登录</a>
\t\t";
            }
            // line 16
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:social-logins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 14,  56 => 13,  53 => 12,  46 => 10,  43 => 9,  40 => 8,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,  139 => 58,  137 => 57,  131 => 54,  125 => 51,  117 => 47,  110 => 45,  107 => 44,  102 => 41,  95 => 39,  92 => 38,  72 => 22,  64 => 18,  57 => 16,  54 => 15,  49 => 13,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
