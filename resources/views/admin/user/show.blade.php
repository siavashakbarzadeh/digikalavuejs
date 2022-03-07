@extends('layouts.adminlayouts')

@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header" style="font-size: 14px;text-align: center; ">مشاهده کاربران</div>

        <div class="card-body">


            <!--------panel category--------->



            <table class="table table-striped" style="font-size: 14px;">


                <thead>

                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی </th>
                    <th>ایمیل </th>
                    <th>کدملی </th>
                    <th>وضعیت</th>
                    <th>تبعه خارجی</th>
                    <th>عملیات</th>
                </tr>


                </thead>

                <tbody>



          <tr v-for="(user,index) in  users">

              <td>@{{user.fname}}</td>
              <td>@{{user.lname}}</td>
              <td>@{{user.email}}</td>
              <td>@{{user.nationalcode}}</td>


              <td>

                  <span v-if="user.state == 1">



                        <i class="icon icon-ok-sign"  style="color: green;cursor: pointer;" @click="updatestatus(user.id)"></i>
                  </span>

                    <span v-else>

                        <i class="icon icon-remove-circle"  style="color: red;cursor: pointer;" @click="updatestatus(user.id)"></i>


                    </span>





              </td>
              <td>

                  <span v-if="user.nocode == 0">

                      تبعه خارجی نیست

                  </span>


                 <span v-else>

                     تبعه خارجی است

                 </span>



              </td>
              <td>

                  <input type="submit" class="btn btn-danger" value="حذف" @click="deleteuser(user.id)">
                  <input type="submit" class="btn btn-info" data-toggle="modal" :data-target="'#mymodal'+ user.id" value="مشاهده">

              </td>



          </tr>


                </tbody>


            </table>

            <!-- Trigger the modal with a button -->

            <!-- Modal -->



                <div  v-for="user in  users" :id="'mymodal'+user.id" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="position: absolute; right: 43%;">ویرایش دسته</h4>
                            </div>
                            <div class="modal-body" >



                                <table class="table table-striped" style="font-size: 14px;">


                                    <thead>

                                    <tr>

                                        <th>نقش </th>
                                        <th>تلفن ثابت </th>
                                        <th>شماره همراه  </th>
                                        <th>تاریخ تولد</th>
                                        <th>جنسیت</th>
                                        <th>شهر</th>



                                    </tr>


                                    </thead>

                                    <tbody>





                                    <tr >


                                        <td>

                                            <span v-if="user.roule == 1">

                                                کاربر مشترک

                                            </span>
                                            <span v-else-if="user.roule == 2">


                                                فروشنده
                                            </span>

                                            <span v-else-if="user.roule == 3">


                                                مدیر فروشگاه

                                            </span>






                                        </td>
                                        <td>@{{user.phone}}</td>
                                        <td>@{{user.mobile}}</td>
                                        <td>@{{user.birthday}}</td>
                                        <td>


                                            <span v-if="user.gender == 0">

                                            مشخص نشده

                                            </span>

                                            <span v-else-if="user.gender == 1">

                                            مرد
                                            </span>

                                            <span v-else-if="user.gender ==2">

                                                زن
                                            </span>




                                        </td>
                                        <td>@{{user.city}}</td>






                                    </tr>


                                    </tbody>


                                </table>



                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-info" value="ویرایش" v-on:click="updatecategory()">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>




        </div>
    </div>



@endsection