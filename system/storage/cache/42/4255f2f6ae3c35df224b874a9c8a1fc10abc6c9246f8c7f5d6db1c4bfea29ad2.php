<?php

/* default/template/common/account.twig */
class __TwigTemplate_81e510860637886a2b33c5ae8b5d399e1fc31bf53a58aaf3af8a487db98ff821 extends Twig_Template
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
        echo "<div class=\"tbr-info\">
    <span>Account <i class=\"fa fa-caret-down\"></i></span>
    <div class=\"tbr-inner\">
        ";
        // line 4
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 5
            echo "        <a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">My Account</a>
        <a href=\"";
            // line 6
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a>
        <a href=\"";
            // line 7
            echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
            echo "\">Checkout</a>
        <a href=\"";
            // line 8
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">Logout</a>
        ";
        } else {
            // line 10
            echo "        <a href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">Login</a>
        ";
        }
        // line 12
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 10,  41 => 8,  37 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="tbr-info">*/
/*     <span>Account <i class="fa fa-caret-down"></i></span>*/
/*     <div class="tbr-inner">*/
/*         {% if logged %}*/
/*         <a href="{{account}}">My Account</a>*/
/*         <a href="{{wishlist}}">{{text_wishlist}}</a>*/
/*         <a href="{{shopping_cart}}">Checkout</a>*/
/*         <a href="{{logout}}">Logout</a>*/
/*         {% else %}*/
/*         <a href="{{login}}">Login</a>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
