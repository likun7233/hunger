<?php

/* TopxiaAdminBundle:System:mobile.html.twig */
class __TwigTemplate_569e66e6763e4f4579ec1065971b20ed1f8a20ac0c9f68b6a33a7f6bc4b303bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaAdminBundle:System:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "client";
        // line 6
        $context["script_controller"] = "setting/mobile";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "移动客户端设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<style>
#mobile-logo-container img ,#mobile-splash1-container img , #mobile-splash2-container img , #mobile-splash3-container img , #mobile-splash4-container img , #mobile-splash5-container
img {max-width: 80%; margin-bottom: 10px;}
</style>

<div class=\"page-header\"><h1>移动客户端设置</h1></div>

";
        // line 17
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >是否开启客户端</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 26
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute($_mobile_, "enabled"));
        echo "
      <div class=\"help-block\">开启后，网站首页顶部导航会出现客户端入口</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">网校简介</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\">";
        // line 36
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "about"), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">此简介将显示在移动客户端的\"关于网校\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">网校LOGO</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 46
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "logo")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "logo")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" type=\"button\" data-url=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "logo"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 50
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "logo"), "html", null, true);
        echo "\">
    </div>
  </div>

  <fieldset>
  <legend>设置启动图</legend>
  <div class=\"help-block\">最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">启动图1</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 62
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash1")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash1")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" type=\"button\" data-url=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash1"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 66
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash1"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">启动图2</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 75
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash2")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash2")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" type=\"button\" data-url=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash2"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 79
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash2"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">启动图3</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 88
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash3")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash3")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" type=\"button\" data-url=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash3"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 92
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash3"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">启动图4</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 101
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash4")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash4")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" type=\"button\" data-url=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash4"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 105
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash4"), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">启动图5</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 114
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ($this->getAttribute($_mobile_, "splash5")) {
            echo "<img src=\"";
            if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($_mobile_, "splash5")), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" type=\"button\" data-url=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">上传</button>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((!$this->getAttribute($_mobile_, "splash5"))) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 118
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mobile_, "splash5"), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 124,  305 => 118,  295 => 116,  291 => 115,  281 => 114,  268 => 105,  258 => 103,  254 => 102,  244 => 101,  231 => 92,  221 => 90,  217 => 89,  207 => 88,  194 => 79,  184 => 77,  180 => 76,  170 => 75,  157 => 66,  147 => 64,  143 => 63,  133 => 62,  117 => 50,  107 => 48,  103 => 47,  93 => 46,  79 => 36,  65 => 26,  52 => 17,  43 => 10,  40 => 9,  33 => 3,  28 => 6,  26 => 5,);
    }
}
