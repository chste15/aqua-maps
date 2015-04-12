<?php

/* CleanWaterMapBundle:Map:index.html.twig */
class __TwigTemplate_616b8555b5572dafe445e66d0abc810c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CleanWaterMapBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'CleanWater_stylesheets' => array($this, 'block_CleanWater_stylesheets'),
            'CleanWater_body' => array($this, 'block_CleanWater_body'),
            'CleanWaterjavascripts' => array($this, 'block_CleanWaterjavascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CleanWaterMapBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_CleanWater_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

 ";
    }

    // line 9
    public function block_CleanWater_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"row \" >
            </div>

";
        // line 14
        $this->displayBlock('CleanWaterjavascripts', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 14
    public function block_CleanWaterjavascripts($context, array $blocks = array())
    {
        // line 15
        echo "    <!-- Include Javascript -->
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://maps.google.com/maps/api/js?sensor=false"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CleanWaterMapBundle:Map:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  65 => 15,  62 => 14,  57 => 18,  55 => 14,  49 => 10,  46 => 9,  40 => 5,  37 => 4,  31 => 2,);
    }
}
