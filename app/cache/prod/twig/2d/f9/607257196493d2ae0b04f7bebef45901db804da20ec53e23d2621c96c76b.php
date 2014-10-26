<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_2df9607257196493d2ae0b04f7bebef45901db804da20ec53e23d2621c96c76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "<div class=\"modal-dialog";
        if (isset($context["modal_class"])) { $_modal_class_ = $context["modal_class"]; } else { $_modal_class_ = null; }
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter($_modal_class_, "")) : (""))) {
            echo " ";
            if (isset($context["modal_class"])) { $_modal_class_ = $context["modal_class"]; } else { $_modal_class_ = null; }
            echo twig_escape_filter($this->env, $_modal_class_, "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 9
        if (isset($context["hide_footer"])) { $_hide_footer_ = $context["hide_footer"]; } else { $_hide_footer_ = null; }
        if ((!((array_key_exists("hide_footer", $context)) ? (_twig_default_filter($_hide_footer_, false)) : (false)))) {
            // line 10
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 12
        echo "  </div>
</div>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  65 => 8,  60 => 6,  55 => 12,  49 => 10,  46 => 9,  42 => 8,  37 => 6,  24 => 2,  22 => 1,  72 => 18,  69 => 17,  62 => 12,  56 => 10,  44 => 8,  41 => 7,  38 => 6,  32 => 5,  27 => 3,);
    }
}
