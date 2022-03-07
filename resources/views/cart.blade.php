
<?php

$price=0;
use  App\product;

?>
@include('layouts.header.header')
@include('layouts.menu.menu')




<div class="col-lg-12"   style="min-height:500px;">

    <div class="col-lg-8" style="margin-top: 8%;margin-right: 41px;">

        <div class="card" style="min-height: 130px;">

            <ul style="text-align:right;">
                @if(!empty(Session::get('cart')))
                @foreach(Session::get('cart') as  $key=>$value)

                    <?php  $p=product::where('PID',$key)->first();
                    $price+=$p->price*$value;
                    Session::put('price',$price);

                    ?>
                    <li style="margin-top: 24px;">

            <span class="cart_remove">
                <form action="/deletecart" method="post">
                    @csrf

                                    <input type="hidden" value="{{$p->PID}}" name="PID">



                </form>



            </span>
                        <span class="cart_image"><img src="/imagepro/{{$p->productimage}}" style="width: 90px !important;
height: 90px; !important"></span>
                        <span class="cart_title" style="position: absolute;font-size: 17px;">{{$p->productname}}</span>
                        <span class="cart_count1" style="">{{$value}} </span>
                        <span class="cart_price" style="">{{Session::get('price')}} تومان  </span>


                    </li>

                @endforeach
                   @else

                    <h4>سبد خرید خالی می باشد</h4>

                    @endif

            </ul>

        </div>


    </div>
    @if(!empty(Session::get('cart')))
    <?php $count=sizeof(Session::get('cart'));  ?>
    <div class="col-lg-3" style="position: absolute;

left: 89px;top: 0;">

        <div class="card" style="min-height: 334px;">

        <ul>

            <li class="cart_left_price"><span style="position:absolute; right: 10px;"> مبلغ کل({{$count}} کالا )</span>   <span style="left: 12px;position: absolute;">{{Session::get('price')}} تومان  </span></li>
            <li class="cart_left_address"><span style="position:absolute; right: 10px;"> هزینه ارسال</span>   <span style="left: 12px;position: absolute;">وابسته به آدرس</span></li>
            <li style="border: 1px solid #ddd;top: 100px;width: 95%;position: absolute;right: 9px;"></li>
            <li style="border: 1px solid #ddd;top: 105px;width: 95%;position: absolute;right: 9px;"></li>


            <li class="cart_left_price1"> مبلغ قابل پرداخت: </li>

            <li class="cart_left_price2" >

                {{Session::get('price')}} تومان

            </li>

            <li>


                <div class="add_card_left">

                    <a  href="/shipping" class="button_card" value="" style="height: 55px;width: 296px;">
                        <i class="icon-shopping-cart" style="position: absolute; font-size: 28px;color: #fff;right: 26px;top: 15px;"></i>
                        <i class="icon icon-plus" style="position: absolute;font-size: 11px;color: #fff;right: 11px;top: 23px"></i>
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
    <div class="col-lg-3" style="position: absolute;left: 89px;top: 69%;">

        <div class="card" >


            <img src="/img/cart_b.png " class="cart_left_img">

        </div>




    </div>



</div>





@include('layouts.footer')