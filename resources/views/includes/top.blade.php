<div class="banner-area">
    <div class="container">
        <div class="banner-contant">
            <div class="text-contant">
                <span>    {{__("msg.company_name")}}               </span>
                <h1>    {{__("msg.h")}}       </h1>
                <p>   {{__("msg.h1")}}  </p>


             


                @include('includes.count_up')

wwe



                <div class="banner-btn">
                    <a href="https://wa.me/+{{config('app.phn','no') }}" class="default-btn">     {{__("msg.get_analisis")}}</a>
                    <a href="tel:+{{config('app.phn','no') }}" class="default-btn-two mr-3">  {{__("msg.call_now")}}</a>
                </div>

                <br>
                <br>
             
            </div>
            <div class="img-contant">
                <img src="assets/img/banner/banner.jpg" alt="Image">
                <!--<div class="video-box">
                    <a href="https://www.youtube.com/watch?v=E-k3G3uy4c4" class="video-btn popup-youtube">
                        <i class="las la-play"></i>
                    </a>
                </div>-->
            </div>
        </div>

       
        <div class="shape-1">
            <img src="assets/img/shapes/shape-1.png" alt="Shape">
        </div>
        <div class="shape-2">
            <img src="assets/img/shapes/shape-2.png" alt="Shape">
        </div>
        <div class="shape-3">
            <img src="assets/img/shapes/shape-3.png" alt="Shape">
        </div>
        <div class="shape-4">
            <img src="assets/img/shapes/shape-4.png" alt="Shape">
        </div>
        <div class="shape-5">
            <img src="assets/img/shapes/shape-5.png" alt="Shape">
        </div>
        <div class="shape-6">
            <img src="assets/img/shapes/shape-6.png" alt="Shape">
        </div>
        <div class="shape-7">
            <img src="assets/img/shapes/shape-7.png" alt="Shape">
        </div>
        <div class="shape-8">
            <img src="assets/img/shapes/shape-8.png" alt="Shape">
        </div>
        <div class="shape-9">
            <img src="assets/img/shapes/shape-9.png" alt="Shape">
        </div>
        <div class="shape-10">
            <img src="assets/img/shapes/shape-10.png" alt="Shape">
        </div>
        <div class="shape-11">
            <img src="assets/img/shapes/shape-11.png" alt="Shape">
        </div>
    </div>
</div>


<script>
    
    function changeLanguage(lang){
        window.location='{{url("change-language")}}/'+lang;
    }
    </script>