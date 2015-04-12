<?php

/* CleanWaterMapBundle:Map:listeCommentaires.html.twig */
class __TwigTemplate_961c2d6f9c4629b093334ff32d55398e extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 3
            echo "<li>
    <i>Le ";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "d/m/Y"), "html", null, true);
            echo ", par ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"), "html", null, true);
            echo ".</i>
    <div class=\"well\">
";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"), "html", null, true);
            echo "
        </div>
    </li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "    <li>Pas (encore !) de commentaire</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "CleanWaterMapBundle:Map:listeCommentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  27 => 3,  22 => 2,  19 => 1,  291 => 137,  288 => 136,  282 => 78,  277 => 24,  271 => 10,  201 => 140,  199 => 136,  195 => 135,  191 => 134,  187 => 133,  183 => 132,  177 => 129,  172 => 127,  131 => 89,  119 => 79,  117 => 78,  60 => 24,  45 => 15,  36 => 11,  34 => 10,  23 => 1,  64 => 12,  61 => 11,  51 => 14,  44 => 8,  41 => 14,  38 => 5,  30 => 4,  68 => 16,  65 => 15,  62 => 25,  57 => 18,  55 => 14,  49 => 16,  46 => 10,  40 => 5,  37 => 6,  31 => 2,);
    }
}
