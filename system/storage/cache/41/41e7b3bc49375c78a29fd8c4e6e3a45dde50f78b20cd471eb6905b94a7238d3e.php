<?php

/* default/template/common/language.twig */
class __TwigTemplate_f96e41b6ce348485fff28a749d5d9201a118a506152df1fff1289708ee253520 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "<div class=\"tbr-info\">
    <span><img src=\"catalog/language/";
            // line 3
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "/";
            echo (isset($context["code"]) ? $context["code"] : null);
            echo ".png\" alt=\"\" />&nbsp;";
            echo (isset($context["code"]) ? $context["code"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></span>
    <div class=\"tbr-inner\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "      <a href=\"";
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&code=";
                echo $this->getAttribute($context["language"], "code", array());
                echo "&redirect=";
                echo (isset($context["redirect"]) ? $context["redirect"] : null);
                echo "\" class=\"change_language\" data-code=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" alt=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" />";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  37 => 6,  33 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* <div class="tbr-info">*/
/*     <span><img src="catalog/language/{{ code }}/{{ code }}.png" alt="" />&nbsp;{{code}} <i class="fa fa-caret-down"></i></span>*/
/*     <div class="tbr-inner">*/
/*       {% for language in languages %}*/
/*       <a href="{{ action }}&code={{language.code}}&redirect={{redirect}}" class="change_language" data-code="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" />{{ language.name }}</a>*/
/*       {% endfor %}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
