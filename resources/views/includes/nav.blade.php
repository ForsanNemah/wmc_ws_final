<div class="navbar-area fixed-top">
    <div class="eoda-responsive-nav">
        <div class="container">
            <div class="eoda-responsive-menu">
                <div class="logo">
                    <a>
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="eoda-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="logo">


                    
                </a>

                
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">

                            <a href="{{
                                
                                
                                
                                url('/')
                                
                                
                                
                                
                                
                                
                                }}" class="nav-link active">
                                {{__("msg.main")}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{config('app.domain')}}#about" class="nav-link">
                                {{__("msg.the_window")}}
                            </a>
                        </li>

                        <li class="nav-item">

                            <a href="{{config('app.domain')}}#services" class="nav-link">
                                {{__("msg.services")}}
                            </a>

                        </li>

                       
        
                        <li class="nav-item">
                            <a href="{{config('app.domain')}}#all_stories" class="nav-link">
                                {{__("msg.work")}}
                            </a>

                        </li>
                       
                        <li class="nav-item">
                            <a href="{{config('app.domain')}}#contact" class="nav-link"
                            
                            
                            >
                            {{__("msg.call_us")}}
                        </a>
                        </li>


                        <li class="nav-item">
                           
                        <br>
                      
                            <div>
                                <select onchange="changeLanguage(this.value)" >
       
                                   <option {{session()->has('lang_code')?(session()->get('lang_code')=='ar'?'selected':''):''}} value="ar">عربي</option>
                                   <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
                      
                               </select>
                           </div>

                        </li>
                        <!--<li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link search-box">
                                <i class="las la-search"></i>
                            </a>
                        </li>-->
                       
                        <li class="nav-btn">
                            <a href="https://api.whatsapp.com/send?phone=+{{config('app.phn','no') }}" class="default-btn-two">  {{__("msg.get_offer")}}  </a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </div>
</div>



<script>


$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

</script>