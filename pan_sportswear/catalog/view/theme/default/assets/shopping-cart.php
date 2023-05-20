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

      <section id="breadcrumb" >

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
                  <li class="active">shopping cart</li>
              
                </ul>


              </div>

            </div>
          </div>
        </div>
      </section>




      <section id="cart" class="page-holder ">
        <div class="container">
        

            <div class="row ">

                        <div class="col-xs-12">
                            <div class="shopping-cart-page box">
  <div class="icon-holder small badge-style">
                    <i class="fa fa-shopping-cart "></i>
                    <span class="triangle"></span>
                  </div>
                              <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="col-xs-12 col-md-2">preview</th>
                                            <th class="col-xs-12 col-md-5">product</th>
                                            <th class="col-xs-12 col-md-2 price-column">price</th>
                                            <th class="col-xs-12 col-md-2">quantity</th>
                                            <th class="col-xs-12 col-md-1 price-column">total</th>
                                            <th class="col-xs-12 col-md-2">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="thumb">
                                                  <img alt="" src="images/products/product01.png" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="desc">
                                                    <h3>Men hiking sport shoes</h3>
                                                    <div class="tag-line">
                                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed elementum nisl.
                                                    </div>
                                                    <div class="pid">Product Code: 4564789</div>
                                                </div>

                                            </td>
                                            <td>

                                                <div class="price">
                                                    $122.00
                                                </div>

                                            </td>
                                            <td>
                                                <div class="le-quantity">
                        <form>
                          <a class="minus" href="#reduce"></a>
                          <input name="quantity" readonly="readonly" type="text" value="1" />
                          <a class="plus" href="#add"></a>
                        </form>
                      </div>
                                            </td>

                                            <td>

                                                <div class="price">
                                                    $122.00
                                                </div>

                                            </td>

                                            <td>

                                                <div class="delete">
                                                    <a class="close-btn" href="#"></a>
                                                </div>

                                            </td>
                                        </tr>



                                        <tr>
                                            <td>
                                                <div class="thumb">
                                                  <img alt="" src="images/products/product02.png" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="desc">
                                                    <h3>men boot war style so classy</h3>
                                                    <div class="tag-line">
                                                         In hac habitasse platea dictumst. Donec aliquet dolor in libero euismod, ac dapibus turpis euismod.
                                                    </div>
                                                    <div class="pid">Product Code: 56879456</div>
                                                </div>

                                            </td>
                                            <td>

                                                <div class="price">
                                                    $112.00
                                                </div>

                                            </td>
                                            <td>
                                               <div class="le-quantity">
                        <form>
                          <a class="minus" href="#reduce"></a>
                          <input name="quantity" readonly="readonly" type="text" value="2" />
                          <a class="plus" href="#add"></a>
                        </form>
                      </div>
                                            </td>

                                            <td>

                                                <div class="price">
                                                    $224.00
                                                </div>

                                            </td>

                                            <td>

                                                <div class="delete">
                                                    <a class="close-btn" href="#"></a>
                                                </div>

                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                              </div>
                              <div class="merged-buttons">
                                <a href="products-grid.php" class="le-btn small ">continue shopping</a>
                          <a href="checkout.php" class="le-btn small">checkout</a>

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

      <!-- <section class="section-brands-slider">
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
