<?php

/* default/template/extension/module/home_category.twig */
class __TwigTemplate_36da792fe873be32f1b90153cb4509ebc141665745d7271d8b5d86beceac359b extends Twig_Template
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
        echo "<!-- BLOCKS WRAP -->
<div class=\"block-main container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-4\">
            <div class=\"block-content\">
                <img src=\"";
        // line 6
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" class=\"img-responsive\" alt=\"\" />
                <a href=\"";
        // line 7
        echo $this->getAttribute((isset($context["category1"]) ? $context["category1"] : null), "link", array());
        echo "\">
                <div class=\"bs-text-down bs-text-down-top text-center hvr-outline-out\">
                    <h3> ";
        // line 9
        echo $this->getAttribute((isset($context["category1"]) ? $context["category1"] : null), "name", array());
        echo "</h3>
                </div>
                </a>
                <a href=\"";
        // line 12
        echo $this->getAttribute((isset($context["category2"]) ? $context["category2"] : null), "link", array());
        echo "\">
                <div class=\"bs-text-down bs-text-down-center text-center hvr-outline-out\">
                    <h3> ";
        // line 14
        echo $this->getAttribute((isset($context["category2"]) ? $context["category2"] : null), "name", array());
        echo "</h3>
                </div>
                </a>
                <a href=\"";
        // line 17
        echo $this->getAttribute((isset($context["category3"]) ? $context["category3"] : null), "link", array());
        echo "\">
                <div class=\"bs-text-down text-center hvr-outline-out\">
                    <h3> ";
        // line 19
        echo $this->getAttribute((isset($context["category3"]) ? $context["category3"] : null), "name", array());
        echo "</h3>
                </div>
                </a>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-4\">
            <div class=\"block-content\">
                <img src=\"";
        // line 26
        echo (isset($context["image2"]) ? $context["image2"] : null);
        echo "\" class=\"img-responsive\" alt=\"\" />
                <a href=\"";
        // line 27
        echo $this->getAttribute((isset($context["category4"]) ? $context["category4"] : null), "link", array());
        echo "\">
                <div class=\"bs-text-center text-center\">
                        <h3> ";
        // line 29
        echo $this->getAttribute((isset($context["category4"]) ? $context["category4"] : null), "name", array());
        echo "</h3>
                </div>
                </a>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-4\">
            <div class=\"block-content\">
                <img src=\"";
        // line 36
        echo (isset($context["image3"]) ? $context["image3"] : null);
        echo "\" class=\"img-responsive\" alt=\"\" />
                <a href=\"";
        // line 37
        echo $this->getAttribute((isset($context["category5"]) ? $context["category5"] : null), "link", array());
        echo "\">
                <div class=\"bs-text-down bs-text-down-top text-center\">
                    <h3> ";
        // line 39
        echo $this->getAttribute((isset($context["category5"]) ? $context["category5"] : null), "name", array());
        echo "</h3>
                </div>
                </a>
                <a href=\"";
        // line 42
        echo $this->getAttribute((isset($context["category6"]) ? $context["category6"] : null), "link", array());
        echo "\">
                <div class=\"bs-text-down bs-text-down-center text-center\">
                    <h3> ";
        // line 44
        echo $this->getAttribute((isset($context["category6"]) ? $context["category6"] : null), "name", array());
        echo "</h3>
                </div>
                </a>
                <a href=\"";
        // line 47
        echo $this->getAttribute((isset($context["category7"]) ? $context["category7"] : null), "link", array());
        echo "\">
                <div class=\"bs-text-down text-center\">
                    <h3> ";
        // line 49
        echo $this->getAttribute((isset($context["category7"]) ? $context["category7"] : null), "name", array());
        echo "</h3>
                </div>
                </a>

            </div>
        </div>
    </div>
</div>

<div class=\"clearfix\"></div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/home_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 47,  106 => 44,  101 => 42,  95 => 39,  90 => 37,  86 => 36,  76 => 29,  71 => 27,  67 => 26,  57 => 19,  52 => 17,  46 => 14,  41 => 12,  35 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!-- BLOCKS WRAP -->*/
/* <div class="block-main container">*/
/*     <div class="row">*/
/*         <div class="col-md-4 col-sm-4">*/
/*             <div class="block-content">*/
/*                 <img src="{{image}}" class="img-responsive" alt="" />*/
/*                 <a href="{{category1.link}}">*/
/*                 <div class="bs-text-down bs-text-down-top text-center hvr-outline-out">*/
/*                     <h3> {{category1.name}}</h3>*/
/*                 </div>*/
/*                 </a>*/
/*                 <a href="{{category2.link}}">*/
/*                 <div class="bs-text-down bs-text-down-center text-center hvr-outline-out">*/
/*                     <h3> {{category2.name}}</h3>*/
/*                 </div>*/
/*                 </a>*/
/*                 <a href="{{category3.link}}">*/
/*                 <div class="bs-text-down text-center hvr-outline-out">*/
/*                     <h3> {{category3.name}}</h3>*/
/*                 </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4 col-sm-4">*/
/*             <div class="block-content">*/
/*                 <img src="{{image2}}" class="img-responsive" alt="" />*/
/*                 <a href="{{category4.link}}">*/
/*                 <div class="bs-text-center text-center">*/
/*                         <h3> {{category4.name}}</h3>*/
/*                 </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4 col-sm-4">*/
/*             <div class="block-content">*/
/*                 <img src="{{image3}}" class="img-responsive" alt="" />*/
/*                 <a href="{{category5.link}}">*/
/*                 <div class="bs-text-down bs-text-down-top text-center">*/
/*                     <h3> {{category5.name}}</h3>*/
/*                 </div>*/
/*                 </a>*/
/*                 <a href="{{category6.link}}">*/
/*                 <div class="bs-text-down bs-text-down-center text-center">*/
/*                     <h3> {{category6.name}}</h3>*/
/*                 </div>*/
/*                 </a>*/
/*                 <a href="{{category7.link}}">*/
/*                 <div class="bs-text-down text-center">*/
/*                     <h3> {{category7.name}}</h3>*/
/*                 </div>*/
/*                 </a>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="clearfix"></div>*/
