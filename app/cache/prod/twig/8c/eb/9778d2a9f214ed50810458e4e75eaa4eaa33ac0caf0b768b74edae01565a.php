<?php

/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_8ceb9778d2a9f214ed50810458e4e75eaa4eaa33ac0caf0b768b74edae01565a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TopxiaWebBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        $context["script_controller"] = "course/show";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        // line 6
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
        }
        // line 7
        echo "  ";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tags_);
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 10
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_course_, "about"), 150);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($_member_ && $this->getAttribute($_member_, "locked"))) {
            // line 18
            echo "<div class=\"row\">
  <div class=\"col-md-12\">
    <div class=\"mtl alert alert-warning\">
      您的退款申请已提交，请等待管理员的处理，退款期间将不能学习课程。
      <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 22
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_order_cancel_refund", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\">取消退款，继续学习！</button>
    </div>
  </div>
</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type") == "live")) {
            // line 29
            echo "
  ";
            // line 30
            $this->env->loadTemplate("TopxiaWebBundle:Course:live-course.html.twig")->display($context);
            // line 31
            echo "
";
        } else {
            // line 33
            echo "<div class=\"es-row-wrap container-gap course-cover\">

\t<div class=\"row row-5-7 course-cover-heading\">
\t\t<div class=\"col-sm-5 picture hidden-xs\">
\t\t\t<img src=\"";
            // line 37
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("coursePicture", $this->getAttribute($_course_, "largePicture"), ""), "html", null, true);
            echo "\" class=\"img-responsive\" />
\t\t</div>
\t\t<div class=\"col-sm-7 info\">
\t\t\t";
            // line 40
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t<button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\"> <i class=\"glyphicon glyphicon-cog\"></i>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 46
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">课程管理</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
            }
            // line 51
            echo "\t\t\t<h1 class=\"title\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title"), "html", null, true);
            echo "</h1>
\t\t\t<div class=\"subtitle\">";
            // line 52
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "subtitle"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"stats\">
\t\t\t\t<p>
\t\t\t\t\t价　格：
\t\t\t\t\t";
            // line 56
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "price") > 0)) {
                // line 57
                echo "\t\t\t\t\t\t";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->env->getExtension('topxia_web_twig')->getFreeLimitType($_course_) == "free_now")) {
                    // line 58
                    echo "\t\t\t\t\t\t\t<span class=\"money-num\">0.00</span>
\t\t\t\t\t\t\t<span class=\"money-text\">元</span>
\t\t\t\t\t\t\t<span class=\"text-muted\">(原价：<del>";
                    // line 60
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                    echo "</del> 元)</span>
\t\t\t\t\t\t\t<span class=\"mll\">";
                    // line 61
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    $this->env->loadTemplate("TopxiaWebBundle:Course:countdown.html.twig")->display(array_merge($context, array("course" => $_course_)));
                    echo "</span>
\t\t\t\t\t\t";
                } else {
                    // line 63
                    echo "\t\t\t\t\t\t\t<span class=\"money-num\">";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"money-text\">元</span>
\t\t\t\t\t\t";
                }
                // line 65
                echo "  
\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t<span class=\"money-num\" style=\"font-size:16px;\">免费</span>
\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t评　价：
\t\t\t\t\t<span class=\"stars-";
            // line 72
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_course_, "rating")), "html", null, true);
            echo "\">&nbsp;</span>
\t\t\t\t\t<span class=\"rating-num\">";
            // line 73
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_course_, "rating"), 1), "html", null, true);
            echo "分</span>
\t\t\t\t\t<a class=\"rating-user-num show-course-review-pane\" href=\"javascript:\">(";
            // line 74
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum"), "html", null, true);
            echo "人评价)</a>
\t\t\t\t</p>
\t\t\t\t";
            // line 76
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "showStudentNumType") == "opened")) {
                // line 77
                echo "\t\t\t\t<p>
\t\t\t\t\t学员数：
\t\t\t\t\t<span class=\"member-num\">";
                // line 79
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum"), "html", null, true);
                echo "</span>
\t\t\t\t\t<span class=\"member-text\">人</span>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (((!$this->getAttribute($_course_, "expiryDay")) == 0)) {
                // line 84
                echo "\t\t\t\t<p>
\t\t\t\t\t有效期：
\t\t\t\t\t<span class=\"member-num\">";
                // line 86
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "expiryDay"), "html", null, true);
                echo "</span>
\t\t\t\t\t<span class=\"member-text\">天</span>
\t\t\t\t</p>
\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t<p>
\t\t\t\t\t";
            // line 91
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status") == "closed")) {
                echo "  
\t\t\t\t\t\t状　态： <span class=\"label label-danger \">已关闭</span>
\t\t\t\t\t";
            } elseif (($this->getAttribute($_course_, "status") == "draft")) {
                // line 94
                echo "\t\t\t\t\t\t状　态： <span class=\"label label-warning \">未发布</span>
\t\t\t\t\t";
            }
            // line 95
            echo "          
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"actions clearfix\">
\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t";
            // line 100
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "status") != "published")) {
                // line 101
                echo "\t\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t\t<a class=\"btn btn-primary btn-fat\" id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ((($this->getAttribute($_course_, "price") > 0) && ((twig_date_converter($this->env, $this->getAttribute($_course_, "freeStartTime")) >= twig_date_converter($this->env)) || (twig_date_converter($this->env, $this->getAttribute($_course_, "freeEndTime")) < twig_date_converter($this->env))))) {
                    echo "购买课程";
                } else {
                    echo "加入学习";
                }
                echo "</a>

\t\t\t\t\t\t";
                // line 104
                if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                if ($_courseMemberLevel_) {
                    // line 105
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
                    if (($_checkMemberLevelResult_ == "not_login")) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('routing')->getPath("login");
                        echo "\" class=\"btn btn-warning mll\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>  
\t\t\t\t\t\t\t";
                    } elseif (twig_in_filter($_checkMemberLevelResult_, array(0 => "not_member", 1 => "member_expired"))) {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip_buy");
                        echo "\" class=\"btn btn-warning mll\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>  
\t\t\t\t\t\t\t";
                    } elseif (($_checkMemberLevelResult_ == "level_low")) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_upgrade", array("level" => $this->getAttribute($_courseMemberLevel_, "id"))), "html", null, true);
                        echo "\" class=\"btn btn-warning mll\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>
\t\t\t\t\t\t\t";
                    } elseif (($_checkMemberLevelResult_ == "ok")) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t<a href=\"javascript:;\" data-url=\"";
                        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_become_use_member", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
                        echo "\" class=\"btn btn-warning mll become-use-member-btn\">";
                        if (isset($context["courseMemberLevel"])) { $_courseMemberLevel_ = $context["courseMemberLevel"]; } else { $_courseMemberLevel_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_courseMemberLevel_, "name"), "html", null, true);
                        echo "，免费学</a>
\t\t\t\t\t\t\t";
                    }
                    // line 114
                    echo "
\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"pull-right \">

\t\t\t\t\t<a class=\"btn btn-link\" href=\"#\" style=\"display:none;\"> <i class=\"glyphicon glyphicon-play-circle\"></i>
\t\t\t\t\t\t免费体验
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-link \" id=\"favorite-btn\" href=\"javascript:\" data-url=\"";
            // line 124
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_favorite", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\" ";
            if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
            if ($_hasFavorited_) {
                echo "style=\"display:none;\"";
            }
            echo ">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\t\t收藏课程
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-link\" id=\"unfavorite-btn\" href=\"javascript:\" data-url=\"";
            // line 128
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_unfavorite", array("id" => $this->getAttribute($_course_, "id"))), "html", null, true);
            echo "\" ";
            if (isset($context["hasFavorited"])) { $_hasFavorited_ = $context["hasFavorited"]; } else { $_hasFavorited_ = null; }
            if ((!$_hasFavorited_)) {
                echo "style=\"display:none;\"";
            }
            echo ">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bookmark\"></i>
\t\t\t\t\t\t已收藏
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-link\" href=\"#\" style=\"display:none;\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-gift\"></i>
\t\t\t\t\t\t赠送
\t\t\t\t\t</a>

\t\t\t\t</div><div class=\"share pull-right clearfix\"  data-bdText=\"";
            // line 137
            if (isset($context["courseShareContent"])) { $_courseShareContent_ = $context["courseShareContent"]; } else { $_courseShareContent_ = null; }
            echo twig_escape_filter($this->env, $_courseShareContent_, "html", null, true);
            echo "\"></div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"row row-8-4\">
\t\t<div class=\"col-md-8\">

\t\t\t<div class=\"course-nav-tabs\">
\t\t\t\t<ul class=\"nav mbl nav-pills\" id=\"course-nav-tabs\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#course-about-pane\" class=\"btn-index\" data-anchor=\"#course-about-pane\">课程介绍</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 151
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "goals")) {
                // line 152
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#course-goal-pane\" class=\"btn-index\" data-anchor=\"#course-goal-pane\">课程目标</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "audiences")) {
                // line 157
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#course-audience-pane\" class=\"btn-index\" data-anchor=\"#course-audience-pane\">适合人群</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#course-list-pane\" class=\"btn-index\" data-anchor=\"#course-list-pane\">课程列表</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#course-review-pane\" class=\"btn-index\" data-anchor=\"#course-review-pane\">
\t\t\t\t\t\t\t课程评价
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 167
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>


\t\t\t";
            // line 174
            $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "647851803")->display(array_merge($context, array("id" => "course-about-pane")));
            // line 195
            echo "
\t\t\t";
            // line 196
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "goals")) {
                // line 197
                echo "\t\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "199612261")->display(array_merge($context, array("id" => "course-goal-pane")));
                // line 214
                echo "\t\t\t";
            }
            // line 215
            echo "
\t\t\t";
            // line 216
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "audiences")) {
                // line 217
                echo "\t\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "773836231")->display(array_merge($context, array("id" => "course-audience-pane")));
                // line 234
                echo "\t\t\t";
            }
            // line 235
            echo "
\t\t\t";
            // line 236
            $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "195181594")->display(array_merge($context, array("id" => "course-list-pane")));
            // line 246
            echo "

\t\t\t";
            // line 248
            if (isset($context["courseReviews"])) { $_courseReviews_ = $context["courseReviews"]; } else { $_courseReviews_ = null; }
            if ($_courseReviews_) {
                // line 249
                echo "\t\t\t";
                $this->env->loadTemplate("TopxiaWebBundle:Course:show.html.twig", "367281877")->display(array_merge($context, array("id" => "course-review-pane")));
                // line 259
                echo "\t\t\t";
            }
            // line 260
            echo "
\t\t\t";
            // line 261
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
                // line 262
                echo "\t\t\t\t";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => $_course_)));
                echo "
\t\t\t";
            }
            // line 264
            echo "\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t";
            // line 266
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:teachersBlock", array("course" => $_course_)));
            echo "

\t\t\t";
            // line 268
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseThread:latestBlock", array("course" => $_course_)));
            echo "

\t\t\t";
            // line 270
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:latestMembersBlock", array("course" => $_course_)));
            echo "

\t\t\t";
            // line 272
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseAnnouncement:block", array("course" => $_course_)));
            echo "

\t\t</div>
\t</div>

</div>
";
        }
        // line 279
        echo "</div>

";
    }

    // line 283
    public function block_bottom($context, array $blocks = array())
    {
        // line 284
        echo "<div id=\"course-modal\" class=\"modal\"></div>
<div id=\"course-edit-modal\" class=\"modal\"></div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 76,  216 => 74,  211 => 73,  206 => 72,  201 => 69,  197 => 67,  193 => 65,  185 => 63,  179 => 61,  174 => 60,  170 => 58,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_8ceb9778d2a9f214ed50810458e4e75eaa4eaa33ac0caf0b768b74edae01565a_647851803 extends Twig_Template
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

    // line 175
    public function block_heading($context, array $blocks = array())
    {
        // line 176
        echo "\t\t\t\t\t<h3 class=\"panel-title\">课程介绍</h3>
\t\t\t\t";
    }

    // line 178
    public function block_body($context, array $blocks = array())
    {
        // line 179
        echo "
\t\t\t\t\t";
        // line 180
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "about")) {
            // line 181
            echo "\t\t\t\t\t\t";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->getAttribute($_course_, "about");
            echo "
\t\t\t\t\t";
        } else {
            // line 183
            echo "\t\t\t\t\t\t<span class=\"text-muted\">还没有课程介绍...</span>
\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t";
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        if ($_tags_) {
            // line 186
            echo "\t\t\t\t\t\t<div class=\"mtm\">
\t\t\t\t\t\t<span class=\"text-muted\">标签：</span>";
            // line 187
            if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tags_);
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 188
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($_tag_, "name"))), "html", null, true);
                echo "\" class=\"mrs\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "name"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 192
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 76,  216 => 74,  211 => 73,  206 => 72,  201 => 69,  197 => 67,  193 => 65,  185 => 63,  179 => 61,  174 => 60,  170 => 58,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_8ceb9778d2a9f214ed50810458e4e75eaa4eaa33ac0caf0b768b74edae01565a_199612261 extends Twig_Template
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

    // line 198
    public function block_heading($context, array $blocks = array())
    {
        // line 199
        echo "\t\t\t\t\t\t<h3 class=\"panel-title\">课程目标</h3>
\t\t\t\t\t";
    }

    // line 201
    public function block_body($context, array $blocks = array())
    {
        // line 202
        echo "\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t";
        // line 203
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "goals"));
        foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
            // line 204
            echo "\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-flag media-object\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">";
            // line 208
            if (isset($context["goal"])) { $_goal_ = $context["goal"]; } else { $_goal_ = null; }
            echo twig_escape_filter($this->env, $_goal_, "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 76,  216 => 74,  211 => 73,  206 => 72,  201 => 69,  197 => 67,  193 => 65,  185 => 63,  179 => 61,  174 => 60,  170 => 58,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_8ceb9778d2a9f214ed50810458e4e75eaa4eaa33ac0caf0b768b74edae01565a_773836231 extends Twig_Template
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

    // line 218
    public function block_heading($context, array $blocks = array())
    {
        // line 219
        echo "\t\t\t\t\t\t<h3 class=\"panel-title\">适合人群</h3>
\t\t\t\t\t";
    }

    // line 221
    public function block_body($context, array $blocks = array())
    {
        // line 222
        echo "\t\t\t\t\t\t<ul class=\"media-list\">
\t\t\t\t\t\t\t";
        // line 223
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "audiences"));
        foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
            // line 224
            echo "\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-user media-object\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">";
            // line 228
            if (isset($context["audience"])) { $_audience_ = $context["audience"]; } else { $_audience_ = null; }
            echo twig_escape_filter($this->env, $_audience_, "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 76,  216 => 74,  211 => 73,  206 => 72,  201 => 69,  197 => 67,  193 => 65,  185 => 63,  179 => 61,  174 => 60,  170 => 58,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_8ceb9778d2a9f214ed50810458e4e75eaa4eaa33ac0caf0b768b74edae01565a_195181594 extends Twig_Template
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

    // line 237
    public function block_heading($context, array $blocks = array())
    {
        // line 238
        echo "\t\t\t\t\t<h3 class=\"panel-title\">课时列表</h3>
\t\t\t\t";
    }

    // line 240
    public function block_body($context, array $blocks = array())
    {
        // line 241
        echo "
\t\t\t\t\t";
        // line 242
        $this->env->loadTemplate("TopxiaWebBundle:CourseLesson:item-list-multi.html.twig")->display(array_merge($context, array("experience" => true)));
        // line 243
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  872 => 243,  870 => 242,  867 => 241,  864 => 240,  859 => 238,  856 => 237,  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 76,  216 => 74,  211 => 73,  206 => 72,  201 => 69,  197 => 67,  193 => 65,  185 => 63,  179 => 61,  174 => 60,  170 => 58,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}


/* TopxiaWebBundle:Course:show.html.twig */
class __TwigTemplate_8ceb9778d2a9f214ed50810458e4e75eaa4eaa33ac0caf0b768b74edae01565a_367281877 extends Twig_Template
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

    // line 250
    public function block_heading($context, array $blocks = array())
    {
        // line 251
        echo "\t\t\t\t\t<h3 class=\"panel-title\">课程评价</h3>
\t\t\t\t";
    }

    // line 253
    public function block_body($context, array $blocks = array())
    {
        // line 254
        echo "
\t\t\t\t\t<div id=\"course-review-pane-show\" data-url=\"";
        // line 255
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["previewAs"])) { $_previewAs_ = $context["previewAs"]; } else { $_previewAs_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute($_course_, "id"), "previewAs" => $_previewAs_)), "html", null, true);
        echo "\">正在载入课程评价数据...</div>

\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  933 => 255,  930 => 254,  927 => 253,  922 => 251,  919 => 250,  872 => 243,  870 => 242,  867 => 241,  864 => 240,  859 => 238,  856 => 237,  809 => 231,  799 => 228,  793 => 224,  788 => 223,  785 => 222,  782 => 221,  777 => 219,  774 => 218,  727 => 211,  717 => 208,  711 => 204,  706 => 203,  703 => 202,  700 => 201,  695 => 199,  692 => 198,  645 => 192,  641 => 190,  628 => 188,  623 => 187,  620 => 186,  616 => 185,  612 => 183,  605 => 181,  602 => 180,  599 => 179,  596 => 178,  591 => 176,  588 => 175,  540 => 284,  537 => 283,  531 => 279,  520 => 272,  514 => 270,  508 => 268,  502 => 266,  498 => 264,  491 => 262,  489 => 261,  486 => 260,  483 => 259,  480 => 249,  477 => 248,  473 => 246,  471 => 236,  468 => 235,  465 => 234,  462 => 217,  459 => 216,  456 => 215,  453 => 214,  450 => 197,  447 => 196,  444 => 195,  442 => 174,  431 => 167,  423 => 161,  417 => 157,  413 => 156,  407 => 152,  404 => 151,  386 => 137,  368 => 128,  355 => 124,  346 => 117,  343 => 116,  339 => 114,  329 => 112,  319 => 110,  310 => 108,  301 => 106,  297 => 105,  294 => 104,  280 => 102,  277 => 101,  274 => 100,  267 => 95,  263 => 94,  256 => 91,  253 => 90,  245 => 86,  241 => 84,  237 => 83,  229 => 79,  225 => 77,  222 => 76,  216 => 74,  211 => 73,  206 => 72,  201 => 69,  197 => 67,  193 => 65,  185 => 63,  179 => 61,  174 => 60,  170 => 58,  166 => 57,  163 => 56,  155 => 52,  149 => 51,  140 => 46,  133 => 41,  131 => 40,  124 => 37,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  94 => 22,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  72 => 10,  64 => 8,  52 => 7,  46 => 6,  43 => 5,  34 => 3,  29 => 13,);
    }
}
