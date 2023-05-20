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
                  <li><a href="shopping-cart.php">shopping cart</a></li>
                  <li class="active">checkout</li>

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
              <i class="fa fa-check-circle-o "></i>
              <span class="triangle"></span>
            </div>
                  <div class="box-holder">
                  <h2>shipping info</h2>
              <div class="table-form ">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                    <label>select country</label>
                    <select class="variation-btn inline selectpicker capital" data-width="100%"  data-style=" le-btn no-shadow">

                      <option value="AFG">Afghanistan</option>
                      <option value="ALA">Åland Islands</option>
                      <option value="ALB">Albania</option>
                      <option value="DZA">Algeria</option>
                      <option value="ASM">American Samoa</option>
                      <option value="AND">Andorra</option>
                      <option value="AGO">Angola</option>
                      <option value="AIA">Anguilla</option>
                      <option value="ATA">Antarctica</option>
                      <option value="ATG">Antigua and Barbuda</option>
                      <option value="ARG">Argentina</option>
                      <option value="ARM">Armenia</option>
                      <option value="ABW">Aruba</option>
                      <option value="AUS">Australia</option>
                      <option value="AUT">Austria</option>
                      <option value="AZE">Azerbaijan</option>
                      <option value="BHS">Bahamas</option>
                      <option value="BHR">Bahrain</option>
                      <option value="BGD">Bangladesh</option>
                      <option value="BRB">Barbados</option>
                      <option value="BLR">Belarus</option>
                      <option value="BEL">Belgium</option>
                      <option value="BLZ">Belize</option>
                      <option value="BEN">Benin</option>
                      <option value="BMU">Bermuda</option>
                      <option value="BTN">Bhutan</option>
                      <option value="BOL">Bolivia</option>
                      <option value="BES">Bonaire</option>
                      <option value="BWA">Botswana</option>
                      <option value="BVT">Bouvet Island</option>
                      <option value="BRA">Brazil</option>
                      <option value="BRN">Brunei Darussalam</option>
                      <option value="BGR">Bulgaria</option>
                      <option value="BFA">Burkina Faso</option>
                      <option value="BDI">Burundi</option>
                      <option value="KHM">Cambodia</option>
                      <option value="CMR">Cameroon</option>
                      <option value="CAN">Canada</option>
                      <option value="CPV">Cape Verde</option>
                      <option value="CYM">Cayman Islands</option>
                      <option value="TCD">Chad</option>
                      <option value="CHL">Chile</option>
                      <option value="CHN">China</option>
                      <option value="CXR">Christmas Island</option>
                      <option value="COL">Colombia</option>
                      <option value="COM">Comoros</option>
                      <option value="COG">Congo</option>
                      <option value="COK">Cook Islands</option>
                      <option value="CRI">Costa Rica</option>
                      <option value="CIV">Côte d'Ivoire</option>
                      <option value="HRV">Croatia</option>
                      <option value="CUB">Cuba</option>
                      <option value="CUW">Curaçao</option>
                      <option value="CYP">Cyprus</option>
                      <option value="CZE">Czech Republic</option>
                      <option value="DNK">Denmark</option>
                      <option value="DJI">Djibouti</option>
                      <option value="DMA">Dominica</option>
                      <option value="DOM">Dominican Republic</option>
                      <option value="ECU">Ecuador</option>
                      <option value="EGY">Egypt</option>
                      <option value="SLV">El Salvador</option>
                      <option value="GNQ">Equatorial Guinea</option>
                      <option value="ERI">Eritrea</option>
                      <option value="EST">Estonia</option>
                      <option value="ETH">Ethiopia</option>
                      <option value="FRO">Faroe Islands</option>
                      <option value="FJI">Fiji</option>
                      <option value="FIN">Finland</option>
                      <option value="FRA">France</option>
                      <option value="GUF">French Guiana</option>
                      <option value="PYF">French Polynesia</option>
                      <option value="GAB">Gabon</option>
                      <option value="GMB">Gambia</option>
                      <option value="GEO">Georgia</option>
                      <option value="DEU">Germany</option>
                      <option value="GHA">Ghana</option>
                      <option value="GIB">Gibraltar</option>
                      <option value="GRC">Greece</option>
                      <option value="GRL">Greenland</option>
                      <option value="GRD">Grenada</option>
                      <option value="GLP">Guadeloupe</option>
                      <option value="GUM">Guam</option>
                      <option value="GTM">Guatemala</option>
                      <option value="GGY">Guernsey</option>
                      <option value="GIN">Guinea</option>
                      <option value="GNB">Guinea-Bissau</option>
                      <option value="GUY">Guyana</option>
                      <option value="HTI">Haiti</option>
                      <option value="HND">Honduras</option>
                      <option value="HKG">Hong Kong</option>
                      <option value="HUN">Hungary</option>
                      <option value="ISL">Iceland</option>
                      <option value="IND">India</option>
                      <option value="IDN">Indonesia</option>
                      <option value="IRN">Iran</option>
                      <option value="IRQ">Iraq</option>
                      <option value="IRL">Ireland</option>
                      <option value="IMN">Isle of Man</option>
                      <option value="ISR">Israel</option>
                      <option value="ITA">Italy</option>
                      <option value="JAM">Jamaica</option>
                      <option value="JPN">Japan</option>
                      <option value="JEY">Jersey</option>
                      <option value="JOR">Jordan</option>
                      <option value="KAZ">Kazakhstan</option>
                      <option value="KEN">Kenya</option>
                      <option value="KIR">Kiribati</option>
                      <option value="KOR">Korea, Republic of</option>
                      <option value="KWT">Kuwait</option>
                      <option value="KGZ">Kyrgyzstan</option>
                      <option value="LVA">Latvia</option>
                      <option value="LBN">Lebanon</option>
                      <option value="LSO">Lesotho</option>
                      <option value="LBR">Liberia</option>
                      <option value="LBY">Libya</option>
                      <option value="LIE">Liechtenstein</option>
                      <option value="LTU">Lithuania</option>
                      <option value="LUX">Luxembourg</option>
                      <option value="MAC">Macao</option>
                      <option value="MKD">Macedonia</option>
                      <option value="MDG">Madagascar</option>
                      <option value="MWI">Malawi</option>
                      <option value="MYS">Malaysia</option>
                      <option value="MDV">Maldives</option>
                      <option value="MLI">Mali</option>
                      <option value="MLT">Malta</option>
                      <option value="MHL">Marshall Islands</option>
                      <option value="MTQ">Martinique</option>
                      <option value="MRT">Mauritania</option>
                      <option value="MUS">Mauritius</option>
                      <option value="MYT">Mayotte</option>
                      <option value="MEX">Mexico</option>
                      <option value="FSM">Micronesia</option>
                      <option value="MDA">Moldova</option>
                      <option value="MCO">Monaco</option>
                      <option value="MNG">Mongolia</option>
                      <option value="MNE">Montenegro</option>
                      <option value="MSR">Montserrat</option>
                      <option value="MAR">Morocco</option>
                      <option value="MOZ">Mozambique</option>
                      <option value="MMR">Myanmar</option>
                      <option value="NAM">Namibia</option>
                      <option value="NRU">Nauru</option>
                      <option value="NPL">Nepal</option>
                      <option value="NLD">Netherlands</option>
                      <option value="NCL">New Caledonia</option>
                      <option value="NZL">New Zealand</option>
                      <option value="NIC">Nicaragua</option>
                      <option value="NER">Niger</option>
                      <option value="NGA">Nigeria</option>
                      <option value="NIU">Niue</option>
                      <option value="NFK">Norfolk Island</option>
                      <option value="NOR">Norway</option>
                      <option value="OMN">Oman</option>
                      <option value="PAK">Pakistan</option>
                      <option value="PLW">Palau</option>
                      <option value="PAN">Panama</option>
                      <option value="PNG">Papua New Guinea</option>
                      <option value="PRY">Paraguay</option>
                      <option value="PER">Peru</option>
                      <option value="PHL">Philippines</option>
                      <option value="PCN">Pitcairn</option>
                      <option value="POL">Poland</option>
                      <option value="PRT">Portugal</option>
                      <option value="PRI">Puerto Rico</option>
                      <option value="QAT">Qatar</option>
                      <option value="REU">Réunion</option>
                      <option value="ROU">Romania</option>
                      <option value="RUS">Russian Federation</option>
                      <option value="RWA">Rwanda</option>
                      <option value="WSM">Samoa</option>
                      <option value="SMR">San Marino</option>
                      <option value="STP">Sao Tome and Principe</option>
                      <option value="SAU">Saudi Arabia</option>
                      <option value="SEN">Senegal</option>
                      <option value="SRB">Serbia</option>
                      <option value="SYC">Seychelles</option>
                      <option value="SLE">Sierra Leone</option>
                      <option value="SGP">Singapore</option>
                      <option value="SVK">Slovakia</option>
                      <option value="SVN">Slovenia</option>
                      <option value="SLB">Solomon Islands</option>
                      <option value="SOM">Somalia</option>
                      <option value="ZAF">South Africa</option>
                      <option value="SSD">South Sudan</option>
                      <option value="ESP">Spain</option>
                      <option value="LKA">Sri Lanka</option>
                      <option value="SDN">Sudan</option>
                      <option value="SUR">Suriname</option>
                      <option value="SJM">Svalbard and Jan Mayen</option>
                      <option value="SWZ">Swaziland</option>
                      <option value="SWE">Sweden</option>
                      <option value="CHE">Switzerland</option>
                      <option value="SYR">Syrian Arab Republic</option>
                      <option value="TWN">Taiwan</option>
                      <option value="TJK">Tajikistan</option>
                      <option value="TZA">Tanzania</option>
                      <option value="THA">Thailand</option>
                      <option value="TLS">Timor-Leste</option>
                      <option value="TGO">Togo</option>
                      <option value="TKL">Tokelau</option>
                      <option value="TON">Tonga</option>
                      <option value="TUN">Tunisia</option>
                      <option value="TUR">Turkey</option>
                      <option value="TKM">Turkmenistan</option>
                      <option value="TUV">Tuvalu</option>
                      <option value="UGA">Uganda</option>
                      <option value="UKR">Ukraine</option>
                      <option value="ARE">United Arab Emirates</option>
                      <option value="GBR">United Kingdom</option>
                      <option value="USA">United States</option>
                      <option value="URY">Uruguay</option>
                      <option value="UZB">Uzbekistan</option>
                      <option value="VUT">Vanuatu</option>
                      <option value="VNM">Viet Nam</option>
                      <option value="VGB">Virgin Islands, British</option>
                      <option value="VIR">Virgin Islands, U.S.</option>
                      <option value="WLF">Wallis and Futuna</option>
                      <option value="ESH">Western Sahara</option>
                      <option value="YEM">Yemen</option>
                      <option value="ZMB">Zambia</option>
                      <option value="ZWE">Zimbabwe</option>
                    </select>
                  </div>  
                </div>



                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                    <label>address 1</label>
                    <input type="text" class="le-input" data-placeholder="Address Line 1" >
                  </div>  
                </div>

                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                    <label>address 2</label>
                    <input type="text" class="le-input" data-placeholder="Address Line 2"  >
                  </div>  
                </div>


              </div>

              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                    <label>shipping type</label>
                    <select class="variation-btn inline selectpicker capital"  data-width="100%"  data-style="btn-inverse">
                      <option value="express">express</option>
                      <option value="standard">standard</option>
                    </select>
                  </div>  
                </div>



                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                    <label>telephone</label>
                    <input type="text" class="le-input" data-placeholder="Example:  +1 123 456 7890">
                  </div>  
                </div>

                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                    <label>zip code</label>
                    <input type="text" class="le-input" data-placeholder="Example: 33461">
                  </div>  
                </div>


              </div>

            
            </div>
                  </div>
                  
                  <div class="box-holder">
                  <h2>contact info</h2>
              <div class="table-form ">
              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                                     <input type="text" class="le-input" data-placeholder="Full Name" >
                  </div>  
                </div>



                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                   
                    <input type="text" class="le-input" data-placeholder="Email Address" >
                  </div>  
                </div>

                <div class="col-xs-12 col-md-4">
                  <div class="field-group">
                  
                    <input type="text" class="le-input" data-placeholder="Phone"  >
                  </div>  
                </div>


              </div>

            

              <div class="merged-buttons">
                <a href="shopping-cart.php" class="le-btn small">back to cart</a>
                <a href="payment.php" class="le-btn small ">Payment</a>

              </div>
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
