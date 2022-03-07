@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12"  style="display: flex;">

    @include('layouts.user.UserSidebar')

    <div class="col-lg-9" style="float: left;margin-top: 80px;">
        <h5 style="text-align: right;margin-bottom: 24px;">اطلاعات شخصی</h5>
        <div class="card">

            <div class="card-body">


                <div class="col-lg-4" style="max-width: 45.333% !important;text-align: right;line-height: 31px; float: right;border-bottom: 1px solid #ddd;border-left: 1px solid #ddd;">

                    <label>نام و نام خانوادگی :</label>

                    <p>{{auth()->user()->name}} {{auth()->user()->lname}}</p>



                </div>



                <div class="col-lg-4" style="max-width: 56.333% !important;text-align: right;line-height: 31px;float: left;margin-left: -22px;border-bottom: 1px solid #ddd;">

                    <label>پست الکترونیک :</label>

                    <p>{{auth()->user()->email}}</p>



                </div>



                <div class="col-lg-4" style="max-width: 45.333% !important;text-align: right;line-height: 31px; float: right;border-bottom: 1px solid #ddd;border-left: 1px solid #ddd;">

                    <label>شماره تلفن همراه :</label>

                    <p>{{auth()->user()->phone}} </p>



                </div>


                <div class="col-lg-4" style="max-width: 56.333% !important;text-align: right;line-height: 31px;float: left;margin-left: -22px;border-bottom: 1px solid #ddd;">

                    <label>کدملی :</label>

                    <p>{{auth()->user()->NationalCode}}</p>



                </div>



                <div class="col-lg-4" style="max-width: 45.333% !important;text-align: right;line-height: 31px; float: right;border-bottom: 1px solid #ddd;border-left: 1px solid #ddd;">

                    <label>دریافت خبر نامه :</label>

                    <p>خیر</p>



                </div>



                <div class="col-lg-4" style="max-width: 56.333% !important;text-align: right;line-height: 31px;float: left;margin-left: -22px;border-bottom: 1px solid #ddd;">

                    <label>پست الکترونیک :</label>

                    <p>{{auth()->user()->email}}</p>



                </div>



            </div>

            <div class="col-lg-6" style="margin-top: 20px;margin-bottom: 22px;">
                <a href="/profile/user-info" style="cursor: pointer;"> <i class="icon icon-edit"></i>ویرایش اطلاعات شخصی</a>



            </div>


        </div>


    </div>
</div>

@include('layouts.footer')
