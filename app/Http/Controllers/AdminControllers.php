<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\product;
use App\discount;
use App\order;
use Verta;
class AdminControllers extends Controller
{

    public function index()
    {



        return view('admin.index');
    }


    public function category()
    {


            $category=Category::orderBy('id','desc')->get();
        return view('admin.category.category',['category'=>$category]);
    }

    public function addcategory(Request $request)
    {







     $name=$request->name;
     $parent_id=$request->parent_id;
     $filename=$request->image;



     $category=new Category();
     $category->name=$name;
     $category->parent_id =$parent_id;
      $category->image =$filename;

     if ($category->save()){

         return $category;
     }




    }














    public function deletecategory(Request $request){

    $cat=$request->cat;

    $delete=Category::find($cat)->delete();

    if ($delete){
        return"true";
    }

    }

    public function getcategory(){

        return Category::all();
    }
    public function discountshow(){

        $product=product::orderby('PID','desc')->get();

        return view('admin.discount.index',['product'=>$product]);
    }

    public function addDiscount(Request $request){

        $name=$request->name;
        $value=$request->value;
        $code=$request->code;
        $product_id=$request->product_id;
        $begindate=$request->begindate;
        $enddate=$request->enddate;


        $dis=new discount();
        $dis->name=$name;
        $dis->value=$value;
        $dis->code=$code;
        $dis->product_id=$product_id;
        $dis->begindate=$begindate;
        $dis->enddate=$enddate;



        if ($dis->save()){

            return "true";
        }





    }


    public function order()
    {

        $order = order::orderby('created_at', 'desc')->paginate(10);
        $product = product::orderby('created_at', 'desc')->paginate(10);

        return view('admin.order', ['order' => $order, 'product' => $product]);


    }
        public function showdiscount(){

        $discount=discount::orderby('begindate','desc')->get();
            return view('admin.discount.show',['discount'=>$discount]);

        }

        public function  removediscount($id){

      $discount=discount::find($id)->delete();


      return redirect('/admin/showdiscount');
        }


        public function  review(){


        $product=product::orderby('PID' ,'desc')->get();
        return view('admin.review',['product'=>$product]);


        }


}
