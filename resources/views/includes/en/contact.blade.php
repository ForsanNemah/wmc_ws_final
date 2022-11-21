<div class="contact-area">
    <div class="container">
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
                                <button type="submit" id="button" class="default-btn-two">{{__("msg.send")}}</button>
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