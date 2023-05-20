<?php

/* default/template/extension/module/banner.twig */
class __TwigTemplate_dbc15b3dbb6b590e841e3115200caed177bbd6f3be8d7bb9338dd64d8ded13a7 extends Twig_Template
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
        <!-- SLIDER -->
        <div class=\"slider-wrap\" id=\"banner";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\">
            <div class=\"tp-banner-container\">
                <div class=\"tp-banner\">
                    <ul>
                        <!-- SLIDE  -->
                        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 9
            echo "                        <li data-transition=\"fade\" data-slotamount=\"2\" data-masterspeed=\"500\"
                            data-thumb=\"";
            // line 10
            echo $this->getAttribute($context["banner"], "image", array());
            echo "\" data-saveperformance=\"on\" data-title=\"";
            echo $this->getAttribute($context["banner"], "title", array());
            echo "\">
                            <!-- MAIN IMAGE -->
                            <img src=\"";
            // line 12
            echo $this->getAttribute($context["banner"], "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["banner"], "title", array());
            echo "\" data-lazyload=\"";
            echo $this->getAttribute($context["banner"], "image", array());
            echo "\"
                                data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    </ul>
                    <div class=\"tp-bannertimer\"></div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  45 => 12,  38 => 10,  35 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* */
/*         <!-- SLIDER -->*/
/*         <div class="slider-wrap" id="banner{{ module }}">*/
/*             <div class="tp-banner-container">*/
/*                 <div class="tp-banner">*/
/*                     <ul>*/
/*                         <!-- SLIDE  -->*/
/*                         {% for banner in banners %}*/
/*                         <li data-transition="fade" data-slotamount="2" data-masterspeed="500"*/
/*                             data-thumb="{{ banner.image }}" data-saveperformance="on" data-title="{{ banner.title }}">*/
/*                             <!-- MAIN IMAGE -->*/
/*                             <img src="{{ banner.image }}" alt="{{ banner.title }}" data-lazyload="{{ banner.image }}"*/
/*                                 data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">*/
/*                         </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                     <div class="tp-bannertimer"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* {# <div class="swiper-viewport">*/
/*   <div id="banner{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">{% for banner in banners %}*/
/*       <div class="swiper-slide">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}*/
/*       <img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/*       {% endif %}</div>*/
/*       {% endfor %}</div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!-- */
/* $('#banner{{ module }}').swiper({*/
/* 	effect: 'fade',*/
/* 	autoplay: 2500,*/
/*     autoplayDisableOnInteraction: false*/
/* });*/
/* --></script>  #}*/
