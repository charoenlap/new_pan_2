<!DOCTYPE html>
<html lang="en">

<head>
    <!-- require head -->
    <?php require_once('inc/head.php'); ?>
</head>

<body>
    <div id="page">
        <!-- require header -->
        <?php require_once('inc/header.php'); ?>

        <!--container-->
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN Main Container col2-right -->
        <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="row">
                    <section class="col-main col-sm-8 wow bounceInUp animated animated" style="visibility: visible;">
                        <div id="messages_product_view"></div>
                        <form action="" id="contactForm" method="post">
                            <div class="static-contain">
                                <fieldset class="group-select">
                                    <ul>
                                        <li id="billing-new-address-form">
                                            <fieldset class="">
                                                <ul>
                                                    <li>
                                                        <label for="name"><em class="required">*</em>Name</label>
                                                        <br>
                                                        <input name="name" id="name" title="Name" value="" class="input-text required-entry" type="text">
                                                    </li>
                                                    <li>
                                                        <label for="email"><em class="required">*</em>Email</label>
                                                        <br>
                                                        <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text">
                                                    </li>
                                                    <li>
                                                        <label for="telephone">Telephone</label>
                                                        <br>
                                                        <input name="telephone" id="telephone" title="Telephone" value="" class="input-text" type="text">
                                                    </li>
                                                    <li>
                                                        <label for="comment"><em class="required">*</em>MESSAGE</label>
                                                        <br>
                                                        <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="5"></textarea>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </li>
                                        <p class="require"><em class="required">* </em>Required Fields</p>
                                        <input type="text" name="hideit" id="hideit" value="" style="display:none !important;">
                                        <div class="buttons-set">
                                            <button type="submit" title="Submit" class="button submit"><span><span>SEND MESSAGE</span></span></button>
                                        </div>
                                    </ul>
                                </fieldset>
                            </div>
                        </form>

                    </section>
                    <aside class="col-right sidebar col-sm-4 wow bounceInUp animated animated" style="visibility: visible;">
                        <div class="block block-company">
                            <div class="block-title">Information</div>
                            <div class="block-content">
                                <ol id="recently-viewed-items">
                                    <li class="item odd"><b>Bagnkok Rubber Public Company Limited (Head Office) 611/40 Soi Watchannai (Rajuthit 2) Bangklo, Bangkolaem, Bangkok 10120, Thailand</b></li>
                                    <li class="item even"><b>Email:</b> tanyakorn.p@pan-group.com</li>
                                    <li class="item  odd"><b>Phone:</b> ​66 2 6899500-20</li>
                                </ol>
                            </div>
                            <div class="block-title">Working Hours</div>
                            <div class="block-content">
                                <ol id="recently-viewed-items">
                                    <li class="item odd"><b>Monday - Saturday</b> - 08:00am-05:00pm</li>
                                    <li class="item even"><b>Sunday</b> - Closed</li>
                                </ol>
                            </div>
                        </div>
                    </aside>
                    <!--col-right sidebar-->
                </div>
                <!--row-->
            </div>
            <!--main-container-inner-->
        </div>
        <!--main-container col2-left-layout-->
        <div class="row img_shadow">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15505.875477701815!2d100.51283133426173!3d13.690028698164625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e298a79d0d8ea5%3A0xa76b974de9eaf2a5!2sPan+Group+(Bangkok+Rubber+Plc)!5e0!3m2!1sth!2sth!4v1511344018570" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>
    <!--page-->
    
    <!-- Mobile Menu-->
    <?php require_once('inc/mobile-menu.php'); ?>
    <!-- reuire footer -->
    <?php require_once('inc/footer.php'); ?>


</body>

</html>