<?php

/* default/template/common/cart.twig */
class __TwigTemplate_c2db183ab507e840cf86aa62312b9cddfb328e27d45c3e4ace960f62dda05f61 extends Twig_Template
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
        echo "<div class=\"topcart\">
    <a href=\"";
        // line 2
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "\"><span><i class=\"fa fa-shopping-cart\"></i></span></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="topcart">*/
/*     <a href="{{ cart }}"><span><i class="fa fa-shopping-cart"></i></span></a>*/
/* </div>*/
/* {# <div id="cart" class="mini-cart">*/
/*     <div class="basket">*/
/*         <a href="{{ cart }}"><i class="fas fa-shopping-cart" style="font-size:18px;"></i></a>*/
/*     </div>*/
/*     <div class="fl-mini-cart-content" style="display: none;">*/
/*         <div class="block-subtitle">*/
/*             {% if products %}*/
/*             <div class="top-subtotal"><span id="cart-total">{{ text_items }}</span> </div>*/
/*             {% else %}*/
/*             <div class="top-subtotal text-center" style="min-width:250px;">{{ text_empty }}</div>*/
/*             {% endif %}*/
/*             <!--top-subtotal-->*/
/*             <!--pull-right-->*/
/*         </div>*/
/*         <!--block-subtitle-->*/
/*         <ul class="mini-products-list" id="cart-sidebar">*/
/*             {% if products %} {% for product in products %}*/
/*             <li class="item first">*/
/*                 <div class="item-inner">*/
/*                     <a class="product-image" title="{{ product.name }}" href="{{ product.href }}">*/
/*                         {% if product.thumb %}*/
/*                         <img alt="{{ product.name }}" src="{{ product.thumb }}">*/
/*                         {% endif %}*/
/*                       </a>*/
/*                     <div class="product-details">*/
/*                         <div class="access">*/
/*                             <a class="btn-remove1" title="Remove This Item" href="#" onclick="cart.remove('{{ product.cart_id }}');">{{ button_remove }}</a>*/
/*                             <!--access-->*/
/*                             <strong>{{ product.quantity }}</strong> x <span class="price">{{ product.total }}</span>*/
/*                             <p class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*             </li>*/
/*             {% endfor %} {% endif %}*/
/*         </ul>*/
/*         {% if products %}*/
/*         <div class="actions">*/
/*             <button class="btn-checkout" title="Checkout" type="button" onClick="window.location='{{ cart }}';"><span>{{ text_checkout }}</span></button>*/
/*         </div>*/
/*         {% endif %}*/
/*         <!--actions-->*/
/*     </div>*/
/*     <!--fl-mini-cart-content-->*/
/* </div> #}*/
/* */
