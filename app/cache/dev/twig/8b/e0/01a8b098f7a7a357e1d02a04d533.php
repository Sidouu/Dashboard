<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8be001a8b098f7a7a357e1d02a04d533 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  118 => 49,  100 => 39,  76 => 31,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  181 => 65,  178 => 66,  172 => 64,  150 => 55,  81 => 23,  77 => 31,  159 => 78,  59 => 14,  34 => 4,  180 => 90,  175 => 65,  155 => 77,  148 => 73,  90 => 27,  127 => 61,  124 => 48,  113 => 48,  102 => 40,  65 => 24,  63 => 23,  53 => 12,  110 => 43,  170 => 86,  153 => 56,  134 => 54,  97 => 62,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  235 => 74,  229 => 85,  224 => 71,  220 => 81,  214 => 69,  208 => 68,  169 => 60,  143 => 9,  140 => 58,  132 => 51,  128 => 50,  119 => 40,  107 => 36,  71 => 9,  177 => 65,  165 => 60,  160 => 16,  135 => 47,  126 => 45,  114 => 76,  84 => 24,  70 => 19,  67 => 24,  61 => 18,  38 => 6,  94 => 34,  89 => 19,  85 => 36,  75 => 10,  68 => 21,  56 => 16,  87 => 34,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 33,  46 => 13,  27 => 3,  44 => 13,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 57,  136 => 56,  121 => 50,  117 => 43,  105 => 34,  91 => 38,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 49,  69 => 26,  47 => 21,  40 => 16,  37 => 10,  22 => 2,  246 => 93,  157 => 56,  145 => 46,  139 => 8,  131 => 51,  123 => 42,  120 => 57,  115 => 43,  111 => 47,  108 => 37,  101 => 32,  98 => 35,  96 => 37,  83 => 33,  74 => 29,  66 => 26,  55 => 16,  52 => 15,  50 => 17,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 5,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 77,  168 => 61,  164 => 17,  162 => 59,  154 => 60,  149 => 74,  147 => 54,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 41,  106 => 49,  103 => 37,  99 => 31,  95 => 37,  92 => 20,  86 => 33,  82 => 32,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 21,  54 => 15,  51 => 13,  48 => 12,  45 => 10,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
