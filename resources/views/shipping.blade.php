<?php

$price = 0;
use  App\product;

?>


@if($address)

    @include('layouts.header.header_shoping1')

<div id="app">
    <ul class="checkout-steps" >

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



    <div class="col-lg-12" style="min-height:500px;">

        <div class="col-lg-8" style="margin-top: 8%;margin-right: 41px;">
            <h5 style="text-align: right;text-align: right;color: #8a8a8a;">انتخاب آدرس تحویل سفارش</h5>
            <div class="card" style="min-height: 130px;border-right: 7px solid #8dd4dc;">


                <ul style="" class="address">

                    <li><span> گیرنده:{{$address->name}}</span></li>
                    <li><span style="padding-left: 27px;"> شماره تماس:{{$address->mobile}}</span><span
                                style="border-right: 1px solid #c8c6c6e6;padding-right: 17px;">کد پستی:{{$address->zipcode}}</span>
                    </li>
                    <li><span>{{$address->province}}</span>،
                        <span>{{$address->city}}</span>،<span>{{$address->address}}</span></li>



                </ul>

            </div>

            <div class="card" style="min-height: 130px;margin-top: 69px;">


                <ul style="text-align:right;border-bottom: 1px solid #dddddde6;">
                    @if(!empty(Session::get('cart')))
                        @foreach(Session::get('cart') as  $key=>$value)

                            <?php  $p = product::where('PID', $key)->first();
                            $price += $p->price * $value;
                            Session::put('price', $price);

                            ?>
                            <li class="product_step1">


                                    <span class="cart_image" style="margin-right: 25px;"><img
                                                src="/imagepro/{{$p->productimage}}" style="width: 90px !important;
height: 90px; !important"></span>
                                <p class="cart_title"
                                   style="text-align: center;font-size: 12px;width: 98%;">{{$p->productname}}</p>


                            </li>

                        @endforeach

                    @else

                        <h4>سبد خرید خالی می باشد</h4>

                    @endif

                </ul>


                <div class="send_address">

                    <span style="font-size: 1rem;line-height: 2;letter-spacing: -.3px;color: #858585;">لطفا زمان ارسال را انتخاب بفرمایید:</span>
                    <p style="font-size: 12px;line-height: 2;letter-spacing: -.3px;color: #858585;">تحویل اکسپرس
                        دیجی‌کالا <span style="border-right: 1px solid #b2b1b1;padding-right: 14px;margin-right: 13px;">هزینه ارسال: رایگان </span></p>


                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">

                               <p style="font-size: 14px;color: #000;font-weight: bold;"> {{$d2}}</p>
                               <p style="margin-top: -13px;font-size: 13px;color: #a0a0a0;"> {{$d1}}</p>


                            </a></li>
                        <li><a data-toggle="tab" href="#menu1">

                                <p style="font-size: 14px;color: #000;font-weight: bold;"> {{$da2}}</p>
                                <p style="margin-top: -13px;font-size: 13px;color: #a0a0a0;"> {{$da1}}</p>


                            </a></li>
                        <li><a data-toggle="tab" href="#menu2">
                                <p style="font-size: 14px;color: #000;font-weight: bold;"> {{$daa2}}</p>
                                <p style="margin-top: -13px;font-size: 13px;color: #a0a0a0;"> {{$daa1}}</p>
                            </a></li>
                        <li><a data-toggle="tab" href="#menu3">
                                <p style="font-size: 14px;color: #000;font-weight: bold;"> {{$daaa2}}</p>
                                <p style="margin-top: -13px;font-size: 13px;color: #a0a0a0;"> {{$daaa1}}</p>
                            </a></li>
                        <li><a data-toggle="tab" href="#menu4">

                                <p style="font-size: 14px;color: #000;font-weight: bold;"> {{$daaaa2}}</p>
                                <p style="margin-top: -13px;font-size: 13px;color: #a0a0a0;"> {{$daaaa1}}</p>
                            </a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <span class="time1"><span class="time">ساعت ۹ تا ۲۲</span><input type="radio"  v-model="date" value="ساعت ۹ تا ۲۲ {{$d2}} {{$d1}}" style="float: right;margin-top: 8px;

margin-right: 30px;"></span>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                           <span class="time1"><span class="time">ساعت ۹ تا ۲۲</span><input type="radio"  v-model="date" value="ساعت ۹ تا ۲۲ {{$da2}} {{$da1}}" style="float: right;margin-top: 8px;

margin-right: 30px;"></span>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                           <span class="time1"><span class="time">ساعت ۹ تا ۲۲</span><input type="radio"  v-model="date" value="ساعت ۹ تا ۲۲ {{$daa2}} {{$daa1}}" style="float: right;margin-top: 8px;

margin-right: 30px;"></span>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <span class="time1"><span class="time">ساعت ۹ تا ۲۲</span><input type="radio"  v-model="date" value="ساعت ۹ تا ۲۲ {{$daaa2}} {{$daaa1}}" style="float: right;margin-top: 8px;

margin-right: 30px;"></span>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                        <span class="time1"><span class="time">ساعت ۹ تا ۲۲</span><input type="radio"  v-model="date" value="ساعت ۹ تا ۲۲ {{$daaaa2}} {{$daaaa1}}" style="float: right;margin-top: 8px;

margin-right: 30px;"></span>
                        </div>
                    </div>


                </div>


            </div>

        </div>
        @if(!empty(Session::get('cart')))
            <?php $count = sizeof(Session::get('cart'));  ?>
            <div class="col-lg-3" style="position: absolute;

left: 89px;top: 0;">

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

                                <a href="/checkout2" @click="step2('{{$address->id}}')" class="button_card" value="" style="height: 55px;width: 296px;">
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
        <div class="col-lg-3" style="position: absolute;left: 89px;top: 50%;">

            <div class="card">


                <img src="/img/cart_b.png " class="cart_left_img">

            </div>


        </div>


    </div>
    </div>




@else
    @include('layouts.header.header_shoping')
    <div class="col-lg-12">
        @include('address')
    </div>
@endif


@include('layouts.footer')