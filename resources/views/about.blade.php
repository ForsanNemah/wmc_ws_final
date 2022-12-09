


<!doctype html>
<html lang="ar">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Line Awesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Theme CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Stylesheet Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="assets/css/rtl.css">
        <!-- Favicon -->
       <link rel="icon" type="images/png" href="assets/img/favicon.ico">


        <title>Window - Marketing Agency | About</title>
    </head>
    
    <body dir="ltr">
        <!-- Preloader Area -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
       @include('includes.nav')
        <!-- End Navbar Area -->
        @include('includes.wapp')
        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='las la-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->

        <!-- Page banner Area -->
        <div class="page-banner bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container" dir="ltr">
                        <div class="page-content">
                            <h2>{{__("msg.who_is_us")}}  </h2>
                            <ul>
                                <li><a href="{{
                                
                                
                                
                                    url('/')
                                    
                                    
                                    
                                    
                                    
                                    
                                    }}">{{__("msg.main")}}</a></li>
                                <li>{{__("msg.who_is_us")}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page banner Area -->

        <!-- About Eoda Area -->
        <div class="about-eoda-area eoda-two ptb-100" dir="ltr">
            <div class="container" dir="ltr">
                <div class="section-title">
                    <span>{{__("msg.about_formh")}}</span>
                    <h3>{{__("msg.about_formh1")}}</h3>
                </div>

                <div class="about-eoda-text">
                    <div class="eoda-text">
                        <p>{{__("msg.about_formh2")}}</p>
                        <br />
                        <p>
                            {{__("msg.about_formh3")}}
                        </p>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>  {{__("msg.about_form_service1")}}</li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li>  {{__("msg.about_form_service2")}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Eoda Area -->

        <!-- Choose Area -->
        <div class="choose-area choose-three ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-text">
                            <span>  {{__("msg.about_form_service2")}}</span>
                            <h2> {{__("msg.about_form_service2")}}</h2>
                            <p>{{__("msg.about_form_service2")}}</p> 
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <ul>
                                        <li>
                                            <i class="las la-sync-alt"></i>
                                            {{__("msg.about_form_service2")}}
                                        </li>
                                        <li>
                                            <i class="las la-search-plus"></i>
                                            {{__("msg.about_form_service2")}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <ul>
                                        <li>
                                            <i class="las la-file-archive"></i>
                                            {{__("msg.about_form_service2")}}
                                        </li>
                                        <li>
                                            <i class="las la-bullseye"></i>
                                            {{__("msg.about_form_service2")}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="choose-btn">
                                <a href="tel:+{{config('app.phn')}}" class="default-btn"> {{__("msg.about_form_service2")}}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-images">
                            <img src="assets/img/choose/choose-3.jpg" class="img-1" alt="Image">
                            <!--<div class="video-box">
                                <a href="#" class="video-btn popup-youtube">
                                    <i class="las la-play"></i>
                                </a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Choose Area -->


       
        <!-- End Partner Slider Area -->

        <!-- Subscribe Area 
        <div class="subscribe-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Stay Up To Date With Our Latest News!</h2>
                </div>

                <div class="subscribe-form">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                        <button type="submit" class="default-btn-two">Subscribe</button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                    <p>*We won’t spam you. we promise! <i class="las la-thumbs-up"></i></p>
                </div>
            </div>
        </div>
      End Subscribe Area -->

        <!-- Footer Area-->
       
        <!-- End Footer Area -->
        @include('includes.footer')
        <!-- Go Top -->
        <div class="go-top">
            <i class="las la-hand-point-up"></i>
        </div>
        <!-- End Go Top -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.min.js"></script>
        <!-- Magnific JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <!-- Appear JS -->
        <script src="assets/js/jquery.appear.js"></script>
        <!-- Form Validator JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Ajaxchimp JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>