<?php

/* TopxiaWebBundle:Group:index.html.twig */
class __TwigTemplate_b1f409b7923043bf76ec4ea2e403154fcd7d6f66d38e60302954d8e94fb0b7eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle:Group:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo "小组";
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo "小组首页";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row\">
  <div class=\"col-md-8\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        热门小组<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("group_search_group");
        echo "\" class=\"pull-right\">&raquo;更多</a>
      </div>
      <div class=\"panel-body\">
        <div class=\"row group-grids\">
          ";
        // line 15
        if (isset($context["activeGroup"])) { $_activeGroup_ = $context["activeGroup"]; } else { $_activeGroup_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_activeGroup_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "
            <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-4 grid\">
              <p>
                <a href=\"";
            // line 19
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
            echo "\" title=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
            echo "\">
                  <img src=\"";
            // line 20
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo"), "group.png"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
            echo "\" class=\"logo\">
                </a>
              </p>
              <p class=\"title\"><a  href=\"";
            // line 23
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
            echo "\" title=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
            echo "\" >";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
            echo "</a></p>
            </div>

          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <div class=\"empty\">暂无小组信息！</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
      </div>
    </div>

    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">最近话题</div>
      <div class=\"panel-body\">
         ";
        // line 36
        if (isset($context["recentlyThread"])) { $_recentlyThread_ = $context["recentlyThread"]; } else { $_recentlyThread_ = null; }
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        if (isset($context["owners"])) { $_owners_ = $context["owners"]; } else { $_owners_ = null; }
        $this->env->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig")->display(array_merge($context, array("threads" => $_recentlyThread_, "groups" => $_groupinfo_, "users" => $_owners_)));
        // line 41
        echo "      </div>
      
    </div>
    
  </div>

  <div class=\"col-md-4\">
    ";
        // line 48
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "id")) {
            // line 49
            echo "    <div class=\"es-row \">
        <div class=\"panel panel-default\" >
            <div class=\"panel-body\">
                <div class=\"media\">
                 ";
            // line 53
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $_user_, 1 => " pull-left media-object media-object-small"), "method"), "html", null, true);
            echo "
                    <div class=\"media-body\">
                        <p >";
            // line 55
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $_user_, 1 => "link-muted"), "method"), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-primary btn-xs btn-default active\" role=\"button\">我的小组主页</a>
                        ";
            // line 57
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("group_add");
                echo "\" class=\"btn btn-primary btn-xs btn-default active\" role=\"button\">创建小组</a>
                        ";
            }
            // line 60
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 66
        echo "      <div class=\"mbl\">
          <form action=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("group_search_group");
        echo "\" method=\"get\">
                <div class=\"input-group\">
                  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"小组搜索\" name=\"keyWord\">
                  <span class=\"input-group-btn\">
                  <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
                  </span>
                </div>
          </form>
         </div>    
    ";
        // line 77
        if (isset($context["myJoinGroup"])) { $_myJoinGroup_ = $context["myJoinGroup"]; } else { $_myJoinGroup_ = null; }
        if ($_myJoinGroup_) {
            echo " 
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          我的小组
          ";
            // line 81
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "id")) {
                echo " <a href=\"";
                echo $this->env->getExtension('routing')->getPath("group_member_join", array("type" => "myGroup"));
                echo "\" class=\"pull-right\">&raquo;更多</a>";
            }
            // line 82
            echo "        </div>
        <div class=\"panel-body\">
          <div class=\"row group-grids\">
            ";
            // line 85
            if (isset($context["myJoinGroup"])) { $_myJoinGroup_ = $context["myJoinGroup"]; } else { $_myJoinGroup_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_myJoinGroup_);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 86
                echo "              <div class=\"col-lg-3 col-md-4 col-sm-2 col-xs-4 grid\">
                <p>
                  <a href=\"";
                // line 88
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                echo "\" title=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 89
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($_group_, "logo"), "group.png"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                echo "\" class=\"logo\">
                  </a> 
                </p>
                <p class=\"title\">
                  <a href=\"";
                // line 93
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($_group_, "id"))), "html", null, true);
                echo "\" title=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "title"), "html", null, true);
                echo "\">";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_group_, "title"), 9);
                echo "</a>
                </p>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "          </div>
        </div>
      </div>
    ";
        }
        // line 101
        echo "
    ";
        // line 102
        $this->env->loadTemplate("TopxiaWebBundle:Group:new-group-list.html.twig")->display($context);
        // line 103
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 103,  276 => 102,  273 => 101,  267 => 97,  250 => 93,  239 => 89,  231 => 88,  227 => 86,  222 => 85,  217 => 82,  210 => 81,  202 => 77,  191 => 69,  186 => 67,  183 => 66,  175 => 60,  169 => 58,  167 => 57,  163 => 56,  157 => 55,  150 => 53,  144 => 49,  141 => 48,  132 => 41,  127 => 36,  118 => 29,  111 => 27,  95 => 23,  85 => 20,  77 => 19,  72 => 16,  66 => 15,  59 => 11,  53 => 7,  50 => 6,  44 => 5,  38 => 4,  31 => 3,);
    }
}
