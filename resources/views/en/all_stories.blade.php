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

        <title>Window - Marketing Agency | Services</title>
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
        @include('includes.wapp')
        <!-- Start Navbar Area -->
        @include('includes.nav')
        <!-- End Navbar Area -->



        <!-- Page banner Area -->
         
       
        @include('includes.stories')
        @include('includes.web_stories')
        @include('includes.apps_stories')

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