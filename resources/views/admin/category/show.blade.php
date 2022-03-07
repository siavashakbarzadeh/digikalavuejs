@extends('layouts.adminlayouts')

@section('content')


    <div class="card " id="app" style="margin-top: 25px;">


        <div class="card-header" style="font-size: 14px;text-align: center; ">مشاهده دسته ها</div>

        <div class="card-body">


            <!--------panel category--------->



         <table class="table table-striped" style="font-size: 14px;">


             <thead>

             <tr>
                    <th>شماره دسته</th>
                 <th>نام دسته </th>
                 <th>تصویر </th>
                 <th>نام زیر دسته </th>
                 <th>عملیات</th>
             </tr>


             </thead>

             <tbody>



             <tr v-for="category in categorys">

                 <td>@{{category.id}}</td>

                <td>@{{category.name}}</td>

                <td>

                   <span v-if="category.image ">

                       <img :src="category.image" style="width: 100px; height: 100px;">

                   </span>
                    <span v-else>


                        <img src="/img/no-camera.png" style="width: 80px; height: 80px;">



                    </span>



                </td>


                <td>
                    <span v-if="category.parent_id == 0">

                        دسته اصلی



                    </span>
                    <span v-else="category.parent_id == 0">

                                 @{{ category.parent_id }}

                            </span>


                </td>

                <td>

                    <a href="javascript:;" class="icon icon-trash " style="font-size: 25px; color: red" v-on:click="deletecategory1(category.id)"></a>
                    <a href="javascript:;" class="icon icon-pencil " style="font-size: 25px; color: blue" data-toggle="modal" :data-target="'#mymodal'+ category.id" ></a>


                </td>

             </tr>


             </tbody>


         </table>

            <!-- Trigger the modal with a button -->

            <!-- Modal -->
            @foreach($category as $categorys)
            <div id="mymodal{{$categorys->id}}" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="position: absolute; right: 43%;">ویرایش دسته</h4>
                        </div>
                        <div class="modal-body" >
                            <p style="text-align: center;">دسته مورد نظر خود را ویرایش کنید.</p>
                            <div class="form-group">
                                <h4 id="h4" style="text-align: center;">{{$categorys->name}}</h4>
                        <input type="text" class="form-control"  id="name1" value="{{$categorys->name}}" v-model="updatecat">

                        </div>
                            <div class="form-group">
                        <select class="form-control" v-model="updatecat1">




                            <option  selected="selected">{{$categorys->name}}</option>
                            <option  v-for="category in categorys" :value="category.id ">@{{category.name }}</option>

                            <option value="0">دسته اصلی</option>


                        </select>




                            </div>
                          <div class="form-group">


                              <form action="" method="post" class="dropzone">

                                  <input type="hidden"  value="{{$categorys->id}}"  name="categoryId" >

                                {{csrf_field()}}


                              </form>


                          </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-info" value="ویرایش" v-on:click="updatecategory({{$categorys->id}})">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

@endforeach
        </div>
    </div>



@endsection