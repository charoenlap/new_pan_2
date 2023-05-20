<?php

/* default/template/common/column_left.twig */
class __TwigTemplate_8c16e8fc0b5073c911e14d29cc8cf21d329eb7f1f2adc51dd33d76821c87e692 extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "<aside class=\"col-md-3 col-sm-4\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " ";
                echo $context["module"];
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* <aside class="col-md-3 col-sm-4">*/
/*     {% for module in modules %} {{ module }} {% endfor %}*/
/* </aside>*/
/* {% endif %}*/
