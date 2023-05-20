<?php

/* default/template/account/login.twig */
class __TwigTemplate_d888f83e25eb33ce7694cb10fd6112b4d6fdab91d7cde1f57ad5f5696db0f0d4 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "


<!-- BREADCRUMBS -->
<div class=\"bcrumbs\">
    <div class=\"container\">
        <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
    </div>
</div>
<div class=\"space10\"></div>

<!-- MY ACCOUNT -->
<div class=\"account-wrap\">
    <div class=\"container\">
        <div class=\"row\">
          ";
        // line 20
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
          ";
        // line 21
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
            <div class=\"col-sm-12\">
              ";
        // line 23
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "              <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
              ";
        }
        // line 26
        echo "              ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 27
            echo "              <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
              ";
        }
        // line 29
        echo "            </div>
            <div class=\"col-sm-6 col-md-6\">
                <!-- HTML -->
                <div id=\"account-id\">
                    <h4 class=\"account-title\"><span class=\"fa fa-chevron-right\"></span>Login</h4>                                                                  
                    <div class=\"account-form\">
                        <form class=\"form-login\" action=\"";
        // line 35
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">                                        
                            <ul class=\"form-list row\">
                                ";
        // line 43
        echo "                                <li class=\"col-md-12 col-sm-12\">
                                    <label >";
        // line 44
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo " <em>*</em></label>
                                    <input required type=\"text\" class=\"input-text\" name=\"email\" value=\"";
        // line 45
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\">
                                </li>
                                <li class=\"col-md-12 col-sm-12\">
                                    <label >";
        // line 48
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo " <em>*</em></label>
                                    <input required type=\"password\" class=\"input-text\" name=\"password\" value=\"";
        // line 49
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\">
                                </li> 
                                ";
        // line 55
        echo "                                <li class=\"col-md-12 col-sm-12 pwd text-right\">
                                    <label > <a href=\"";
        // line 56
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\"> ";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo " </a> </label>                                               
                                </li>
                            </ul>
                            ";
        // line 59
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 60
            echo "                            <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
                            ";
        }
        // line 62
        echo "                            <div class=\"buttons-set\">
                                <button class=\"btn-black\" type=\"submit\"><span>";
        // line 63
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</span></button>
                            </div>
                        </form>
                    </div>                                    
                </div>
            </div>

            <div class=\"col-sm-6 col-md-6\">
                <!-- HTML -->
                <div id=\"account-id2\">
                    <h4 class=\"account-title\"><span class=\"fa fa-chevron-right\"></span>Create New Account</h4>                                                                  
                    <div class=\"account-form create-new-account\">
                        <h3 class=\"block-title\">Signup Today and You'll be able to</h3>
                        <ul>
                            <li> <i class=\"fa fa-edit\"></i> Online Order Status</li>
                            <li> <i class=\"fa fa-edit\"></i> See Ready Hot Deals</li>
                            <li> <i class=\"fa fa-edit\"></i> Love List</li>
                            <li> <i class=\"fa fa-edit\"></i> Sign up to receive exclusive news and private sales</li>
                            <li> <i class=\"fa fa-edit\"></i> Quick Buy Stuffs</li>
                        </ul>
                        <div class=\"buttons-set\">
                            ";
        // line 85
        echo "                            <a href=\"";
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" class=\"btn-black\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
                        </div>
                    </div>                                    
                </div>
            </div>
            
      ";
        // line 91
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
      ";
        // line 92
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
        </div>
    </div>
</div>

";
        // line 97
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 97,  178 => 92,  174 => 91,  162 => 85,  138 => 63,  135 => 62,  129 => 60,  127 => 59,  119 => 56,  116 => 55,  111 => 49,  107 => 48,  101 => 45,  97 => 44,  94 => 43,  89 => 35,  81 => 29,  75 => 27,  72 => 26,  66 => 24,  64 => 23,  59 => 21,  55 => 20,  44 => 11,  33 => 9,  29 => 8,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* */
/* <!-- BREADCRUMBS -->*/
/* <div class="bcrumbs">*/
/*     <div class="container">*/
/*         <ul>*/
/*             {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* <div class="space10"></div>*/
/* */
/* <!-- MY ACCOUNT -->*/
/* <div class="account-wrap">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*           {{ content_top }}*/
/*           {{ column_left }}*/
/*             <div class="col-sm-12">*/
/*               {% if success %}*/
/*               <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*               {% endif %}*/
/*               {% if error_warning %}*/
/*               <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-6 col-md-6">*/
/*                 <!-- HTML -->*/
/*                 <div id="account-id">*/
/*                     <h4 class="account-title"><span class="fa fa-chevron-right"></span>Login</h4>                                                                  */
/*                     <div class="account-form">*/
/*                         <form class="form-login" action="{{ action }}" method="post" enctype="multipart/form-data">                                        */
/*                             <ul class="form-list row">*/
/*                                 {# <li class="col-md-6 col-sm-12"> */
/*                                     <a href="#" class="btn facebook"><i class="fa fa-facebook"></i>Sign in with Facebook</a>*/
/*                                 </li>*/
/*                                 <li class="col-md-6 col-sm-12"> */
/*                                     <a href="#" class="btn twitter"><i class="fa fa-twitter"></i>Sign in with Twitter</a>*/
/*                                 </li> #}*/
/*                                 <li class="col-md-12 col-sm-12">*/
/*                                     <label >{{entry_email}} <em>*</em></label>*/
/*                                     <input required type="text" class="input-text" name="email" value="{{ email }}" id="input-email">*/
/*                                 </li>*/
/*                                 <li class="col-md-12 col-sm-12">*/
/*                                     <label >{{entry_password}} <em>*</em></label>*/
/*                                     <input required type="password" class="input-text" name="password" value="{{ password }}" id="input-password">*/
/*                                 </li> */
/*                                 {# <li class="col-md-6 col-sm-12">                                                */
/*                                     <input class="input-chkbox" type="checkbox">*/
/*                                     <label >Remember me</label>*/
/*                                 </li> #}*/
/*                                 <li class="col-md-12 col-sm-12 pwd text-right">*/
/*                                     <label > <a href="{{ forgotten }}"> {{text_forgotten}} </a> </label>                                               */
/*                                 </li>*/
/*                             </ul>*/
/*                             {% if redirect %}*/
/*                             <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*                             {% endif %}*/
/*                             <div class="buttons-set">*/
/*                                 <button class="btn-black" type="submit"><span>{{button_login}}</span></button>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>                                    */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6 col-md-6">*/
/*                 <!-- HTML -->*/
/*                 <div id="account-id2">*/
/*                     <h4 class="account-title"><span class="fa fa-chevron-right"></span>Create New Account</h4>                                                                  */
/*                     <div class="account-form create-new-account">*/
/*                         <h3 class="block-title">Signup Today and You'll be able to</h3>*/
/*                         <ul>*/
/*                             <li> <i class="fa fa-edit"></i> Online Order Status</li>*/
/*                             <li> <i class="fa fa-edit"></i> See Ready Hot Deals</li>*/
/*                             <li> <i class="fa fa-edit"></i> Love List</li>*/
/*                             <li> <i class="fa fa-edit"></i> Sign up to receive exclusive news and private sales</li>*/
/*                             <li> <i class="fa fa-edit"></i> Quick Buy Stuffs</li>*/
/*                         </ul>*/
/*                         <div class="buttons-set">*/
/*                             {# <button class="btn-black" type="submit"><span>Create Account</span></button> #}*/
/*                             <a href="{{ register }}" class="btn-black">{{ button_continue }}</a></div>*/
/*                         </div>*/
/*                     </div>                                    */
/*                 </div>*/
/*             </div>*/
/*             */
/*       {{ content_bottom }}*/
/*       {{ column_right }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {{ footer }}*/
