@extends('layouts.adminlayouts')

@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header bg-info" style="font-size: 14px;text-align: center; ">اضافه کردن کاربر</div>

        <div class="card-body">


            <!--------panel category--------->

            <div class="col-lg-6">

                <div class="form-group">
                    <label>نام کاربر</label>

                    <input type="text" class="form-control" v-model="fname">

                </div>

            </div>


            <div class="col-lg-6">

                <div class="form-group">

                    <label>نام خانوادگی کاربر</label>

                    <input type="text" class="form-control" v-model="lname">

                </div>

            </div>



            <div class="col-lg-6">

                <div class="form-group">

                    <label>ایمیل کاربر</label>

                    <input type="text" class="form-control" v-model="email">

                </div>

            </div>


            <div class="col-lg-6">

                <div class="form-group">

                    <label>سطح دسترسی </label>

                 <select class="form-control" v-model="role">


                     <option value="1">کاربر مشترک</option>
                     <option value="2">فروشنده</option>
                     <option value="3">مدیر فروشگاه</option>
                 </select>

                </div>

            </div>





            <div class="col-lg-6">

                <div class="form-group">

                    <label>کلمه عبور</label>

                    <input type="password" class="form-control" v-model="password">

                </div>

            </div>




            <div class="col-lg-6">

                <div class="form-group">



    <input type="submit" class="btn btn-info" value="ایجاد کاربر" @click="adduser()" style="margin-top: 28px;
    margin-left: 38%;">

                </div>

            </div>


        </div>
    </div>


@endsection