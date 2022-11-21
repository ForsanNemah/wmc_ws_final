<footer class="footer-area pt-100">
    <div class="container" dir="ltr">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget">
                    <div class="logo">
                        <img src="assets/img/logo-white.png" alt="logo">
                    </div>
                    <p> {{__('msg.footer_company_info')}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <!--
                <div class="footer-widget pl-80 mt-20">
                    <h3>النافذة</h3>

                    <ul class="footer-text">
                        <li>
                            <a href="about.html">من نحن</a>
                        </li>
                        <li>
                            <a href="services.html">خدماتنا</a>
                        </li>
                        <li>
                            <a href="#">اعمالنا</a>
                        </li>
                        <li>
                            <a href="#">اخبار الميديا</a>
                        </li>
                        <li>
                            <a href="contact.html">اتصل بنا</a>
                        </li>
                    </ul>
                </div>
            -->
            </div>


            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget mt-20">
                    <h3>  {{__('msg.footer_contact_info')}}</h3>
                    <ul class="text-list">

                        <li>  {{__('msg.footer_address')}}</li>
                        <li><a href="mailto:hibrahim@wmc-ksa.com">  {{__('msg.footer_email')}}: {{config('app.email','no') }}</a></li>
                        <li><a href="tel:+{{config('app.phn') }}">  {{__('msg.footer_phn')}}: +{{config('app.phn','no') }}</a></li>
                    </ul>
                    <ul class="info-list">
                        <li>
                            <a href="{{config('app.facebook','no') }}"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="{{config('app.twitter','no') }}"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                            <a href="{{config('app.linkedin','no') }}"> <i class="lab la-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="{{config('app.insta','no') }}"><i class="lab la-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright @2021  All Rights Reserved <a >Window</a></p>
        </div>
        <div class="footer-shape">
            <img src="assets/img/footer-shape.png" alt="Shape">
        </div>
    </div>
</footer>