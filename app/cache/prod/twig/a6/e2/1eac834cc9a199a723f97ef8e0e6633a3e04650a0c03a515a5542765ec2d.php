<?php

/* TopxiaWebBundle:Register:index.html.twig */
class __TwigTemplate_a6e21eac834cc9a199a723f97ef8e0e6633a3e04650a0c03a515a5542765ec2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/register";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "注册 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    ";
        // line 9
        if (isset($context["isLoginEnabled"])) { $_isLoginEnabled_ = $context["isLoginEnabled"]; } else { $_isLoginEnabled_ = null; }
        if ($_isLoginEnabled_) {
            // line 10
            echo "      <div class=\"panel panel-default panel-page\">
        <div class=\"panel-heading\"><h2>注册</h2></div>

        <form id=\"register-form\" class=\"form-vertical\" method=\"post\" action=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">
          ";
            // line 14
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "flash_messages", array(), "method"), "html", null, true);
            echo "
          ";
            // line 15
            if (isset($context["registerSort"])) { $_registerSort_ = $context["registerSort"]; } else { $_registerSort_ = null; }
            if ($_registerSort_) {
                // line 16
                echo "          ";
                if (isset($context["registerSort"])) { $_registerSort_ = $context["registerSort"]; } else { $_registerSort_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_registerSort_);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 17
                    echo "            ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "truename")) {
                        // line 18
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 19
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">姓名</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_";
                        // line 21
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\">
                </div>
              </div>
            ";
                    } elseif (($_field_ == "email")) {
                        // line 25
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 26
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">邮箱地址</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_";
                        // line 28
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" class=\"form-control\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("register_email_check");
                        echo "\" data-explain=\"填写你常用的邮箱作为登录帐号\">
                  <p class=\"help-block\">填写你常用的邮箱作为登录帐号</p>
                </div>
              </div>
              ";
                    } elseif (($_field_ == "nickname")) {
                        // line 33
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 34
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">昵称</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_";
                        // line 36
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" class=\"form-control\" data-url=\"";
                        echo $this->env->getExtension('routing')->getPath("register_nickname_check");
                        echo "\" data-explain=\"该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字\">
                  <p class=\"help-block\">该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字</p>
                </div>
              </div>
            ";
                    } elseif (($_field_ == "job")) {
                        // line 41
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 42
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">职业</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_";
                        // line 44
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\">
                </div>
              </div>
            ";
                    } elseif (($_field_ == "gender")) {
                        // line 48
                        echo "              <div class=\"form-group\">        
                <div class=\"controls\">
                  <label class=\"control-label required\" for=\"register_";
                        // line 50
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" style=\"padding: 0 20px 0 0px;\">性别</label>&nbsp;
                  <input type=\"radio\" id=\"register_";
                        // line 51
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "_0\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" value=\"male\" checked=true>
                  <label for=\"profile_gender_0\" class=\"required\" style=\"padding: 0 20px 0 0px;\">男</label>
                  <input type=\"radio\" id=\"register_";
                        // line 53
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "_1\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" value=\"female\" >
                  <label for=\"profile_gender_1\" class=\"required\" >女</label>
                </div>
              </div>
            ";
                    } elseif (($_field_ == "company")) {
                        // line 58
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 59
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">公司</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_";
                        // line 61
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\">
                </div>
              </div>
            ";
                    } elseif (($_field_ == "mobile")) {
                        // line 65
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 66
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">手机号码</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_";
                        // line 68
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\">
                </div>
              </div>
            ";
                    } elseif (($_field_ == "idcard")) {
                        // line 72
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 73
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">身份证号</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_";
                        // line 75
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\">
                </div>
              </div>           
              ";
                    } elseif (($_field_ == "password")) {
                        // line 78
                        echo "   
              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 80
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">密码</label>
                <div class=\"controls\">
                  <input type=\"password\" id=\"register_";
                        // line 82
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" class=\"form-control\" data-explain=\"5-20位英文、数字、符号，区分大小写\">
                  <p class=\"help-block\">5-20位英文、数字、符号，区分大小写</p>
                </div>
              </div>
              ";
                    } elseif (($_field_ == "confirmPassword")) {
                        // line 87
                        echo "              <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_";
                        // line 88
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\">确认密码</label>
                <div class=\"controls\">
                  <input type=\"password\" id=\"register_";
                        // line 90
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" class=\"form-control\" data-explain=\"再输入一次密码\">
                  <p class=\"help-block\">再输入一次密码</p>
                </div>
              </div>
            ";
                    }
                    // line 95
                    echo "            ";
                    if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_userFields_);
                    foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                        // line 96
                        echo "              ";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                        if (($_field_ == $this->getAttribute($_userField_, "fieldName"))) {
                            // line 97
                            echo "                 ";
                            if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                            if (($this->getAttribute($_userField_, "type") == "text")) {
                                echo "             
                  <div class=\"form-group\">
                    <label for=\"";
                                // line 99
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"control-label \">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\"controls\">
                      <textarea id=\"";
                                // line 101
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\" form-control \"></textarea>
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "int")) {
                                // line 106
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 107
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\" control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\"controls\">
                      <input type=\"text\" id=\"";
                                // line 109
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" placeholder=\"最大值为9位整数\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type"), "html", null, true);
                                echo " form-control\" data-widget-cid=\"widget-5\" data-explain=\"\">
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "float")) {
                                // line 114
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 115
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\" controls\">
                      <input type=\"text\" id=\"";
                                // line 117
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" placeholder=\"保留到2位小数\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type"), "html", null, true);
                                echo " form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" >
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "date")) {
                                // line 122
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 123
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\" controls\">
                      <input type=\"text\" id=\"";
                                // line 125
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type"), "html", null, true);
                                echo " form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" >
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "varchar")) {
                                // line 130
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 131
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\" controls\">
                      <input type=\"text\" id=\"";
                                // line 133
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" >
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                ";
                            }
                            // line 138
                            echo "              ";
                        }
                        // line 139
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "          ";
            } else {
                // line 142
                echo "           <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_email\">邮箱地址</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_email\" name=\"email\" required=\"required\" class=\"form-control\" data-url=\"";
                // line 145
                echo $this->env->getExtension('routing')->getPath("register_email_check");
                echo "\" data-explain=\"填写你常用的邮箱作为登录帐号\">
                  <p class=\"help-block\">填写你常用的邮箱作为登录帐号</p>
                </div>
           </div>
           <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_nickname\">昵称</label>
                <div class=\"controls\">
                  <input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control\" data-url=\"";
                // line 152
                echo $this->env->getExtension('routing')->getPath("register_nickname_check");
                echo "\" data-explain=\"该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字\">
                  <p class=\"help-block\">该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字</p>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_password\">密码</label>
                <div class=\"controls\">
                  <input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control\" data-explain=\"5-20位英文、数字、符号，区分大小写\">
                  <p class=\"help-block\">5-20位英文、数字、符号，区分大小写</p>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label required\" for=\"register_confirmPassword\">确认密码</label>
                <div class=\"controls\">
                  <input type=\"password\" id=\"register_confirmPassword\" name=\"confirmPassword\" required=\"required\" class=\"form-control\" data-explain=\"再输入一次密码\">
                  <p class=\"help-block\">再输入一次密码</p>
                </div>
            </div>
          ";
            }
            // line 171
            echo "
          ";
            // line 172
            if (($this->env->getExtension('topxia_web_twig')->getSetting("auth.user_terms") == "opened")) {
                // line 173
                echo "            <div class=\"form-group\">
              <div class=\"controls\">
                <label>
                  <input type=\"checkbox\" id=\"user_terms\" checked=\"checked\">我已阅读并同意<a href=\"";
                // line 176
                echo $this->env->getExtension('routing')->getPath("user_terms");
                echo "\" target=\"_blank\">《服务协议》</a>
                </label>
              </div>
            </div>
           
          ";
            }
            // line 182
            echo "
          <div class=\"form-group\">
            <div class=\"controls\">
              <button type=\"submit\" id=\"register-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary btn-large btn-block\">注册</button>
            </div>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">

        </form>

        ";
            // line 193
            $this->env->loadTemplate("TopxiaWebBundle:Login:social-logins-block.html.twig")->display($context);
            // line 194
            echo "
      </div><!-- /panel -->
    ";
        } else {
            // line 197
            echo "        <div class=\"panel-heading\"><h2>系统暂时关闭注册，请联系管理员</h2></div>
    ";
        }
        // line 198
        echo "    
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 198,  535 => 197,  530 => 194,  528 => 193,  521 => 189,  512 => 182,  503 => 176,  498 => 173,  496 => 172,  493 => 171,  471 => 152,  461 => 145,  456 => 142,  453 => 141,  447 => 140,  441 => 139,  438 => 138,  426 => 133,  417 => 131,  414 => 130,  399 => 125,  390 => 123,  387 => 122,  372 => 117,  363 => 115,  360 => 114,  345 => 109,  336 => 107,  333 => 106,  321 => 101,  312 => 99,  305 => 97,  300 => 96,  294 => 95,  282 => 90,  276 => 88,  273 => 87,  261 => 82,  255 => 80,  251 => 78,  240 => 75,  234 => 73,  231 => 72,  220 => 68,  214 => 66,  211 => 65,  200 => 61,  194 => 59,  191 => 58,  179 => 53,  170 => 51,  165 => 50,  161 => 48,  150 => 44,  144 => 42,  141 => 41,  127 => 36,  121 => 34,  118 => 33,  104 => 28,  98 => 26,  95 => 25,  84 => 21,  78 => 19,  75 => 18,  71 => 17,  65 => 16,  62 => 15,  57 => 14,  53 => 13,  48 => 10,  45 => 9,  41 => 7,  38 => 6,  31 => 3,  26 => 4,);
    }
}
