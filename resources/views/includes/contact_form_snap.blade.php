


@if (config('app.locale')=='ar')


 
<div class="contact-area">
    <div class="container"  >
        <div class="contact-content">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <h2>  ضع بياناتك ليتم التواصل معك بخصوص هذا العرض والعروض المميزة الاخرى </h2>
                        <p> </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form">
                        <form   method="POST" action="{{ route('customers.store')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="from_name" required data-error="يرجى تعبئة الاسم" placeholder="الاسم">
                                <div class="help-block with-errors"></div>
                                <i class="las la-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="number" name="phn" class="form-control" id="mobile_no" required data-error="يرجى تعبئة رقم الهاتف" placeholder="رقم الهاتف">
                                <input type="hidden" name="admin_id" class="form-control" id="mobile_no" required data-error="يرجى تعبئة رقم الهاتف" placeholder="رقم الهاتف"   value="9">
                                <div class="help-block with-errors"></div>
                                <i class="las la-phone"></i>
                            </div>
                            <div  hidden class="form-group">
                                <input  type="email" name="email" class="form-control" id="from_email"   data-error="يرجى تعبئة البريد الالكتروني" placeholder="البريد الالكتروني">
                                <div class="help-block with-errors"></div>
                                <i class="las la-at"></i>
                            </div>
                            <div hidden class="form-group">
                                <textarea name="msg" id="msg" class="form-control" cols="30" rows="6"  data-error="مختصر عن طبيعة عملك" placeholder="مختصر عن طبيعة عملك" value="null"></textarea>
                                <div class="help-block with-errors"></div>
                                <i class="las la-envelope"></i>
                            </div>
                            <div class="form-group" style="text-align:center">
                                <label id="lblmessage" style="color:greenyellow;display:none">تم ارسال رسالتك بنجاح</label>
                            </div>
                            <div class="send-btn">
                                <button type="submit"  class="default-btn-two">{{__("msg.send")}}</button>
                                <div   class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@else
   

<div class="contact-area">
    <div class="container" dir="ltr">
        <div class="contact-content">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <h2> {{__("msg.contact_h")}}</h2>
                        <p> {{__("msg.contact_h1")}}</p><
                    </div>
                </div>

                <div class="col-lg-6" dir="ltr">
                    <div class="contact-form">
                        <form id="emailForm">
                            <div class="form-group">
                                <input type="text" name="from_name" class="form-control" id="from_name" required data-error=" Plz Write your Name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                                <i class="las la-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" name="mobile_no" class="form-control" id="mobile_no" required data-error="Plz Write your Phone Number" placeholder="Phone Number  ">
                                <div class="help-block with-errors"></div>
                                <i class="las la-phone"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" name="from_email" class="form-control" id="from_email" required data-error="Plz Write your Phone Email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                                <i class="las la-at"></i>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error=" Plz Write about your Business  " placeholder="  About your Business    "></textarea>
                                <div class="help-block with-errors"></div>
                                <i class="las la-envelope"></i>
                            </div>
                            <div class="form-group" style="text-align:center">
                                <label id="lblmessage" style="color:greenyellow;display:none"> Sent Successfully</label>
                            </div>
                            <div class="send-btn">
                                <button type="submit"  class="default-btn-two">{{__("msg.send")}}</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif