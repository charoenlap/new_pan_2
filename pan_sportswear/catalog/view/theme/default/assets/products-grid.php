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
                  <li class="active">products</li>
                  <!-- <li class="active">product grid</li> -->
                </ul>


              </div>

            </div>
          </div>
        </div>
      </section>




      <section id="products-grid-sidebar" class="section-products-grid">
        <div class="container">
          <div class="col-xs-12 col-md-3">
            <div class="sidebar">
              <div class="accordion-widget category-accordions widget">
                <div class="icon-holder small">
                  <i class="fa fa-chain"></i>
                  <span class="triangle"></span>
                </div>
                <h2>categories</h2>
                <div class="accordion" >
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse"  href="#collapseOne">
                        shoes and clothes
                      </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                      <div class="accordion-inner">

                        <ul>
                          <li><a href="#">men shoes</a></li>
                          <li><a href="#">women shoes</a></li>
                          <li><a href="#">sexy clothes</a></li>
                          <li><a href="#">sport wears</a></li>
                          <li><a href="#">other stuff</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse"  href="#collapseTwo">
                        collections
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
                      <a class="accordion-toggle" data-toggle="collapse"  href="#collapse3">
                        kids
                      </a>
                    </div>
                    <div id="collapse3" class="accordion-body collapse in">
                      <div class="accordion-inner">

                        <ul>
                          <li><a href="#">0-5 years old</a></li>
                          <li><a href="#">5-10 years old</a></li>
                          <li><a href="#">10-15 years old</a></li>

                        </ul>
                      </div>
                    </div>
                  </div>










                </div>


              </div> 





              <div class="price-filter widget" >
                <div class="icon-holder small">
                  <i class="fa fa-dollar"></i>
                  <span class="triangle"></span>
                </div>
                <h2>price filter</h2>
                <div class="price-range-holder">

                  <input type="text" class="price-slider" value="" >
                  <span class="min-max">
                    Price: $100 - $700
                  </span>
                  <span class="filter-button">
                    <a href="#">filter</a>
                  </span>
                </div>





              </div>


              <div class="size-filter widget" >
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
            <div class="row">
              <div class="mosaic-holder col-xs-12">
                <div class="mosaic-banner big  ">
                  <img alt="" src="images/tabbed-banner-02.jpg" />
                  <div class="caption ">
                    <h1 >
                      <span class="light ">sexy high heels</span><br>
                      collection
                    </h1>
                    <a class="le-btn medium" href="#">learn more</a>
                  </div>


                </div>
              </div>

            </div>
            <div class="controller-nav-bar row">
              <div class="col-xs-12 col-sm-9 col-md-9">
                <select class="ctrl-item selectpicker capital"   data-style="btn-inverse">
                  <option>sort by price - Ascending</option>
                  <option>sort by price - Descending</option>
                  <option>sort A-Z</option>
                  <option>sort z-a</option>
                </select>

                <div class="ctrl-item inline">
                  Show

                  <select class="selectpicker capital"  data-width="70px" data-style="btn-inverse">
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>all</option>

                  </select>

                  Products Per Page
                </div>
              </div>

              <div class="col-xs-12 col-sm-3 col-md-3 ">
                <div class="grid-list-buttons">
                  <ul class="list-inline">
                    <li class="active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> Grid</a></li>
                    <li><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> List</a></li>

                  </ul>
                </div>
              </div> 
            </div>

            <div class="product-grid tab-content">
              <!--grid view starts here-->

              <div id="grid-view" class="tab-pane active">
                <div  class="products-holder simple-grid">
                  <div class="row ">
                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                      <div class="product-item">
                        <div class="head">
                          <div class="thumb">
                            <img alt="" src="images/products/product01.png" />
                          </div>

                          <div class="price">
                            <div class="price-old">
                              <span class="currency">$</span>250
                            </div>
                            <div class="price-current">
                              <span class="currency">$</span>145
                            </div>
                          </div>
                          <div class="star-holder">
                            <div class="star"  data-score="3"></div>
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

                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                      <div class="product-item">
                        <div class="head">

                          <div class="thumb">
                            <img alt="" src="images/products/product02.png" />
                          </div>

                          <div class="price">
                            <div class="price-old">
                              <span class="currency">$</span>350
                            </div>
                            <div class="price-current">
                              <span class="currency">$</span>245
                            </div>
                          </div>
                          <div class="star-holder">
                            <div class="star"  data-score="4"></div>
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
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                      <div class="product-item">
                        <div class="head">
                          <div class="le-badge orange"><span>50% off</span></div> 

                          <div class="thumb">
                            <img alt="" src="images/products/product03.png" />
                          </div>

                          <div class="price">
                            <div class="price-old">
                              <span class="currency">$</span>450
                            </div>
                            <div class="price-current">
                              <span class="currency">$</span>245
                            </div>
                          </div>
                          <div class="star-holder">
                            <div class="star"  data-score="4"></div>
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
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                      <div class="product-item">
                        <div class="head">
                          <div class="le-badge green"><span>new</span></div> 
                          <div class="thumb">
                            <img alt="" src="images/products/product04.png" />
                          </div>

                          <div class="price">
                            <div class="price-old">
                              <span class="currency">$</span>120
                            </div>
                            <div class="price-current">
                              <span class="currency">$</span>95
                            </div>
                          </div>
                          <div class="star-holder">
                            <div class="star"  data-score="2"></div>
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
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                      <div class="product-item">
                        <div class="head">
                          <div class="le-ribbon blue "><span>new</span></div> 
                          <div class="thumb">
                            <img alt="" src="images/products/product03.png" />
                          </div>

                          <div class="price">
                            <div class="price-old">
                              <span class="currency">$</span>450
                            </div>
                            <div class="price-current">
                              <span class="currency">$</span>245
                            </div>
                          </div>
                          <div class="star-holder">
                            <div class="star"  data-score="4"></div>
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
                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                      <div class="product-item">
                        <div class="head">

                          <div class="thumb">
                            <img alt="" src="images/products/product02.png" />
                          </div>

                          <div class="price">

                            <div class="price-current">
                              <span class="currency">$</span>245
                            </div>
                          </div>
                          <div class="star-holder">
                            <div class="star"  data-score="4"></div>
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

                  </div>
                </div>
              </div>

              <div id="list-view" class="tab-pane ">

                <div  class="products-holder list-view">

                  <div class="product-item wide">
                    <div class="row">
                      <div class="col-xs-12 col-md-4 no-margin">
                        <div class="head">
                          <div class="le-ribbon red left"><span>Sale!</span></div>
                          <div class="thumb">
                            <a href="single-product-sidebar.php">
                              <img alt="" src="images/products/product01.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-8 no-margin">
                        <div class="body">

                          <h3><a href="single-product-sidebar.php">consectetur adipiscing elit</a></h3>
                          <div class="price">
                            <div class="price-old">
                              <span class="currency">$</span>250
                            </div>
                            <div class="price-current">
                              <span class="currency">$</span>145
                            </div>
                          </div>

                          <div class="star-holder">
                            <div class="star"  data-score="3"></div>
                          </div>

                          <div class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus mi in auctor pellentesque. Vivamus vel nisi sed mauris placerat ultricies eu vitae est. 
                          </div>



                          <div class="buttons-holder">

                            <select class="selectpicker capital" title="Size"  data-width="70px" data-style="btn-inverse">
                              <option>39</option>
                              <option>40</option>
                              <option>41</option>
                              <option>42</option>
                              <option>43</option>
                            </select>

                            <button class="btn-add-to-cart le-btn btn-iconic ">add to cart</button>  

                          </div>
                        </div>






                      </div>
                    </div>
                  </div>

                  <div class="product-item wide">
                    <div class="row">
                      <div class="col-xs-12 col-md-4 no-margin">
                        <div class="head">
                          <div class="le-ribbon orange left"><span>new</span></div>
                          <div class="thumb">
                            <a href="single-product-sidebar.php">
                              <img alt="" src="images/products/product02.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-8 no-margin">
                        <div class="body">

                          <h3><a href="single-product-sidebar.php">Vivamus vel nisi sed </a></h3>
                          <div class="price">

                            <div class="price-current">
                              <span class="currency">$</span>145
                            </div>
                          </div>

                          <div class="star-holder">
                            <div class="star"  data-score="3"></div>
                          </div>

                          <div class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus mi in auctor pellentesque. Vivamus vel nisi sed mauris placerat ultricies eu vitae est. 
                          </div>



                          <div class="buttons-holder">

                            <select class="selectpicker capital" title="Size"  data-width="70px" data-style="btn-inverse">
                              <option>39</option>
                              <option>40</option>
                              <option>41</option>
                              <option>42</option>
                              <option>43</option>
                            </select>

                            <button class="btn-add-to-cart le-btn btn-iconic ">add to cart</button>  

                          </div>
                        </div>






                      </div>
                    </div>
                  </div>


                  <div class="product-item wide">
                    <div class="row">
                      <div class="col-xs-12 col-md-4 no-margin">
                        <div class="head">

                          <div class="thumb">
                            <a href="single-product-sidebar.php">
                              <img alt="" src="images/products/product03.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-8 no-margin">
                        <div class="body">

                          <h3><a href="single-product-sidebar.php">auctor pellentesque</a></h3>
                          <div class="price">

                            <div class="price-current">
                              <span class="currency">$</span>445
                            </div>
                          </div>

                          <div class="star-holder">
                            <div class="star"  data-score="5"></div>
                          </div>

                          <div class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus mi in auctor pellentesque. Vivamus vel nisi sed mauris placerat ultricies eu vitae est. 
                          </div>



                          <div class="buttons-holder">

                            <select class="selectpicker capital" title="Size"  data-width="70px" data-style="btn-inverse">
                              <option>39</option>
                              <option>40</option>
                              <option>41</option>
                              <option>42</option>
                              <option>43</option>
                            </select>

                            <button class="btn-add-to-cart le-btn btn-iconic ">add to cart</button>  

                          </div>
                        </div>






                      </div>
                    </div>
                  </div>

                  <div class="product-item wide">
                    <div class="row">
                      <div class="col-xs-12 col-md-4 no-margin">
                        <div class="head">

                          <div class="thumb">
                            <a href="single-product-sidebar.php">
                              <img alt="" src="images/products/product04.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-8 no-margin">
                        <div class="body">

                          <h3><a href="single-product-sidebar.php">Lorem ipsum dolor sit amet</a></h3>
                          <div class="price">
                            <div class="price-old">
                              <span class="currency">$</span>150
                            </div>
                            <div class="price-current">
                              <span class="currency">$</span>45
                            </div>
                          </div>

                          <div class="star-holder">
                            <div class="star"  data-score="2"></div>
                          </div>

                          <div class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus mi in auctor pellentesque. Vivamus vel nisi sed mauris placerat ultricies eu vitae est. 
                          </div>



                          <div class="buttons-holder">

                            <select class="selectpicker capital" title="Size"  data-width="70px" data-style="btn-inverse">
                              <option>39</option>
                              <option>40</option>
                              <option>41</option>
                              <option>42</option>
                              <option>43</option>
                            </select>

                            <button class="btn-add-to-cart le-btn btn-iconic ">add to cart</button>  

                          </div>
                        </div>






                      </div>
                    </div>
                  </div>

                  <div class="product-item wide">
                    <div class="row">
                      <div class="col-xs-12 col-md-4 no-margin">
                        <div class="head">

                          <div class="thumb">
                            <a href="single-product-sidebar.php">
                              <img alt="" src="images/products/product01.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-8 no-margin">
                        <div class="body">

                          <h3><a href="single-product-sidebar.php">Nunc cursus mi in </a></h3>
                          <div class="price">

                            <div class="price-current">
                              <span class="currency">$</span>45
                            </div>
                          </div>

                          <div class="star-holder">
                            <div class="star"  data-score="1"></div>
                          </div>

                          <div class="excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus mi in auctor pellentesque. Vivamus vel nisi sed mauris placerat ultricies eu vitae est. 
                          </div>



                          <div class="buttons-holder">

                            <select class="selectpicker capital" title="Size"  data-width="70px" data-style="btn-inverse">
                              <option>39</option>
                              <option>40</option>
                              <option>41</option>
                              <option>42</option>
                              <option>43</option>
                            </select>

                            <button class="btn-add-to-cart le-btn btn-iconic ">add to cart</button>  

                          </div>
                        </div>






                      </div>
                    </div>
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
              sign up for our newsletter to<br>
              get best offers and news.
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
<!-- 
      <section class="section-brands-slider">
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
