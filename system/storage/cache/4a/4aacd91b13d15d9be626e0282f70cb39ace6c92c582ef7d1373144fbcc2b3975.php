<?php

/* default/template/common/extra.twig */
class __TwigTemplate_dadbdeff44e45c36d30fc86975a9b32150cff215718f1aed819b3d6995b66640 extends Twig_Template
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
<!-- NEW ARRIVALS -->
<div class=\"product-widgets\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6\">
                <h5 class=\"heading2 space40\"><span>";
        // line 7
        echo (isset($context["text_last"]) ? $context["text_last"] : null);
        echo "</span></h5>
                <div class=\"product-carousel\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_last"]) ? $context["products_last"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "                    <div class=\"pc-wrap\">
                        <div class=\"product-item\">
                            <div class=\"item-thumb\">
                                <img src=\"";
            // line 13
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" />
                                <div class=\"overlay-rmore fa fa-search quickview\" data-toggle=\"modal\"
                                    data-target=\"#myModal\" data-id=\"";
            // line 15
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"></div>
                            </div>
                            <div class=\"product-info\">
                                <h4 class=\"product-title\"><a href=\"";
            // line 18
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
                                <span class=\"product-price\">
                                ";
            // line 20
            if ( !$this->getAttribute($context["product"], "special", array())) {
                // line 21
                echo "                                    ";
                echo $this->getAttribute($context["product"], "price", array());
                echo "
                                ";
            } else {
                // line 22
                echo " 
                                    <span class=\"price-new\">";
                // line 23
                echo $this->getAttribute($context["product"], "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span> 
                                ";
            }
            // line 25
            echo "                                </span>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
            </div>
            <div class=\"col-md-6 col-sm-6\">
                <h5 class=\"heading2 space40\"><span>";
        // line 33
        echo (isset($context["text_best"]) ? $context["text_best"] : null);
        echo "</span></h5>
                <div class=\"product-carousel2\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_best"]) ? $context["products_best"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                    <div class=\"pc-wrap\">
                        <div class=\"product-item\">
                            <div class=\"item-thumb\">
                                <img src=\"";
            // line 39
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" />
                                <div class=\"overlay-rmore fa fa-search quickview\" data-toggle=\"modal\"
                                    data-target=\"#myModal\" data-id=\"";
            // line 41
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"></div>
                            </div>
                            <div class=\"product-info\">
                                <h4 class=\"product-title\"><a href=\"";
            // line 44
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
                                <span class=\"product-price\">
                                ";
            // line 46
            if ( !$this->getAttribute($context["product"], "special", array())) {
                // line 47
                echo "                                    ";
                echo $this->getAttribute($context["product"], "price", array());
                echo "
                                ";
            } else {
                // line 48
                echo " 
                                    <span class=\"price-new\">";
                // line 49
                echo $this->getAttribute($context["product"], "special", array());
                echo "</span> <span class=\"price-old\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span> 
                                ";
            }
            // line 51
            echo "                                </span>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"space30 clearfix\"></div>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  146 => 51,  139 => 49,  136 => 48,  130 => 47,  128 => 46,  121 => 44,  115 => 41,  108 => 39,  103 => 36,  99 => 35,  94 => 33,  89 => 30,  79 => 25,  72 => 23,  69 => 22,  63 => 21,  61 => 20,  54 => 18,  48 => 15,  41 => 13,  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* */
/* <!-- NEW ARRIVALS -->*/
/* <div class="product-widgets">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-6 col-sm-6">*/
/*                 <h5 class="heading2 space40"><span>{{text_last}}</span></h5>*/
/*                 <div class="product-carousel">*/
/*                     {% for product in products_last %}*/
/*                     <div class="pc-wrap">*/
/*                         <div class="product-item">*/
/*                             <div class="item-thumb">*/
/*                                 <img src="{{ product.thumb }}" class="img-responsive" alt="{{ product.name }}" />*/
/*                                 <div class="overlay-rmore fa fa-search quickview" data-toggle="modal"*/
/*                                     data-target="#myModal" data-id="{{product.product_id}}"></div>*/
/*                             </div>*/
/*                             <div class="product-info">*/
/*                                 <h4 class="product-title"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                                 <span class="product-price">*/
/*                                 {% if not product.special %}*/
/*                                     {{ product.price }}*/
/*                                 {% else %} */
/*                                     <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> */
/*                                 {% endif %}*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 col-sm-6">*/
/*                 <h5 class="heading2 space40"><span>{{text_best}}</span></h5>*/
/*                 <div class="product-carousel2">*/
/*                     {% for product in products_best %}*/
/*                     <div class="pc-wrap">*/
/*                         <div class="product-item">*/
/*                             <div class="item-thumb">*/
/*                                 <img src="{{ product.thumb }}" class="img-responsive" alt="{{ product.name }}" />*/
/*                                 <div class="overlay-rmore fa fa-search quickview" data-toggle="modal"*/
/*                                     data-target="#myModal" data-id="{{product.product_id}}"></div>*/
/*                             </div>*/
/*                             <div class="product-info">*/
/*                                 <h4 class="product-title"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                                 <span class="product-price">*/
/*                                 {% if not product.special %}*/
/*                                     {{ product.price }}*/
/*                                 {% else %} */
/*                                     <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> */
/*                                 {% endif %}*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="space30 clearfix"></div>*/
/* */
/* */
