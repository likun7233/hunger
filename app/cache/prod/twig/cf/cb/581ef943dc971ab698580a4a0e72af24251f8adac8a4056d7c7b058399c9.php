<?php

/* TopxiaAdminBundle:User:roles-modal.html.twig */
class __TwigTemplate_cfcb581ef943dc971ab698580a4a0e72af24251f8adac8a4056d7c7b058399c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "设置用户组";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"user-roles-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_roles", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\" data-currentuser=\"";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "id"), "html", null, true);
        echo "\" data-edituser=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
        echo "\">
  <div class=\"checkboxs\">
    ";
        // line 10
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->checkboxs("roles", $this->env->getExtension('topxia_web_twig')->getDict("userRole"), $this->getAttribute($_user_, "roles"));
        echo "
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        // line 18
        echo "  <button id=\"change-user-roles-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-roles-form\">保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('user/roles-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:roles-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  69 => 17,  62 => 12,  56 => 10,  44 => 8,  41 => 7,  38 => 6,  32 => 5,  27 => 3,);
    }
}
