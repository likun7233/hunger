<?php

/* TopxiaAdminBundle:Block:blockhistory-preview.html.twig */
class __TwigTemplate_ebc3226704487fd34d30a713ee2f56817f591dc176aa673bd7b7561348be2522 extends Twig_Template
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
        if (isset($context["blockHistory"])) { $_blockHistory_ = $context["blockHistory"]; } else { $_blockHistory_ = null; }
        echo $this->getAttribute($_blockHistory_, "content");
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:blockhistory-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
