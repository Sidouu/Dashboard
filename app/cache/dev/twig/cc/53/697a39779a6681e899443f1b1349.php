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
        return array (  91 => 38,  85 => 36,  83 => 35,  77 => 31,  68 => 21,  61 => 18,  59 => 17,  56 => 16,  51 => 13,  48 => 12,  43 => 9,  40 => 8,  34 => 4,  31 => 3,);
    }
}
