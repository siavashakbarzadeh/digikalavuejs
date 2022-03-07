<?php


use App\Helper;


?>
@extends('layouts.adminlayouts')


@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header bg-primary " style="color:#fff;font-weight:bold;font-size: 14px;text-align: center; ">
         مشاهده کل تخفیف ها
        </div>

        <div class="card-body">


            <table class="table table-hover table-bordered responstable" style="text-align: center">

                <thead>

                <tr>

                    <th>نام محصول</th>
                    <th>میزان تخفیف</th>
                    <th>علت تخفیف</th>
                    <th>کد تخفیف</th>
                    <th>تاریخ شروع</th>
                    <th>تاریه پایان</th>
                    <th>عملیات </th>



                </tr>


                </thead>

                <tbody>

                @foreach($discount as $discounts)
                    <tr>

                        {{Helper::get_product_discount($discounts->product_id)}}
                        <td>{{$discounts->value}}</td>
                        <td>{{$discounts->name}}</td>
                        <td>{{$discounts->code}}</td>

                        <td>{{$discounts->begindate}}</td>
                        <td>{{$discounts->begindate}}</td>
                        <td><a href="/admin/removediscount/{{$discounts->id}}"><i class="icon icon-trash"></i></a></td>



                    </tr>

                @endforeach


                </tbody>


            </table>




        </div>


    </div>



@endsection
