
<?php


use App\Helper;



?>


@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12" id="app">


    <main style="margin-top: 57px;">

        <div class="card">
            <div id="image" class="col-lg-3">

                <img id="zoom_01"  data-zoom-image="/imagepro/{{$product->productimage}}" src="/imagepro/{{$product->productimage}}" width="479px" height="379px">


            </div>
            <form action="/addComment" method="post">
                @csrf
            <div class="col-lg-5" style="position: absolute;right: 35%;top:9px;text-align: right;max-width: 66%;">

                <div class="product-title" style="border-bottom: 1px solid #f0f0f0;padding: 6px 0px 33px 0px;">

                    <span class="title" style="font-size: 20px;">{{$product->productname }}</span>
                    <span class="brand"></span>
                </div>


                <div class="well" style="display: block;width: 49%;margin-top: 69px;margin-right: 51px;">

                    <label style="position: absolute;top: 94px;right: 55px;">کیفیت ساخت</label>

                    <input id="ex11" type="text" name="item_value[]"
                           data-provide="slider"
                           data-slider-ticks="[1, 2, 3,4,5]"
                           data-slider-ticks-labels=''
                           data-slider-min="1"
                           data-slider-max="5"
                           data-slider-step="1"
                           data-slider-value="5"
                           data-slider-tooltip="hide" />
<label id="ex111" style="    margin-right: 48px;"></label>

                </div>




                <div class="well" style="display: block;width: 49%;margin-top: 92px;margin-right: 51px;">

                    <label style="position: absolute;top: 213px;right: 55px;">نوآوری</label>


                    <input id="ex12" type="text" name="item_value[]"
                           data-provide="slider"
                           data-slider-ticks="[1, 2, 3,4,5]"
                           data-slider-ticks-labels=''
                           data-slider-min="1"
                           data-slider-max="5"
                           data-slider-step="1"
                           data-slider-value="5"
                           data-slider-tooltip="hide" />

                    <label id="ex121" style="    margin-right: 48px;"></label>
                </div>






                <div class="well" style="display: block;width: 49%;margin-top: 88px;margin-right: 51px;">

                    <label style="position: absolute;top: 313px;right: 55px;">سهولت استفاده</label>

                    <input id="ex13" type="text" name="item_value[]"
                           data-provide="slider"
                           data-slider-ticks="[1, 2, 3,4,5]"
                           data-slider-ticks-labels=''
                           data-slider-min="1"
                           data-slider-max="3"
                           data-slider-step="1"
                           data-slider-value="3"
                           data-slider-tooltip="hide" />

                    <label  id="ex131" style="    margin-right: 48px;"></label>
                </div>







                <div class="well" style="position: absolute;left: 0px;top: 57px;display: block;width: 49%;margin-top: 69px;margin-right: 51px;">

                    <label style="position: absolute;top: -41px;right: -10px;"> ارزش خرید به نسبت قیمت</label>

                    <input id="ex14" type="text" name="item_value[]"
                           data-provide="slider"
                           data-slider-ticks="[1, 2, 3,4,5]"
                           data-slider-ticks-labels=''
                           data-slider-min="1"
                           data-slider-max="3"
                           data-slider-step="1"
                           data-slider-value="3"
                           data-slider-tooltip="hide" />
                    <label id="ex141" style="    margin-right: 48px;"></label>


                </div>



                <div class="well" style="position: absolute;left: 0px;top:176px;display: block;width: 49%;margin-top: 69px;margin-right: 51px;">


                    <label style="position: absolute;top: -43px;right: -10px;">                امکانات و قابلیت ها
                    </label>


                    <input id="ex15" type="text" name="item_value[]"
                           data-provide="slider"
                           data-slider-ticks="[1, 2, 3,4,5]"
                           data-slider-ticks-labels=''
                           data-slider-min="1"
                           data-slider-max="3"
                           data-slider-step="1"
                           data-slider-value="3"
                           data-slider-tooltip="hide" />

                    <label id="ex151" style="    margin-right: 48px;"></label>

                </div>




                <div class="well" style="position: absolute;left: 0px;top:292px;display: block;width: 49%;margin-top: 69px;margin-right: 51px;">
                    <label style="position: absolute;top: -41px;right: -10px;">                   طراحی و ظاهر
                    </label>
                    <input id="ex16" type="text" name="item_value[]"
                           data-provide="slider"
                           data-slider-ticks="[1, 2, 3,4,5]"
                           data-slider-ticks-labels=''
                           data-slider-min="1"
                           data-slider-max="3"
                           data-slider-step="1"
                           data-slider-value="3"
                           data-slider-tooltip="hide" />
                    <label id="ex161" style="    margin-right: 48px;"></label>


                </div>


            </div>



            <div class="col-lg-5" style="min-height: 500px;float: right;
    border-left: 1px solid #ddd;">


                    <input type="hidden" value="{{$product->PID}}" name="product_id">
                <div class="form-group">
                    <label style="float: right;">عنوان نظر شما(اجباری)</label>
                    <input type="text" class="form-control" placeholder="عنوان مورد نظر خود را بنویسید" name="comment_title">

                </div>
                <div class="form-group">
                    <label style="float: right;">نقاط قوت <li style="    float: right;
    margin-top: 7px;
    margin-left: 8px;width: 10px ; height: 10px;border-radius: 100%;background: #28a7ff;"></li></label>

                    <i class="icon icon-plus" style="color: #000;" id="icon-plus"></i>
                    <input type="text" class="form-control " style="width: 45%;margin-top: 41px;position: absolute;"  id="plus" name="plus[]">

                    <label style="float: right;margin-right: 42%;">نقاط ضعف<li style="    float: right;
    margin-top: 7px;
    margin-left: 8px;width: 10px ; height: 10px;border-radius: 100%;background: #ff0816;"></li></label>
                    <i class="icon icon-plus" style="color: #000;" id="icon-plus1"></i>
                    <input type="text" class="form-control" style="width: 45%;float: left;position: absolute;top: 123px;right: 53%;" id="mines" name="mines[]">


                </div>

                <div class="form-group" style="margin-top: 101px;">

                    <div id="plus-box" ></div>

                </div>
                    <div class="form-group" style=" float: left;">

                        <div id="mines-box" style="position: absolute;left: 14px;top: 197px;"></div>

                    </div>

                <div class="form-group" style="    margin-top: 151px;">
                    <label style="float: right;">متن نظر شما(اجباری)</label>
                   <textarea class="form-control" style=""  name="text">

                   </textarea>
                </div>

                <div class="form-group" style="float: right;">
                   <input type="submit" class="btn btn-primary" value="ثبت" style="width: 212px;height: 54px;background-color: #00bfd6; border: 1px solid #41a7b4;">
                </div>

            </div>
            <h4 style=" float: left;
 position: absolute;
    left: 238px;
    text-align: right;
    direction: rtl;
    top:475px;

   ">   دیگران را با نوشتن نظرات خود، برای انتخاب این محصول راهنمایی کنید.</h4>
            <div class="col-lg-5" style="    float: left;
    position: absolute;
    left: 210px;
    text-align: right;
    direction: rtl;
    top:548px;
    font-size: 18px;
    line-height: 33px;">


                <span style="">

لطفا پیش از ارسال نظر، خلاصه قوانین زیر را مطالعه کنید:

فارسی بنویسید و از کیبورد فارسی استفاده کنید. بهتر است از فضای خالی (Space) بیش‌از‌حدِ معمول، شکلک یا ایموجی استفاده نکنید و از کشیدن حروف یا کلمات با صفحه‌کلید بپرهیزید.

نظرات خود را براساس تجربه و استفاده‌ی عملی و با دقت به نکات فنی ارسال کنید؛ بدون تعصب به محصول خاص، مزایا و معایب را بازگو کنید و بهتر است از ارسال نظرات چندکلمه‌‌ای خودداری کنید.

بهتر است در نظرات خود از تمرکز روی عناصر متغیر مثل قیمت، پرهیز کنید.

به کاربران و سایر اشخاص احترام بگذارید. پیام‌هایی که شامل محتوای توهین‌آمیز و کلمات نامناسب باشند، حذف می‌شوند.

از ارسال لینک‌های سایت‌های دیگر و ارایه‌ی اطلاعات شخصی خودتان مثل شماره تماس، ایمیل و آی‌دی شبکه‌های اجتماعی پرهیز کنید.

با توجه به ساختار بخش نظرات، از پرسیدن سوال یا درخواست راهنمایی در این بخش خودداری کرده و سوالات خود را در بخش «پرسش و پاسخ» مطرح کنید.

هرگونه نقد و نظر در خصوص سایت دیجی‌کالا، خدمات و درخواست کالا را با ایمیل info@digikala.com یا با شماره‌ی ۶۱۹۳۰۰۰۰ - ۰۲۱ در میان بگذارید و از نوشتن آن‌ها در بخش نظرات خودداری کنید.
                </span>

            </div>

            </form>
        </div>

    </main>


</div>



@include('layouts.footer')
