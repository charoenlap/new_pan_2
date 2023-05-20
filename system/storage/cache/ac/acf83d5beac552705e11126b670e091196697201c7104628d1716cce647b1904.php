<?php

/* default/template/common/header.twig */
class __TwigTemplate_61c98aa9bf79a06bdf878e42b2e05395537d927d3d7f01052175de13fc9e7ef4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>


    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>";
        // line 13
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "</title>
    
    <base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width\"> 
    <meta name=\"viewport\" content=\"initial-scale=1.0, width=device-width\">
    ";
        // line 18
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 19
            echo "    <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" /> 
    ";
        }
        // line 21
        echo "    ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 22
            echo "    <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" /> 
    ";
        }
        // line 24
        echo "    <meta name=\"robots\" content=\"*\">

    
    <!-- Google Webfont -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "css/font-awesome/css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/isotope/isotope.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/slick/slick.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/rs-plugin/css/settings.css\">
    ";
        // line 41
        echo "    <link rel=\"stylesheet\" href=\"";
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "css/subscribe-better.css\">
    <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "plugin/owl-carousel/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "plugin/owl-carousel/owl.theme.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/jquery/prettyPhoto/css/prettyPhoto.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/jquery/magnific/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "css/style.css\">
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 50
            echo "    <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" /> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo " ";
            echo $context["analytic"];
            echo " 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 53
            echo "    <link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" /> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    <link rel=\"stylesheet\" href=\"";
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "css/custom.css\">


    <!-- Javascript -->
    <script src=\"";
        // line 59
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/jquery.js\"></script>
    ";
        // line 78
        echo "    <script src=\"";
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 79
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/jquery/datetimepicker/moment/moment.min.js\"></script>
    <script src=\"";
        // line 80
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"";
        // line 81
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "plugin/owl-carousel/owl.carousel.min.js\"></script>
    <script src=\"";
        // line 82
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/bs-navbar.js\"></script>
    <script src=\"";
        // line 83
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/isotope/isotope.pkgd.js\"></script>
    <script src=\"";
        // line 84
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/slick/slick.min.js\"></script>
    <script src=\"";
        // line 85
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/tweets/tweecool.min.js\"></script>
    <script src=\"";
        // line 86
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
    <script src=\"";
        // line 87
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js\"></script>
    <script src=\"";
        // line 88
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/jquery.sticky.js\"></script>
    <script src=\"";
        // line 89
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/jquery.subscribe-better.js\"></script>
    <script src=\"http://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
    <script src=\"";
        // line 91
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/common.js\"></script>
    ";
        // line 93
        echo "    <script src=\"";
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/jquery/prettyPhoto/js/jquery.prettyPhoto.js\"></script>
    <script src=\"";
        // line 94
        echo (isset($context["link_cssold"]) ? $context["link_cssold"] : null);
        echo "javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
    <script src=\"";
        // line 95
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "../../../javascript/jquery/swiper/js/swiper.jquery.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 96
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "js/main.js\"></script>
    ";
        // line 100
        echo "

    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '576162170114027');
fbq('track', 'PageView');
</script>
<noscript><img height=\"1\" width=\"1\" style=\"display:none\"
src=\"https://www.facebook.com/tr?id=576162170114027&ev=PageView&noscript=1\"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- LINE Tag Base Code -->
<!-- Do Not Modify -->
<script>
(function(g,d,o){
  g._ltq=g._ltq||[];g._lt=g._lt||function(){g._ltq.push(arguments)};
  var h=location.protocol==='https:'?'https://d.line-scdn.net':'http://d.line-cdn.net';
  var s=d.createElement('script');s.async=1;
  s.src=o||h+'/n/line_tag/public/release/v1/lt.js';
  var t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);
    })(window, document);
_lt('init', {
  customerType: 'lap',
  tagId: '6deba232-2385-42cd-8c43-1bbff1531df3'
});
_lt('send', 'pv', ['6deba232-2385-42cd-8c43-1bbff1531df3']);
</script>
<noscript>
  <img height=\"1\" width=\"1\" style=\"display:none\"
       src=\"https://tr.line.me/tag.gif?c_t=lap&t_id=6deba232-2385-42cd-8c43-1bbff1531df3&e=pv&noscript=1\" />
</noscript>
<!-- End LINE Tag Base Code -->
<script>
_lt('send', 'cv', {
  type: 'Conversion'
},['6deba232-2385-42cd-8c43-1bbff1531df3']);
</script>
<!-- Google tag (gtag.js) -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-1JT4VPXSPZ\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1JT4VPXSPZ');
</script> 
</head>

<body>

    <!-- PRELOADER -->
    <div id=\"loader\"></div>

    <div class=\"body\">
        <!-- TOPBAR -->
        <div class=\"top_bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12\">
                            <div class=\"tb_left pull-left\">
                                <p>";
        // line 169
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</p>
                            </div>
                            <div class=\"tb_center pull-left\">
                                <ul>
                                    <li><i class=\"fa fa-phone\"></i> Hotline: <a href=\"tel:";
        // line 173
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\"> ";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</a></li>
                                    <li><i class=\"fa fa-envelope-o\"></i> <a
                                            href=\"mailto:";
        // line 175
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\">";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</a></li>
                                </ul>
                            </div>
                            <div class=\"tb_right pull-right\">
                                <ul>
                                    <li>
                                        ";
        // line 181
        echo (isset($context["accounts"]) ? $context["accounts"] : null);
        echo "
                                    </li>
                                    <li>
                                        ";
        // line 184
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADER -->
        <header>
            <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#bs-example-navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <!-- Logo -->
                            <a class=\"navbar-brand\" href=\"";
        // line 208
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\"><img src=\"";
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\"
                                    class=\"img-responsive\" alt=\"\" /></a>
                        </div>
                        <!-- Cart & Search -->
                        <div class=\"header-xtra pull-right\">
                            ";
        // line 213
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
                            <div class=\"topsearch\">
                                <span>
                                    <i class=\"fa fa-search\"></i>
                                </span>
                                <form class=\"searchtop\">
                                    <input type=\"text\" placeholder=\"Search entire store here.\">
                                </form>
                            </div>
                        </div>
                        <!-- Navmenu -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"";
        // line 227
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\" class=\"active\">Home</a>
                                </li>

                                ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 231
            echo "                                <li class=\"dropdown\">
                                    ";
            // line 232
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) > 0)) {
                // line 233
                echo "                                    <a href=\"";
                echo $this->getAttribute($context["category"], "url", array());
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                                        aria-expanded=\"false\">";
                // line 234
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
                                    <ul class=\"dropdown-menu submenu\" role=\"menu\">
                                        ";
                // line 236
                if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) > 0)) {
                    // line 237
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 238
                        echo "                                            <li><a href=\"";
                        echo $this->getAttribute($context["children"], "url", array());
                        echo "\">";
                        echo $this->getAttribute($context["children"], "name", array());
                        echo "</a>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 240
                    echo "                                        ";
                }
                // line 241
                echo "                                    </ul>
                                    ";
            } else {
                // line 243
                echo "                                    <a href=\"";
                echo $this->getAttribute($context["category"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
                                    ";
            }
            // line 245
            echo "                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                                <li>
                                    <a href=\"";
        // line 248
        echo (isset($context["payment"]) ? $context["payment"] : null);
        echo "\">Payment</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 251
        echo (isset($context["blogs"]) ? $context["blogs"] : null);
        echo "\">News&Blog</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 254
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">Contact</a>
                                </li>
                                ";
        // line 256
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 257
            echo "                                <li>
                                    <a href=\"";
            // line 258
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">login</a>
                                </li>
                                ";
        }
        // line 261
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 261,  497 => 258,  494 => 257,  492 => 256,  487 => 254,  481 => 251,  475 => 248,  472 => 247,  465 => 245,  457 => 243,  453 => 241,  450 => 240,  439 => 238,  434 => 237,  432 => 236,  427 => 234,  422 => 233,  420 => 232,  417 => 231,  413 => 230,  407 => 227,  390 => 213,  380 => 208,  353 => 184,  347 => 181,  336 => 175,  329 => 173,  322 => 169,  251 => 100,  247 => 96,  243 => 95,  239 => 94,  234 => 93,  230 => 91,  225 => 89,  221 => 88,  217 => 87,  213 => 86,  209 => 85,  205 => 84,  201 => 83,  197 => 82,  193 => 81,  189 => 80,  185 => 79,  180 => 78,  176 => 59,  168 => 55,  155 => 53,  150 => 52,  128 => 50,  124 => 49,  120 => 48,  116 => 47,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  94 => 41,  90 => 39,  86 => 38,  82 => 37,  78 => 36,  74 => 35,  61 => 24,  55 => 22,  52 => 21,  46 => 19,  44 => 18,  38 => 15,  33 => 13,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/* */
/*     <!-- Meta -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="keywords" content="HTML5 Template" />*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <title>{{config_meta_title}}</title>*/
/*     */
/*     <base href="{{ base }}" />*/
/*     <meta name="viewport" content="width=device-width"> */
/*     <meta name="viewport" content="initial-scale=1.0, width=device-width">*/
/*     {% if description %}*/
/*     <meta name="description" content="{{ description }}" /> */
/*     {% endif %}*/
/*     {% if keywords %}*/
/*     <meta name="keywords" content="{{ keywords }}" /> */
/*     {% endif %}*/
/*     <meta name="robots" content="*">*/
/* */
/*     */
/*     <!-- Google Webfont -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet'*/
/*         type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet'*/
/*         type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- CSS -->*/
/*     <link rel="stylesheet" href="{{ link_css }}css/font-awesome/css/font-awesome.css">*/
/*     <link rel="stylesheet" href="{{ link_css }}css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ link_css }}js/vendors/isotope/isotope.css">*/
/*     <link rel="stylesheet" href="{{ link_css }}js/vendors/slick/slick.css">*/
/*     <link rel="stylesheet" href="{{ link_css }}js/vendors/rs-plugin/css/settings.css">*/
/*     {# <link rel="stylesheet" href="{{ link_css }}js/vendors/select/jquery.selectBoxIt.css"> #}*/
/*     <link rel="stylesheet" href="{{ link_css }}css/subscribe-better.css">*/
/*     <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">*/
/*     <link rel="stylesheet" href="{{ link_css }}plugin/owl-carousel/owl.carousel.css">*/
/*     <link rel="stylesheet" href="{{ link_css }}plugin/owl-carousel/owl.theme.css">*/
/*     <link rel="stylesheet" href="{{ link_cssold }}javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css">*/
/*     <link rel="stylesheet" href="{{link_cssold}}javascript/jquery/prettyPhoto/css/prettyPhoto.css">*/
/*     <link rel="stylesheet" href="{{link_cssold}}javascript/jquery/magnific/magnific-popup.css">*/
/*     <link rel="stylesheet" href="{{ link_css }}css/style.css">*/
/*     {% for link in links %}*/
/*     <link href="{{ link.href }}" rel="{{ link.rel }}" /> {% endfor %} {% for analytic in analytics %} {{ analytic }} */
/*     {% endfor %}*/
/*     {% for style in styles %}*/
/*     <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" /> */
/*     {% endfor %}*/
/*     <link rel="stylesheet" href="{{ link_css }}css/custom.css">*/
/* */
/* */
/*     <!-- Javascript -->*/
/*     <script src="{{ link_css }}js/jquery.js"></script>*/
/*     {# <!-- ADDTHIS -->*/
/*     <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9"*/
/*         async="async"></script>*/
/*     <script type="text/javascript">*/
/*         // Call this function once the rest of the document is loaded*/
/*         function loadAddThis() {*/
/*             addthis.init()*/
/*         }*/
/*     </script>*/
/*     <!-- ADDTHIS -->*/
/*     <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9"*/
/*         async="async"></script>*/
/*     <script type="text/javascript">*/
/*         // Call this function once the rest of the document is loaded*/
/*         function loadAddThis() {*/
/*             addthis.init()*/
/*         }*/
/*     </script> #}*/
/*     <script src="{{ link_css }}js/bootstrap.min.js"></script>*/
/*     <script src="{{ link_cssold }}javascript/jquery/datetimepicker/moment/moment.min.js"></script>*/
/*     <script src="{{ link_cssold }}javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script>*/
/*     <script src="{{ link_css }}plugin/owl-carousel/owl.carousel.min.js"></script>*/
/*     <script src="{{ link_css }}js/bs-navbar.js"></script>*/
/*     <script src="{{ link_css }}js/vendors/isotope/isotope.pkgd.js"></script>*/
/*     <script src="{{ link_css }}js/vendors/slick/slick.min.js"></script>*/
/*     <script src="{{ link_css }}js/vendors/tweets/tweecool.min.js"></script>*/
/*     <script src="{{ link_css }}js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>*/
/*     <script src="{{ link_css }}js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>*/
/*     <script src="{{ link_css }}js/jquery.sticky.js"></script>*/
/*     <script src="{{ link_css }}js/jquery.subscribe-better.js"></script>*/
/*     <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/*     <script src="{{link_cssold}}javascript/common.js"></script>*/
/*     {# <script src="{{ link_css }}js/vendors/select/jquery.selectBoxIt.min.js"></script> #}*/
/*     <script src="{{link_cssold}}javascript/jquery/prettyPhoto/js/jquery.prettyPhoto.js"></script>*/
/*     <script src="{{link_cssold}}javascript/jquery/magnific/jquery.magnific-popup.min.js"></script>*/
/*     <script src="{{ link_css }}../../../javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>*/
/*     <script src="{{ link_css }}js/main.js"></script>*/
/*     {# {% for script in scripts %}*/
/*     <script src="{{ link_css }}{{ script }}" type="text/javascript"></script>*/
/*     {% endfor %} #}*/
/* */
/* */
/*     <!-- Facebook Pixel Code -->*/
/* <script>*/
/* !function(f,b,e,v,n,t,s)*/
/* {if(f.fbq)return;n=f.fbq=function(){n.callMethod?*/
/* n.callMethod.apply(n,arguments):n.queue.push(arguments)};*/
/* if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';*/
/* n.queue=[];t=b.createElement(e);t.async=!0;*/
/* t.src=v;s=b.getElementsByTagName(e)[0];*/
/* s.parentNode.insertBefore(t,s)}(window, document,'script',*/
/* 'https://connect.facebook.net/en_US/fbevents.js');*/
/* fbq('init', '576162170114027');*/
/* fbq('track', 'PageView');*/
/* </script>*/
/* <noscript><img height="1" width="1" style="display:none"*/
/* src="https://www.facebook.com/tr?id=576162170114027&ev=PageView&noscript=1"*/
/* /></noscript>*/
/* <!-- End Facebook Pixel Code -->*/
/* <!-- LINE Tag Base Code -->*/
/* <!-- Do Not Modify -->*/
/* <script>*/
/* (function(g,d,o){*/
/*   g._ltq=g._ltq||[];g._lt=g._lt||function(){g._ltq.push(arguments)};*/
/*   var h=location.protocol==='https:'?'https://d.line-scdn.net':'http://d.line-cdn.net';*/
/*   var s=d.createElement('script');s.async=1;*/
/*   s.src=o||h+'/n/line_tag/public/release/v1/lt.js';*/
/*   var t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);*/
/*     })(window, document);*/
/* _lt('init', {*/
/*   customerType: 'lap',*/
/*   tagId: '6deba232-2385-42cd-8c43-1bbff1531df3'*/
/* });*/
/* _lt('send', 'pv', ['6deba232-2385-42cd-8c43-1bbff1531df3']);*/
/* </script>*/
/* <noscript>*/
/*   <img height="1" width="1" style="display:none"*/
/*        src="https://tr.line.me/tag.gif?c_t=lap&t_id=6deba232-2385-42cd-8c43-1bbff1531df3&e=pv&noscript=1" />*/
/* </noscript>*/
/* <!-- End LINE Tag Base Code -->*/
/* <script>*/
/* _lt('send', 'cv', {*/
/*   type: 'Conversion'*/
/* },['6deba232-2385-42cd-8c43-1bbff1531df3']);*/
/* </script>*/
/* <!-- Google tag (gtag.js) -->*/
/* <script async src="https://www.googletagmanager.com/gtag/js?id=G-1JT4VPXSPZ"></script>*/
/* <script>*/
/*   window.dataLayer = window.dataLayer || [];*/
/*   function gtag(){dataLayer.push(arguments);}*/
/*   gtag('js', new Date());*/
/* */
/*   gtag('config', 'G-1JT4VPXSPZ');*/
/* </script> */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <!-- PRELOADER -->*/
/*     <div id="loader"></div>*/
/* */
/*     <div class="body">*/
/*         <!-- TOPBAR -->*/
/*         <div class="top_bar">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12 col-sm-12">*/
/*                             <div class="tb_left pull-left">*/
/*                                 <p>{{comment}}</p>*/
/*                             </div>*/
/*                             <div class="tb_center pull-left">*/
/*                                 <ul>*/
/*                                     <li><i class="fa fa-phone"></i> Hotline: <a href="tel:{{telephone}}"> {{telephone}}</a></li>*/
/*                                     <li><i class="fa fa-envelope-o"></i> <a*/
/*                                             href="mailto:{{email}}">{{email}}</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="tb_right pull-right">*/
/*                                 <ul>*/
/*                                     <li>*/
/*                                         {{accounts}}*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         {{language}}*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- HEADER -->*/
/*         <header>*/
/*             <nav class="navbar navbar-default">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"*/
/*                                 data-target="#bs-example-navbar-collapse-1">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <!-- Logo -->*/
/*                             <a class="navbar-brand" href="{{home}}"><img src="{{logo}}"*/
/*                                     class="img-responsive" alt="" /></a>*/
/*                         </div>*/
/*                         <!-- Cart & Search -->*/
/*                         <div class="header-xtra pull-right">*/
/*                             {{cart}}*/
/*                             <div class="topsearch">*/
/*                                 <span>*/
/*                                     <i class="fa fa-search"></i>*/
/*                                 </span>*/
/*                                 <form class="searchtop">*/
/*                                     <input type="text" placeholder="Search entire store here.">*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- Navmenu -->*/
/*                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 <li>*/
/*                                     <a href="{{home}}" class="active">Home</a>*/
/*                                 </li>*/
/* */
/*                                 {% for category in categories %}*/
/*                                 <li class="dropdown">*/
/*                                     {% if category.children|length > 0 %}*/
/*                                     <a href="{{category.url}}" class="dropdown-toggle" data-toggle="dropdown" role="button"*/
/*                                         aria-expanded="false">{{category.name}}</a>*/
/*                                     <ul class="dropdown-menu submenu" role="menu">*/
/*                                         {% if category.children|length > 0 %}*/
/*                                             {% for children in category.children %}*/
/*                                             <li><a href="{{children.url}}">{{children.name}}</a>*/
/*                                             {% endfor %}*/
/*                                         {% endif %}*/
/*                                     </ul>*/
/*                                     {% else %}*/
/*                                     <a href="{{category.url}}">{{category.name}}</a>*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 {% endfor %}*/
/*                                 <li>*/
/*                                     <a href="{{payment}}">Payment</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{blogs}}">News&Blog</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{contact}}">Contact</a>*/
/*                                 </li>*/
/*                                 {% if not logged %}*/
/*                                 <li>*/
/*                                     <a href="{{login}}">login</a>*/
/*                                 </li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </header>*/
/* */
