<?php

$price = 0;
use  App\product;

?>




    @include('layouts.header.header_shoping1')

    <div id="app">
        <ul class="checkout-steps" style="top:7.5% !important;">

            <li class="step1-active">

                <a class="step1-link" href="/shipping">
                    <p class="text_link1"> اطلاعات ارسال</p>
                    <span class="step1-item">


             </span>

                </a>

            </li>


            <li class="">

                <a class="step2-link" href="/shipping">
                    <p class="text_link2">پرداخت</p>
                    <span class="step2-item">


                </span>

                </a>

            </li>


            <li class="">

                <a class="step2-link" href="/shipping">
                    <p class="text_link3">اتمام خرید و ارسال</p>
                    <span class="step3-item">



                </span>

                </a>

            </li>


        </ul>

        <div class="col-lg-12" style="margin-top: 37px;">
            <div class="col-lg-8">
        <h5 style="text-align: right;text-align: right;color: #8a8a8a;">انتخاب شیوه پرداخت</h5>
            <div class="card" style="min-height: 130px;">


                <ul>
                    <li style="text-align: right;margin-top: 20px;height: 80px;border-bottom: 1px solid #ddd;margin-right: -39px;">
                        <span style="margin-right: 20px">
                        <input type="radio" name=""  value="">
                        <i class="icon icon-credit-card" style="font-size: 26px;margin-right: 20px;margin-left: 20px;color: #00BFD6"></i>
                        <span style="font-size: 16px;font-weight: bold">پرداخت اینترنتی ( آنلاین با تمامی کارت‌های بانکی )</span>
                        </span>
                    </li>
                    <li>
                        <div id="zarinpal">
                            <script src="https://www.zarinpal.com/webservice/TrustCode" type="text/javascript"></script>
                        </div>


                    </li>
                    <div style="height: 60px;border-top: 1px solid rgb(221, 221, 221);width: 100%;float: right;margin-top: 20px;">

                          <span style="margin-right: 20px;position: absolute;right: 0;top: 84%;">
                        <input type="radio" name=""  value="">
                        <i class="icon icon-credit-card" style="font-size: 26px;margin-right: 20px;margin-left: 20px;color: #00BFD6"></i>
                 <span style="font-size: 16px;font-weight: bold">پرداخت در محل با کارت بانکی
</span>
                        </span>

                    </div>



                </ul>



            </div>
          </div>





            <div class="col-lg-8" >

                <h5 style="text-align: right;text-align: right;color: #8a8a8a;">خلاصه سفارش</h5>
                <div class="card" style="min-height: 130px;">



                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="float: right;margin-top: 8px;color: #000;">
                                    <ul>

                                        <li>
                                            @if(!empty(Session::get('cart')))
                                                <?php $count = sizeof(Session::get('cart'));  ?>

                                                <span style="font-size: 16px;">مرسوله 1 از 1</span>
                                                <p style="font-size: 13px;text-align: right;margin-top: 8px;">({{$count}}کالا)</p>

                                                <span style="font-size: 13px;float: right;position: absolute;top: 45px;right: 24%;width: 14%;text-align: right;">زمان ارسال</span>
                                                <p style="font-size: 16px;float: right;position: absolute;top: 77px;right: 23%;width: 14%;text-align: center;">   {{$address->date}}</p>


                                                    <span style="font-size: 13px;float: right;position: absolute;top: 45px;right: 42%;width: 14%;text-align: right;">نحوه ارسال</span>
                                                    <p style="font-size: 16px;float: right;position: absolute;top: 77px;right:41%;width: 14%;text-align: center;"> تحویل اکسپرس دیجی کالا </p>
                                              @endif

                                        </li>








                                    </ul>


                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,



                                </div>
                            </div>
                        </div>
                    </div>






                </div>




                </div>


            @if(!empty(Session::get('cart')))
                <?php $count = sizeof(Session::get('cart'));  ?>
                <div class="col-lg-3" style="position: absolute;left: 89px;top: 0;">

                    <div class="card" style="min-height: 334px;">

                        <ul>

                            <li class="cart_left_price"><span style="position:absolute; right: 10px;"> مبلغ کل({{$count}} کالا )</span>
                                <span style="left: 12px;position: absolute;">{{Session::get('price')}} تومان  </span></li>
                            <li class="cart_left_address"><span style="position:absolute; right: 10px;"> هزینه ارسال</span>
                                <span style="left: 12px;position: absolute;">وابسته به آدرس</span></li>
                            <li style="border: 1px solid #ddd;top: 100px;width: 95%;position: absolute;right: 9px;"></li>
                            <li style="border: 1px solid #ddd;top: 105px;width: 95%;position: absolute;right: 9px;"></li>


                            <li class="cart_left_price1"> مبلغ قابل پرداخت:</li>

                            <li class="cart_left_price2">

                                {{Session::get('price')}} تومان

                            </li>

                            <li>


                                <div class="add_card_left" style="top: 212px !important;">

                                    <a href="/buy"  class="button_card" value="" style="height: 55px;width: 296px;">
                                        <i class="icon-shopping-cart"
                                           style="position: absolute; font-size: 28px;color: #fff;right: 26px;top: 15px;"></i>
                                        <i class="icon icon-plus"
                                           style="position: absolute;font-size: 11px;color: #fff;right: 11px;top: 23px"></i>
                                        <span class="icon_card">


                            </span>
                                        <span class="card_text" style="position: absolute;padding-right: 0px !important;">ادامه ثبت سفارش</span>

                                    </a>

                                </div>

                            </li>


                            <li class="cart_left_text">

                                کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.

                            </li>
                        </ul>


                    </div>

                </div>
            @endif
            <div class="col-lg-3" style="position: absolute;left: 89px;top: 65%;">

                <div class="card">


                    <img src="/img/cart_b.png " class="cart_left_img">

                </div>


            </div>

        </div>
        </div>


    @include('layouts.footer')