<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Transportion</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

   <link rel="shortcut icon" type="image/x-icon" href="\img\booker.ico" />

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/gijgo.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slicknav.css" />
    <link
      rel="stylesheet"
      href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"
    />

    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                  <img
                                    src="img\booker.jpg"
                                    alt=""
                                    style="max-width: 80px; height: auto"
                                  />
                                </a>
                              </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> Bookerttransportllc@gmail.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> 571 247 8253</a></li>
                                    </ul>
                                </div>

                                <!-- <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" href="#">Get Free Quote</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                      <img
                                        src="img\booker.jpg"
                                        alt=""
                                        style="max-width: 80px; height: auto"
                                      />
                                    </a>
                                  </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">home</a></li>
                                            <li><a href="{{ route('service') }}">Services</a></li>
                                            <li><a href="{{ route('about') }}">about</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="bradcam_text text-center">
              <h3>About Us</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ bradcam_area  -->

     <!-- chose_area -->
     <div class="chose_area">
        <div class="container">
          <div class="features_main_wrap">
            <div class="row align-items-center">
              <div class="col-xl-5 col-lg-5 col-md-6">
                <div class="about_image">
                  <img src="img/about/about.png" alt="" />
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="features_info">
                  <h3>Why Choose Booker T Transport LLC?</h3>
                  <p>
                    When it comes to transportation services, we stand out for a
                    multitude of reasons. Here's why you should choose us:
                  </p>
                  <ul>
                    <li>Over 10 Years of Proven Excellence</li>
                    <li>Reliable, Safe, and On-Time Deliveries</li>
                    <li>Extensive Coverage Across the USA</li>
                  </ul>
  
                  <div class="about_btn">
                    <a class="boxed-btn3-line" href="{{ route('contact') }}">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ chose_area -->


   
    
   
    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                        <h3>100% secure and safe</h3>
                        <p>At Booker T Transport LLC, we prioritize the safety and security of your shipments.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                        <a href="tel:5712478253" class="boxed-btn3">571 247 8253</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->

    <!-- testimonial_area -->
    <div class="testimonial_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-7">
            <div class="testmonial_active owl-carousel">
              <div class="single_carousel">
                <div class="single_testmonial text-center">
                  <div class="quote">
                    <img src="img/svg_icon/quote.svg" alt="" />
                  </div>
                  <p>
                    I was extremely impressed with Booker T Transport LLC. Their
                    dedication to delivering on time is remarkable, and their
                    service is top-notch.
                  </p>
                  <div class="testmonial_author">
                    <div class="thumb">
                      <img src="img/case/testmonial.png" alt="" />
                    </div>
                    <h3>Susan Johnson</h3>
                    <span>Business Owner</span>
                  </div>
                </div>
              </div>
              <div class="single_carousel">
                <div class="single_testmonial text-center">
                  <div class="quote">
                    <img src="img/svg_icon/quote.svg" alt="" />
                  </div>
                  <p>
                    Booker T Transport LLC provided exceptional service for our
                    logistics needs. Their commitment to safety and reliability
                    is outstanding.
                  </p>
                  <div class="testmonial_author">
                    <div class="thumb" style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden;">
                      <img src="img/banner/john smith.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    
                    <h3>John Smith</h3>
                    <span>Supply Chain Manager</span>
                  </div>
                </div>
              </div>
              <div class="single_carousel">
                <div class="single_testmonial text-center">
                  <div class="quote">
                    <img src="img/svg_icon/quote.svg" alt="" />
                  </div>
                  <p>
                    I have been using Booker T Transport LLC for years, and they
                    never disappoint. Their nationwide coverage and timely
                    deliveries are exceptional.
                  </p>
                  <div class="testmonial_author">
                  <div class="thumb" style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden;">
                    <img src="img\banner\emily davis.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
                    <h3>Emily Davis</h3>
                    <span>Logistics Coordinator</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /testimonial_area -->


   
    @include('footer')
    
       
     
      <!-- Button trigger modal -->
  
      <!-- Modal -->
      <div
        class="modal fade custom_search_pop"
        id="exampleModalCenter"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="serch_form">
              <input type="text" placeholder="search" />
              <button type="submit">search</button>
            </div>
          </div>
        </div>
      </div>
  
      <!-- JS here -->
      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/ajax-form.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/scrollIt.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/nice-select.min.js"></script>
      <script src="js/jquery.slicknav.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/plugins.js"></script>
      <!-- <script src="js/gijgo.min.js"></script> -->
      <script src="js/slick.min.js"></script>
  
      <!--contact js-->
      <script src="js/contact.js"></script>
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/jquery.form.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/mail-script.js"></script>
  
      <script src="js/main.js"></script>
    </body>
  </html>
  
