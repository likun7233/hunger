<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_878b75ccfc76489b2a3b11fa395dafe61e2db4adefb6e945b3d8e1f5b656d3f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->env->loadTemplate("TopxiaWebBundle::macro.html.twig");
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 12
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 13
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  ";
        // line 15
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 16
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 17
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 19
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  <!--[if IE 8]>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 37
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 38
        echo "
</head>
<body ";
        // line 40
        if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter($_bodyClass_, "")) : (""))) {
            echo "class=\"";
            if (isset($context["bodyClass"])) { $_bodyClass_ = $context["bodyClass"]; } else { $_bodyClass_ = null; }
            echo twig_escape_filter($this->env, $_bodyClass_, "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->env->loadTemplate("TopxiaWebBundle::script_boot.html.twig")->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 141
        echo "

</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
        echo " - ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
            echo " -";
        }
        echo " Powered by EDUSOHO";
    }

    // line 12
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 13
    public function block_description($context, array $blocks = array())
    {
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-extends.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/web.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/member.css"), "html", null, true);
        echo "\" />
    <!--[if lt IE 8]>
      <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/oldie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->
  ";
    }

    // line 37
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "
  <div class=\"navbar navbar-inverse site-navbar\" id=\"site-navbar\"  data-counter-url=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("user_remind_counter");
        echo "\">
    <div class=\"container\">
      <div class=\"container-gap\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 53
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 54
            echo "            <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
          ";
        } else {
            // line 56
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
          ";
        }
        // line 58
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
      </ul>
          ";
        // line 62
        if (isset($context["siteNav"])) { $_siteNav_ = $context["siteNav"]; } else { $_siteNav_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter($_siteNav_, null)) : (null)))));
        echo "

          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 65
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($_app_, "user")) {
            // line 66
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\"> 我的课程 </a></li>
              ";
            // line 67
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 68
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span></a></li>
              ";
            }
            // line 70
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></li>
              <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
                <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">通知</span>
                ";
            // line 74
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user"), "newNotificationNum") > 0)) {
                echo "<span class=\"badge\">";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "newNotificationNum"), "html", null, true);
                echo "</span>";
            }
            echo "</a></li>
              <li>
                <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
                <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">私信</span>
                ";
            // line 79
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum") > 0)) {
                echo "<span class=\"badge\">";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "newMessageNum"), "html", null, true);
                echo "</span>";
            }
            // line 80
            echo "                </a>
              </li>
              <li class=\"visible-lt-ie8\"><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo "</a></li>
              <li class=\"dropdown hidden-lt-ie8\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\"  data-toggle=\"dropdown\">";
            // line 84
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "nickname"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 86
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_app_, "user"), "id"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 我的主页</a></li>
                  <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> 帐号设置</a></li>
                  <li class=\"divider\"></li>
                  ";
            // line 89
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                // line 90
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> 管理后台</a></li>
                    <li class=\"divider\"></li>
                  ";
            }
            // line 93
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
            ";
        } else {
            // line 97
            echo "              ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 98
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("mobile");
                echo "\"><span class=\"glyphicon glyphicon-phone\"></span> 手机版</a></li>
              ";
            }
            // line 100
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("search");
            echo "\"><span class=\"glyphicon glyphicon-search\"></span> 搜索</a></li>
              <li><a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">登录</a></li>
              <li><a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">注册</a></li>
            ";
        }
        // line 104
        echo "          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>

  <div id=\"content-container\" class=\"container\">
    ";
        // line 111
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["hideSetupHint"])) { $_hideSetupHint_ = $context["hideSetupHint"]; } else { $_hideSetupHint_ = null; }
        if ((($this->getAttribute($_app_, "user") && ($this->getAttribute($this->getAttribute($_app_, "user"), "setup") == 0)) && ((!array_key_exists("hideSetupHint", $context)) || ($_hideSetupHint_ != true)))) {
            // line 112
            echo "      <div class=\"alert alert-warning\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        为了帐号的安全，以及更好的使用体验，请设置您的Email地址。
        <a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("settings_setup");
            echo "\">现在就去设置</a>
      </div>
    ";
        }
        // line 118
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "    
  </div><!-- /container -->

  <div class=\"site-footer container clearfix\">

    ";
        // line 124
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:footNavigation"));
        echo "

    <div class=\"text-gray\" data-role=\"default-foot-bar\">
      ";
        // line 127
        $this->env->loadTemplate("TopxiaWebBundle::powered-by.html.twig")->display($context);
        // line 128
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo "
      <div class=\"pull-right\">";
        // line 129
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.copyright")) {
            echo "课程内容版权均归<a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.copyright"), "html", null, true);
            echo "</a>所有";
        }
        echo "&nbsp;";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.icp")) {
            echo "<a href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.icp"), "html", null, true);
            echo "</a>";
        }
        echo "</div>

      <div class=\"pull-right mhs\"><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("course_archive");
        echo "\">课程存档</a></div>
    </div>
  </div>

  ";
        // line 135
        $this->displayBlock('bottom', $context, $blocks);
        // line 136
        echo "  <div id=\"login-modal\" class=\"modal\" data-url=\"/login/ajax\"></div>
<div id=\"modal\" class=\"modal\"></div>
";
    }

    // line 118
    public function block_content($context, array $blocks = array())
    {
    }

    // line 135
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 135,  418 => 136,  416 => 135,  409 => 131,  394 => 129,  389 => 128,  374 => 119,  371 => 118,  365 => 115,  360 => 112,  356 => 111,  342 => 102,  338 => 101,  333 => 100,  327 => 98,  316 => 93,  309 => 90,  307 => 89,  302 => 87,  297 => 86,  291 => 84,  279 => 80,  271 => 79,  265 => 76,  254 => 74,  248 => 71,  237 => 68,  235 => 67,  230 => 66,  220 => 62,  214 => 58,  206 => 56,  198 => 54,  196 => 53,  184 => 44,  181 => 43,  178 => 42,  173 => 37,  166 => 26,  157 => 23,  141 => 19,  136 => 13,  131 => 12,  111 => 141,  109 => 140,  106 => 139,  104 => 42,  93 => 40,  89 => 38,  87 => 37,  81 => 34,  74 => 30,  71 => 29,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  48 => 13,  44 => 12,  40 => 11,  29 => 2,  27 => 1,  39 => 4,  28 => 7,  26 => 6,  758 => 271,  738 => 265,  731 => 263,  728 => 262,  722 => 260,  719 => 259,  712 => 256,  704 => 255,  696 => 254,  693 => 253,  689 => 252,  686 => 251,  682 => 249,  675 => 247,  672 => 246,  665 => 243,  657 => 242,  654 => 241,  650 => 240,  646 => 239,  643 => 238,  639 => 236,  636 => 235,  632 => 233,  628 => 231,  624 => 230,  620 => 229,  616 => 228,  612 => 226,  608 => 224,  605 => 223,  597 => 222,  587 => 219,  582 => 218,  579 => 217,  574 => 216,  571 => 215,  567 => 214,  556 => 213,  546 => 205,  543 => 204,  537 => 200,  531 => 199,  519 => 197,  515 => 196,  510 => 195,  504 => 191,  500 => 190,  497 => 189,  494 => 188,  489 => 185,  486 => 184,  480 => 180,  474 => 179,  461 => 174,  454 => 172,  450 => 170,  447 => 169,  439 => 168,  432 => 165,  427 => 164,  424 => 118,  420 => 162,  415 => 161,  407 => 155,  403 => 154,  400 => 153,  395 => 150,  390 => 147,  387 => 127,  381 => 124,  375 => 141,  364 => 134,  359 => 133,  347 => 104,  343 => 129,  334 => 127,  324 => 97,  321 => 124,  313 => 123,  304 => 119,  299 => 118,  293 => 115,  290 => 114,  286 => 113,  283 => 82,  280 => 111,  277 => 109,  273 => 107,  267 => 104,  255 => 98,  250 => 97,  243 => 70,  238 => 93,  227 => 65,  222 => 88,  216 => 84,  211 => 83,  204 => 79,  199 => 76,  195 => 75,  192 => 74,  189 => 73,  186 => 71,  180 => 67,  174 => 66,  161 => 24,  156 => 62,  153 => 22,  149 => 21,  144 => 20,  137 => 55,  132 => 52,  128 => 51,  125 => 50,  122 => 48,  118 => 11,  110 => 42,  105 => 39,  99 => 38,  96 => 37,  91 => 34,  88 => 33,  85 => 32,  83 => 31,  79 => 29,  72 => 26,  66 => 23,  61 => 20,  58 => 19,  52 => 14,  45 => 12,  41 => 10,  38 => 9,  33 => 3,  30 => 5,  25 => 2,);
    }
}
