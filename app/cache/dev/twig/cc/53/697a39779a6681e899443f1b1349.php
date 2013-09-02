<?php

/* BOSecurityBundle:Default:login.html.twig */
class __TwigTemplate_cc53697a39779a6681e899443f1b1349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BOSecurityBundle::layout.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BOSecurityBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    Backoffice | Login
";
    }

    // line 12
    public function block_titre($context, array $blocks = array())
    {
        // line 13
        echo "    Backoffice | Login
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        // line 18
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("BOSecurityBundle_login_check");
        echo "\" method=\"post\" id=\"loginForm\">
            <div class=\"controls\">
                <label for=\"username\">Username</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo $this->getContext($context, "last_username");
        echo "\" />
            </div>
            <div class=\"controls\">
                <label for=\"password\">Password</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            </div>
            ";
        // line 31
        echo "            <div class=\"controls\">
                <button type=\"submit\" class=\"btn-flat btn-flat-blue\">Login</button>
            </div>
        </form>
        ";
        // line 35
        if ($this->getContext($context, "error")) {
            // line 36
            echo "            <div>";
            echo $this->getAttribute($this->getContext($context, "error"), "message");
            echo "</div>
        ";
        }
        // line 38
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BOSecurityBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  159 => 78,  59 => 17,  34 => 4,  180 => 90,  175 => 88,  155 => 77,  148 => 73,  90 => 33,  127 => 61,  124 => 48,  113 => 53,  102 => 37,  65 => 24,  63 => 23,  53 => 14,  110 => 43,  170 => 86,  153 => 13,  134 => 65,  97 => 62,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 9,  140 => 55,  132 => 51,  128 => 50,  119 => 42,  107 => 36,  71 => 29,  177 => 65,  165 => 64,  160 => 16,  135 => 47,  126 => 45,  114 => 76,  84 => 28,  70 => 27,  67 => 15,  61 => 18,  38 => 13,  94 => 34,  89 => 34,  85 => 36,  75 => 30,  68 => 21,  56 => 16,  87 => 58,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 33,  46 => 13,  27 => 4,  44 => 13,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 14,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 43,  105 => 40,  91 => 38,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 49,  69 => 26,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 8,  131 => 51,  123 => 47,  120 => 57,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 35,  96 => 42,  83 => 35,  74 => 29,  66 => 26,  55 => 15,  52 => 15,  50 => 17,  43 => 9,  41 => 7,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 77,  168 => 66,  164 => 17,  162 => 81,  154 => 76,  149 => 74,  147 => 10,  144 => 53,  141 => 69,  133 => 55,  130 => 41,  125 => 5,  122 => 43,  116 => 78,  112 => 42,  109 => 41,  106 => 49,  103 => 37,  99 => 45,  95 => 37,  92 => 41,  86 => 33,  82 => 32,  80 => 19,  73 => 27,  64 => 25,  60 => 6,  57 => 21,  54 => 15,  51 => 13,  48 => 12,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
