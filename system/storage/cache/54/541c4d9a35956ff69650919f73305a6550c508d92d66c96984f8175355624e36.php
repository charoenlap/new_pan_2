<?php

/* default/template/common/search.twig */
class __TwigTemplate_3ccc0227d8045eedebef5dd5f9ca6468ad8a23460baf62b1cb9108af92bee0ff extends Twig_Template
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
        echo "<form class=\"navbar-form\" role=\"search\">
    <div class=\"input-group\" id=\"search\">
        <input type=\"text\" class=\"form-control\" value=\"";
        // line 3
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\">
        <span class=\"input-group-btn\">
        <button type=\"submit\" class=\"search-btn\"> <span class=\"glyphicon glyphicon-search\"> <span class=\"sr-only\">Search</span> </span>
        </button>
        </span>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <form class="navbar-form" role="search">*/
/*     <div class="input-group" id="search">*/
/*         <input type="text" class="form-control" value="{{ search }}" placeholder="{{ text_search }}">*/
/*         <span class="input-group-btn">*/
/*         <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span>*/
/*         </button>*/
/*         </span>*/
/*     </div>*/
/* </form>*/
