<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_f00d2eeb01a3be7e10a4f0750684d9bbc5f7c1d8a3e0ee7ec8d2052eef30f105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/login";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3\">

    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>登录</h2></div>

      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

        ";
        // line 15
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 16
            echo "          <div class=\"alert alert-danger\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "message")), "html", null, true);
            echo "</div>
        ";
        }
        // line 18
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"login_username\">帐号</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 22
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" required />
            <div class=\"help-block\">请输入Email地址 / 用户昵称</div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"login_password\">密码</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"login_password\" type=\"password\" name=\"_password\" required />
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            <span class=\"checkbox mtm pull-right\">
              <label> <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码 </label>
            </span>
            ";
        // line 38
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "to"), "method")) {
            // line 39
            echo "              <input type=\"hidden\" name=\"_target_path\" value=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "to"), "method"), "html", null, true);
            echo "\" />
            ";
        }
        // line 41
        echo "            <button type=\"submit\" class=\"btn btn-fat btn-primary btn-large\">登录</button>
          </div>
        </div>
        ";
        // line 44
        if (isset($context["targetPath"])) { $_targetPath_ = $context["targetPath"]; } else { $_targetPath_ = null; }
        if (((array_key_exists("targetPath", $context)) ? (_twig_default_filter($_targetPath_, null)) : (null))) {
            // line 45
            echo "          <input type=\"hidden\" name=\"_target_path\" value=\"";
            if (isset($context["targetPath"])) { $_targetPath_ = $context["targetPath"]; } else { $_targetPath_ = null; }
            echo twig_escape_filter($this->env, $_targetPath_, "html", null, true);
            echo "\">
        ";
        }
        // line 47
        echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"ptl\">
          <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
          <span class=\"text-muted mhs\">|</span>
          <span class=\"text-muted\">还没有注册帐号？</span>
          <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">立即注册</a>
      </div>

      ";
        // line 57
        $this->env->loadTemplate("TopxiaWebBundle:Login:social-logins-block.html.twig")->display($context);
        // line 58
        echo "    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 58,  137 => 57,  131 => 54,  125 => 51,  117 => 47,  110 => 45,  107 => 44,  102 => 41,  95 => 39,  92 => 38,  72 => 22,  64 => 18,  57 => 16,  54 => 15,  49 => 13,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
