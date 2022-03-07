@include('layouts.header.header')
@include('layouts.menu.menu')
<?php


use App\Helper;



?>


<div class="col-lg-12" id="app">

    <div class="col-lg-3" style="top: 2%;position: absolute;max-width: 19.2%;">


        <div class="card" style="min-height:180px;">
            <div class="card-header" style="background-color:#fff;height: 37px; text-align: right; padding-right: 8px; padding-top: 5px; font-weight: bold; font-size: 13px;">

                دسته بندی نتایج
            </div>
            <div class="card-body">

                {{Helper::category($id)}}


            </div>




        </div>



    </div>



    <div class="col-lg-3" style="top: 16%;position: absolute;max-width: 19.2%;">


        <div class="card" style="min-height:100px;">
            <div class="card-header" style="background-color:#fff;height: 37px; text-align: right; padding-right: 8px; padding-top: 5px; font-weight: bold; font-size: 13px;">

              جستجو در نتایج :
            </div>
            <div class="card-body">

             <input type="text" class="form-control" placeholder="نام محصول یا برند خود را جستجو کنید"  style="font-size: 11px;

text-align: left;">
            <i class="icon icon-search" style="float: right;margin-top: -23px;margin-right: 6px;"></i>

            </div>




        </div>



    </div>



    <div class="col-lg-3" style="top: 2%;position: absolute;max-width: 19.2%;">


        <div class="card" style="min-height:180px;">
            <div class="card-header" style="background-color:#fff;height: 37px; text-align: right; padding-right: 8px; padding-top: 5px; font-weight: bold; font-size: 13px;">

                دسته بندی نتایج
            </div>
            <div class="card-body">

                {{Helper::category($id)}}


            </div>




        </div>



    </div>

    <div class="col-lg-3" style="top: 25%;position: absolute;max-width: 19.2%;">


        <div class="card" style="min-height:280px;">
            <div class="card-header" style="background-color:#fff;height: 37px; text-align: right; padding-right: 8px; padding-top: 5px; font-weight: bold; font-size: 13px;">

              برند ها
            </div>
            <div class="card-body">


                <input type="text" class="form-control" placeholder="نام محصول یا برند خود را جستجو کنید"  style="font-size: 11px;

text-align: left;height: 40px;">
                <i class="icon icon-search" style="float: right;margin-top: -30px;margin-right: 6px;"></i>
                <div class="brandsearch">

                        <ul>


                            <li v-for=" brands in brand" v-if="brands.category_id == <?php echo $id ?>"><input type="checkbox" v-model="checkbrands"  @click="filterbrands" :value="brands.name" class="form-control"  style="margin-left: 19px;">@{{brands.name}}   <span style="margin-right: 129px;">@{{brands.Ename}}</span></li>

                        </ul>



                     </div>




            </div>




        </div>



    </div>


    <div class="col-lg-3" style="top: 46%;position: absolute;max-width: 19.2%;">


        <div class="card" style="min-height:29px;">

        <label class="switch">

            <input type="checkbox" id="check_status" @click="status()" v-model="check_status" >

            <span class="slider round"></span>


        </label>


<p style="margin-top: -31px;text-align: right;margin-right: 94px;font-size: 13px;">فقط کالاهای موجود </p>

        </div>
    </div>




    <div class="col-lg-3" style="top: 50%;position: absolute;max-width: 19.2%;">


        <div class="card" style="min-height:280px;">
            <div class="card-header" style="background-color:#fff;height: 37px; text-align: right; padding-right: 8px; padding-top: 5px; font-weight: bold; font-size: 14px;">

               محدوده قیمت مورد نظر
            </div>
            <div class="card-body">
                <div class="brandsearch">
                    <div id="slider-range"></div>
                    <p>

                      <span class="max-price"><span>از</span></span>
                        <span class="min-price"><span>از</span></span>
                    </p>



                </div>




            </div>




        </div>



    </div>



    <div  class="col-lg-10" style="display: inline-block;margin-top:1%;max-width: 81%;text-align: right;">


    {{Helper::CategoryRoot($id)}}



</div>
    <span v-for="(attributes,index)   in attribute" v-if="attributes.attributegroup_id == <?php echo $id ?>	">

    <div class="col-lg-3" :id="'attr'+index">


        <div class="card" style="">
            <div class="card-header" style="background-color:#fff;height: 37px; text-align: right; padding-right: 8px; padding-top: 5px; font-weight: bold; font-size: 13px;" data-toggle="collapse" :data-target="'#demo'+index">


                    @{{attributes.name2}}



            </div>
            <div class="card-body" :id="'demo'+index" style="min-height:280px;">



                <ul class="attributeitem">
                    <li v-for="attributeitem in attributeitems" v-if="attributeitem.attribut_id == attributes.id "><input type="checkbox" name="" v-model="checkattribute"  :value="attributeitem.name1" @click="filterattribute()">@{{attributeitem.name1}}</li>


                </ul>



            </div>




        </div>



    </div>

</span>



<div class="col-lg-10" style="display: inline-block;margin-top:1%;max-width: 81%;">
    <div class="card" style="min-height:1300px; ">
        <div class="card-header" style="background-color: #fff !important; border-bottom: none;">


          <ul class="shopheader">
            <li>

مرتب سازی بر اساس:


            </li>

            <li>جدید ترین</li>
            <li @click="sortByLowPrice">ارزان ترین</li>

            <li @click="sortByHigherPrice">گرانترین</li>



          </ul>


        </div>
        <div class="card-body"></div>

        @{{produt}}
        <div id="ListProduct" style="position: absolute;top: 5%;">



            <ul  class="col-lg-12" style="padding-left:0px !important; padding-right: 0px !important;" id="products">





                <li :data-price="products.price" class="col-lg-3 product_price" style="float: right;width: 1000px;" v-for="products in product" v-if="products.category_id == <?php echo $id ?> && filterbrands(products) && status(products) &&filterattribute(products) ">
                    <a :href="'/product/'+products.category_id+'/'+products.PID">
                    <img :src="/imagepro/+products.productimage"   style="width: 100%;
height: auto;
margin-top: 53px;">
                    <span class="text">@{{products.productname}}</span>
                    <span class="price">@{{products.price}}تومان</span>

                    </a>
                </li>



            </ul>



        </div>

        <pagination v-if="pagination.last_page >1 "   :pagination="pagination" offset="5" @paginate="ShowProduct()"></pagination>


    </div>





</div>





</div>






@include('layouts.footer')
