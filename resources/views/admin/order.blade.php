<?php


use App\Helper;


?>
@extends('layouts.adminlayouts')


@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header bg-primary " style="color:#fff;font-weight:bold;font-size: 14px;text-align: center; ">
          مشاهده کل سفارشات
        </div>

        <div class="card-body">


            <table class="table table-hover table-bordered responstable" style="text-align: center">

             <thead>

             <tr>

                 <th>نام و نام خانوادگی</th>
                 <th>ایمیل</th>
                 <th>شماره همراه</th>
                 <th>شماره پیگیری</th>
                 <th>مشخصات محصول</th>
                 <th>استان </th>
                 <th>قیمت</th>
                 <th>تاریخ خرید</th>
                 <th>وضعیت سفارش</th>



             </tr>


             </thead>

                <tbody>

                     @foreach($order as $orders)
                <tr>

                   {{Helper::get_current_user($orders->user_id)}}
                    <td>{{$orders->id_orders}}</td>
                    {{Helper::get_product_order($orders->product_id)}}
                    {{Helper::get_address_order($orders->address_id)}}
                    <td>{{$orders->price}}</td>
                    <td>{{new Verta($orders->created_at)}}</td>
                    <td data-toggle='modal' data-target='#statusproduct{{$orders->id}}'>



                        @if($orders->status=='تایید شده')

                            <span style="color:#388024">تایید شده</span>

                            @elseif($orders->status=='لغو درخواست')
                            <span style="color:red">لغو درخواست</span>
                        @elseif($orders->status=='درحال آماده سازی')
                            <span style="color:#7097ff">درحال آماده سازی</span>
                        @elseif($orders->status=='ارسال شده')
                            <span style="color:#cbff18">ارسال شده</span>

                        @elseif($orders->status=='دریافت محصول توسط مشتری')
                            <span style="color:#00ffe9">دریافت محصول توسط مشتری</span>
                       @endif


                    </td>


                </tr>

                    @endforeach


                </tbody>


            </table>




        </div>


    </div>

    @foreach($order as $orders)
        <div   id="mymodal{{$orders->user_id}}" class="modal fade" role="dialog">
            <div class="modal-dialog" >

                <!-- Modal content-->
                <div class="modal-content" style="width: 900px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="position: absolute; right: 43%;">ویرایش دسته</h4>
                    </div>
                    <div class="modal-body" >



                        <table class="table table-striped responstable" style="font-size: 14px;">


                            <thead>

                            <tr>

                                <th>نام و نام خانوادگی </th>
                                <th>ایمیل </th>
                                <th>شماره کارت</th>
                                <th>تلفن ثابت</th>
                                <th>شماره همراه</th>
                                <th>جنسیت</th>




                            </tr>


                            </thead>

                            <tbody>

                            {{Helper::get_user($orders->user_id)}}



                            <tr >







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

    @endforeach

    @foreach($order as $orders)
        <div   id="statusproduct{{$orders->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog" >

                <!-- Modal content-->
                <div class="modal-content" style="width: 900px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="position: absolute; right: 43%;">ویرایش دسته</h4>
                    </div>
                    <div class="modal-body" >

                    <form action="/admin/changestatus" method="post">
                           @csrf
                    <div class="form-group">


                     <select class="form-control" name="status">

                         <option value="تایید شده">تایید شده</option>
                         <option value="لغو درخواست">لغو درخواست</option>
                         <option value="درحال آماده سازی">درحال آماده سازی</option>
                         <option value="ارسال شده">ارسال شده </option>
                         <option value="دریافت محصول توسط مشتری">دریافت محصول توسط مشتری</option>



                     </select>


                    </div>

                        <input type="hidden" name="id" value="{{$orders->id}}">
                        <input type="submit" class="btn btn-info" value="ثبت تغییرات">

                    </form>
                    </div>

                </div>

            </div>
        </div>

    @endforeach


    @foreach($product as $products)
        <div   id="modalproduct{{$products->PID}}" class="modal fade" role="dialog">
            <div class="modal-dialog" >

                <!-- Modal content-->
                <div class="modal-content" style="width: 900px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="position: absolute; right: 43%;">ویرایش دسته</h4>
                    </div>
                    <div class="modal-body" >



                        <table class="table table-striped responstable" style="font-size: 14px;">


                            <thead>

                            <tr>

                                <th>قیمت </th>
                                <th>تاریخ ثبت محصول</th>
                                <th>تصویر محصول</th>
                                <th>موجودی انبار</th>





                            </tr>


                            </thead>

                            <tbody>

                            {{Helper::get_product($products->PID)}}



                            <tr >







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

    @endforeach

@endsection
