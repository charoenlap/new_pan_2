<?php

/* default/template/extension/module/featured.twig */
class __TwigTemplate_ca149d6993f5e0dd19a289651820cca894e393a45f03e47a1a8226ed508b62c8 extends Twig_Template
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
        echo "<!-- FEATURED PRODUCTS -->
<div class=\"featured-products\">
    <div class=\"container\">
        <div class=\"row\">
            <h5 class=\"heading\"><span>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</span></h5>
            <ul class=\"filter\" data-option-key=\"filter\">
                <li><a class=\"selected\" href=\"#filter\" data-option-value=\"*\">ทั้งหมด</a></li>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "                <li><a href=\"#\" data-option-value=\".category";
            echo $this->getAttribute($context["category"], "category_id", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </ul>
            <div id=\"isotope\" class=\"isotope\">
              ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "                <div class=\"isotope-item category";
            echo $this->getAttribute($context["product"], "category_id", array());
            echo "\">
                  <a href=\"";
            // line 15
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
                    <div class=\"product-item\">
                        <div class=\"item-thumb\">
                            ";
            // line 19
            echo "                            <img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" />
                        </div>
                        <div class=\"product-info\">
                            <h4 class=\"product-title\"><a href=\"#\">";
            // line 22
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
                            <span class=\"product-price\">
                            ";
            // line 24
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 25
                echo "                              ";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 26
                    echo "                              ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                              ";
                } else {
                    // line 28
                    echo "                              <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                              ";
                }
                // line 30
                echo "                              ";
                // line 33
                echo "                            ";
            }
            // line 34
            echo "                            </span>
                        </div>
                    </div>
                  </a>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  103 => 34,  100 => 33,  98 => 30,  90 => 28,  84 => 26,  81 => 25,  79 => 24,  74 => 22,  65 => 19,  59 => 15,  54 => 14,  50 => 13,  46 => 11,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <!-- FEATURED PRODUCTS -->*/
/* <div class="featured-products">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h5 class="heading"><span>{{ heading_title }}</span></h5>*/
/*             <ul class="filter" data-option-key="filter">*/
/*                 <li><a class="selected" href="#filter" data-option-value="*">ทั้งหมด</a></li>*/
/*                 {% for category in categories %}*/
/*                 <li><a href="#" data-option-value=".category{{category.category_id}}">{{category.name}}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <div id="isotope" class="isotope">*/
/*               {% for product in products %}*/
/*                 <div class="isotope-item category{{product.category_id}}">*/
/*                   <a href="{{ product.href }}">*/
/*                     <div class="product-item">*/
/*                         <div class="item-thumb">*/
/*                             {# <div class="badge new">New</div> #}*/
/*                             <img src="{{ product.thumb }}" class="img-responsive" alt="{{ product.name }}" />*/
/*                         </div>*/
/*                         <div class="product-info">*/
/*                             <h4 class="product-title"><a href="#">{{ product.name }}</a></h4>*/
/*                             <span class="product-price">*/
/*                             {% if product.price %}*/
/*                               {% if not product.special %}*/
/*                               {{ product.price }}*/
/*                               {% else %}*/
/*                               <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                               {% endif %}*/
/*                               {# {% if product.tax %}*/
/*                               <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                               {% endif %} #}*/
/*                             {% endif %}*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                   </a>*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
