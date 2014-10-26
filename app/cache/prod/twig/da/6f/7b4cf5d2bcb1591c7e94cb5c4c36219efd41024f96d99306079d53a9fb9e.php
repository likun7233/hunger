<?php

/* TopxiaWebBundle:Message:message-item.html.twig */
class __TwigTemplate_da6f7b4cf5d2bcb1591c7e94cb5c4c36219efd41024f96d99306079d53a9fb9e extends Twig_Template
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
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["messageFrom"] = ((($this->getAttribute($_message_, "fromId") == $this->getAttribute($this->getAttribute($_app_, "user"), "id"))) ? ("me") : ("she"));
        // line 2
        echo "<li class=\"media message-";
        if (isset($context["messageFrom"])) { $_messageFrom_ = $context["messageFrom"]; } else { $_messageFrom_ = null; }
        echo twig_escape_filter($this->env, $_messageFrom_, "html", null, true);
        echo "\" parent-url=\"";
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">
  ";
        // line 3
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if (isset($context["messageFrom"])) { $_messageFrom_ = $context["messageFrom"]; } else { $_messageFrom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_avatar", array(0 => $this->getAttribute($_message_, "createdUser"), 1 => (((($_messageFrom_ == "me")) ? ("pull-right") : ("pull-left")) . " media-object")), "method"), "html", null, true);
        echo "
  <div class=\"media-body\">
    <div class=\"popover ";
        // line 5
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($_message_, "fromId") == $this->getAttribute($this->getAttribute($_app_, "user"), "id"))) {
            echo "left";
        } else {
            echo "right";
        }
        echo "\">
      <div class=\"arrow\"></div>
      <div class=\"popover-content\">
        <div class=\"message-content\">
          ";
        // line 9
        if (isset($context["messageFrom"])) { $_messageFrom_ = $context["messageFrom"]; } else { $_messageFrom_ = null; }
        if (($_messageFrom_ == "me")) {
            // line 10
            echo "            <strong>我：</strong> 
          ";
        } else {
            // line 12
            echo "            <strong>";
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "user_link", array(0 => $this->getAttribute($_message_, "createdUser")), "method"), "html", null, true);
            echo "：</strong> 
          ";
        }
        // line 14
        echo "          ";
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_message_, "content"), "html", null, true);
        echo "
        </div>
        <div class=\"message-footer\">
          <span class=\"text-muted\">";
        // line 17
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($_message_, "createdTime")), "html", null, true);
        echo "</span>
          <div class=\"message-actions\">
            <a class=\"text-muted delete-message\" href=\"javascript:\" data-url=\"";
        // line 19
        if (isset($context["conversation"])) { $_conversation_ = $context["conversation"]; } else { $_conversation_ = null; }
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_delete", array("conversationId" => $this->getAttribute($_conversation_, "id"), "messageId" => $this->getAttribute($_message_, "id"))), "html", null, true);
        echo "\" 
            >删除</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:message-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  67 => 14,  59 => 12,  55 => 10,  39 => 5,  23 => 2,  19 => 1,  1185 => 312,  1173 => 311,  1170 => 310,  1153 => 307,  1145 => 306,  1142 => 305,  1113 => 302,  1079 => 301,  1076 => 300,  1067 => 296,  1062 => 295,  1059 => 294,  1049 => 287,  1046 => 286,  1041 => 285,  1038 => 284,  1033 => 280,  1024 => 278,  1019 => 277,  1017 => 276,  1014 => 275,  1011 => 274,  1004 => 271,  1001 => 270,  997 => 267,  993 => 265,  990 => 264,  987 => 263,  979 => 259,  975 => 258,  947 => 257,  944 => 255,  940 => 253,  937 => 252,  934 => 251,  931 => 250,  926 => 247,  923 => 246,  920 => 245,  917 => 244,  912 => 239,  909 => 238,  905 => 235,  902 => 234,  900 => 233,  897 => 232,  893 => 229,  890 => 228,  887 => 227,  884 => 226,  882 => 225,  879 => 224,  875 => 221,  872 => 216,  867 => 212,  842 => 208,  838 => 206,  835 => 205,  831 => 203,  828 => 202,  823 => 200,  820 => 199,  817 => 198,  814 => 197,  810 => 192,  807 => 191,  804 => 190,  800 => 187,  797 => 186,  794 => 185,  781 => 182,  777 => 180,  774 => 179,  771 => 178,  767 => 175,  764 => 174,  761 => 173,  757 => 170,  754 => 169,  751 => 168,  747 => 165,  744 => 164,  741 => 163,  736 => 160,  733 => 159,  730 => 158,  726 => 155,  723 => 154,  720 => 153,  716 => 150,  713 => 149,  710 => 148,  705 => 145,  702 => 144,  698 => 141,  695 => 140,  692 => 139,  688 => 136,  685 => 135,  682 => 133,  677 => 129,  659 => 128,  654 => 127,  651 => 126,  648 => 124,  645 => 123,  642 => 122,  637 => 118,  635 => 116,  634 => 115,  633 => 114,  630 => 113,  626 => 112,  623 => 110,  620 => 109,  617 => 108,  612 => 104,  609 => 103,  606 => 102,  603 => 101,  600 => 100,  596 => 99,  593 => 97,  590 => 96,  587 => 95,  571 => 92,  568 => 91,  552 => 88,  549 => 87,  519 => 82,  516 => 80,  514 => 79,  511 => 78,  504 => 77,  501 => 76,  483 => 75,  480 => 74,  476 => 71,  474 => 70,  471 => 69,  464 => 66,  460 => 65,  458 => 64,  455 => 63,  452 => 62,  439 => 60,  436 => 59,  427 => 58,  424 => 57,  421 => 56,  415 => 55,  412 => 54,  408 => 51,  401 => 49,  398 => 48,  393 => 47,  388 => 46,  385 => 45,  380 => 41,  377 => 39,  374 => 38,  371 => 37,  362 => 34,  359 => 33,  355 => 30,  350 => 28,  348 => 27,  345 => 26,  341 => 23,  338 => 22,  336 => 21,  332 => 19,  329 => 18,  325 => 17,  322 => 16,  305 => 13,  302 => 12,  299 => 11,  294 => 7,  291 => 5,  288 => 4,  285 => 3,  281 => 310,  278 => 309,  276 => 305,  273 => 304,  271 => 300,  268 => 299,  266 => 294,  263 => 293,  260 => 291,  258 => 284,  255 => 283,  253 => 274,  250 => 273,  248 => 270,  245 => 269,  243 => 263,  240 => 262,  238 => 250,  235 => 249,  233 => 244,  230 => 243,  227 => 241,  225 => 238,  222 => 237,  220 => 232,  217 => 231,  215 => 224,  212 => 223,  210 => 216,  207 => 215,  204 => 213,  202 => 212,  199 => 211,  197 => 197,  194 => 196,  191 => 194,  189 => 190,  186 => 189,  184 => 185,  181 => 184,  179 => 178,  176 => 177,  174 => 173,  171 => 172,  169 => 168,  166 => 167,  164 => 163,  161 => 162,  159 => 158,  156 => 157,  154 => 153,  151 => 152,  149 => 148,  146 => 147,  144 => 144,  141 => 143,  139 => 139,  136 => 138,  134 => 133,  131 => 132,  126 => 121,  124 => 108,  121 => 107,  119 => 95,  116 => 94,  114 => 91,  109 => 87,  106 => 86,  104 => 74,  101 => 73,  99 => 54,  96 => 53,  94 => 45,  91 => 44,  86 => 36,  84 => 33,  81 => 19,  79 => 26,  76 => 25,  71 => 15,  69 => 11,  64 => 3,  61 => 2,  129 => 122,  125 => 33,  111 => 90,  107 => 31,  89 => 37,  82 => 26,  74 => 16,  66 => 10,  60 => 16,  52 => 9,  48 => 11,  41 => 6,  38 => 5,  31 => 3,  26 => 4,);
    }
}
