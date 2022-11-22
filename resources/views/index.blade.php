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
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="assets/css/rtl.css">
    <!-- Favicon -->
    <link rel="icon" type="images/png" href="assets/img/favicon.ico">
    <title>Window - Marketing Agency</title>
    <style>
        .features-tow-card {
            height: 450px !important;
        }

            .features-tow-card p {
                text-align: justify;
                text-justify: inter-word;
            }
    </style>
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

    @include('includes.wapp')



    

 @include('includes.nav')

 <!-- End Navbar Area -->
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
 <!-- Banner Area -->
 <!-- About Area -->

@include('includes.top')
 <!-- End Banner Area -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 @include('includes.features')



 @include('includes.about')
 <!-- End About Area -->
 <!-- Choose Area -->
 @include('includes.whyus')
 <!-- End Choose Area -->
 <!-- Contact Us Area -->




 <!-- End Contact Us Area -->
 <!-- Partner Slider Area -->

 <div id="all_stories">
 @include('includes.stories')
 @include('includes.web_stories')
  
 </div>


<div id="contact">
    @include('includes.contact')
</div>




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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("user_DFO50xb7s5iyEZO6TVQcl");
        })();
        const btn = document.getElementById('button');
        const lblmessage = document.getElementById('lblmessage');
        document.getElementById('emailForm')
         .addEventListener('submit', function (event) {
             event.preventDefault();
             debugger;
             btn.value = 'Sending...';

             const serviceID = 'window123';
             const templateID = 'template_18p1wgd';

             emailjs.sendForm(serviceID, templateID, this)
              .then(() => {
                  btn.value = 'Send Email';
                  lblmessage.style.display = "block";

              }, (err) => {
                  btn.value = 'Send Email';
                  alert(JSON.stringify(err));
              });
         });
    </script>
</body>
</html>