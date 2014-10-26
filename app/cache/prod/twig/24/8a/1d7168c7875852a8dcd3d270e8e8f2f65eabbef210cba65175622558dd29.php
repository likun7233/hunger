<?php

/* TopxiaWebBundle:Group:group-member-center.html.twig */
class __TwigTemplate_248a1d7168c7875852a8dcd3d270e8e8f2f65eabbef210cba65175622558dd29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:My:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-group";
        // line 6
        $context["tab_nav"] = "index";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-center.html.twig", "222682629")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}


/* TopxiaWebBundle:Group:group-member-center.html.twig */
class __TwigTemplate_248a1d7168c7875852a8dcd3d270e8e8f2f65eabbef210cba65175622558dd29_222682629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig");

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        echo " 
        我的小组
      ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "          <div class=\"row\">

            <div class=\"col-md-12\">

              ";
        // line 18
        $this->env->loadTemplate("TopxiaWebBundle:Group:group-member-nav-pill.html.twig")->display($context);
        // line 19
        echo "
              <div class=\"page-header\">
                <h4> 我加入的小组<a class=\"badge pull-right\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("group_member_join", array("type" => "myGroup"));
        echo "\" style=\"background-color:#3cb373;\">";
        if (isset($context["groupsCount"])) { $_groupsCount_ = $context["groupsCount"]; } else { $_groupsCount_ = null; }
        echo twig_escape_filter($this->env, $_groupsCount_, "html", null, true);
        echo "</a></h4>
              </div>

              ";
        // line 24
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig")->display(array_merge($context, array("groups" => $_groups_)));
        // line 27
        echo "
            </div>

            <div class=\"col-md-12\">

              <div class=\"page-header\">
                <h4>我发起的话题<a class=\"badge pull-right\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("group_member_threads");
        echo "\" style=\"background-color:#3cb373;\">";
        if (isset($context["threadsCount"])) { $_threadsCount_ = $context["threadsCount"]; } else { $_threadsCount_ = null; }
        echo twig_escape_filter($this->env, $_threadsCount_, "html", null, true);
        echo "</a></h4>
              </div>

              ";
        // line 36
        if (isset($context["ownThreads"])) { $_ownThreads_ = $context["ownThreads"]; } else { $_ownThreads_ = null; }
        if (isset($context["groupsAsOwnThreads"])) { $_groupsAsOwnThreads_ = $context["groupsAsOwnThreads"]; } else { $_groupsAsOwnThreads_ = null; }
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig")->display(array_merge($context, array("threads" => $_ownThreads_, "groups" => $_groupsAsOwnThreads_)));
        // line 40
        echo "              
            </div>

            <div class=\"col-md-12\">

              <div class=\"page-header\">
                <h4>回复的话题<a class=\"badge pull-right\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("group_member_posts");
        echo "\" style=\"background-color:#3cb373;\">";
        if (isset($context["postsCount"])) { $_postsCount_ = $context["postsCount"]; } else { $_postsCount_ = null; }
        echo twig_escape_filter($this->env, $_postsCount_, "html", null, true);
        echo "</a></h4>
              </div>
              
              ";
        // line 49
        if (isset($context["postLastPostMembers"])) { $_postLastPostMembers_ = $context["postLastPostMembers"]; } else { $_postLastPostMembers_ = null; }
        if (isset($context["groupsAsPostThreads"])) { $_groupsAsPostThreads_ = $context["groupsAsPostThreads"]; } else { $_groupsAsPostThreads_ = null; }
        if (isset($context["threads"])) { $_threads_ = $context["threads"]; } else { $_threads_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig")->display(array_merge($context, array("lastPostMembers" => $_postLastPostMembers_, "groups" => $_groupsAsPostThreads_, "threads" => $_threads_, "user" => $_user_)));
        // line 55
        echo "              
            </div>
          </div>
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 49,  154 => 46,  146 => 40,  142 => 36,  133 => 33,  125 => 27,  122 => 24,  113 => 21,  109 => 19,  107 => 18,  101 => 14,  98 => 13,  90 => 9,  43 => 8,  40 => 7,  33 => 3,  28 => 6,  26 => 5,);
    }
}
