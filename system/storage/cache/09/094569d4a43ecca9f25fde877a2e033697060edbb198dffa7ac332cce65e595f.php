<?php

/* default/template/common/footer.twig */
class __TwigTemplate_a956a11ed747fb365b7f845cd81f83e4f8429da1e90bd57e9577f15839eb47f2 extends Twig_Template
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
        echo "<!-- FOOTER -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 widget-footer col-sm-3\">
                <h5>About Store</h5>
                ";
        // line 8
        echo "                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                    quod maxime placeat facere possimus</p>
                <div class=\"clearfix\"></div>
                <ul class=\"f-social\">
                    <li><a href=\"https://www.facebook.com\" class=\"fa fa-facebook\"></a></li>
                    <li><a href=\"https://www.twitter.com\" class=\"fa fa-twitter\"></a></li>
                    <li><a href=\"https://feedburner.google.com\" class=\"fa fa-rss\"></a></li>
                    <li><a href=\"mailto:email@website.com\" class=\"fa fa-envelope\"></a></li>
                    <li><a href=\"https://www.pinterest.com\" class=\"fa fa-pinterest\"></a></li>
                    <li><a href=\"https://www.instagram.com\" class=\"fa fa-instagram\"></a></li>
                </ul>
            </div>
            <div class=\"col-md-3 col-sm-3 widget-footer\">
                <h5>ข้อมูลร้านค้า</h5>
                <div class=\"tweet-info\">
                    <li><a href=\"";
        // line 23
        echo (isset($context["about"]) ? $context["about"] : null);
        echo "\">เกี่ยวกับเรา</a></li>
                    <li><a href=\"";
        // line 24
        echo (isset($context["delivery"]) ? $context["delivery"] : null);
        echo "\">การจัดส่งและการมอบสินค้า</a></li>
                    <li><a href=\"";
        // line 25
        echo (isset($context["policy"]) ? $context["policy"] : null);
        echo "\">นโยบายรักษาข้อมูลส่วนบุคคล</a></li>
                    <li><a href=\"";
        // line 26
        echo (isset($context["term"]) ? $context["term"] : null);
        echo "\">ข้อตกลงและเงื่อนไขการใช้งาน</a></li>
                    <li><a href=\"";
        // line 27
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">ติดต่อเรา</a></li>

                    
                </div>
            </div>
            <div class=\"col-md-3 col-sm-3 widget-footer\">
                <h5>บริการลูกค้า</h5>
                    <li><a href=\"";
        // line 34
        echo (isset($context["term"]) ? $context["term"] : null);
        echo "\">การคืนสินค้า</a></li>
                    ";
        // line 36
        echo "                    <li><a href=\"";
        echo (isset($context["payment"]) ? $context["payment"] : null);
        echo "\">แจ้งชำระเงิน</a></li>
                    ";
        // line 38
        echo "            </div>
            <div class=\"col-md-3 col-sm-3 widget-footer\">
                <h5>Newsletter</h5>
                <p>Sign up for our newsletter and promotions</p>
                <form class=\"newsletter\">
                    <input type=\"text\" placeholder=\"Enter your email address here.\">
                    <button type=\"submit\">Subscribe !</button>
                </form>
            </div>
        </div>
    </div>
</footer>

<!-- FOOTER COPYRIGHT -->
<div class=\"footer-bottom\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-7 col-sm-7\">
                <br>
            </div>
            <div class=\"col-md-5 col-sm-5\">
                <img src=\"";
        // line 59
        echo (isset($context["link_css"]) ? $context["link_css"] : null);
        echo "images/basic/payment.png\" class=\"pull-right img-responsive payment\" alt=\"\" />
            </div>
        </div>
    </div>
</div>



    <div id=\"backtotop\"><i class=\"fa fa-chevron-up\"></i></div>

    

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i
                        class=\"fa fa-times\"></i></button>
                <div class=\"row\">
                    <div class=\"col-md-5 col-sm-6\">
                        <div class=\"\" id=\"modal_thumb\">
                            ";
        // line 88
        echo "                        </div>

                       
                    </div>
                    <div class=\"col-md-7 col-sm-6\">
                        <div class=\"product-single\">
                            <div class=\"ps-header\">
                                ";
        // line 96
        echo "                                <h3 id=\"modal_heading_title\"></h3>
                                <div class=\"ratings-wrap\">
                                    <div class=\"ratings\" id=\"modal_rating\">
                                    </div>
                                    <em>(<span id=\"modal_reviews\"></span>)</em>
                                </div>
                                <div class=\"ps-price\" id=\"modal_price\"><span>\$ 0.00</span> \$ 0.00</div>
                            </div>

                            <div class=\"ps-stock\">
                                Available: <a href=\"#\">In Stock</a>
                            </div>
                            <div class=\"sep\"></div>
                            ";
        // line 118
        echo "                            <div class=\"row select-wraps\" id=\"modal_options\">
                                <div class=\"col-md-7 col-sm-7\">
                                    <p></p>
                                    <select>
                                    </select>
                                </div>
                                ";
        // line 134
        echo "                            </div>
                            ";
        // line 144
        echo "                            <div class=\"space20\"></div>
                            <div class=\"sep\"></div>
                            <a class=\"btn-color\" data-productid=\"\" id=\"modal_addcart\">Add to Bag</a>
                            <a class=\"btn-black\" href=\"#\" id=\"modal_detail\">Go to Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type=\"text/javascript\">
\$(document).ready(function() {
    
    \$('#myModal').on('click', '#modal_addcart', function() {
        let product_id = \$(this).data('productid');
        let quantity = 1;
        let option = {};
        \$('#myModal .modal_options').each(function(index){
            option[\$(this).data('optionid')] = \$(this).val();
        });
        option = JSON.stringify(option);
        
        \$.ajax({
            url: 'index.php?route=checkout/cart/add', 
            type: 'post',
            data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1) + '&option=' + option,
            dataType: 'json',
            success: function(json) {
                console.log(json);
                if (json.success) {
                    window.location.href=\"index.php?route=checkout/cart\";
                }
            }
        });
    });
    var sync1 = \$(\"#myModal #modal_images\");
    \$('#myModal').on('hide.bs.modal', function(event) {
        sync1.trigger('destroy.owl.carousel');
    });
    \$('#myModal').on('show.bs.modal', function (event) {
        var button = \$(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        console.log(id);
        
        \$.ajax({
            url: 'index.php?route=product/product&product_id=' + id + '&type_response=ajax',
            dataType: 'json',
            success: function(json) {
                console.log('ajax', json);
                \$('#modal_detail').attr('href', 'index.php?route=product/product&product_id='+id);
                \$('#modal_addcart').data('productid', id);
                \$.each(json, function(key,value) { 
                    if (\$(\"#myModal #modal_\"+key).length>0) {
                        if (key=='price' && json.special.length>0) {
                            \$(\"#myModal #modal_\"+key).html(\"<span>\"+value+\"</span> \"+json.special); // special discount price
                        } else if (key=='rating') {
                            let html = \"\";
                            for (let i = 1; i <= 5; i++) {
                                if (value>=i) {
                                    html += '<span class=\"act fa fa-star\"></span>';
                                } else {
                                    html += '<span class=\"fa fa-star\"></span>';
                                }
                            }
                            \$(\"#myModal #modal_\"+key).html(html);
                        } else if (key=='thumb') {
                            let html = \"\";
                            html += '<div class=\"item\"><img src=\"'+value+'\" alt=\"\" height=\"400\"></div>';
                            \$(\"#myModal #modal_\"+key).html(html);
                            
                            sync1.owlCarousel({
                                singleItem: true,
                                slideSpeed: 1000,
                                navigation: true,
                                pagination: false,
                                responsiveRefreshRate: 200,
                                navigationText: [
                                    \"<i class='fa fa-chevron-left'></i>\",
                                    \"<i class='fa fa-chevron-right'></i>\"
                                ]
                            });
                        } else if (key=='options') {
                            let html = '';
                            \$.each(value, function(keyOp,valOp) {
                                html += '<div class=\"col-md-7 col-sm-7\">';
                                html += '<p>'+valOp.name+(valOp.required==\"1\"?\"<span>*</span>\":\"\")+'</p>';
                                html += '<select class=\"modal_options\" data-optionid=\"'+valOp.product_option_id+'\">';
                                \$.each(valOp.product_option_value, function(keyOpv,valOpv){
                                    html += '<option value=\"'+valOpv.product_option_value_id+'\">'+valOpv.name+'</option>';
                                });
                                html += '</select>';
                                html += '</div>';
                            });
                            \$(\"#myModal #modal_\"+key).html(html);
                        } else {
                            \$(\"#myModal #modal_\"+key).html(value);
                        }
                    }
                });
                
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
})
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 144,  158 => 134,  150 => 118,  135 => 96,  126 => 88,  102 => 59,  79 => 38,  74 => 36,  70 => 34,  60 => 27,  56 => 26,  52 => 25,  48 => 24,  44 => 23,  27 => 8,  19 => 1,);
    }
}
/* <!-- FOOTER -->*/
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-3 widget-footer col-sm-3">*/
/*                 <h5>About Store</h5>*/
/*                 {# <img src="images/basic/logo-lite.png" class="img-responsive space10" alt="" /> #}*/
/*                 <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id*/
/*                     quod maxime placeat facere possimus</p>*/
/*                 <div class="clearfix"></div>*/
/*                 <ul class="f-social">*/
/*                     <li><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>*/
/*                     <li><a href="https://www.twitter.com" class="fa fa-twitter"></a></li>*/
/*                     <li><a href="https://feedburner.google.com" class="fa fa-rss"></a></li>*/
/*                     <li><a href="mailto:email@website.com" class="fa fa-envelope"></a></li>*/
/*                     <li><a href="https://www.pinterest.com" class="fa fa-pinterest"></a></li>*/
/*                     <li><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-3 widget-footer">*/
/*                 <h5>ข้อมูลร้านค้า</h5>*/
/*                 <div class="tweet-info">*/
/*                     <li><a href="{{about}}">เกี่ยวกับเรา</a></li>*/
/*                     <li><a href="{{delivery}}">การจัดส่งและการมอบสินค้า</a></li>*/
/*                     <li><a href="{{policy}}">นโยบายรักษาข้อมูลส่วนบุคคล</a></li>*/
/*                     <li><a href="{{term}}">ข้อตกลงและเงื่อนไขการใช้งาน</a></li>*/
/*                     <li><a href="{{contact}}">ติดต่อเรา</a></li>*/
/* */
/*                     */
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-3 widget-footer">*/
/*                 <h5>บริการลูกค้า</h5>*/
/*                     <li><a href="{{term}}">การคืนสินค้า</a></li>*/
/*                     {# <li>แผนผังเว็บไซต์</li> #}*/
/*                     <li><a href="{{payment}}">แจ้งชำระเงิน</a></li>*/
/*                     {# <li>ข้อเสนอพิเศษ</li> #}*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-3 widget-footer">*/
/*                 <h5>Newsletter</h5>*/
/*                 <p>Sign up for our newsletter and promotions</p>*/
/*                 <form class="newsletter">*/
/*                     <input type="text" placeholder="Enter your email address here.">*/
/*                     <button type="submit">Subscribe !</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <!-- FOOTER COPYRIGHT -->*/
/* <div class="footer-bottom">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-7 col-sm-7">*/
/*                 <br>*/
/*             </div>*/
/*             <div class="col-md-5 col-sm-5">*/
/*                 <img src="{{link_css}}images/basic/payment.png" class="pull-right img-responsive payment" alt="" />*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/*     <div id="backtotop"><i class="fa fa-chevron-up"></i></div>*/
/* */
/*     */
/* */
/*     <!-- Modal -->*/
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i*/
/*                         class="fa fa-times"></i></button>*/
/*                 <div class="row">*/
/*                     <div class="col-md-5 col-sm-6">*/
/*                         <div class="" id="modal_thumb">*/
/*                             {# <div class="item"> <img src="images/products/single/1-small.jpg" alt=""> </div>*/
/*                             <div class="item"> <img src="images/products/single/2-small.jpg" alt=""> </div>*/
/*                             <div class="item"> <img src="images/products/single/3-small.jpg" alt=""> </div>*/
/*                             <div class="item"> <img src="images/products/single/4-small.jpg" alt=""> </div>*/
/*                             <div class="item"> <img src="images/products/single/1-small.jpg" alt=""> </div>*/
/*                             <div class="item"> <img src="images/products/single/2-small.jpg" alt=""> </div>*/
/*                             <div class="item"> <img src="images/products/single/3-small.jpg" alt=""> </div>*/
/*                             <div class="item"> <img src="images/products/single/4-small.jpg" alt=""> </div> #}*/
/*                         </div>*/
/* */
/*                        */
/*                     </div>*/
/*                     <div class="col-md-7 col-sm-6">*/
/*                         <div class="product-single">*/
/*                             <div class="ps-header">*/
/*                                 {# <span class="badge offer">-50%</span> #}*/
/*                                 <h3 id="modal_heading_title"></h3>*/
/*                                 <div class="ratings-wrap">*/
/*                                     <div class="ratings" id="modal_rating">*/
/*                                     </div>*/
/*                                     <em>(<span id="modal_reviews"></span>)</em>*/
/*                                 </div>*/
/*                                 <div class="ps-price" id="modal_price"><span>$ 0.00</span> $ 0.00</div>*/
/*                             </div>*/
/* */
/*                             <div class="ps-stock">*/
/*                                 Available: <a href="#">In Stock</a>*/
/*                             </div>*/
/*                             <div class="sep"></div>*/
/*                             {# <div class="ps-color">*/
/*                                 <p>Color<span>*</span></p>*/
/*                                 <a class="black" href="#" onclick="return false;"></a>*/
/*                                 <a class="red" href="#" onclick="return false;"></a>*/
/*                                 <a class="yellow" href="#" onclick="return false;"></a>*/
/*                                 <a class="darkgrey" href="#" onclick="return false;"></a>*/
/*                                 <a class="litebrown" href="#" onclick="return false;"></a>*/
/*                             </div>*/
/*                             <div class="space10"></div> #}*/
/*                             <div class="row select-wraps" id="modal_options">*/
/*                                 <div class="col-md-7 col-sm-7">*/
/*                                     <p></p>*/
/*                                     <select>*/
/*                                     </select>*/
/*                                 </div>*/
/*                                 {# <div class="col-md-5 col-sm-5">*/
/*                                     <p>Quantity<span>*</span></p>*/
/*                                     <select>*/
/*                                         <option>1</option>*/
/*                                         <option>2</option>*/
/*                                         <option>3</option>*/
/*                                         <option>4</option>*/
/*                                         <option>5</option>*/
/*                                     </select>*/
/*                                 </div> #}*/
/*                             </div>*/
/*                             {# <div class="space20"></div>*/
/*                             <div class="share">*/
/*                                 <span>*/
/*                                     <a href="#" class="fa fa-heart-o" onclick="return false;"></a>*/
/*                                     <a href="#" class="fa fa-signal" onclick="return false;"></a>*/
/*                                     <a href="#" class="fa fa-envelope-o" onclick="return false;"></a>*/
/*                                 </span>*/
/*                                 <div class="addthis_native_toolbox"></div>*/
/*                             </div> #}*/
/*                             <div class="space20"></div>*/
/*                             <div class="sep"></div>*/
/*                             <a class="btn-color" data-productid="" id="modal_addcart">Add to Bag</a>*/
/*                             <a class="btn-black" href="#" id="modal_detail">Go to Details</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* <script type="text/javascript">*/
/* $(document).ready(function() {*/
/*     */
/*     $('#myModal').on('click', '#modal_addcart', function() {*/
/*         let product_id = $(this).data('productid');*/
/*         let quantity = 1;*/
/*         let option = {};*/
/*         $('#myModal .modal_options').each(function(index){*/
/*             option[$(this).data('optionid')] = $(this).val();*/
/*         });*/
/*         option = JSON.stringify(option);*/
/*         */
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/cart/add', */
/*             type: 'post',*/
/*             data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1) + '&option=' + option,*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 console.log(json);*/
/*                 if (json.success) {*/
/*                     window.location.href="index.php?route=checkout/cart";*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/*     var sync1 = $("#myModal #modal_images");*/
/*     $('#myModal').on('hide.bs.modal', function(event) {*/
/*         sync1.trigger('destroy.owl.carousel');*/
/*     });*/
/*     $('#myModal').on('show.bs.modal', function (event) {*/
/*         var button = $(event.relatedTarget) // Button that triggered the modal*/
/*         var id = button.data('id') // Extract info from data-* attributes*/
/*         console.log(id);*/
/*         */
/*         $.ajax({*/
/*             url: 'index.php?route=product/product&product_id=' + id + '&type_response=ajax',*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 console.log('ajax', json);*/
/*                 $('#modal_detail').attr('href', 'index.php?route=product/product&product_id='+id);*/
/*                 $('#modal_addcart').data('productid', id);*/
/*                 $.each(json, function(key,value) { */
/*                     if ($("#myModal #modal_"+key).length>0) {*/
/*                         if (key=='price' && json.special.length>0) {*/
/*                             $("#myModal #modal_"+key).html("<span>"+value+"</span> "+json.special); // special discount price*/
/*                         } else if (key=='rating') {*/
/*                             let html = "";*/
/*                             for (let i = 1; i <= 5; i++) {*/
/*                                 if (value>=i) {*/
/*                                     html += '<span class="act fa fa-star"></span>';*/
/*                                 } else {*/
/*                                     html += '<span class="fa fa-star"></span>';*/
/*                                 }*/
/*                             }*/
/*                             $("#myModal #modal_"+key).html(html);*/
/*                         } else if (key=='thumb') {*/
/*                             let html = "";*/
/*                             html += '<div class="item"><img src="'+value+'" alt="" height="400"></div>';*/
/*                             $("#myModal #modal_"+key).html(html);*/
/*                             */
/*                             sync1.owlCarousel({*/
/*                                 singleItem: true,*/
/*                                 slideSpeed: 1000,*/
/*                                 navigation: true,*/
/*                                 pagination: false,*/
/*                                 responsiveRefreshRate: 200,*/
/*                                 navigationText: [*/
/*                                     "<i class='fa fa-chevron-left'></i>",*/
/*                                     "<i class='fa fa-chevron-right'></i>"*/
/*                                 ]*/
/*                             });*/
/*                         } else if (key=='options') {*/
/*                             let html = '';*/
/*                             $.each(value, function(keyOp,valOp) {*/
/*                                 html += '<div class="col-md-7 col-sm-7">';*/
/*                                 html += '<p>'+valOp.name+(valOp.required=="1"?"<span>*</span>":"")+'</p>';*/
/*                                 html += '<select class="modal_options" data-optionid="'+valOp.product_option_id+'">';*/
/*                                 $.each(valOp.product_option_value, function(keyOpv,valOpv){*/
/*                                     html += '<option value="'+valOpv.product_option_value_id+'">'+valOpv.name+'</option>';*/
/*                                 });*/
/*                                 html += '</select>';*/
/*                                 html += '</div>';*/
/*                             });*/
/*                             $("#myModal #modal_"+key).html(html);*/
/*                         } else {*/
/*                             $("#myModal #modal_"+key).html(value);*/
/*                         }*/
/*                     }*/
/*                 });*/
/*                 */
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* })*/
/* </script>*/
