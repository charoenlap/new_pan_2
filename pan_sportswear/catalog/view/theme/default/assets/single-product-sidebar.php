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

    <div class="wrapper">
    <!-- require header -->
    <?php require_once('inc/header.php'); ?>

        <section id="breadcrumb">

            <div class="container">
                <div class="le-breadcrumb inline">
                    <div class="iconic-nav-bar">
                        <div class="icon-holder">
                            <i class="fa fa-chain"></i>
                            <span class="triangle"></span>
                        </div>
                        <div class="bar">
                            <ul>
                                <li><a href="index.php">homepage</a></li>
                                <li><a href="products-grid.php">products</a></li>
                                <li class="active">product grid - sidebar</li>
                            </ul>


                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="single-product-sidebar" class="page-holder">
            <div class="container">
                <div class="col-xs-12 col-md-3 no-margin-left">
                    <div class="sidebar">
                        <div class="accordion-widget category-accordions widget">
                            <div class="icon-holder small">
                                <i class="fa fa-chain"></i>
                                <span class="triangle"></span>
                            </div>
                            <h2>categories</h2>
                            <div class="accordion">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
                        men
                      </a>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">

                                            <ul>
                                                <li><a href="#">sexy night</a></li>
                                                <li><a href="#">party hard</a></li>
                                                <li><a href="#">winter is coming</a></li>
                                                <li><a href="#">classy date</a></li>
                                                <li><a href="#">casual persons</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                        women
                      </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse in">
                                        <div class="accordion-inner">

                                            <ul>
                                                <li><a href="#">sexy night</a></li>
                                                <li><a href="#">party hard</a></li>
                                                <li><a href="#">winter is coming</a></li>
                                                <li><a href="#">classy date</a></li>
                                                <li><a href="#">casual persons</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#collapse3">
                        sports
                      </a>
                                    </div>
                                    <div id="collapse3" class="accordion-body collapse in">
                                        <div class="accordion-inner">

                                            <ul>
                                                <li><a href="#">sexy night</a></li>
                                                <li><a href="#">party hard</a></li>
                                                <li><a href="#">winter is coming</a></li>
                                                <li><a href="#">classy date</a></li>
                                                <li><a href="#">casual persons</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>





                            </div>


                        </div>





                        <div class="price-filter widget">
                            <div class="icon-holder small">
                                <i class="fa fa-dollar"></i>
                                <span class="triangle"></span>
                            </div>
                            <h2>price filter</h2>
                            <div class="price-range-holder">

                                <input type="text" class="price-slider" value="">
                                <span class="min-max">
                    Price: $100 - $700
                  </span>
                                <span class="filter-button">
                    <a href="#">filter</a>
                  </span>
                            </div>





                        </div>


                        <div class="size-filter widget">
                            <div class="icon-holder small">
                                <i class="fa fa-cube"></i>
                                <span class="triangle"></span>
                            </div>
                            <h2>size filter</h2>
                            <ul>
                                <li><a href="#">xs <span>(2)</span></a></li>
                                <li><a href="#">s <span>(1)</span></a></li>
                                <li><a href="#">m <span>(2)</span></a></li>
                                <li><a href="#">l <span>(4)</span></a></li>
                                <li><a href="#">xl <span>(3)</span></a></li>
                                <li><a href="#">xxl <span>(1)</span></a></li>
                            </ul>





                        </div>



                    </div>

                </div>

                <div class="col-xs-12 col-md-9 ">



                    <div id="single-product" class="row">
                        <div class="no-margin col-xs-12 col-sm-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div class="icon-holder small">
                                    <i class="fa fa-search-plus "></i>
                                    <span class="triangle"></span>
                                </div>

                                <div class="single-product-slider">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                        <img class="lazy" alt="" src="images/products/product-gallery-01.jpg" />
                      </a>
                                    </div>

                                    <div class="single-product-gallery-item" id="slide2">
                                        <a data-rel="prettyphoto" href="images/products/product-gallery-02.jpg">
                        <img class="lazy" alt="" src="images/products/product-gallery-02.jpg" />
                      </a>
                                    </div>

                                    <div class="single-product-gallery-item" id="slide3">
                                        <a data-rel="prettyphoto" href="images/products/product-gallery-03.jpg">
                        <img class="lazy" alt="" src="images/products/product-gallery-03.jpg" />
                      </a>
                                    </div>

                                    <div class="single-product-gallery-item" id="slide4">
                                        <a data-rel="prettyphoto" href="images/products/product-gallery-04.jpg">
                        <img class="lazy" alt="" src="images/products/product-gallery-04.jpg" />
                      </a>
                                    </div>

                                </div>


                                <div class="gallery-thumbs">


                                    <ul>
                                        <li class="active">
                                            <a class="horizontal-thumb" href="#slide1">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-01.jpg" />
                        </a>
                                        </li>

                                        <li>
                                            <a class="horizontal-thumb " href="#slide2">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-02.jpg" />
                        </a>
                                        </li>
                                        <li>
                                            <a class="horizontal-thumb" href="#slide3">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-03.jpg" />
                        </a>
                                        </li>

                                        <li>
                                            <a class="horizontal-thumb" href="#slide4">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-04.jpg" />
                        </a>
                                        </li>


                                        <li>
                                            <a class="horizontal-thumb" href="#slide1">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-01.jpg" />
                        </a>
                                        </li>

                                        <li>
                                            <a class="horizontal-thumb " href="#slide2">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-02.jpg" />
                        </a>
                                        </li>
                                        <li>
                                            <a class="horizontal-thumb" href="#slide3">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-03.jpg" />
                        </a>
                                        </li>

                                        <li>
                                            <a class="horizontal-thumb" href="#slide4">
                          <img class="lazy" alt="" src="images/products/gallery-thumb-04.jpg" />
                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="no-margin col-xs-12 col-sm-7 body-holder">
                            <div class="body">
                                <div class="star-holder">
                                    <div class="star" data-score="3"></div>
                                </div>
                                <h3>consectetur adipiscing elit</h3>


                                <div class="desc">
                                    <p>
                                        Proin consectetur dictum ligula in porta. Vivamus mattis vestibulum risus sed bibendum. Nullam egestas tellus leo. Morbi luctus, nibh eu hendrerit fringilla, leo erat tempus neque, id pretium augue augue ultrices elit. Proin dignissim eu dui a varius. Pellentesque a ullamcorper mauris.
                                    </p>
                                </div>


                                <div class="price">
                                    <div class="price-current">
                                        <span class="currency">$</span>145
                                    </div>
                                    <div class="price-old">
                                        <span class="currency">$</span>250
                                    </div>
                                </div>





                                <div class="buttons-holder">

                                    <select class="variation-btn inline selectpicker capital" title="Size" data-width="70px" data-style="btn-inverse">
                      <option>39</option>
                      <option>40</option>
                      <option>41</option>
                      <option>42</option>
                      <option>43</option>
                    </select>

                                    <div class="inline qnt-holder">
                                        <div class="le-quantity">
                                            <form>
                                                <a class="minus" href="#reduce"></a>
                                                <input name="quantity" readonly="readonly" type="text" value="1" />
                                                <a class="plus" href="#add"></a>
                                            </form>
                                        </div>

                                    </div>

                                    <div class="merged-buttons">
                                        <button class="btn-add-to-cart le-btn btn-iconic ">to cart</button>
                                        <button class="btn-add-to-wishlist le-btn btn-iconic">wishlist</button>
                                    </div>


                                </div>


                                <div class="social-row">
                                    <span class="st_facebook_hcount"></span>
                                    <span class="st_twitter_hcount"></span>
                                    <span class="st_pinterest_hcount"></span>
                                </div>


                            </div>
                        </div>

                    </div>


                    <section class="section-review-comment">
                        <div class="tabbable tabs-left">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 no-margin">
                                    <ul class="nav nav-tabs ">

                                        <li class="active"><a href="#editor-review" data-toggle="tab">editor review</a></li>
                                        <li><a href="#return" data-toggle="tab">return policy</a></li>
                                        <li><a href="#description" data-toggle="tab">description</a></li>

                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-8 no-margin ">
                                    <!-- Tab panes -->
                                    <div class="tab-content ">

                                        <div class="tab-pane active " id="editor-review">


                                            <h3 class="inline">High Quality and comfort</h3>
                                            <div class="star-holder pull-right">
                                                <div class="star" data-score="2"></div>
                                            </div>

                                            <hr>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis orci id tellus consequat facilisis. Phasellus dapibus nibh et erat aliquam, fermentum auctor risus ultrices. Maecenas lobortis elit sed tempus volutpat. Donec ultricies fringilla leo ac consequat.
                                            </p>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis orci id tellus consequat facilisis. Phasellus dapibus nibh et erat aliquam, fermentum auctor risus ultrices. Maecenas lobortis elit sed tempus volutpat. Donec ultricies fringilla leo ac consequat.
                                            </p>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis orci id tellus consequat facilisis. Phasellus dapibus nibh et erat aliquam, fermentum auctor risus ultrices. Maecenas lobortis elit sed tempus volutpat. Donec ultricies fringilla leo ac consequat.
                                            </p>
                                        </div>


                                        <div class="tab-pane " id="return">


                                            <h3>Return policy</h3>
                                            <hr>
                                            <p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                            </p>



                                        </div>

                                        <div class="tab-pane" id="description">

                                            <h3>Description</h3>
                                            <hr>
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                            </p>



                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis blandit interdum velit id viverra. Nunc sed dictum diam, sed interdum elit. Quisque quis dui id nulla malesuada viverra id in ante. Suspendisse potenti. Cras a purus id leo molestie pulvinar. Curabitur nec neque enim. Integer ornare sagittis diam a aliquam. Donec nec lorem lectus.
                                            </p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--            disqus_thread-->
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = 'marqet'; // required: replace example with your forum shortname

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script');
                            dsq.type = 'text/javascript';
                            dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    <!--     END       disqus_thread-->
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
                        sign up for our newsletter to<br> get best offers and news.
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
                                    it was some time before the obtained any answer,<br> and the reply, when made, was awesome!
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
                                    it was some time before the obtained any answer,<br> and the reply, when made, was awesome!
                                </p>
                            </div>
                            <a class="le-btn" href="#">buy now</a>
                        </div>
                        <img src="images/1234.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <<!-- section class="section-brands-slider">
            <div class="container">
                <a href="#next" class="brands-next btn-next"></a>
                <a href="#prev" class="brands-prev btn-prev"></a>
                <div class="brands-slider default-carousel owl-carousel">
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands01.png"  />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands02.png"  />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands03.png"   />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands04.png"  />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands05.png"   />
              </a>
                    </div>


                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands02.png"  />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands04.png"  />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands01.png"  />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands03.png"  />
              </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                <img alt="" src="images/brands05.png"  />
              </a>
                    </div>
                </div>
            </div>
        </section> -->



        <!-- require footer -->
        <?php require_once('inc/footer.php'); ?>



    </div>

</body>


</html>