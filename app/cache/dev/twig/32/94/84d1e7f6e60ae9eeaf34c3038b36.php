<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_329484d1e7f6e60ae9eeaf34c3038b36 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  92 => 39,  86 => 6,  77 => 39,  57 => 22,  24 => 4,  19 => 1,  42 => 7,  29 => 6,  23 => 3,  22 => 2,  17 => 1,  68 => 14,  61 => 9,  44 => 8,  20 => 2,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 46,  137 => 45,  129 => 42,  121 => 41,  118 => 40,  113 => 39,  104 => 36,  99 => 33,  94 => 31,  81 => 25,  78 => 24,  72 => 22,  64 => 20,  53 => 16,  50 => 15,  48 => 14,  41 => 6,  39 => 5,  35 => 8,  33 => 7,  30 => 4,  27 => 3,  182 => 70,  176 => 66,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 53,  141 => 48,  136 => 45,  134 => 44,  131 => 43,  128 => 42,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 32,  93 => 28,  90 => 29,  87 => 26,  83 => 24,  79 => 40,  71 => 19,  62 => 19,  58 => 8,  55 => 12,  52 => 6,  49 => 9,  46 => 14,  43 => 8,  40 => 6,  37 => 8,  34 => 5,  31 => 7,  28 => 3,);
    }
}
