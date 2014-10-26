<?php

/* TopxiaWebBundle:Group:layout.html.twig */
class __TwigTemplate_eeab30e3938828381d48a5f7675f019c58bcd5a59858d53bf9cdb55d420de412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'group_body' => array($this, 'block_group_body'),
            'group_main' => array($this, 'block_group_main'),
            'group_side' => array($this, 'block_group_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "- ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/group.css"), "html", null, true);
        echo "\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "   ";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-header.html.twig")->display(array_merge($context, array("groupinfo" => $_groupinfo_, "is_groupmember" => ((array_key_exists("is_groupmember", $context)) ? (_twig_default_filter($_is_groupmember_, "")) : ("")))));
        // line 9
        echo "
  ";
        // line 10
        $this->displayBlock('group_body', $context, $blocks);
    }

    public function block_group_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"row\">
      <div class=\"col-md-8 group-main\">
        ";
        // line 13
        $this->displayBlock('group_main', $context, $blocks);
        // line 14
        echo "      </div>

      <div class=\"col-md-4 group-side\">
        ";
        // line 17
        $this->displayBlock('group_side', $context, $blocks);
        // line 18
        echo "      </div>
    </div>
  ";
    }

    // line 13
    public function block_group_main($context, array $blocks = array())
    {
    }

    // line 17
    public function block_group_side($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  84 => 18,  82 => 17,  75 => 13,  71 => 11,  65 => 10,  62 => 9,  57 => 8,  54 => 7,  48 => 5,  43 => 4,  40 => 3,  33 => 2,  278 => 103,  276 => 102,  273 => 101,  267 => 97,  250 => 93,  239 => 89,  231 => 88,  227 => 86,  222 => 85,  217 => 82,  210 => 81,  202 => 77,  191 => 69,  186 => 67,  183 => 66,  175 => 60,  169 => 58,  167 => 57,  163 => 56,  157 => 55,  150 => 53,  144 => 49,  141 => 48,  132 => 41,  127 => 36,  118 => 29,  111 => 27,  95 => 17,  85 => 20,  77 => 14,  72 => 16,  66 => 15,  59 => 11,  53 => 7,  50 => 6,  44 => 5,  38 => 4,  31 => 3,);
    }
}
