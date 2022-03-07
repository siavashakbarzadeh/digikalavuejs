@extends('layouts.adminlayouts')

@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header" style="font-size: 14px;text-align: center; ">مدیریت دسته ها</div>

        <div class="card-body">


            <!--------panel category--------->
            <div class="col-lg-6" style="float:left;">

            <div class="card border-info">


                <div class="card-header bg-info" style="color:#fff;font-size: 14px;text-align: center; ">حذف دسته</div>

                <div class="card-body">


                <select class="form-control" v-model="DeleteCategory">



                    <option  v-for="category in categorys " :value="category.id ">@{{category.name }}</option>







                </select>

                    <input type="submit" class="btn btn-danger" value="حذف دسته" style="font-size: 15px;margin-left: 35%;
margin-top: 32px;"  v-on:click="deletecat()">


                </div>
            </div>

            </div><!--panel1-->


            <div class="col-lg-6" >

                <div class="card border-info">


                    <div class="card-header bg-info" style="color:#fff;font-size: 14px;text-align: center; ">اضافه کردن دسته ها</div>

                    <div class="card-body">

                        <label style="float: right; font-size: 14px;"> دسته را وارد کنید</label>
                       <input type="text" class="form-control" v-model="NameCat">


                        <div class="form-group">
                        <label style="float: right; font-size: 14px;">زیر دسته را انتخاب کنید</label>
                        <select class="form-control" v-model="parent_id">


                            <option selected="selected " >انتخاب کنید</option>

                            <option value="0">دسته اصلی</option>

                            <option  v-for="category in categorys " :value="category.id ">@{{category.name }}</option>



                        @foreach($category as $categorys)


                                <option value="{{$categorys->id}}">{{$categorys->name}}</option>


                        @endforeach




                        </select>

                        </div>

                        <div class="form-group">


                            <form action="/admin/imagecategory" method="post" class="dropzone" id="ImageCategory">


                                {{csrf_field()}}


                            </form>


<input type="hidden" id="image1" >

                        </div>

                        <input type="submit" class="btn btn-info" value="اضافه کردن دسته" style="font-size: 15px;margin-left: 35%;
                               margin-top: 32px;" v-on:click="AddCategory()">


                    </div>
                </div>

            </div>

        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection