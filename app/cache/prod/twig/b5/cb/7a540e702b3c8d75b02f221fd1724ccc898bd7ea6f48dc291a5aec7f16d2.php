<?php

/* TopxiaWebBundle:Message:send-message-modal.html.twig */
class __TwigTemplate_b5cb7a540e702b3c8d75b02f221fd1724ccc898bd7ea6f48dc291a5aec7f16d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 36
        $context["hide_footer"] = true;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "发送私信";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"message-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        if (isset($context["userId"])) { $_userId_ = $context["userId"]; } else { $_userId_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $_userId_)), "html", null, true);
        echo "\">
    ";
        // line 8
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "receiver"), 'label', array("label" => "收件人"));
        echo "</div>
      <div class=\"col-md-10 controls\">
        ";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "receiver"), 'widget', array("attr" => array("class" => "form-control", "rows" => 1, "data-url" => $this->env->getExtension('routing')->getPath("message_check_receiver"))));
        echo "
      </div> 
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "content"), 'label', array("label" => "内容"));
        echo "</div>
      <div class=\"col-md-10 controls\">
        ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "content"), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-offset-2 col-md-10 controls\">
        ";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        <button class=\"btn btn-primary\" type=\"submit\">发送</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

  <script> app.load('user/message-send-modal'); </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:send-message-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  81 => 25,  71 => 19,  65 => 17,  56 => 12,  50 => 10,  46 => 8,  40 => 6,  37 => 5,  31 => 3,  26 => 36,);
    }
}
