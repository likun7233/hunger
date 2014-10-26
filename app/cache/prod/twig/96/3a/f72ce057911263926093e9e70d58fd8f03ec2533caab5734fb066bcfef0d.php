<?php

/* TopxiaWebBundle:Message:conversation-show.html.twig */
class __TwigTemplate_963af72ce057911263926093e9e70d58fd8f03ec2533caab5734fb066bcfef0d extends Twig_Template
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
        $context["script_controller"] = "message/show";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "私信 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\" class=\"btn btn-default pull-right\">返回我的私信</a>
        <h2>与";
        // line 12
        if (isset($context["receiver"])) { $_receiver_ = $context["receiver"]; } else { $_receiver_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_receiver_, "nickname"), "html", null, true);
        echo "的私信对话</h2>
      </div>

      <form id=\"message-reply-form\" class=\"message-reply-form clearfix\" method=\"post\" 
      action=\"";
        // line 16
        if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_conversation_show", array("conversationId" => $this->getAttribute($_conversation_, "id"))), "html", null, true);
        echo "\">
        <div class=\"form-group\">
          ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "content"), 'widget', array("attr" => array("class" => "form-control", "rows" => 3, "placeholder" => "请输入私信内容")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
          <button id=\"course-reply-btn\" class=\"btn btn-primary pull-right disabled\">发送</button>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <ul class=\"media-list message-list\">
        ";
        // line 30
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_messages_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "          ";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            $this->env->loadTemplate("TopxiaWebBundle:Message:message-item.html.twig")->display(array_merge($context, array("message" => $_message_)));
            // line 32
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </ul>

      ";
        // line 35
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "

    </div><!-- /panel -->
  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:conversation-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  125 => 33,  111 => 32,  107 => 31,  89 => 30,  82 => 26,  74 => 22,  66 => 18,  60 => 16,  52 => 12,  48 => 11,  41 => 6,  38 => 5,  31 => 3,  26 => 4,);
    }
}
