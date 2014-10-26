<?php

/* TopxiaWebBundle:Message:item.html.twig */
class __TwigTemplate_f4b0c842ef3c615fdb7c439c7858ef40c072562980e9b67ec93f942b4f1e00df extends Twig_Template
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
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "<li class=\"media message-me\" parent-url=\"";
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">

  ";
        // line 4
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $_web_macro_->getuser_avatar($this->getAttribute($_app_, "user"), "pull-right");
        echo "

  <div class=\"media-body\">
    <div class=\"popover left\">
      <div class=\"arrow\"></div>
      <div class=\"popover-content\">
        <div class=\"message-content\">
               <strong>我：</strong> 
              ";
        // line 12
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_message_, "content"), "html", null, true);
        echo "
        </div>
        <div class=\"message-footer\">
          <span class=\"text-muted\">";
        // line 15
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_message_, "createdTime")), "html", null, true);
        echo "</span>
          <div class=\"message-actions\">
            <a class=\"text-muted delete-message\" href=\"javascript:\" data-url=\"";
        // line 17
        if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_delete", array("conversationId" => $this->getAttribute($_conversation_, "id"), "messageId" => $this->getAttribute($_message_, "id"))), "html", null, true);
        echo "\">删除</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  47 => 15,  40 => 12,  27 => 4,  21 => 2,  19 => 1,);
    }
}
