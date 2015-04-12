<?php

/* CleanWaterMapBundle::layout.html.twig */
class __TwigTemplate_3c68d5638265c8c5ba53f8c10cd271e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'CleanWater_body' => array($this, 'block_CleanWater_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 8
        echo "

<div class=\"row\" >
    ";
        // line 11
        $this->displayBlock('CleanWater_body', $context, $blocks);
        // line 14
        echo "</div>





";
    }

    // line 11
    public function block_CleanWater_body($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "CleanWaterMapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  61 => 11,  51 => 14,  44 => 8,  41 => 6,  38 => 5,  30 => 3,  68 => 16,  65 => 15,  62 => 14,  57 => 18,  55 => 14,  49 => 11,  46 => 9,  40 => 5,  37 => 4,  31 => 2,);
    }
}
