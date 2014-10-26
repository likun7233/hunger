<?php

/* TopxiaWebBundle:CourseOrder:buy-modal.html.twig */
class __TwigTemplate_892dd44fc69eb59e6ef5b1e7af577f6917aee687b20ae3aea0ba00d5a3ea1122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["billable"] = false;
        // line 4
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "price") > 0) && ((twig_date_converter($this->env, $this->getAttribute($_course_, "freeStartTime")) >= twig_date_converter($this->env)) || (twig_date_converter($this->env, $this->getAttribute($_course_, "freeEndTime")) < twig_date_converter($this->env))))) {
            // line 5
            $context["billable"] = true;
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if ($_billable_) {
            echo "购买课程";
        } else {
            echo "加入学习";
        }
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($_billable_ && ($this->getAttribute($_course_, "type") == "live"))) {
            // line 11
            echo "    <div class=\"alert alert-info\">注意：请在30分钟内完成支付，否则订单将会过期失效</div>
  ";
        }
        // line 13
        echo "  <form id=\"course-buy-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("course_order_pay");
        echo "\">

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">课程名称</div>
      <div class=\"col-md-9 controls\">
      \t<span class=\"control-text text-muted\">《";
        // line 18
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo "》</span>
      </div>
    </div>

    ";
        // line 22
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if ($_billable_) {
            // line 23
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">价格</div>
      <div class=\"col-md-9 controls money-text\">
      \t<span class=\"control-text\"><strong class=\"money\">";
            // line 26
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
            echo "</strong>
      \t\t<span class=\"text-muted\">元</span>
      \t</span>
      </div>
    </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if ($_billable_) {
            // line 34
            echo "      ";
            if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
            if ($_payments_) {
                // line 35
                echo "
        ";
                // line 36
                if ($this->env->getExtension('topxia_web_twig')->getSetting("coupon.enabled")) {
                    // line 37
                    echo "
          <div class=\"form-group coupon-btn-group\">
            <div class=\"col-md-7 col-md-offset-3 controls\">
              <a href=\"javascript:;\" id=\"show-coupon-input\" data-status='hide'><span id=\"show-coupon\" class=\"glyphicon glyphicon-plus\"></span><span id=\"hide-coupon\" class=\"glyphicon glyphicon-minus hide\"></span>使用优惠码</a>
            </div>
          </div>

        ";
                }
                // line 45
                echo "
        <div class=\"form-group coupon-input-group hide\">
          <div class=\"col-md-7 col-md-offset-3 controls\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" name=\"coupon\">
              <span class=\"input-group-btn\">
                <button class=\"btn btn-default btn-use-coupon\" data-url=\"";
                // line 51
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coupon_check", array("type" => "course", "id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\" type=\"button\">使用</button>
              </span>
            </div>
            <div class=\"help-block coupon-error\">温馨提示：点击【去支付】会生成订单，订单生成后，优惠码便不能再使用。</div>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">选择支付方式</div>
          <div class=\"col-md-9 controls\">
            ";
                // line 61
                if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_payments_);
                foreach ($context['_seq'] as $context["payment"] => $context["options"]) {
                    // line 62
                    echo "            \t<input type=\"radio\" checked=\"checked\" />
            \t<img src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/order/alipay.gif"), "html", null, true);
                    echo "\" />
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['payment'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "          </div>
        </div>

        ";
                // line 68
                if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
                if (((($this->getAttribute($this->getAttribute($_payments_, "alipay", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_payments_, "alipay", array(), "any", false, true), "type"), null)) : (null)) == "dualfun")) {
                    // line 69
                    echo "        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"alert alert-info\">
              <h4>付款提示</h4>
              请在随后的支付宝支付页面中，选择“<strong>即时到帐交易</strong>”，如下图所示。如果选择“担保交易”需要手动确认收货，会增加不必要的操作步骤。
              <br>
              <img src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/img/order/alipay_dualfun_example.png"), "html", null, true);
                    echo "\">
            </div>
          </div>
        </div>
        ";
                }
                // line 80
                echo "
      ";
            } else {
                // line 82
                echo "        <div class=\"alert alert-info\">";
                echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("payment.disabled_message"), "尚未开启支付模块，无法购买课程。");
                echo "</div>
      ";
            }
            // line 84
            echo "    ";
        } else {
            // line 85
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 87
            if (isset($context["avatarAlert"])) { $_avatarAlert_ = $context["avatarAlert"]; } else { $_avatarAlert_ = null; }
            if ($_avatarAlert_) {
                // line 88
                echo "            <div class=\"alert alert-warning\">您还没有头像，设置以后才能加入学习<br />拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings_avatar");
                echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a></div>
          ";
            } else {
                // line 90
                echo "            <div class=\"alert alert-info\">此课程为免费课程，无需购买，可直接加入学习。</div>
          ";
            }
            // line 92
            echo "        </div>
      </div>
    ";
        }
        // line 95
        echo "    <input type=\"hidden\" name=\"courseId\" value=\"";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id"), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"payment\" value=\"alipay\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

";
        // line 99
        if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
        if ((($this->getAttribute($_courseSetting_, "buy_fill_userinfo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_courseSetting_, "buy_fill_userinfo"), false)) : (false))) {
            // line 100
            echo "  ";
            if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
            if ($this->getAttribute($_courseSetting_, "userinfoFields")) {
                // line 101
                echo "    <br><br>
    <div class=\"nav nav-tabs\">
    <div class=\"help-block\">温情提示：如果您的资料有变更，请在此修改，以便更好的为您服务！</div>
    </div><br>

    ";
                // line 106
                if (isset($context["courseSetting"])) { $_courseSetting_ = $context["courseSetting"]; } else { $_courseSetting_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_courseSetting_, "userinfoFields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 107
                    echo "
    ";
                    // line 108
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "truename")) {
                        // line 109
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"truename\">真实姓名 </label>
      <div class=\"col-md-6 controls\">
        ";
                        // line 112
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (($this->getAttribute($_user_, "approvalStatus") == "approved")) {
                            // line 113
                            echo "          <div class=\"control-text\">";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "truename"), "html", null, true);
                            echo " <small class=\"text-success\">(已认证)</small></div>
        ";
                        } elseif (($this->getAttribute($_user_, "approvalStatus") == "approving")) {
                            // line 115
                            echo "          <div class=\"control-text\">";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "truename"), "html", null, true);
                            echo " <small class=\"text-warning\">(真实认证中)</small></div>
        ";
                        } else {
                            // line 117
                            echo "          <input class=\"form-control\" id=\"truename\" type=\"text\" name=\"truename\" value=\"";
                            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "truename"), "html", null, true);
                            echo "\">
        ";
                        }
                        // line 119
                        echo "      </div>
    </div>
    ";
                    }
                    // line 122
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "mobile")) {
                        // line 123
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"mobile\">手机</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"mobile\" type=\"text\" name=\"mobile\" value=\"";
                        // line 126
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "mobile"), "html", null, true);
                        echo "\">
      </div>
    </div>
    ";
                    }
                    // line 130
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "qq")) {
                        // line 131
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"qq\">QQ</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"qq\" type=\"text\" name=\"qq\" value=\"";
                        // line 134
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "qq"), "html", null, true);
                        echo "\">
      </div>
    </div>
    ";
                    }
                    // line 138
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "company")) {
                        // line 139
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"company\">所在公司</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"company\" type=\"text\" name=\"company\" value=\"";
                        // line 142
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "company"), "html", null, true);
                        echo "\">
      </div>
    </div>
    ";
                    }
                    // line 146
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "job")) {
                        // line 147
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"job\">职业</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"job\" type=\"text\" name=\"job\" value=\"";
                        // line 150
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "job"), "html", null, true);
                        echo "\">
      </div>
    </div>
    ";
                    }
                    // line 154
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "idcard")) {
                        // line 155
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label required\" for=\"idcard\">身份证号</label>
      <div class=\"col-md-6 controls\">
        <input type=\"text\" id=\"idcard\" name=\"";
                        // line 158
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "idcard"), "html", null, true);
                        echo "\">
      </div>
    </div>
    ";
                    }
                    // line 162
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "gender")) {
                        // line 163
                        echo "    <div class=\"form-group\">        
      <div class=\"controls\">
        <label class=\"col-md-3 control-label required\" for=\"";
                        // line 165
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" style=\"padding: 0 20px 0 0px;\">性别</label>&nbsp;
        <input type=\"radio\" id=\"";
                        // line 166
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "_0\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" value=\"male\" ";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (($this->getAttribute($_user_, "gender") == "male")) {
                            echo "checked=true";
                        }
                        echo ">
        <label for=\"profile_gender_0\" class=\"required\" style=\"padding: 0 20px 0 0px;\">男</label>
        <input type=\"radio\" id=\"";
                        // line 168
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "_1\" name=\"";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\" required=\"required\" value=\"female\"  ";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        if (($this->getAttribute($_user_, "gender") == "female")) {
                            echo "checked=true";
                        }
                        echo ">
        <label for=\"profile_gender_1\" class=\"required\" >女</label>
      </div>
    </div>
    ";
                    }
                    // line 173
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "weixin")) {
                        // line 174
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label required\" for=\"weixin\">微信</label>
      <div class=\"col-md-6 controls\">
        <input type=\"text\" id=\"weixin\" name=\"";
                        // line 177
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "weixin"), "html", null, true);
                        echo "\">
      </div>
    </div>
    ";
                    }
                    // line 181
                    echo "    ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (($_field_ == "weibo")) {
                        // line 182
                        echo "    <div class=\"form-group\">
      <label class=\"col-md-3 control-label required\" for=\"weibo\">微博</label>
      <div class=\"col-md-6 controls\">
        <input type=\"text\" id=\"weibo\" name=\"";
                        // line 185
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $_field_, "html", null, true);
                        echo "\"  class=\"form-control\" value=\"";
                        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "weibo"), "html", null, true);
                        echo "\">
      </div>
    </div>
    ";
                    }
                    // line 188
                    echo " 
    ";
                    // line 189
                    if (isset($context["userFields"])) { $_userFields_ = $context["userFields"]; } else { $_userFields_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_userFields_);
                    foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                        // line 190
                        echo "              ";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                        if (($_field_ == $this->getAttribute($_userField_, "fieldName"))) {
                            // line 191
                            echo "                 ";
                            if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                            if (($this->getAttribute($_userField_, "type") == "text")) {
                                echo "             
                  <div class=\"form-group\">
                    <label for=\"";
                                // line 193
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"col-md-3 control-label \">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\"col-md-6 controls\">
                      <textarea id=\"";
                                // line 195
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"form-control \">";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                                echo "</textarea>
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "int")) {
                                // line 200
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 201
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\" col-md-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\"col-md-6 controls\">
                      <input type=\"text\" id=\"";
                                // line 203
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" placeholder=\"最大值为9位整数\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type"), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "float")) {
                                // line 208
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 209
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"col-md-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\" col-md-6 controls\">
                      <input type=\"text\" id=\"";
                                // line 211
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" placeholder=\"保留到2位小数\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type"), "html", null, true);
                                echo " form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "date")) {
                                // line 216
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 217
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"col-md-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\" col-md-6 controls\">
                      <input type=\"text\" id=\"";
                                // line 219
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "type"), "html", null, true);
                                echo "  form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                  ";
                            } elseif (($this->getAttribute($_userField_, "type") == "varchar")) {
                                // line 224
                                echo "                  <div class=\"form-group\">
                    <label for=\"";
                                // line 225
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"col-md-3 control-label\">";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "title"), "html", null, true);
                                echo "</label>
                    <div class=\"col-md-6  controls\">
                      <input type=\"text\" id=\"";
                                // line 227
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" name=\"";
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_userField_, "fieldName"), "html", null, true);
                                echo "\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
                                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                                if (isset($context["userField"])) { $_userField_ = $context["userField"]; } else { $_userField_ = null; }
                                echo twig_escape_filter($this->env, (($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_user_, $this->getAttribute($_userField_, "fieldName"), array(), "array"), "")) : ("")), "html", null, true);
                                echo "\">
                      <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                  </div>
                ";
                            }
                            // line 232
                            echo "              ";
                        }
                        // line 233
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 234
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 235
                echo "    ";
            }
        }
        // line 237
        echo "

  </form>
";
    }

    // line 242
    public function block_footer($context, array $blocks = array())
    {
        // line 243
        echo "  ";
        if (isset($context["billable"])) { $_billable_ = $context["billable"]; } else { $_billable_ = null; }
        if ($_billable_) {
            // line 244
            echo "    ";
            if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
            if ($_payments_) {
                // line 245
                echo "      ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($_member_) {
                    // line 246
                    echo "        <span class=\"text-muted\">预览模式无法支付</span>
        <button class=\"btn btn-primary\" disabled=\"disabled\">去支付</button> 
      ";
                } else {
                    // line 249
                    echo "        <button id=\"course-pay\" class=\"btn btn-primary\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">去支付</button>
      ";
                }
                // line 251
                echo "    ";
            }
            // line 252
            echo "  ";
        } else {
            // line 253
            echo "    ";
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if ($_member_) {
                // line 254
                echo "      <span class=\"text-muted\">预览模式无法加入学习</span>
      <button class=\"btn btn-primary\" disabled=\"disabled\">加入学习</button> 
    ";
            } else {
                // line 256
                echo "  
      ";
                // line 257
                if (isset($context["avatarAlert"])) { $_avatarAlert_ = $context["avatarAlert"]; } else { $_avatarAlert_ = null; }
                if ((!$_avatarAlert_)) {
                    // line 258
                    echo "        <button id=\"join-course-btn\" class=\"btn btn-primary\" data-submiting-text=\"正在加入\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">加入学习</button>
      ";
                }
                // line 260
                echo "    ";
            }
            // line 261
            echo "
  ";
        }
        // line 263
        echo "
  <script>
    app.load('course/buy-modal');
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  709 => 263,  705 => 261,  702 => 260,  698 => 258,  695 => 257,  692 => 256,  687 => 254,  683 => 253,  680 => 252,  677 => 251,  673 => 249,  668 => 246,  664 => 245,  660 => 244,  656 => 243,  653 => 242,  646 => 237,  642 => 235,  636 => 234,  630 => 233,  627 => 232,  611 => 227,  602 => 225,  599 => 224,  580 => 219,  571 => 217,  568 => 216,  549 => 211,  540 => 209,  537 => 208,  518 => 203,  509 => 201,  506 => 200,  490 => 195,  481 => 193,  474 => 191,  469 => 190,  464 => 189,  461 => 188,  450 => 185,  445 => 182,  441 => 181,  430 => 177,  425 => 174,  421 => 173,  404 => 168,  390 => 166,  385 => 165,  381 => 163,  377 => 162,  366 => 158,  361 => 155,  357 => 154,  349 => 150,  344 => 147,  340 => 146,  332 => 142,  327 => 139,  323 => 138,  315 => 134,  310 => 131,  306 => 130,  298 => 126,  293 => 123,  289 => 122,  284 => 119,  277 => 117,  270 => 115,  263 => 113,  260 => 112,  255 => 109,  252 => 108,  249 => 107,  244 => 106,  237 => 101,  233 => 100,  230 => 99,  225 => 97,  218 => 95,  213 => 92,  209 => 90,  203 => 88,  200 => 87,  196 => 85,  193 => 84,  187 => 82,  183 => 80,  175 => 75,  167 => 69,  164 => 68,  159 => 65,  151 => 63,  148 => 62,  143 => 61,  129 => 51,  121 => 45,  111 => 37,  109 => 36,  106 => 35,  102 => 34,  99 => 33,  96 => 32,  86 => 26,  81 => 23,  78 => 22,  70 => 18,  61 => 13,  57 => 11,  52 => 10,  49 => 9,  38 => 8,  32 => 5,  29 => 4,  27 => 3,);
    }
}
