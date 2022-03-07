@extends('layouts.adminlayouts')


@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header bg-primary " style="color:#fff;font-weight:bold;font-size: 14px;text-align: center; ">
            افزودن نقد و بررسی
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <div class="form-group">


                    <div id="toolbar-container"></div>
                    <div id="editor" style="text-align: right;
min-height: 400px;border: 1px solid #cdcaca;">
                        <p></p>
                    </div>
                </div>


                <div class="col-lg-3">
                <div class="form-group">



                    <label>کیفیت ساخت</label>
                  <select class="form-control" v-model="state1">


                      <option>ضعیف</option>
                      <option>متوسط</option>
                      <option>خوب</option>
                      <option>عالی</option>



                  </select>



                </div>

                </div>


                <div class="col-lg-3">
                    <div class="form-group">



                        <label>کارایی</label>
                        <select class="form-control" v-model="state2">


                            <option>ضعیف</option>
                            <option>متوسط</option>
                            <option>خوب</option>
                            <option>عالی</option>



                        </select>



                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="form-group">



                        <label>امکانات و قابلیت ها</label>
                        <select class="form-control" v-model="state3">


                            <option>ضعیف</option>
                            <option>متوسط</option>
                            <option>خوب</option>
                            <option>عالی</option>



                        </select>



                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="form-group">



                        <label>ارزش خرید در برابر قیمت</label>
                        <select class="form-control" v-model="state4">


                            <option>ضعیف</option>
                            <option>متوسط</option>
                            <option>خوب</option>
                            <option>عالی</option>



                        </select>



                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="form-group">



                        <label>انتخاب کالا برای نوشتن نقد</label>
                        <select class="form-control" v-model="product_id">

            @foreach($product as $products)
                            <option value="{{$products->PID}}">{{$products->productname}}</option>

            @endforeach
                        </select>



                    </div>

                </div>



                <input type="button" class="btn btn-danger" value="افزودن نقد" @click="AddReviews()">

        </div>

    </div>

    @endsection