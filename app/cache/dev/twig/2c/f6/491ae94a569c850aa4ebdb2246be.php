<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_2cf6491ae94a569c850aa4ebdb2246be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  102 => 17,  76 => 17,  53 => 11,  90 => 32,  65 => 8,  77 => 31,  124 => 8,  110 => 22,  23 => 1,  59 => 13,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 10,  128 => 9,  119 => 7,  107 => 36,  71 => 19,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 29,  70 => 20,  67 => 15,  61 => 12,  38 => 6,  94 => 34,  89 => 20,  85 => 36,  75 => 23,  68 => 21,  56 => 11,  87 => 18,  21 => 2,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 18,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 75,  142 => 59,  138 => 13,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 38,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 13,  72 => 16,  69 => 9,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 16,  139 => 50,  131 => 42,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 77,  98 => 31,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 76,  149 => 51,  147 => 58,  144 => 53,  141 => 14,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 6,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 75,  95 => 34,  92 => 33,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 7,  57 => 12,  54 => 10,  51 => 5,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 3,);
    }
}
