<!DOCTYPE html>
<html>

<head>
    <!-- require head -->
    <?php require_once('inc/head.php'); ?>
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
        <noscript>JavaScript is off. Please enable to view full site.</noscript>
    </div>
    <div class="wrapper homepage2">

        <!-- require header -->
        <?php require_once('inc/header.php'); ?>

        <section id="home-slider">
            <div class="homeslider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="caption bottom-left">
                            <!-- <h2>unique<br>
                  <span class="bold">collection</span></h2>
                <p class="white">
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it ha.
                  <br>
                  <a href="#" class="le-btn">learn more</a> -->
                        </div>
                        <img src="images/banner01.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="caption bottom-left">
                            <!-- <h2>Classy<br>
                  <span class="bold">and sexy</span></h2>
                <p class="white">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam iaculis quam bibendum purus lacinia convallis. Nullam blandit in nibh rutrum viverra.
                  <br>
                  <a href="#" class="le-btn">learn more</a> -->
                        </div>
                        <img src="images/banner01.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="caption bottom-left">
                            <!--  <h2 class="white" >high heel<br>
                  <span class="bold">collection</span></h2>
                <p  class="white" >
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it ha.
                  <br>
                  <a href="#" class="le-btn">learn more</a> -->
                        </div>
                        <img src="images/banner01.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="featured-products">
            <div class="container">
                <div class="iconic-nav-bar">
                    <div class="icon-holder">
                        <i class="fa fa-star"></i>
                        <span class="triangle"></span>
                    </div>
                    <div class="bar">
                        <h2>BRANDS <span class="bold"> PRODUCTS</span></h2>
                        <div class="nav-buttons">
                            <a class="btn-prev" href="#prev"></a>
                            <a class="btn-next" href="#next"></a>
                        </div>
                    </div>
                </div>
                <div class="products-holder product-carousel owl-carousel">
                    <div class="product-item">
                        <div class="head">
                            <div class="">
                                <img alt="" src="images/products/brand1.jpg" width="450" height="300" />
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="head">
                            <div class="">
                                <img alt="" src="images/products/brand2.jpg" width="450" height="300"/>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="head">
                            <div class="">
                                <img alt="" src="images/products/brand3.jpg" width="450" height="300"/>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="head">
                            <div class="">
                                <img alt="" src="images/products/brand4.jpg" width="450" height="300"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="bestsellers">
            <div class="container">
                <div class="iconic-nav-bar">
                    <div class="icon-holder">
                        <i class="fa fa-dollar"></i>
                        <span class="triangle"></span>
                    </div>
                    <div class="bar">
                        <h2>best <span class="bold">sellers</span></h2>
                    </div>
                </div>
                <div class="products-holder simple-grid">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="le-ribbon blue right"><span>new!</span></div>
                                <div class="thumb">
                                    <img alt="" src="images/products/product01.png" />
                                </div>
                                <div class="price">
                                    <div class="price-old">
                                        <span class="currency">฿</span>250
                                    </div>
                                    <div class="price-current">
                                        <span class="currency">฿</span>145
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="3"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">consectetur adipiscing elit</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="thumb">
                                    <img alt="" src="images/products/product02.png" />
                                </div>
                                <div class="price">
                                    <div class="price-old">
                                        <span class="currency">฿</span>350
                                    </div>
                                    <div class="price-current">
                                        <span class="currency">฿</span>245
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="4"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">Man sport Hiking shoe</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="le-badge orange"><span>50% off</span></div>
                                <div class="thumb">
                                    <img alt="" src="images/products/product03.png" />
                                </div>
                                <div class="price">
                                    <div class="price-old">
                                        <span class="currency">฿</span>450
                                    </div>
                                    <div class="price-current">
                                        <span class="currency">฿</span>245
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="4"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">Woman highheel shoe</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="le-badge green"><span>new</span></div>
                                <div class="thumb">
                                    <img alt="" src="images/products/product04.png" />
                                </div>
                                <div class="price">
                                    <div class="price-old">
                                        <span class="currency">฿</span>120
                                    </div>
                                    <div class="price-current">
                                        <span class="currency">฿</span>95
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="2"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">colorful cool runnig shoes</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="thumb">
                                    <img alt="" src="images/products/product03.png" />
                                </div>
                                <div class="price">
                                    <div class="price-old">
                                        <span class="currency">฿</span>450
                                    </div>
                                    <div class="price-current">
                                        <span class="currency">฿</span>245
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="4"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">Woman highheel shoe</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="thumb">
                                    <img alt="" src="images/products/product02.png" />
                                </div>
                                <div class="price">
                                    <div class="price-current">
                                        <span class="currency">฿</span>245
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="4"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">Man sport Hiking shoe</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="thumb">
                                    <img alt="" src="images/products/product04.png" />
                                </div>
                                <div class="price">
                                    <div class="price-current">
                                        <span class="currency">฿</span>95
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="2"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">colorful cool runnig shoes</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="product-item">
                            <div class="head">
                                <div class="thumb">
                                    <img alt="" src="images/products/product01.png" />
                                </div>
                                <div class="price">
                                    <div class="price-current">
                                        <span class="currency">฿</span>145
                                    </div>
                                </div>
                                <div class="star-holder">
                                    <div class="star" data-score="3"></div>
                                </div>
                                <button class="btn-compare  btn-iconic"></button>
                            </div>
                            <div class="body">
                                <h3><a href="single-product-sidebar.php">consectetur adipiscing elit</a></h3>
                                <div class="excerpt">
                                    Looking lorem round, to ascertain that they...
                                </div>
                                <div class="merged-buttons">
                                    <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                    <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="newsletter" class="section-newsletter">
            <div class="container">
                <div class="col-xs-12 col-md-1">
                    <div class="icon-holder big">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="triangle"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="text">
                        sign up for our newsletter to
                        <br> get best offers and news.
                    </div>
                </div>
                <div class="col-xs-12 col-md-7">
                    <form class="subscribe-form">
                        <input data-placeholder="Enter Your Email Here..." class="le-input col-xs-12 col-md-10">
                        <button type="submit" class="le-btn icon-btn fa fa-send"></button>
                    </form>
                </div>
            </div>
        </section>
        <section class="banner-slider wow fadeInUp">
            <div class="container">
                <a class="btn-next nav-btn circular-icon" href="#"></a>
                <a class="btn-prev nav-btn circular-icon" href="#"></a>
                <div class="banner-carousel owl-carousel">
                    <div class="item">
                        <div class="caption">
                            <h1>great stuff</h1>
                            <div class="short-tag">
                            	<p>
				                    it was some time before the obtained any answer,<br>
				                    and the reply, when made, was awesome!
			                  	</p>
                            </div>
                             <a class="le-btn" href="#">buy now</a>
                        </div>
                        <img src="images/1234.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="caption">
                          	<h1>great stuff</h1>
                            <div class="short-tag">
                             	<p>
				                    it was some time before the obtained any answer,<br>
				                    and the reply, when made, was awesome!
			                  	</p>
                            </div>
                              <a class="le-btn" href="#">buy now</a>
                        </div>
                        <img src="images/1234.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- require footer -->
        <?php require_once('inc/footer.php'); ?>
        
    </div>
    
</body>

</html>