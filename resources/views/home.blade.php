<?php


use App\Helper;



?>


@include('layouts.header.header')
@include('layouts.menu.menu')


    <!----------slider-------------->
    <div class="col-lg-12">
    <div class="carousel slide" id="myCarousel"  data-ride="carousel" style="margin-top: 15px;">


        <ol class="carousel-indicators" id="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" ></li>


        </ol>



        <div class="carousel-inner">

            <div class="carousel-item active">


                <img src="/img/slide1.jpeg" style="width: 100%; margin-left: 10px;height: 235px;
border-radius: 8px;">

            </div>


            <div class="carousel-item">


                <img src="/img/slide2.jpeg" style="width:100%; margin-left: 10px;height: 235px;
border-radius: 8px;">

            </div>


        </div>






        <a class="left carousel-control-prev" href="#myCarousel" data-slide="prev">

            <span class="icon icon-angle-left" style="font-size: 48px;"></span>
            card2
        </a>
        <a class="left carousel-control-next" href="#myCarousel" data-slide="next">

            <span class="icon icon-angle-right" style="font-size: 48px;"></span>

        </a>



    </div>











    </div>








</nav>



    @include("layouts.slider.slider")


<div class="col-lg-9" style="float: left; margin-top: 15px; left: 2%;max-width: 77% !important;">


    <div class="card carousel slide carousel-fade" id="card"   data-ride="carousel" >

        <ul class="carousel-indicators" id="pager">

<?php $i=1?>
            @foreach($product as $products)


                @foreach($discount as $discounts)



                    @if($products->PID == $discounts->product_PID)

            <li data-target="#card" data-slide-to="{{$i++}}" >

                <a href="javascript:;" style="">

                    <span>{{$products->productname}}</span>

                </a>


            </li>

                    @endif
                @endforeach
            @endforeach

        </ul>


        <div class="discount_bar">


        </div>










        <div class="carousel-inner">



            <div class="carousel-item active" id="carousel-item">


            </div>

            @foreach($product as $products)


                @foreach($discount as $discounts)



                    @if($products->PID == $discounts->product_PID)

            <div class="carousel-item " id="carousel-item">


                <img src="/imagepro/{{$products->productimage}}">


                <div class="carousel-price">

                    <span>{{$products->price}}تومان</span>
                    <h4>{{$products->price * $discounts->value /100}} تومان</h4>

                    <p>تخفیف {{$discounts->value}}%</p>

                </div>

                <div class="carousel-title"> {{$products->productname}} </div>

                <div class="atrr">

                    <ul>



{{--                        <li>{{Helper::attribute($products->PID)}}:{{Helper::item($products->PID)}}</li>--}}



                    </ul>


                </div>
            </div>

                    @endif
                @endforeach
@endforeach



        </div>


        <a class="left carousel-control-prev" href="#card" data-slide="prev" id="prev">

            <span class="icon icon-angle-left" style="font-size: 48px;"></span>

        </a>
        <a class="left carousel-control-next" href="#card" data-slide="next" id="next">

            <span class="icon icon-angle-right" style="font-size: 48px;"></span>

        </a>


    </div>



</div>



        <div class="col-lg-2">
                <div class="disabled-right">


                  <img src="/img/discount.jpg">






                    <a href="javasrcipt:;" >

                        <span>

                            <i class="icon icon-angle-left"></i>

                        </span>
                        <i class="icon icon-arrow-left" style="font-size: 15px;float: right;"></i>


                        مشاهده همه شفگفت انگیز ها

                    </a>

            </div>
        </div>








<!------------------زیر اسلایدر---------------->


<div class="col-lg-12" style="margin-top: 9%;position: relative;">


    <div class="card" style="height: 144px;" id="card2">

        <ul class="ul">

            <li style="float: right; width:20%">


                <img src="/img/4.svg"  style="height: 55px;margin-top: 43px;">

                <span style="position: absolute;
            top: 80%;float: right;margin-right: -42px;font-size: 12px;">ضمانت </span></li>


            <li style="float: right; width:40%">
                 <span style="position: absolute;
            top: 80%;float: right;margin-right: -26px;font-size: 12px;">7روز ضمانت برگشت</span>

                <img src="/img/3.svg"  style="height: 55px;margin-top: 43px;"></li>


            <li style="float: right; width:25%">
                 <span style="position: absolute;

top: 80%;float: right;margin-right: -13px;font-size: 12px;">تحویل اکسپرس</span>

                <img src="/img/1.svg"  style="height: 55px;margin-top: 43px;"></li>


        </ul>



        <ul id="ul">

            <li style="float: right;margin-right: 115px;">


                <img src="/img/4.svg"  style="height: 55px;margin-top: 43px;">

                <span style="position: absolute;
            top: 80%;float: right;margin-right: -78px;font-size: 12px;">ضمانت اصل بودن کالا</span></li>


            <li style="float: right;margin-right: 160px;">
                 <span style="position: absolute;
            top: 80%;float: right;margin-right: -43px;font-size: 12px;">هفت روز ضمانت برگشت</span>

                <img src="/img/3.svg"  style="height: 55px;margin-top: 43px;"></li>


            <li style="float: right;margin-right: 160px;">
                 <span style="position: absolute;

top: 80%;float: right;margin-right: -13px;font-size: 12px;">پرداخت در محل</span>

                <img src="/img/1.svg"  style="height: 55px;margin-top: 43px;"></li>
            <li style="float: right;margin-right: 160px;"> <span style="position: absolute;
top: 80%;float: right;margin-right: -24px;font-size: 12px;">پشتیبانی همه روزه</span>


                <img src="/img/2.svg"  style="height: 55px;margin-top: 43px;">


            <li style="float: right;margin-right: 160px;">
                 <span style="position: absolute;
top: 80%;float: right;margin-right: -13px;font-size: 12px;">تحویل اکسپرس</span><img src="/img/5.svg"  style="height: 55px;margin-top: 43px;"></li>





        </ul>



    </div>





    <div class="col-lg-12" id="discount-image">


        <div class="col-lg-3 col-sm-3">

            <img src="/img/s2.jpg">

        </div>


        <div class="col-lg-3 col-sm-3">

            <img src="/img/s1.jpg">

        </div>

        <div class="col-lg-3 col-sm-3">

            <img src="/img/s3.jpg">

        </div>

        <div class="col-lg-3 col-sm-3">

            <img src="/img/s4.jpg">

        </div>



    </div>



    <div class="col-lg-9 col-xs-12 col-sm-12 col-md-9" id="kala">
        <div class="card">


            <div class="carousel-title">
             @foreach($group as $groups)

                 @if($groups->category_id == 110)
                <h5>{{$groups->name}}</h5>


                    @endif
            @endforeach
                    <div class="hr"></div>
            </div>

            <div class="list_carousel" style="overflow:hidden;">
                <ul id="foo2">

                    @foreach($product as $products)

                        @if($products->category_id == 110)


                    <li>
                        <a href="/search/{{$products->category_id}}">
                        <img src="imagepro/{{$products->productimage}}" width="210px" height="210px">
                        <span class="text">{{$products->productname }}</span>
                        <span class="price">{{$products->price}} تومان</span>
                        </a>
                    </li>


                        @endif
                  @endforeach

                </ul>
                <div class="clearfix"></div>

            </div>

            <a id="prev2" class="prev" href="#">&lt;</a> <a id="next2" class="next" href="#">&gt;</a>


        </div>


    </div>
    <div class="col-lg-3" style="float: left !important;top: -433px;position: relative;">

        <div class="card"  style="height: 353px;top: 81px;">


            <div class="carousel-title1">

                <h6 style="font-size: 13px;font-weight: bold;color: #909090;text-align: center;

margin-top: 28px; width:81%;border-bottom: none !important;">
                    پیشنهادهای لحظه‌ای برای شما


                </h6>
                <div id="timer1" class="timer" style="margin-top: 15px"></div>
            </div>


            <div class="list_carousel1" style="overflow:hidden;" >





                <ul id="foo1">



                    <li>

                        <img src="/img/g3.jpg" width="250px" height="210px">

                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>
                        <span class="price">120000تومان</span>
                    </li>
                    <li>

                        <img src="/img/g4.jpg" width="250px" height="210px">

                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>


                        <span class="price">120000تومان</span>
                    </li>



                </ul>



            </div>



        </div>



    </div>








</div>
    <div class="col-lg-12" id="discount-image" style="position: absolute;

margin-top: 1%;

margin-right: 3px;">


        <div class="col-lg-3 col-sm-3">

            <img src="/img/b1.jpg">

        </div>


        <div class="col-lg-3 col-sm-3">

            <img src="/img/b2.jpg">

        </div>

        <div class="col-lg-3 col-sm-3">

            <img src="/img/b3.jpg">

        </div>

        <div class="col-lg-3 col-sm-3">

            <img src="/img/b4.jpg">

        </div>



    </div>










    <div class="col-lg-12" id="kala2" style="">
        <div class="card" >


            <div class="carousel-title1">

                <h6>کالای دیجیتال</h6>

                <div class="hr"></div>
            </div>

            <div class="list_carousel" style="overflow:hidden;">
                <ul id="foo6">
                    @foreach($product as $products)

                        @if($products->category_id == 108)
                            <li>
                                <a href="/search/{{$products->category_id}}">
                                <img src="imagepro/{{$products->productimage}}" width="210px" height="210px">
                                <span class="text">{{$products->productname}}</span>
                                <span class="price"> {{$products->price}}تومان</span>
                                </a>

                            </li>

                        @endif
                    @endforeach
                </ul>
                <div class="clearfix"></div>

            </div>

            <a id="prev3" class="prev" href="#">&lt;</a> <a id="next3" class="next" href="#">&gt;</a>


        </div>


    </div>




    <div class="col-lg-12" style="margin-top: 2%;position: absolute;">

        <div class="col-lg-6" style="float: right">

           <img src="/img/k1.jpg" style="width: 100%;">


        </div>
        <div class="col-lg-6" style="float: right">

            <img src="/img/k2.jpg" style="width: 100%;">


        </div>



    </div>





    <div class="col-lg-12" id="kala3" style="">
        <div class="card" >


            <div class="carousel-title1">

                <h6>کالای دیجیتال</h6>

                <div class="hr"></div>
            </div>

            <div class="list_carousel" style="overflow:hidden;">
                <ul id="foo7">
                    <li>

                        <img src="/img/g1.jpg" width="210px" height="210px">

                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>
                        <span class="price">120000تومان</span>
                    </li>
                    <li>

                        <img src="/img/g2.jpg" width="210px" height="210px">

                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>

                        <span class="price">120000تومان</span>

                    </li>
                    <li>

                        <img src="/img/g3.jpg" width="210px" height="210px">

                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>
                        <span class="price">120000تومان</span>
                    </li>
                    <li>

                        <img src="/img/g4.jpg" width="210px" height="210px">

                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>


                        <span class="price">120000تومان</span>
                    </li>
                    <li>
                        <img src="/img/g5.jpg" width="210px" height="210px">

                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>


                        <span class="price">120000تومان</span>
                    </li>
                    <li>    <img src="/img/g6.jpg" width="210px" height="210px">


                        <span class="text">کابل تبدیل USB به لایتنینگ انکر مدل A8121 PowerLin...</span>
                        <span class="price">120000تومان</span>

                    </li>

                </ul>
                <div class="clearfix"></div>

            </div>

            <a id="prev3" class="prev" href="#">&lt;</a> <a id="next3" class="next" href="#">&gt;</a>


        </div>


    </div>










    <div class="col-lg-12">


        <img src="/img/bg13.jpg" style="width: 100%;border-radius: 5px;margin-top: 27px; box-shadow:1px 1px 1px #ddd ">


    </div>



    <div class="col-lg-12" id="kala5" style="">
        <div class="card" >


            <div class="carousel-title1">

                <h6>جدید ترین کالاها</h6>

                <div class="hr"></div>
            </div>

            <div class="list_carousel" style="overflow:hidden;">
                <ul id="foo9">
                    @foreach($newp as $products)


                        <li>
                            <a href="/search/{{$products->category_id}}">
                            <img src="imagepro/{{$products->productimage}}" width="210px" height="210px">
                            <span class="text">{{$products->productname}}</span>
                            <span class="price">{{$products->price}} تومان</span>

                            </a>
                        </li>


                    @endforeach


                </ul>
                <div class="clearfix"></div>

            </div>

            <a id="prev3" class="prev" href="#">&lt;</a> <a id="next3" class="next" href="#">&gt;</a>


        </div>


    </div>






    <div class="col-lg-12" id="kala6" style="">
        <div class="card" >


            <div class="carousel-title1">

                <h6>جدیدترین کالا ها</h6>

                <div class="hr"></div>
            </div>


            <div class="list_carousel" style="overflow:hidden;">
                <ul id="foo10">
                    @foreach($newp as $products)


                            <li>
                                <a href="/search/{{$products->category_id}}">
                                <img src="imagepro/{{$products->productimage}}" width="210px" height="210px">
                                <span class="text">{{$products->productname}}</span>
                                <span class="price">{{$products->price}} تومان</span>
                                </a>
                            </li>


                    @endforeach

                </ul>
                <div class="clearfix"></div>

            </div>

            <a id="prev3" class="prev" href="#">&lt;</a> <a id="next3" class="next" href="#">&gt;</a>


        </div>


    </div>



    <div class="col-lg-12" id="brand" style="">
        <div class="card" >


            <div class="carousel-title1">

                <h6>برند های ویژه</h6>

                <div class="hr"></div>
            </div>

            <div class="list_carousel" style="overflow:hidden;">
                <ul id="foo11">
                    <li>

                        <img src="/img/brand.png" width="210px" height="210px">


                    </li>
                    <li>

                        <img src="/img/brand2.png" width="210px" height="210px">



                    </li>
                    <li>

                        <img src="/img/brand5.png" width="210px" height="210px">


                    </li>
                    <li>

                        <img src="/img/brand6.png" width="210px" height="210px">


                    </li>
                    <li>
                        <img src="/img/brnd2.png" width="210px" height="210px">


                    </li>
                    <li>
                        <img src="/img/brand.png" width="210px" height="210px">




                    </li>

                </ul>
                <div class="clearfix"></div>

            </div>

            <a id="prev3" class="prev" href="#"  style="margin-top: -269px !important; ">&lt;</a> <a id="next3" class="next" href="#"  >&gt;</a>


        </div>


    </div>





@include('layouts.footer')

