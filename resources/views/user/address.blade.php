<script src="/js/city.js"></script>

@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12"  style="display: flex" id="app">

    @include('layouts.user.UserSidebar')



    <div class="interest_title">

        <h5 style="text-align: right;margin-bottom: 24px;">آدرس ها </h5>
    </div>

    <div class="col-lg-9" style="margin-top: 102px;">

        <div class="col-lg-6" style="float: right;;margin-top: 20px;">

            <div class="profile_address">

                <div class="address_add_profile" data-toggle="modal" data-target="#exampleModal">


                    <img src="/img/location.png">

                    <p style="">افزودن آدرس جدید</p>


                </div>




            </div>



        </div>


        @foreach($address as $addresses)


            <div class="col-lg-6" style="float: right;margin-top: 20px; ">

                <div class="card" style="min-height: 272px;">

                    <span id="border"></span>

                    <div class="card-body" style="padding: 0px !important;">

                        <div  class="card-title" style="" id="address_title">

                            <p id="fullname">{{$addresses->fullname}}</p>
                            <p ><span id="province" v-model="province">{{$addresses->province}}</span> ,  <span id="city">{{$addresses->city}}</span> <span id="address">{{$addresses->address}}</span></p>


                        </div>


                        <div class="address_footer">


                            <ul>
                                <li>
                                <i class="icon icon-envelope"></i>

                                    <span>کد پستی :<span id="zipcode">{{$addresses->zipcode}}</span></span>

                                </li>
                                <li>

                                   <i class="icon icon-mobile-phone" style="margin-right: 8px;"></i>
                                   <span>شماره همراه :  <span id="mpbile">{{$addresses->mobile}}</span> </span>
                                </li>


                            </ul>



                            <div style="width: 36%;float: left;margin: 43px 19px 6px 17px;">

                                <input type="button" class="btn btn-defult update_address" value="ویرایش" data-toggle="modal" data-target="#update_address{{$addresses->id}}" >
                                <form action="/profile/delete-address" method="post" style="float: left;margin-right: 9px;">

                                    @csrf
                                    <input type="hidden" value="{{$addresses->id}}" name="id">

                                <input type="submit" class="btn btn-defult" value="حذف">

                                </form>
                            </div>



                        </div>



                    </div>




                </div>



            </div>


            <div class="modal fade" id="update_address{{$addresses->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 1000px !important;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> افزودن آدرس جدید</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: left;position: absolute;left: 18px;width: 40px;height: 40px;background: #ddd;border-radius: 100%;padding: 0px;top: 31px;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body ">


                            <div class="col-lg-12">

                                <form action="/profile/update-address" method="post">

                                    @csrf


                                    <input type="hidden" value="{{$addresses->id}}" name="id">


                                    <div class="col-lg-6">

                                        <div class="form-group" style="text-align: right;">

                                            <label id="address_label">نام و نام خانوادگی تحویل گیرنده</label>

                                            <input type="text"  name="name" id="address_input" class="form-control" placeholder="نام تحویل گیرنده را وارد کنید" value="{{$addresses->fullname}}">


                                        </div>


                                        <div class="form-group" style="text-align: right;">

                                            <label id="address_label">شماره موبایل</label>

                                            <input type="text"  name="mobile" id="address_input" class="form-control" placeholder="شماره همراه را وارد کنید." value="{{$addresses->mobile}}">


                                        </div>


                                        <div>

                                            <div class="form-group" style="text-align: right;">

                                                <label id="address_label" style="float: right;">استان</label>
                                                <select class="province form-control col-lg-5" name="province"   style="float: right;margin: 43px -44px 0px 0px;">

                                                    <option value="{{$addresses->province}}">{{$addresses->province}}</option>
                                                </select>
                                                <label id="address_label" style="margin-right: 70px;">شهرستان</label>
                                                <select class="city form-control  col-lg-5"  name="city"  style="float: left;margin:5px -44px 0px 0px;">
                                                    <option value="{{$addresses->city}}">{{$addresses->city}}</option>
                                                </select>
                                            </div>



                                            <div class="form-group" style="text-align: right;margin-top: 62px;">

                                                <label id="address_label" style="float: right;">آدرس پستی</label>

                                                <textarea id="address_input" class="form-control"  name="address">{{$addresses->address}}</textarea>
                                            </div>


                                            <div class="form-group" style="text-align: right;">

                                                <label id="address_label">کد پستی</label>

                                                <input type="text"  id="address_input" class="form-control" placeholder="کد پستی را بدون خط نیره بنویسید."  name="zipcode" value="{{$addresses->zipcode}}">


                                            </div>


                                            <div class="form-group" style="text-align: right;margin-top: 95px;">

                                                <button type="submit" class="button_card" value="" style="height: 55px;width: 296px; position: absolute;
top: 512px;">

                                                    <i class="icon icon-ok" style="position: absolute;font-size: 32px;color: #fff;right: 11px;top: 9px"></i>
                                                    <span class="icon_card">


                            </span>
                                                    <span class="card_text" style="position: absolute;padding-right: 0px !important;margin-right: -46px; margin-top: -10px;">ویرایش آدرس</span>

                                                </button>



                                            </div>



                                        </div>


                                    </div>



                                </form>

                            </div>







                        </div>

                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 1000px !important;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> افزودن آدرس جدید</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: left;position: absolute;left: 18px;width: 40px;height: 40px;background: #ddd;border-radius: 100%;padding: 0px;top: 31px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">


                <div class="col-lg-12">

                    <form action="/profile/insert-address" method="post">

                        @csrf





                        <div class="col-lg-6">

                            <div class="form-group" style="text-align: right;">

                                <label id="address_label">نام و نام خانوادگی تحویل گیرنده</label>

                                <input type="text"  name="name" id="address_input" class="form-control" placeholder="نام تحویل گیرنده را وارد کنید">


                            </div>


                            <div class="form-group" style="text-align: right;">

                                <label id="address_label">شماره موبایل</label>

                                <input type="text"  name="mobile" id="address_input" class="form-control" placeholder="شماره همراه را وارد کنید.">


                            </div>


                            <div>

                                <div class="form-group" style="text-align: right;">

                                    <label id="address_label" style="float: right;">استان</label>
                                    <select class="province form-control col-lg-5" name="province"   style="float: right;margin: 43px -44px 0px 0px;">
                                    </select>
                                    <label id="address_label" style="margin-right: 70px;">شهرستان</label>
                                    <select class="city form-control  col-lg-5"  name="city"  style="float: left;margin:5px -44px 0px 0px;">
                                    </select>
                                </div>



                                <div class="form-group" style="text-align: right;margin-top: 62px;">

                                    <label id="address_label" style="float: right;">آدرس پستی</label>

                                    <textarea id="address_input" class="form-control"  name="address"></textarea>
                                </div>


                                <div class="form-group" style="text-align: right;">

                                    <label id="address_label">کد پستی</label>

                                    <input type="text"  id="address_input" class="form-control" placeholder="کد پستی را بدون خط نیره بنویسید."  name="zipcode">


                                </div>


                                <div class="form-group" style="text-align: right;margin-top: 95px;">

                                    <button type="submit" class="button_card" value="" style="height: 55px;width: 296px; position: absolute;
top: 512px;">

                                        <i class="icon icon-ok" style="position: absolute;font-size: 32px;color: #fff;right: 11px;top: 9px"></i>
                                        <span class="icon_card">


                            </span>
                                        <span class="card_text" style="position: absolute;padding-right: 0px !important;margin-right: -46px; margin-top: -10px;">ثبت آدرس</span>

                                    </button>



                                </div>



                            </div>


                        </div>



                    </form>

                </div>







            </div>

        </div>
    </div>
</div>






@include('layouts.footer')