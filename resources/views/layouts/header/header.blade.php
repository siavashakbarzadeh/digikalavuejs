<!DOCTYPE html>
<html>
<head>
    <title>دیجی کالا</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-slider.css">

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="/css/jquery_ui.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">

<script>



</script>
</head>
<body   style="">

<main>



<div class="col-lg-12" style="position: static">





    <header class="header-c">


        <div class="container">


            <div class="c-header_row">


                <div class="c-header-logo">

                    <a class="c-header-logo-img"></a>


                </div>



                <div class="c-header-search">





                    <input type="text" class="search-input" placeholder="نام محصول برند و یا دسته مورد علاقه خود را جستجو کنید...">


                    <button class="search-button" >

                        <i class="icon icon-search"></i>

                    </button>
                </div>




                <div class="header-action">


                    <div class="header-container">


                        <div>


                            @if(Auth::user())

                                <a class="c-header-dropdown">

                                    <span>{{Auth::user()->name}} {{Auth::user()->lname}}</span>
                                    <i class="icon icon-angle-down"></i>

                                </a>


                                <div class="header-user-dropdown">

                                    <div class="before"></div>
                                    <div class="after"></div>
                                    <a class="header-dropdown-login" href="/admin/index">ورود به بخش مدیریت</a>

                                </div>


                                @else

                                <a class="c-header-dropdown">

                                    <span>ورود/ثبت نام</span>
                                    <i class="icon icon-angle-down"></i>

                                </a>



                                <div class="header-user-dropdown">

                                    <div class="before"></div>
                                    <div class="after"></div>
                                    <a class="header-dropdown-login" href="#">ورود به دیجی کالا</a>


                                    <div class="header-dropdown-signup">

                                        <span>کاربر جدید هستید؟</span>
                                        <a>ثبت نام </a>


                                    </div>


                                    <div class="header-user">

                                        <i class="icon icon-user"></i>
                                        <span>پروفایل</span>

                                    </div>


                                    <div class="header-cart">

                                        <i class="icon icon-user"></i>
                                        <span>پیگیری سفارش</span>

                                    </div>








                                </div>



                            @endif

                            <div class=header-div></div>





                        </div>




                    </div>

                    @if(!empty(Session::get('cart')))
                        <?php $count=sizeof(Session::get('cart'));  ?>
                        <div id="header-shop" class="header-shop" style="background-color:#00bfd6; color: #fff !important; ">

                            <div>

                                <i class="icon icon-shopping-cart"></i>
                                <a>سبد خرید</a>

                                <span style="width: 21px;
height: 22px;
border-radius: 100%;
background-color: #fff;
color: #00bfd6 !important;
position: absolute;
text-align: center; ">



                                        {{$count}}



                            </span>


                            </div>
                        </div>

                        @include('shop')
                        @else
                        <div class="header-shop">

                            <div>

                                <i class="icon icon-shopping-cart"></i>
                                <a>سبد خرید</a>

                                <span style="width: 21px;
height: 22px;
border-radius: 100%;
background-color: #00bfd6;
color: #fff;
position: absolute;
text-align: center; ">

                         0
                            </span>


                            </div>
                        </div>
                      @endif

                </div>



            </div>


        </div>


        <div class="search-bottom">


            <input type="search" placeholder="جستجو از میان دسته ، کالا " class="search">





        </div>

        <span style="display:none;float: left;margin-top: -35px;color: #b0aeae;font-size: 21px;margin-left: 13px;"
        >


      <i class="icon icon-shopping-cart"></i>

        <i class="icon icon-user"></i>

</span>


    </header>
</div>
