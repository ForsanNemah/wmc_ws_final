<!doctype html>
<html lang="en">
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
        <link rel="icon" type="images/png" href="assets/img/favicon.png">
        <style>

            .contact-card {
            height:211px;
            }
        </style>

        <title>Window - Marketing Agency | Contact</title>
    </head>
    
    <body>
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
        @include('includes.wapp  ')
        @include('includes.wapp  ')
        @include('includes.nav')
        <!-- End Navbar Area -->

       

        <!-- Page banner Area -->
        
       
        <!-- End Page banner Area -->

        <!-- Main Contact Area -->
        
        <!-- End Main Contact Area -->

        <!-- Contact Us Area -->
        <div class="schedule-area ptb-100">
            <div class="container">

                
                <div class="section-title">

                    <br>
                    @if (Session::has('done'))
                  
               
                    @php
                        echo "تمت العملية بنجاح ";
              @endphp
               
                   
                    @endif

                    @if (Session::has('error'))
                  
                  
                   
                  @php
                        echo  Session::get('error');
                  @endphp
                   
                    @endif

                    <br>
                  
<!--
                    <span>احجز موعد</span>
                    
                    <h2>دعونا نناقش مشروعكم</h2>
                    <h2>عبر اجتماع زوم مجاني مدتة 30دقيقة</h2>

                -->
                
 <div>

    @include('includes.contact_form_snap')
  
    <iframe src="{{route('count_down')}}"> </iframe>
    <br>
    <h >لا تفوت الفرصة واحصل على العرض الخاص بك الان</h>
<br>
    <br>
    <img src="ad.jpeg" width="100%" class="img-fluid" alt="Responsive image">
    

    
    
 </div>

              


                </div>
 
               
    

                
            </div>
        </div>





















        <div class="main-contact-area bg-f6f4ff pt-100 pb-70">
            <div class="container">
                <div class="contact-text-content">
                    <h2 class="title">تواصل معنا واحصل على خدمة استشارة في التسويق الالكتروني</h2>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="contact-card">
                                <i class="las la-phone"></i>
                                <h3>
                                   <a href="tel:+{{config('app.phn')}}" style="direction:ltr"> {{config('app.phn')}}</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="contact-card">
                                <i class="las la-envelope"></i>
                                <h3>
                                
                                   <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>
                                
                                </h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                            <div class="contact-card">
                                <i class="las la-map-marker"></i>
                                <h3 class="line-hight">المملكة العربية السعودية - المنطقة الشرقية</h3>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>








        <!-- End Contact Us Area -->
        <div class="form-group">
            
        </div>
        <!-- Contact-map -->
        <div class="contact-map">
            <div class="container-fluid">
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115422.41865610596!2d49.543101705239955!3d25.305864319823613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e3796e30ed2df5b%3A0x2340faa9012370cd!2sAl%20Hofuf%20Saudi%20Arabia!5e0!3m2!1sen!2sjo!4v1618356091483!5m2!1sen!2sjo" ></iframe>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.5706218111304!2d50.20925821503227!3d26.308016183391725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e85bd5978875%3A0x10ad4b8f71a3b016!2sKhobar%20Gate%20Tower%2C%203036%20King%20Fahd%20Road%2C%20Al%20Bandariyah%2C%20Al%20Khobar%2034424!5e0!3m2!1sen!2ssa!4v1628773361747!5m2!1sen!2ssa" allowfullscreen="" loading="lazy"></iframe>
            </div>


        </div>
        <!-- End Contact-map -->

      

        <!-- Footer Area-->
        @include('includes.footer')
        <!-- End Footer Area -->

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


<style>




div.ex1 {
  width: 100px;
   height: 100px;
}
</style>