@extends('layouts.adminlayouts')


@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header bg-primary " style="color:#fff;font-weight:bold;font-size: 14px;text-align: center; ">
            اضافه کردن کالا به فروشگاه
        </div>

        <div class="card-body">


            <!-- Nav tabs -->

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab" style="font-size: 12px;">اضافه
                        کردن کالا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#uploadpic" role="tab" data-toggle="tab" style="font-size: 12px;">آپلود
                        عکس</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab" style="font-size: 12px;">اضافه کردن
                        خصوصیت ها</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="profile">


                    <div class="col-lg-12">


                        <div class="col-lg-12">

                            <div class="form-group">


                                <div id="toolbar-container"></div>
                                <div id="editor">
                                    <p>توضیحات کالا را در ایتجا بنویسید...</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">

                            <div class="form-group">


                                <form method="post" action="/admin/image" class="dropzone" id="resum">

                                    {{csrf_field()}}

                                </form>
                            </div>
                        </div>

                        <input type="hidden" id="image" v-model="imageurl">


                        <div class="col-lg-6">

                            <div class="form-group">

                                <label>نام کالا</label>
                                <input type="text" class="form-control" placeholder="" v-model="ProductName">
                            </div>
                        </div>


                        <div class="col-lg-6">

                            <div class="form-group">

                                <label>قیمت</label>
                                <input type="text" class="form-control" placeholder="" v-model="ProductPrice">
                            </div>
                        </div>


                        <div class="col-lg-6">

                            <div class="form-group">

                                <label>تعداد در انبار </label>
                                <input type="number" class="form-control" v-model="ProductCount">
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="form-group">

                                <label>انتخاب دسته کالا</label>

                                <select class="form-control" v-model="ProductCategory">

                                    @foreach($category as $categorys)
                                        <option value="{{$categorys->id}}">{{$categorys->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="form-group">


                                <button type="button" class="btn btn-success" @click="AddProduct()">اضافه کردن کالا

                                    <i class="icon icon-save"></i>
                                </button>
                            </div>
                        </div>


                    </div>


                </div>
                <div role="tabpanel" class="tab-pane fade" id="uploadpic">


                    <div class="col-lg-12">

                        <div class="form-group">


                            <form method="post" action="/admin/productimage" class="dropzone" id="myDropzone">


                                {{csrf_field()}}

                                <input type="hidden" id="productid" name="id">

                            </form>
                        </div>
                    </div>


                </div>

                <div role="tabpanel" class="tab-pane fade" id="buzz">


                    <div class="col-lg-12">


                        <div class="col-lg-6">


                            <div class="form-group">
                                <label>گروه کالایی</label>


                                <input type="text" placeholder="گروه کالایی را بنویسید..." class="form-control" v-model="NameGroup">



                            </div>

                            <div class="form-group">
                                <select class="form-control"  v-model="attributegroup_id ">


                                    @foreach($category as $categorys)


                                    <option value="" selected="selected">انتخاب کنید</option>

                                        <option value="{{$categorys->id}}">{{$categorys->name}}</option>

                                   @endforeach
                                </select>


                            </div>
                            <div class="form-group">

                                <input type="submit" class="btn btn-info" value="اضافه کردن" @click="AddGroup()">
                            </div>
                        </div>




                        <div class="col-lg-6">


                            <div class="form-group">

                                <label>خصوصیت ها</label>
                                <input type="text" placeholder="نام خصوصیت را بنویسید..." class="form-control" v-model="Name_Attr">

                            </div>

                            <div class="form-group">
                                <select class="form-control"  v-model="AtributeGroup ">



                                    <option value="" selected="selected">انتخاب کنید</option>

                                        @foreach($group as  $groups)

                                            <option value="{{$groups->id}}">{{$groups->name}}</option>
                                         @endforeach
                                </select>


                                <input type="text" id="productid1">


                            </div>


                            <div class="form-group">

                                <input type="submit" class="btn btn-info" value="اضافه کردن" @click="AddAttribute()">
                            </div>


                        </div>


                        <div class="col-lg-6">


                            <div class="form-group">

                                <label>آیتم</label>
                                <input type="text" placeholder="نام آیتم را بنویسید..." class="form-control" v-model="AttributeItem">

                            </div>

                            <div class="form-group">
                                <select class="form-control" v-model="itemid">
                                    @foreach($items as  $item)

                                        <option value="{{$item->id}}">{{$item->name_attr}}</option>
                                    @endforeach</select>


                            </div>

                            <div class="form-group">

                                <input type="submit" class="btn btn-info" value="اضافه کردن" @click="AddAttributeItem()">
                            </div>


                        </div>



                        <div class="col-lg-6">

                            <label>انتخاب برند</label>

                            <div class="form-group">

                                <select class="form-control" v-model="NameBrand">

                                    <option value="" selected="selected">انتخاب کنید</option>




                                </select>

                            </div>


                            <div class="form-group">

                                <input type="submit" class="btn btn-info" value="اضافه کردن" @click="AddBrand()">
                            </div>


                        </div>





                    </div>


                </div>

            </div>

        </div>


    </div>



@endsection
