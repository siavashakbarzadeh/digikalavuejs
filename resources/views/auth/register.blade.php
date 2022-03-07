@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="logo_login"  style="position:absolute;">

                <img src="/img/logo1.PNG">


            </div>

            <div class="col-md-5 " style="margin-top: 95px;">
                <div class="card" style="height:565px;">
                    <div class="card-header">ثبت نام در دیجی کالا</div>
                    <div class="alert alert-warning">

                        اگر قبلا با ایمیل ثبت‌نام کرده‌اید، نیاز به ثبت‌نام مجدد با شماره همراه ندارید

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <label for="email" class="col-sm-12 col-form-label text-md-right">ایمیل یا شماره موبایل</label>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="email form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <label for="password" class="col-md-12 col-form-label text-md-right">رمز عبور</label>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="password form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="" style="right: 0;text-align: right;">
                                    <div class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="float: right;margin-top: 2px;position: absolute;right: 0;">

                                        <label style="margin-right: 20px;">

                                            حریم خصوصی و شرایط و قوانین استفاده از سرویس های سایت دیجی‌کالا را مطالعه نموده و با کلیه موارد آن موافقم.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <div class="add_card_left" style="position: absolute;

right: 350px;">

                                        <a   class="button_card" value="" style="height: 55px;width: 296px;">
                                            <i class="icon-shopping-cart" style="position: absolute; font-size: 28px;color: #fff;right: 26px;top: 15px;"></i>
                                            <i class="icon icon-plus" style="position: absolute;font-size: 11px;color: #fff;right: 11px;top: 23px"></i>
                                            <span class="icon_card">


                            </span>
                                            <span class="card_text" style="position: absolute;padding-right: 0px !important;">ثبت نام در دیجی کالا</span>

                                        </a>

                                    </div>

                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                </div>
                            </div>








                        </form>
                    </div>



                    <div class="card-footer">

                        <ul>
                            <li>  <h5>کاربر جدید هستید؟</h5></li>
                            <li> <a href="/signup">ثبت نام در دیجی کالا</a></li>

                        </ul>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
