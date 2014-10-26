<?php

/* TopxiaWebBundle:Group:new-group-list.html.twig */
class __TwigTemplate_682d2d5ae3bb18f7528967042136e5cf9461bd0f10fb5d15549a720af5deb089 extends Twig_Template
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
        if (isset($context["newGroups"])) { $_newGroups_ = $context["newGroups"]; } else { $_newGroups_ = null; }
        if ($_newGroups_) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">新晋小组</div>
    <div class=\"panel-body\">
      <ul class=\"media-list\">
        ";
            // line 6
            if (isset($context["newGroups"])) { $_newGroups_ = $context["newGroups"]; } else { $_newGroups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_newGroups_);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 7
                echo "          <li class=\"media\">
            <a href=\"";
                // line 8
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                echo "\" class=\"pull-left\">
              <img src=\"";
                // line 9
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo"), "group.png"), "html", null, true);
                echo "\" class=\"media-object group-logo-sm\">
            </a>
            <div class=\"media-body\">
              <p>
                <a href=\"";
                // line 13
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                echo "\" title=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                echo "\">";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                echo "</a>
                <span class=\"text-success fsn\">";
                // line 14
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "memberNum"), "html", null, true);
                echo "个成员</span>
              </p>
              <p class=\"fsn text-muted\">";
                // line 16
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_group_, "about"), 30);
                echo "</p>
              
            </div>
            
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:new-group-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  41 => 9,  36 => 8,  162 => 41,  155 => 39,  147 => 35,  136 => 33,  133 => 32,  130 => 31,  125 => 30,  117 => 28,  103 => 25,  100 => 24,  91 => 19,  88 => 18,  79 => 22,  68 => 13,  60 => 14,  45 => 7,  42 => 6,  37 => 5,  28 => 6,  22 => 2,  19 => 1,  90 => 13,  84 => 18,  82 => 17,  75 => 15,  71 => 14,  65 => 10,  62 => 9,  57 => 8,  54 => 7,  48 => 8,  43 => 4,  40 => 3,  33 => 7,  278 => 103,  276 => 102,  273 => 101,  267 => 97,  250 => 93,  239 => 89,  231 => 88,  227 => 86,  222 => 85,  217 => 82,  210 => 81,  202 => 77,  191 => 69,  186 => 67,  183 => 66,  175 => 60,  169 => 58,  167 => 57,  163 => 56,  157 => 55,  150 => 53,  144 => 49,  141 => 48,  132 => 41,  127 => 36,  118 => 29,  111 => 27,  95 => 21,  85 => 20,  77 => 14,  72 => 16,  66 => 16,  59 => 11,  53 => 9,  50 => 6,  44 => 5,  38 => 4,  31 => 3,);
    }
}
