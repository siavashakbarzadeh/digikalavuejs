
<?php


use App\Helper;



?>


@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12" id="app">


    <main style="margin-top: 57px;">

        <div class="card">

            <div id="image" class="col-lg-4">

                <div class="interest"  @click="Interest('{{$product->PID}}')"><i class="icon icon-heart-empty"></i></div>
                <img id="zoom_01"  data-zoom-image="/imagepro/{{$product->productimage}}" src="/imagepro/{{$product->productimage}}" width="479px" height="379px">

                <ul class='product-image'>


                    {{Helper::ShowImage($product->PID)}}
                </ul>
            </div>


            <div class="col-lg-5" style="position: absolute;right: 35%;top: 5%;text-align: right;max-width: 66%;">

                <div class="product-title" style="border-bottom: 1px solid #f0f0f0;padding: 6px 0px 33px 0px;">

                    <span class="title">{{$product->productname }}</span>
                    <span class="brand"></span>



                </div>

                <div class="brand" style="margin-top: 11px;font-size: 13px;">

                    برند : {{Helper::brand($product->PID)}}

                    <span style="margin-right: 30px;">دسته بندی : <a href="/search/{{$category->id}}">{{$category->name}}</a></span>
                </div>

                <div id="product_color">
                    انتخاب رنگ :
                    <span class="select_color1">سرمه ای

                            <span style="position: absolute;right: 95px; border-radius: 3px;  width:16px; height: 16px;background: #1b1e21;"></span>


                        </span>
                    <span class="select_color2">نقره ای

                                                    <span style="position: absolute;right: 204px; border-radius: 3px;  width:16px; height: 16px;background: #ddd;"></span>

                        </span>



                </div>



                <div id="product_w">
                    <img src="/img/f1.PNG">
                    <span>گارانتی</span><span>اصالت</span><span>و</span><span>سلامت</span><span>فیزیکی</span><span>کالا</span>

                </div>


                <div id="product__delivery">

                    <img src="/img/f2.PNG" style="width: 30px;height: 30px;">
                    <span style="border-left: 1px solid #ddd;padding-left: 10px;">فروشنده : قاپو</span>

                    <span style="padding-right: 5px;">رضایت خرید : 88%</span>


                    <div id="product_send">

                        <img src="/img/f3.PNG" style="width: 34px;height: 30px;">

                        <span>ارسال از ۱ روز آینده</span>

                        <img src="/img/f4.PNG" style="width: 30px;height: 26px;">


                    </div>

                </div>


                <div id="product_price">

                    <span>154,900  تومان</span>

                </div>


                <div class="add_card">

                    <a   class="button_card" value="" @click="AddCart('{{$product->PID}}')">
                        <i class="icon-shopping-cart" style="position: absolute; font-size: 28px;color: #fff;right: 26px;top: 15px;"></i>
                        <i class="icon icon-plus" style="position: absolute;font-size: 11px;color: #fff;right: 11px;top: 23px"></i>
                        <span class="icon_card">


                            </span>
                        <span class="card_text">افزودن به سبد خرید</span>

                    </a>

                </div>

            </div>




            <div id="attr_p" class="col-lg-3">
                <p>  ویژگی های محصول</p>

                <ul id="attr_p1">
                    {{Helper::items($product->PID)}}

                </ul>

            </div>




            <div class="ds">

                <img src="/img/ds.PNG" style="width: 64%;margin-top: 73px;border-top: 1px solid #e8e7e7;">


            </div>



        </div>


        <!-------------->


        <div class="" id="kala2" style="margin-top: 3% !important; right: 0% !important;width: 100% !important;">
            <div class="card" >


                <div class="carousel-title1">

                    <h6>محصولات مرتبط</h6>

                    <div class="hr"></div>
                </div>

                <div class="list_carousel" style="overflow:hidden; ">
                    <ul id="foo6">

                        {{Helper::mortabet($category_id)}}


                    </ul>
                    <div class="clearfix"></div>

                </div>

                <a id="prev3" class="prev" href="#" style="opacity:1 !important; margin-right: 0px !important; border-radius: 0px !important;width: 46px !important; padding-top: 14px !important;">&lt;</a> <a id="next3" class="next" href="#" style="opacity:1 !important; margin-left: 0px !important; border-radius: 0px !important;width: 46px !important; padding-top: 14px !important;">&gt;</a>


            </div>


        </div>



        <div id="exTab2" class="container" style="    margin-top: 45px;">
            <ul class="nav nav-tabs" id="nav-tabs">
                <li class="active">
                    <a  href="#1" data-toggle="tab" class="">نقد و بررسی

                        <i class="icon icon-"></i></a>
                </li>
                <li><a href="#2" data-toggle="tab">مشخصات</a>
                </li>
                <li><a href="#3" data-toggle="tab">نظرات کاربران</a>
                </li>
            </ul>

            <div class="tab-content " style="background: #fff;">
                <div class="tab-pane active" id="1" style="   ">
                    @if($review)

                        <h2 style="    text-align: right;
    padding: 35px;">نقد و بررسی اجمالی</h2>

                        <span style="float: right;margin-top: 2%;">

                        <img src="/img/review.png" style="width: 289px;">


                    </span>

                        <p style="    font-size: 19px;
    color: #535151;
    line-height: 36px; text-align: right;
    padding: 5% 20%;">


                            {{$review->text}}



                        </p>


                    @endif

                </div>
                <div class="tab-pane" id="2">

                    <h2 style="    text-align: right;
    padding: 35px;">مشخصات فنی</h2>


                    <ul>


                        {{Helper::items($product->PID)}}




                    </ul>





                </div>
                <div class="tab-pane" id="3">

                    <div class="comment">

                        <div class="comment-header">

                            <h2>امتیاز کاربران به:</h2>
                            <p>{{$product->productname}}</p>

                        </div>

                        <div class="col-lg-12">
                            <div class=" comments__summary">
                                <?php

                                $value="";
                                $item="";

                                ?>
                                <ul class="comment-rate col-lg-6">
                                    @foreach($score as $scores)

                                        @if($scores->item_value==6 )



                                            <?php

                                            $value='100%';


                                            ?>
                                            @elseif($scores->item_value==5 )

                                                <?php

                                                $value='70%';


                                                ?>
                                            @elseif($scores->item_value==4 )

                                                <?php

                                                $value='60%';



                                                ?>

                                            @elseif($scores->item_value==3 )

                                                <?php

                                                $value='50%';



                                                ?>


                                            @elseif($scores->item_value==2 )

                                                <?php

                                                $value='30%';
                                                $item="نوآوری";


                                                ?>

                                            @elseif($scores->item_value==1 )

                                                <?php

                                                $value='10%';



                                                ?>


                                            @endif





                                            @if($scores->item_id==6)



                                                <?php



                                                $item="   طراحی و ظاهر  ";
                                                ?>
                                            @elseif($scores->item_id==5)

                                                <?php



                                                $item="  امکانات و قابلیت ها ";
                                                ?>
                                            @elseif( $scores->item_id==4)

                                                <?php


                                                $item=" ارزش خرید به نسبت قیمت";


                                                ?>

                                            @elseif( $scores->item_id==3)

                                                <?php


                                                $item="سهولت استفاده";


                                                ?>


                                            @elseif( $scores->item_id==2)

                                                <?php


                                                $item="نوآوری";


                                                ?>

                                            @elseif( $scores->item_id==1)

                                                <?php



                                                $item="کیفیت ساخت";

                                                ?>


                                            @endif

                                            <li style="margin-top: 33px">
                                                <p style="float: right;margin-left: 75px;margin-top: -7px;width: 193px;">{{ $item}}</p>
                                                <div class="progress ">
                                                    <div class="progress-bar" role="progressbar" style="width: {{$value}}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>


                                            @endforeach



                                            {{--                               <li style="margin-top: 53px">--}}
                                            {{--                                <p style="float: right;margin-top: 53px;margin-left: 124px;margin-top: -7px;">کیفیت ساخت</p>--}}
                                            {{--                                   <div class="progress ">--}}
                                            {{--                                       <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                            {{--                                   </div>--}}
                                            {{--                               </li>--}}



                                </ul>



                            </div>





                            <div class="comments__summary_note">

                                <h4>شما هم می‌توانید در مورد این کالا نظر بدهید.</h4>

                                <p style="text-align: right;direction: rtl;">برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید. اگر این محصول را قبلا از دیجی‌کالا خریده باشید، نظر شما به عنوان مالک محصول ثبت خواهد شد.</p>


                                <a   href="/comment/{{$product->category_id}}/{{$product->PID}}" class="button_cards"  >

                                    <i class="icon icon-plus-sign-alt" style="position: absolute;font-size: 21px;color: rgb(255, 255, 255);right: 19px;top: 16px;"></i>
                                    <span class="icon_cards">


                            </span>
                                    <span class="card_text">افزودن نظر جدید</span>

                                </a>

                            </div>

                            @foreach($comment as $comments)


                            <div class="comment_product_list">


                                <ul class="comment_list">


                                    <li>

                                      <span class="col-lg-3 comment_purchased" >

                                        <i class="icon icon-shopping-cart"></i>

                                          <span>خریدار این محصول</span>
                                      </span>
                                        <div class="col-lg-8" style="float: left;margin-top: 52px;">

                                            <div class="comment_header_list">


                                               <h5>{{$comments->comment_title}}</h5>
                                               {{$comments->user_full_name}}
                                            </div>

                                            <div class="comment_content_list">


                                                <span>{{$comments->comment_full_advantage}}</span>

                                                <p style="margin-top: 53px;">{{$comments->text}}</p>



                                            </div>



                                            <div class="comment_like" id="app">

                                                آیا این نظر برایتان مفید بود؟

                                        <button type="button"  class="btn-defult btn-like" @click="btn_like('{{$comments->id}}','{{$product->PID}}')">
                                           <span>بله</span>
                                            <span class="like{{$comments->id}}"></span>
                                        </button>


                                         <button type="button"  class="btn-defult btn-dislike" @click="btn_dislike('{{$comments->id}}','{{$product->PID}}')" >
                                               <span>خیر</span>
                                               <span class="dislike{{$comments->id}}"></span>
                                          </button>

                                            </div>



                                        </div>



                                    </li>




                                </ul>

                            </div>
                            @endforeach





                        </div>




                    </div>





                </div>
            </div>
        </div>




    </main>



</div>




@include('layouts.footer')