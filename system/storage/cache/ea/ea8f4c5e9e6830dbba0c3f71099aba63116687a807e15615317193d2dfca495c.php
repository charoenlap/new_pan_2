<?php

/* default/template/extension/module/blog.twig */
class __TwigTemplate_5b5184946d62f177b9423cd2d0a6c93b2ff64c7b1fd4ba4bf64f706896600196 extends Twig_Template
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
        echo "<!-- BLOG -->
e<div class=\"home-blog\">
    <div class=\"container\">
        <h5 class=\"heading space40\"><span>ข่าวสาร และ โปรโมชั่น</span></h5>
        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 7
            echo "            <div class=\"col-md-4 col-sm-4\">
                <article class=\"home-post text-center\">
                    <div class=\"post-thumb\">
                        <a href=\"#\">
                            <img src=\"";
            // line 11
            echo $this->getAttribute($context["blog"], "image", array());
            echo "\" class=\"img-responsive\" alt=\"";
            echo $this->getAttribute($context["blog"], "title", array());
            echo "\" />
                        </a>
                    </div>
                    <div class=\"post-excerpt\">
                        <h4><a href=\"#\">";
            // line 15
            echo $this->getAttribute($context["blog"], "title", array());
            echo "</a></h4>
                        <div class=\"hp-meta\">

                        </div>
                        <p>";
            // line 19
            echo $this->getAttribute($context["blog"], "description", array());
            echo " [..]</p>
                    </div>
                </article>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  52 => 19,  45 => 15,  36 => 11,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!-- BLOG -->*/
/* e<div class="home-blog">*/
/*     <div class="container">*/
/*         <h5 class="heading space40"><span>ข่าวสาร และ โปรโมชั่น</span></h5>*/
/*         <div class="row">*/
/*             {% for blog in blogs %}*/
/*             <div class="col-md-4 col-sm-4">*/
/*                 <article class="home-post text-center">*/
/*                     <div class="post-thumb">*/
/*                         <a href="#">*/
/*                             <img src="{{blog.image}}" class="img-responsive" alt="{{blog.title}}" />*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="post-excerpt">*/
/*                         <h4><a href="#">{{blog.title}}</a></h4>*/
/*                         <div class="hp-meta">*/
/* */
/*                         </div>*/
/*                         <p>{{blog.description}} [..]</p>*/
/*                     </div>*/
/*                 </article>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
