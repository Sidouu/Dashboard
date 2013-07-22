<?php

/* BOBackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_93675948c9b3797a71df761bdf14c19a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BOBackOfficeBundle::layout.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BOBackOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "\t<meta name=\"description\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "\tBackOffice | Home
";
    }

    // line 12
    public function block_titre($context, array $blocks = array())
    {
        // line 13
        echo "\tBackOffice | Home
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        // line 18
        echo "\t\t<div class=\"dash-content-title title-blue\">
            <i class=\"icon-home icon-large\"></i>
            <div class=\"pull-right\">
                <h1>> Index statistiques</h1>
            </div>
        </div>
\t";
    }

    public function getTemplateName()
    {
        return "BOBackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  59 => 17,  56 => 16,  51 => 13,  48 => 12,  43 => 9,  40 => 8,  34 => 4,  31 => 3,);
    }
}
