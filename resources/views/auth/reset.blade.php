@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="logo_login"  style="position:absolute;">

                <img src="/img/logo1.PNG">


            </div>

            <div class="col-md-3 " style="margin-top: 95px;text-align: right;">
                <div class="card" style="height:485px;">
                    <div class="card-header">تغییر رمز عبور</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/profile/change/password') }}">
                            @csrf
                            <label for="email" class="col-sm-12 col-form-label text-md-right">رمز عبور قبلی</label>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="email" type="text" class="email form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="" name="password" value="{{ old('password') }}"  autofocus>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <label for="password" class="col-md-12 col-form-label text-md-right">رمز عبور جدید</label>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="password form-control{{ $errors->has('password1') ? ' is-invalid' : '' }}" name="password1" >

                                    @if ($errors->has('password1'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <label for="password" class="col-md-12 col-form-label text-md-right">تکرار رمز عبور جدید </label>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="password form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" >

                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                              <div class="">
                                <div class="">
                                    <div class="add_card_left" style="position: absolute;right: 8% !important;top: 87% !important;">

                                        <button  type="submit"   class="button_card" value="" style="height: 55px;width: 296px;">
                                            <i class="icon-shopping-cart" style="position: absolute; font-size: 28px;color: #fff;right: 26px;top: 15px;"></i>
                                            <i class="icon icon-plus" style="position: absolute;font-size: 11px;color: #fff;right: 11px;top: 23px"></i>
                                            <span class="icon_card">


                            </span>
                                            <span class="card_text" style="position: absolute;padding-right: 0px !important;top: 16px;">تغییر رمز عبور </span>

                                        </button>

                                    </div>

                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                    {{--</a>--}}
                                </div>
                            </div>








                        </form>
                    </div>




                </div>
            </div>
        </div>
    </div>
@endsection
