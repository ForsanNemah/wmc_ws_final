<div class="col-lg-6">
    <div class="choose-form ptb-100">
        <form id="emailForm">
            <div class="form-group">
                <input type="text" name="from_name" class="form-control" id="from_name" required data-error="يرجى تعبئة الاسم" placeholder="الاسم">
                <div class="help-block with-errors"></div>
                <i class="las la-user"></i>
            </div>
            <div class="form-group">
                <input type="text" name="mobile_no" class="form-control" id="mobile_no" required data-error="يرجى تعبئة رقم الهاتف" placeholder="رقم الهاتف">
                <div class="help-block with-errors"></div>
                <i class="las la-phone"></i>
            </div>
            <div class="form-group">
                <input type="email" name="from_email" class="form-control" id="from_email" required data-error="يرجى تعبئة البريد الالكتروني" placeholder="البريد الالكتروني">
                <div class="help-block with-errors"></div>
                <i class="las la-at"></i>
            </div>
            <div class="form-group">
                <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="مختصر عن طبيعة عملك" placeholder="مختصر عن طبيعة عملك"></textarea>
                <div class="help-block with-errors"></div>
                <i class="las la-envelope"></i>
            </div>
            <div class="form-group" style="text-align:center">
                <label id="lblmessage" style="color:greenyellow;display:none">تم ارسال رسالتك بنجاح</label>
            </div>
            <div class="send-btn">
                <button type="submit" id="button" class="default-btn-two">ارسال</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>