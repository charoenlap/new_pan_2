<?php

/* default/template/common/home.twig */
class __TwigTemplate_40e6d1be69d69f67fd36fb07fbf11a8820fe01e15b5d6786a5a455c052d88fa1 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
";
        // line 3
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
";
        // line 4
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
";
        // line 5
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
";
        // line 6
        echo (isset($context["extra"]) ? $context["extra"] : null);
        echo "
";
        // line 7
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* {{ content_top }}*/
/* {{ content_bottom }}*/
/* {{ column_right }}*/
/* {{ extra }}*/
/* {{ footer }}*/
