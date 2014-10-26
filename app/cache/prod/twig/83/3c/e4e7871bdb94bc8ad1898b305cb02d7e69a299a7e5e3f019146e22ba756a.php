<?php

/* TopxiaWebBundle:Group:groups-threads-ul.html.twig */
class __TwigTemplate_833ce4e7871bdb94bc8ad1898b305cb02d7e69a299a7e5e3f019146e22ba756a extends Twig_Template
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
        echo "<ul class=\"media-list thread-list\">
  ";
        // line 2
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_threads_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 3
            echo "    ";
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            $context["group"] = (($this->getAttribute($_groups_, $this->getAttribute($_thread_, "groupId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_groups_, $this->getAttribute($_thread_, "groupId"), array(), "array"), null)) : (null));
            // line 4
            echo "    ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (((array_key_exists("users", $context)) ? (_twig_default_filter($_users_, null)) : (null))) {
                // line 5
                echo "    ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                $context["user"] = (($this->getAttribute($_users_, $this->getAttribute($_thread_, "userId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_users_, $this->getAttribute($_thread_, "userId"), array(), "array"), null)) : (null));
                // line 6
                echo "    ";
            }
            // line 7
            echo "    <li class=\"media\">
      <a class=\"pull-left\" href=\"";
            // line 8
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 9
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("avatar", $this->getAttribute($_user_, "smallAvatar"), ""), "html", null, true);
            echo "\" class=\"media-object\">
      </a>
      <div class=\"media-body\">
        ";
            // line 12
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "postNum")) {
                echo "<span class=\"badge pull-right\">";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_thread_, "postNum"), "html", null, true);
                echo "</span>";
            }
            // line 13
            echo "        <div class=\"media-heading\">
          ";
            // line 14
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (($this->getAttribute($_thread_, "isStick") && (!$_group_))) {
                // line 15
                echo "            <span class=\"label label-danger\">置顶</span>
          ";
            }
            // line 17
            echo "          <a class=\"title\" href=\"";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($_thread_, "groupId"), "threadId" => $this->getAttribute($_thread_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_thread_, "title"), 90);
            echo "</a>
          ";
            // line 18
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "isElite")) {
                // line 19
                echo "            <span class=\"label label-warning\">精</span>
          ";
            }
            // line 21
            echo "        </div>
        
        <div class=\"metas\">
          ";
            // line 24
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if ($_group_) {
                // line 25
                echo "            <a class=\"link-muted\" href=\"";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_thread_, "groupId"))), "html", null, true);
                echo "\" title=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                echo "\" >";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                echo "</a>
            <span class=\"divider\">•</span>
          ";
            }
            // line 28
            echo "          ";
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_user_, 1 => "link-muted"), "method"), "html", null, true);
            echo "
          <span class=\"divider\">•</span>
          ";
            // line 30
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_thread_, "createdTime")), "html", null, true);
            echo "
          ";
            // line 31
            if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
            if ($this->getAttribute($_thread_, "lastPostTime")) {
                // line 32
                echo "            <span class=\"divider\">•</span>
            最后回复 ";
                // line 33
                if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
                if (isset($context["lastPostMembers"])) { $_lastPostMembers_ = $context["lastPostMembers"]; } else { $_lastPostMembers_ = null; }
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $this->getAttribute($_lastPostMembers_, $this->getAttribute($_thread_, "lastPostMemberId"), array(), "array"), 1 => "link-muted"), "method"), "html", null, true);
                echo " ";
                if (isset($context["thread"])) { $_thread_ = $context["thread"]; } else { $_thread_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_thread_, "lastPostTime")), "html", null, true);
                echo "
          ";
            }
            // line 35
            echo "        </div> 
      </div>
    </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "    <li class=\"empty\">暂无话题！</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-threads-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 41,  155 => 39,  147 => 35,  136 => 33,  133 => 32,  130 => 31,  125 => 30,  117 => 28,  103 => 25,  100 => 24,  91 => 19,  88 => 18,  79 => 17,  68 => 13,  60 => 12,  45 => 7,  42 => 6,  37 => 5,  28 => 3,  22 => 2,  19 => 1,  90 => 13,  84 => 18,  82 => 17,  75 => 15,  71 => 14,  65 => 10,  62 => 9,  57 => 8,  54 => 7,  48 => 8,  43 => 4,  40 => 3,  33 => 4,  278 => 103,  276 => 102,  273 => 101,  267 => 97,  250 => 93,  239 => 89,  231 => 88,  227 => 86,  222 => 85,  217 => 82,  210 => 81,  202 => 77,  191 => 69,  186 => 67,  183 => 66,  175 => 60,  169 => 58,  167 => 57,  163 => 56,  157 => 55,  150 => 53,  144 => 49,  141 => 48,  132 => 41,  127 => 36,  118 => 29,  111 => 27,  95 => 21,  85 => 20,  77 => 14,  72 => 16,  66 => 15,  59 => 11,  53 => 9,  50 => 6,  44 => 5,  38 => 4,  31 => 3,);
    }
}
