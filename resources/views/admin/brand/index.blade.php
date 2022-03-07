@extends('layouts.adminlayouts')


@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header bg-primary " style="color:#fff;font-weight:bold;font-size: 14px;text-align: center; ">
         ثبت برند برای کالا
        </div>

        <div class="card-body">


            <div class="col-lg-12">


                <div class="col-lg-6">


                    <div class="form-group">


                        <label>نام برند کالای مورد نظر</label>
                        <input type="text" class="form-control" value="" placeholder="نام برند کالای مورد نظر" v-model="BrandName">


                    </div>

                    <div class="form-group">


                        <label>نام خارجی برند کالا</label>
                        <input type="text" class="form-control" value="" placeholder="نام خارجی برند کالا" v-model="Ename">


                    </div>

                    <div class="form-group">


                        <label>کشور </label>
                        <input type="text" class="form-control" value="" placeholder="کشور " v-model="Country">


                    </div>



                    <div class="form-group">

                      <form action="/admin/imagebrand" method="post" class="dropzone" id="dropzone2">
                          {{csrf_field()}}
                      </form>

                    </div>




                    <div class="form-group">


                        <label>محصول مورد نظر</label>


                        <select class="form-control" v-model="BrandProduct">
                            @foreach($product as  $products)
                                <option value="{{$products->id}}">{{$products->productname}}</option>

                            @endforeach
                        </select>


                    </div>

                    <input type="text" id="brandimage" v-model="ImageBrand">
                    <div class="form-group">


                        <button type="button" class="btn btn-danger" @click="AddBrand()">ثبت برند محصول</button>

                    </div>



                </div>


            </div>




        </div>
    </div>
@endsection
