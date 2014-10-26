<?php

/* TopxiaWebBundle:User:friend.html.twig */
class __TwigTemplate_0d779e612cdcd4f977cfaec8ed1f50943652325f25035255c0214bb28da11864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:User:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = "friend";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname"), "html", null, true);
        echo "的公共主页 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<ul class=\"nav nav-pills nav-mini userpage-sec-nav\">
\t\t\t<li ";
        // line 12
        if (isset($context["friendNav"])) { $_friendNav_ = $context["friendNav"]; } else { $_friendNav_ = null; }
        if (($_friendNav_ == "following")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_following", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">关注</a></li>
\t\t\t<li ";
        // line 13
        if (isset($context["friendNav"])) { $_friendNav_ = $context["friendNav"]; } else { $_friendNav_ = null; }
        if (($_friendNav_ == "follower")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follower", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
        echo "\">粉丝</a></li>
\t\t</ul>
\t</div>
</div>


<div class=\"row\">
\t";
        // line 20
        if (isset($context["friends"])) { $_friends_ = $context["friends"]; } else { $_friends_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_friends_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 21
            echo "\t<div class=\"col-md-4\">
\t\t<div class=\"friendcard clearfix\">
\t\t\t<a href=\"";
            // line 23
            if (isset($context["friend"])) { $_friend_ = $context["friend"]; } else { $_friend_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_friend_, "id"))), "html", null, true);
            echo "\"><img src=\"";
            if (isset($context["friend"])) { $_friend_ = $context["friend"]; } else { $_friend_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_friend_, "mediumAvatar"), ""), "html", null, true);
            echo "\" class=\"avatar\"></a>
\t\t\t<div class=\"infos\">
\t\t\t\t<a href=\"";
            // line 25
            if (isset($context["friend"])) { $_friend_ = $context["friend"]; } else { $_friend_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_friend_, "id"))), "html", null, true);
            echo "\" class=\"nickname\">";
            if (isset($context["friend"])) { $_friend_ = $context["friend"]; } else { $_friend_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_friend_, "nickname"), "html", null, true);
            echo "</a>
\t\t\t\t<div class=\"title\">";
            // line 26
            if (isset($context["friend"])) { $_friend_ = $context["friend"]; } else { $_friend_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_friend_, "title"), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t  ";
            if (isset($context["friendNav"])) { $_friendNav_ = $context["friendNav"]; } else { $_friendNav_ = null; }
            if (($_friendNav_ == "following")) {
                // line 32
                echo "\t\t  <div class=\"empty\">无关注的人</div>
\t  ";
            } elseif (($_friendNav_ == "follower")) {
                // line 34
                echo "\t\t  <div class=\"empty\">无粉丝</div>
\t  ";
            }
            // line 36
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  126 => 36,  122 => 34,  118 => 32,  114 => 31,  103 => 26,  95 => 25,  86 => 23,  82 => 21,  76 => 20,  60 => 13,  50 => 12,  44 => 8,  41 => 7,  31 => 3,  26 => 5,);
    }
}
