@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12"  style="display: flex;">

    @include('layouts.user.UserSidebar')

    <div class="col-lg-9" style="float: left;margin-top: 80px;">
        <h5 style="text-align: right;margin-bottom: 24px;">ویرایش اطلاعات شخصی</h5>
        <div class="card">

            <div class="card-body">

                <form action="/profile/insert-user-info" method="post">

                    @csrf

                <div class="col-lg-4" style="float:right;max-width: 50%;">


                    <h4 style="text-align: right"> حساب شخصی</h4>


                    <div class="form-group" style="margin-top: 52px;">
                        <label style="float:right;width: 19%;text-align: right;">نام</label>

                        <input type="text" class="form-control" style="width: 81%;float: left; " name="name">



                        <label style="float:right;width: 19%;text-align: right;margin-top: 41px;">نام خانوادگی</label>

                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 31px;" name="lname">


                    </div>


                    <div class="form-group" style="margin-top: 22px;" id="date">

                        <label style="float:left;width: 19%;text-align: right;padding-top: 21px;">تاریخ تولد</label>
                        <select class="form-control"  name="year">


                            @for($i=1310;$i<=1381;$i++)


                            <option value="{{$i}}">{{$i}}</option>

                             @endfor


                        </select>

                        <select class="form-control" name="mounth">



                            <option value="1">فروردین</option>
                            <option value="2">اردیبهشت</option>
                            <option value="3">خرداد</option>
                            <option value="4">تیر</option>
                            <option value="5">مرداد</option>
                            <option value="6">شهریور</option>
                            <option value="7">مهر</option>
                            <option value="8">آبان</option>
                            <option value="9">آذر</option>
                            <option value="10">دی</option>
                            <option value="11">بهمن</option>
                            <option value="12">اسفند</option>



                        </select>
                        <select class="form-control" name="day">


                            @for($i=1;$i<=30;$i++)

                            <option value="{{$i}}">{{$i}}</option>


                                @endfor

                        </select>





                        <label style="float:right;width: 19%;text-align: right;margin-top: 25px;">کد ملی</label>

                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 25px;" name="NationalCode">





                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="is_active" id="is_active"  >
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                          <span style="margin-right: 15px;">      تبعه خارجی فاقد کد ملی هستم</span>
                            </label>

                            <div class="c-form-legal__item has-diviter"></div>

                        </div>





                        <label style="float:right;width: 19%;text-align: right;margin-top: 34px;">شماره موبایل</label>


                        @if ($errors->has('mobile'))
                            <input type="text" class="form-control error_input" style="width: 81%;float: left;margin-top: 25px;" name="mobile">


                            <span class="invalid-feedback" style="display:block !important;display: block !important;float: right;text-align: center;margin-top: 17px;">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>

                           @else

                            <input type="text" class="form-control " style="width: 81%;float: left;margin-top: 25px;" name="mobile">



                        @endif


                        <label style="float:right;width: 19%;text-align: right;margin-top: 34px;">آدرس ایمیل</label>

                        @if ($errors->has('email'))
                            <input type="text" class="form-control error_input" style="width: 81%;float: left;margin-top: 25px;" name="email">


                            <span class="invalid-feedback" style="display:block !important;display: block !important;float: right;text-align: center;margin-top: 17px;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>

                        @else

                            <input type="text" class="form-control " style="width: 81%;float: left;margin-top: 25px;" name="email">



                        @endif





                        <label style="float:right;width: 19%;text-align: right;margin-top: 41px;">شماره کارت</label>

                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 25px;" name="banknumber">



                        <div class="diviter_form"></div>


                        <button type="submit" class="button_card" value="" style="height: 55px;width: 296px;" id="add_form">
                            <i class="icon icon-ok" style="position: absolute;font-size: 24px;color: #fff;right: 16px;top: 14px;"></i>
                            <span class="icon_card">


                            </span>
                            <span class="card_text" style="position: absolute;padding-right: 70px !important;">ثبت اطلاعات کاربری</span>

                        </button>

                    </div>





                </div>
                
                
                
                
                <div class="col-lg-4" style="float: left;max-width: 50%;">
                    
                    
                    <h4 style="text-align: right">حساب حقوقی</h4>


                    <label class="switch" style="width: 52px !important;float: right;">
                        <input type="checkbox" value="1" name="company">
                        <span class="slider round" style="height: 24px !important;"></span>


                    </label>
                    <span style="float: right;margin-top: 12px;margin-right: 10px;">مایل به تکمیل اطلاعات حقوقی برای خرید سازمانی هستم.</span>

                    <p style="text-align: right;margin-top: 84px;">با تکمیل اطلاعات حقوقی سازمان مورد نظر خود می‌توانید اقدام به خرید سازمانی با دریافت فاکتور رسمی و گواهی ارزش افزوده نمایید.</p>


                    <div class="form-group" style="margin-top: 15px;">
                        <label style="float:right;width: 19%;text-align: right;margin-top: 41px;">نام شرکت</label>
                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 31px;" name="company_name">


                        <label style="float:right;width: 19%;text-align: right;margin-top: 41px;">کد اقتصادی</label>
                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 31px;" name="code">


                        <label style="float:right;width: 19%;text-align: right;margin-top: 41px;">شناسه ملی</label>
                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 31px;" name="nationalcode">


                        <label style="float:right;width: 19%;text-align: right;margin-top: 41px;">شماره ثبت</label>
                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 31px;" name="number">


                        <label style="float:right;width: 19%;text-align: right;margin-top: 41px;">شماره تلفن ثابت</label>
                        <input type="text" class="form-control" style="width: 81%;float: left;margin-top: 31px;" name="phone">



                        <label  style="float: right;width: 19%;text-align: right;margin-top: 41px;margin-right: -91px;">محل دفتر مرکزی</label>
                        <select class="province form-control " name="state"   style="width: 37%;float: right;margin-top: 31px;">
                        </select>

                        <select class="city form-control "  name="city"  style="width: 40%;float: right;margin-top: 31px;">
                        </select>



                    </div>



                </div>



                </form>


            </div>


        </div>

    </div>

</div>


@include('layouts.footer')