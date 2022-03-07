@extends('layouts.adminlayouts')


@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header bg-primary " style="color:#fff;font-weight:bold;font-size: 14px;text-align: center; ">
           ایجاد تخفیف برای کالا
        </div>

        <div class="card-body">


    <div class="col-lg-12">


        <div class="col-lg-6">


            <div class="form-group">


                <label>میزان تخفیف به درصد</label>
                <input type="text" class="form-control" value="" placeholder="میزان تخفیف را وارد کنید" v-model="value">


            </div>

            <div class="form-group">


                <label>علت تخفیف</label>
                <input type="text" class="form-control" value="" placeholder="علت تخفیف" v-model="text">


            </div>



            <div class="form-group">


                <label>کد تخفیف</label>
                <input type="text" class="form-control" value="" placeholder="علت تخفیف" v-model="code">


            </div>

            <div class="form-group">


                <label>تاریخ شروع تخفیف</label>
                <input class="observer-example form-control"   id="begindate"/>
            </div>



            <div class="form-group">


                <label>تاریخ پایان تخفیف</label>
                <input type="text" class="observer-example1 form-control" value="" id="enddate"  placeholder="علت تخفیف">


            </div>



            <div class="form-group">


                <label>محصول مورد نظر</label>


               <select class="form-control" v-model="product_id">
                   @foreach($product as  $products)
                   <option value="{{$products->PID}}">{{$products->productname}}</option>

                   @endforeach
               </select>


            </div>

            <div class="form-group">


               <button type="button" class="btn btn-danger" @click="addDiscount()">ایجاد تخفیف</button>

            </div>



        </div>


    </div>




        </div>
    </div>
    @endsection