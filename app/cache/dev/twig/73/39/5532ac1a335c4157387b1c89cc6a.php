<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_73395532ac1a335c4157387b1c89cc6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 69,  172 => 67,  165 => 64,  162 => 63,  132 => 54,  108 => 42,  111 => 40,  38 => 11,  60 => 21,  47 => 13,  18 => 1,  75 => 25,  54 => 15,  51 => 17,  260 => 236,  258 => 235,  255 => 234,  238 => 219,  236 => 218,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 248,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 71,  196 => 63,  183 => 68,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 22,  36 => 7,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 34,  65 => 23,  59 => 18,  45 => 11,  103 => 24,  91 => 20,  74 => 22,  70 => 14,  66 => 12,  25 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 58,  130 => 48,  125 => 52,  119 => 45,  116 => 44,  112 => 43,  102 => 39,  98 => 36,  76 => 26,  73 => 24,  69 => 23,  56 => 16,  32 => 5,  89 => 35,  82 => 33,  26 => 3,  92 => 39,  86 => 27,  77 => 23,  57 => 21,  24 => 3,  19 => 2,  42 => 10,  29 => 4,  23 => 3,  22 => 3,  17 => 1,  68 => 24,  61 => 21,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 50,  113 => 39,  104 => 35,  99 => 33,  94 => 35,  81 => 18,  78 => 32,  72 => 25,  64 => 15,  53 => 15,  50 => 14,  48 => 16,  41 => 6,  39 => 12,  35 => 7,  33 => 6,  30 => 5,  27 => 6,  182 => 70,  176 => 71,  169 => 66,  163 => 58,  160 => 57,  155 => 56,  151 => 62,  149 => 52,  141 => 54,  136 => 55,  134 => 50,  131 => 43,  128 => 53,  120 => 51,  117 => 36,  114 => 35,  109 => 38,  106 => 41,  100 => 30,  96 => 34,  93 => 36,  90 => 28,  87 => 28,  83 => 24,  79 => 25,  71 => 23,  62 => 11,  58 => 20,  55 => 16,  52 => 19,  49 => 13,  46 => 13,  43 => 14,  40 => 11,  37 => 10,  34 => 9,  31 => 6,  28 => 7,);
    }
}
