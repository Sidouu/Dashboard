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
        return array (  173 => 77,  170 => 76,  164 => 17,  160 => 16,  156 => 14,  153 => 13,  147 => 10,  143 => 9,  139 => 8,  134 => 7,  131 => 6,  125 => 5,  116 => 78,  114 => 76,  97 => 62,  92 => 60,  87 => 58,  82 => 56,  72 => 49,  40 => 19,  38 => 13,  35 => 12,  33 => 6,  29 => 5,  23 => 1,);
    }
}
