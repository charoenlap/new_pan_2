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
    <!-- require head -->
    <?php require_once('inc/head.php'); ?>

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
                  <li><a href="shopping-cart.php">shopping cart</a></li>
                   <li><a href="checkout.php">checkout</a></li>
                  <li class="active">payment</li>

                </ul>


              </div>

            </div>
          </div>
        </div>
      </section>




      <section id="checkout" class="page-holder ">
        <div class="container no-padding">

            <div class="col-xs-12 col-md-8">
                <div class="box">
            <div class="icon-holder small badge-style">
              <i class="fa fa-dollar "></i>
              <span class="triangle"></span>
            </div>
                  
                  <div class="box-holder">
                     <div class="row">
                <div class="col-xs-12 col-md-6">
                  <h2>payment info</h2>
              <div class="table-form ">
                <form>
                <div class="field-group">
                    <label>credit card number</label>
                                     <input type="text" class="le-input" data-placeholder="xxxx xxxx xxxx xxxx" >
                  </div>  
                   <div class="field-group">
                    <label>cardholder full name</label>
                                     <input type="text" class="le-input" data-placeholder="John Smith" >
                  </div> 
                  <div class="field-group">
                    <label>expire</label>
                    <select class="variation-btn inline selectpicker capital"  data-width="49%"  data-style="le-btn no-shadow">
                      <option value="">month</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    
                        <select class="variation-btn inline selectpicker capital "  data-width="49%"  data-style=" le-btn no-shadow">
                      <option value="">year</option>
                          <option value="1">2014</option>
                      <option value="2">2015</option>
                      <option value="3">2016</option>
                      <option value="4">2017</option>
                      <option value="5">2018</option>
                      <option value="6">2019</option>
                      <option value="7">2020</option>
                      
                    </select>
                  </div>  
                
   
 <div class="field-group">
                    <label>CCV</label>
                                     <input type="text" class="le-input col-xs-2" data-placeholder="000" >
                  </div> 

            
                  

            
                </form>
            
            </div>
                  </div>
                   <div class="col-xs-12 col-md-6">
                         <h2>more info</h2>
              <div class="table-form ">
                <form>
                <div class="field-group">
                    <label>any note to us</label>
                    <textarea class="le-input" rows="5" cols="30" ></textarea>
                    <div class="caption italic"><strong>Note:</strong>
                      <p>
                        Nunc ut risus orci. Nam condimentum sagittis venenatis. Nullam non augue nulla. Ut eu lorem varius, fringilla lacus eget, hendrerit massa.
                      </p>
                    </div>             
                    
                  </div>  
                  
              
                </form>
            
            </div>
                   </div>
                       
                
               
                  </div>
                     <div class="text-right button-holder">
                <a href="#" class="le-btn small">place order</a>

              </div>
            </div>
            </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="box sidebar">
                
                <div class="widget simple-widget">
                  <div class="icon-holder small">
                  <i class="fa fa-dollar"></i>
                  <span class="triangle"></span>
                </div>
                  <h2>Return Policy</h2>
                  <div class="body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed elementum nisl. In hac habitasse platea dictumst. Donec aliquet dolor in libero euismod, ac dapibus turpis euismod. Phasellus ac risus turpis. Duis quis ultricies nisi. Lorem ipsum dolor sit amet
                    </p>
                    <ul class="normal-ul">
                      <li>Proin ut pharetra turpis</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Sed sed elementum nisl</li>
                    </ul>
                    <p>
                      Nunc ut risus orci. Nam condimentum sagittis venenatis. Nullam non augue nulla. Ut eu lorem varius, fringilla lacus eget, hendrerit massa
                    </p>
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

     <!--  <section class="section-brands-slider">
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
