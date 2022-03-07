
<div class="col-lg-3" style="margin-top:30px;">
    <div class="card">
        <div class="card-title bg bg-info" style="height: 52px;"></div>
        <div class="card-body" style="padding: 0px !important;">

            <div class="profile_image"></div>
            <div class="profile_title">
                <p style="text-align: center">{{auth()->user()->name}} {{auth()->user()->lname}}</p>
            </div>
            <div class="profile_box_tabs">

                <ul>
                    <li  style="  margin-top: 11px;">تغییر رمز</li>
                    <li style="width: 1px;height: 49px;background: #ddd;margin-right: 77px;"></li>
                    <li style="margin-right: 18px; margin-top: 5px;"   >


                            <a class=" btn btn-facebook btn-flat" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #4a5f73;">
                          خروج از حساب
                            </a>



                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>



                    </li>


                </ul>


            </div>



        </div>

    </div>





    <div class="sidebar_profile card">

        <div class="card-body" style="padding: 0px !important;">



            <div  class="card-title" style="padding: 7px;border-bottom: 1px solid #ddd">


                <p style="text-align: right;margin: 14px 24px 7px 4px;">حساب کاربری شما</p>
            </div>


            <div class="profile_list">

                <ul style="padding: 0;width: 100%;">
                    <li>
                        <span><i class="icon icon-user"></i></span>
                        <span style="margin-right: 8px;">
                        <a href="{{url('/profile/')}}">پروفایل</a>

                        </span>


                    </li>



                    <li>
                        <span><i class="icon icon-shopping-cart"></i></span>
                        <span style="margin-right: 8px;">
                            <a href="{{url('/profile/order/')}}"> همه سفارش ها</a>


                           </span>


                    </li>
                    <li>
                        <span><i class="icon icon-list"></i></span>
                        <span style="margin-right: 8px;">درخواست مرجوعی



                        </span>


                    </li>
                    <li>
                        <span><i class="icon icon-list-ul"></i></span>
                        <span style="margin-right: 8px;">

                        <a href="{{url('/profile/interest/')}}">لیست علاقه مندی</a>


                        </span>


                    </li>
                    <li>
                        <span><i class="icon icon-user"></i></span>
                        <span style="margin-right: 8px;">

                            <a href="{{url('/profile/comment/')}}"> نقد و نظرات</a>

                      </span>


                    </li>
                    <li>
                        <span><i class="icon icon-comment"></i></span>
                        <span style="margin-right: 8px;">

                           <a href="{{url('/profile/addresses')}}">آدرس ها</a>


                        </span>


                    </li>
                    <li>
                        <span><i class="icon icon-adjust"></i></span>
                        <span style="margin-right: 8px;">اطلاع رسانی ها</span>


                    </li>
                    <li>
                        <span><i class="icon icon-minus"></i></span>
                        <span style="margin-right: 8px;">بازدید های اخیر</span>


                    </li>
                    <li>
                        <span><i class="icon icon-user-md"></i></span>
                        <span style="margin-right: 8px;">

                            <a href="{{url('/profile/')}}">  اطلاعات شخصی</a>

                          </span>


                    </li>

                </ul>



            </div>




        </div>



    </div>


</div>