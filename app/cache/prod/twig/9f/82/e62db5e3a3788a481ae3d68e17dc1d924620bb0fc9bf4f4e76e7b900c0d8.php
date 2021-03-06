<?php

/* TopxiaAdminBundle:Default:unsolved-questions-block.html.twig */
class __TwigTemplate_9f82e62db5e3a3788a481ae3d68e17dc1d924620bb0fc9bf4f4e76e7b900c0d8 extends Twig_Template
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
        $context["admin_macro"] = $this->env->loadTemplate("TopxiaAdminBundle::macro.html.twig");
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">

           \t<a class=\"pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
           \t>更多</a>
\t\t\t<h3 class=\"panel-title\">最新未回复问答</h3>
\t\t\t 
\t\t</div>

\t";
        // line 12
        if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
        if ($_questions_) {
            // line 13
            echo "\t    <table class=\"table table-condensed table-bordered table-striped table-hover\">
\t      <thead>
\t        <tr>
\t          <th width=\"40%\">问答标题</th>
\t          <th width=\"35%\">所属课程</th>
\t          <th width=\"10%\">提问人</th>
\t          <th width=\"15%\">操作</th>
\t        </tr>
\t      </thead>
\t      <tbody class=\"tbody\">
\t        ";
            // line 23
            if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_questions_);
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 24
                echo "\t          ";
                if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                $context["course"] = (($this->getAttribute($_courses_, $this->getAttribute($_question_, "courseId"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_courses_, $this->getAttribute($_question_, "courseId"), array(), "array"), null)) : (null));
                // line 25
                echo "\t\t        <tr>
\t\t          <td>
\t              <a href=\"";
                // line 27
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($_question_, "courseId"), "id" => $this->getAttribute($_question_, "id"))), "html", null, true);
                echo "\" target=\"_blank\">
\t                ";
                // line 28
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_question_, "title"), "html", null, true);
                echo "
\t              </a>
\t              <br />
\t              <span class=\"text-muted text-sm\">";
                // line 31
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_question_, "hitNum"), "html", null, true);
                echo "次查看</span>
\t              <span class=\"text-muted text-sm\">•</span>
\t              <span class=\"text-muted text-sm\">发表于";
                // line 33
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_question_, "createdTime"), "Y-n-d H:i"), "html", null, true);
                echo "</span>
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 36
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ($_course_) {
                    // line 37
                    echo "\t\t              <a href=\"";
                    if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute($_courses_, $this->getAttribute($_question_, "courseId"), array(), "array"), "id"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_courses_, $this->getAttribute($_question_, "courseId"), array(), "array"), "title"), "html", null, true);
                    echo "</a>
\t\t              <br>
\t\t              <span class=\"text-muted text-sm\">老师：
\t\t\t\t            ";
                    // line 40
                    if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_courses_, $this->getAttribute($_question_, "courseId"), array(), "array"), "teacherIds"));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                        // line 41
                        echo "\t\t\t\t              ";
                        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                        if (isset($context["teachers"])) { $_teachers_ = $context["teachers"]; } else { $_teachers_ = null; }
                        if (isset($context["teacherId"])) { $_teacherId_ = $context["teacherId"]; } else { $_teacherId_ = null; }
                        echo $_admin_macro_->getuser_link($this->getAttribute($_teachers_, $_teacherId_, array(), "array"), "text-muted text-sm");
                        echo "
\t\t\t\t            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t          </span>
\t\t\t          ";
                } else {
                    // line 45
                    echo "\t\t\t            --
\t\t\t          ";
                }
                // line 47
                echo "\t\t          </td>
\t\t          <td>
\t\t            ";
                // line 49
                if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
                if (isset($context["askers"])) { $_askers_ = $context["askers"]; } else { $_askers_ = null; }
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo $_admin_macro_->getuser_link($this->getAttribute($_askers_, $this->getAttribute($_question_, "userId"), array(), "array"));
                echo "
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 52
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if ($_course_) {
                    // line 53
                    echo "\t\t\t\t          <button class=\"btn btn-default btn-sm remind-teachers\" data-url=\"";
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute($_question_, "courseId"), "questionId" => $this->getAttribute($_question_, "id"))), "html", null, true);
                    echo "\">提醒教师</button>
\t\t\t          ";
                }
                // line 55
                echo "\t\t\t        </td>
\t\t        </tr>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t      </tbody>
        </table>
    ";
        } else {
            // line 61
            echo "      <div class=\"empty\">暂无最新未回复问答</div>
    ";
        }
        // line 63
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 63,  163 => 58,  155 => 55,  148 => 53,  145 => 52,  136 => 49,  132 => 47,  124 => 43,  106 => 40,  77 => 31,  70 => 28,  65 => 27,  61 => 25,  56 => 24,  51 => 23,  39 => 13,  21 => 2,  151 => 28,  127 => 22,  119 => 20,  112 => 41,  102 => 16,  98 => 15,  94 => 14,  85 => 11,  82 => 10,  58 => 5,  40 => 3,  36 => 12,  24 => 1,  19 => 1,  246 => 75,  241 => 71,  236 => 21,  230 => 13,  223 => 78,  221 => 77,  218 => 76,  216 => 75,  209 => 71,  198 => 63,  190 => 62,  186 => 61,  181 => 58,  170 => 56,  168 => 61,  165 => 54,  159 => 51,  152 => 50,  143 => 26,  134 => 48,  125 => 47,  115 => 46,  113 => 45,  93 => 37,  90 => 36,  87 => 28,  80 => 24,  76 => 23,  73 => 22,  67 => 20,  63 => 19,  59 => 18,  54 => 17,  48 => 15,  46 => 14,  38 => 12,  23 => 1,  146 => 86,  139 => 82,  135 => 24,  128 => 45,  121 => 72,  105 => 17,  101 => 59,  88 => 12,  83 => 33,  71 => 9,  64 => 25,  49 => 15,  44 => 12,  42 => 13,  35 => 6,  32 => 5,  27 => 6,  25 => 2,);
    }
}
