<?php

/* default/template/common/menu.twig */
class __TwigTemplate_a96c65f5a7c459b55c40a4fadd4138b8fbb32334a95e9fb502fad928c568cc4a extends Twig_Template
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
        echo "<ul id=\"nav\" class=\"hidden-xs\">
    <!-- start about us -->
    ";
        // line 6
        echo "    <li class=\"mega-menu\">
        <a class=\"level-top\" href=\"";
        // line 7
        echo (isset($context["pan_sportswear"]) ? $context["pan_sportswear"] : null);
        echo "\"> <span>pan sportswear</span></a>
    </li>
    <li class=\"mega-menu\">
        <a class=\"level-top\" href=\"";
        // line 10
        echo (isset($context["kappa_thailand"]) ? $context["kappa_thailand"] : null);
        echo "\"> <span>Kappa Thailand</span></a>
    </li>
    <li class=\"mega-menu\">
        <a class=\"level-top\" href=\"";
        // line 13
        echo (isset($context["arena_thailand"]) ? $context["arena_thailand"] : null);
        echo "\"> <span>Arena thailand</span></a>
        ";
        // line 15
        echo "    </li>
    <li class=\"mega-menu\">
        <a class=\"level-top\" href=\"";
        // line 17
        echo (isset($context["heelcare_thailand"]) ? $context["heelcare_thailand"] : null);
        echo "\"> <span>Heelcare thailand</span></a>
        ";
        // line 19
        echo "    </li>
    <li class=\"mega-menu\">
        ";
        // line 22
        echo "        <a href=\"https://www.sportstown-online.com/index.php?route=product/category&path=213\" class=\"level-top\" target=\"new\"><span>Other</span></a>
    </li>
    <!-- end about us -->
    <li class=\"mega-menu\">
        <a href=\"";
        // line 26
        echo (isset($context["payment"]) ? $context["payment"] : null);
        echo "\" class=\"level-top\"> <span>Payment</span></a>
    </li>
    ";
        // line 31
        echo "    <li class=\"mega-menu\">
        ";
        // line 32
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 33
            echo "        <a class=\"level-top\" href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\"> <span>Account</span></a>
        ";
        } else {
            // line 35
            echo "        <a class=\"level-top\" href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\"> <span>Login</span></a>
        ";
        }
        // line 37
        echo "    </li>
    <!-- end contact -->
</ul>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  76 => 35,  70 => 33,  68 => 32,  65 => 31,  60 => 26,  54 => 22,  50 => 19,  46 => 17,  42 => 15,  38 => 13,  32 => 10,  26 => 7,  23 => 6,  19 => 1,);
    }
}
/* <ul id="nav" class="hidden-xs">*/
/*     <!-- start about us -->*/
/*     {# <li id="nav-home" class="level0 parent drop-menu">*/
/*         <a class="level-top" href="index.php?route=information/information&information_id=4"><span>ABOUT US</span></a>*/
/*     </li> #}*/
/*     <li class="mega-menu">*/
/*         <a class="level-top" href="{{ pan_sportswear }}"> <span>pan sportswear</span></a>*/
/*     </li>*/
/*     <li class="mega-menu">*/
/*         <a class="level-top" href="{{ kappa_thailand }}"> <span>Kappa Thailand</span></a>*/
/*     </li>*/
/*     <li class="mega-menu">*/
/*         <a class="level-top" href="{{ arena_thailand }}"> <span>Arena thailand</span></a>*/
/*         {# <a class="level-top" data-toggle="modal" href='#commingsoon-area'> <span>Arena thailand</span></a> #}*/
/*     </li>*/
/*     <li class="mega-menu">*/
/*         <a class="level-top" href="{{ heelcare_thailand }}"> <span>Heelcare thailand</span></a>*/
/*         {# <a class="level-top" data-toggle="modal" href='#commingsoon-heelcare'> <span>Heelcare thailand</span></a> #}*/
/*     </li>*/
/*     <li class="mega-menu">*/
/*         {# <a class="level-top" data-toggle="modal" href='#commingsoon-other'> <span>Other</span></a> #}*/
/*         <a href="https://www.sportstown-online.com/index.php?route=product/category&path=213" class="level-top" target="new"><span>Other</span></a>*/
/*     </li>*/
/*     <!-- end about us -->*/
/*     <li class="mega-menu">*/
/*         <a href="{{ payment }}" class="level-top"> <span>Payment</span></a>*/
/*     </li>*/
/*     {# <li class="mega-menu">*/
/*         <a class="level-top" href="{{ contact }}"> <span>contact</span></a>*/
/*     </li> #}*/
/*     <li class="mega-menu">*/
/*         {% if logged %}*/
/*         <a class="level-top" href="{{ account }}"> <span>Account</span></a>*/
/*         {% else %}*/
/*         <a class="level-top" href="{{ login }}"> <span>Login</span></a>*/
/*         {% endif %}*/
/*     </li>*/
/*     <!-- end contact -->*/
/* </ul>*/
/* */
/* */
