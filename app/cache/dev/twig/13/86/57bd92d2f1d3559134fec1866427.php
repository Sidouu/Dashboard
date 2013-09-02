<?php

/* BOBackOfficeBundle::layout.html.twig */
class __TwigTemplate_138657bd92d2f1d3559134fec1866427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
        <header>
            <div id=\"icon-sidemenu\">
                <i class=\"icon-reorder icon-large icon-white mr10\"></i>
            </div>
            <nav class=\"main\">
                <ul class=\"clear-fix\">
                    <li>
                        <a href=\"#\" title=\"Index\">Index</a>
                    </li>
                    <li>
                        <a href=\"#\" title=\"Contact\">Contact</a>
                    </li>
                    <li>
                        <a href=\"#\" title=\"Admin\">Admin</a>
                    </li>
                </ul>
            </nav>
            <nav class=\"sub\">
                <ul class=\"clear-fix\">
                    <li>
                        <a href=\"/me\" title=\"\">View profile</a>
                    </li>
                    <li class=\"sep\"></li>
                    <li>
                        <a href=\"/pwd\" title=\"\">Change password</a>
                    </li>
                    <li class=\"sep\"></li>
                    <li>
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("BOSecurityBundle_logout");
        echo "\" title=\"\">Logout</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id=\"wrap\">
            <ul id=\"dash-sidemenu\">
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("bo_back_office_homepage");
        echo "\"><li class=\"m1\"><i class=\"icon-home icon-large mr10\"></i>Home</li></a>
                <hr>
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("customer");
        echo "\"><li class=\"m2\"><i class=\"icon-user icon-large mr10\"></i>Customers</li></a>
                <hr>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("piano");
        echo "\"><li class=\"m3\"><i class=\"icon-user icon-large mr10\"></i>Pianos</li></a>
                <hr>
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("bill");
        echo "\"><li class=\"m4\"><i class=\"icon-user icon-large mr10\"></i>Bills</li></a>
                <hr>
                <li class=\"m5\"><i class=\"icon-user icon-large mr10\"></i>Papers</li>
                <hr>
                <li class=\"m6\"><i class=\"icon-user icon-large mr10\"></i>Administration</li>
                <hr>
                <li class=\"m7\"><i class=\"icon-user icon-large mr10\"></i>Plans</li>
                <hr>
                <li class=\"m8\"><i class=\"icon-user icon-large mr10\"></i>Credits</li>
                <hr>
                <li class=\"m9\"><i class=\"icon-user icon-large mr10\"></i>Infos</li>
                <hr>
            </ul>
            <div id=\"dash-content\">
                ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Backoffice";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bobackoffice/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bobackoffice/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bobackoffice/css/font-awesome-ie7.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
            <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.min.js\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bobackoffice/js/jquery.pajinate.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bobackoffice/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "                ";
    }

    public function getTemplateName()
    {
        return "BOBackOfficeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 76,  153 => 13,  134 => 7,  97 => 62,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 9,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 16,  135 => 47,  126 => 45,  114 => 76,  84 => 28,  70 => 20,  67 => 15,  61 => 13,  38 => 13,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  87 => 58,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 13,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 14,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 49,  69 => 24,  47 => 9,  40 => 19,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 8,  131 => 6,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 12,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 77,  168 => 66,  164 => 17,  162 => 62,  154 => 54,  149 => 51,  147 => 10,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 5,  122 => 43,  116 => 78,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 60,  86 => 28,  82 => 56,  80 => 19,  73 => 19,  64 => 22,  60 => 6,  57 => 11,  54 => 15,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
