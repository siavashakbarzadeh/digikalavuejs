<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\product;
use DB;
use App\attribute;
use App\attributeitem;
use App\Rreview;
use App\ProductScore;
use App\Comment;
use App\attributeitem_product;
class FilterControllers extends Controller
{



    public function index($id){
        $menu=Category::where('parent_id',0)->get();

        $submenu=Category::where('parent_id','!=',0)->get();

        $product=product::orderby('PID','desc')->get();

        return view('Filter',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'id'=>$id]);


    }


    public function ShowProduct(){

       $product=DB::table('products')
        ->leftjoin('brands','products.PID','=','brands.product_id')
        ->leftjoin('attributeitem_product','products.PID','=','attributeitem_product.product_PID')
        ->leftjoin('attributeitems','attributeitem_product.attributeitem_id','=','attributeitems.id')


        ->paginate(10);



       $reponse=['pagination'=>[

           'total'=>$product->total(),
           'per_page'=>$product->perPage(),
           'current_page'=>$product->currentPage(),
           'last_page'=>$product->lastPage(),
           'from'=>$product->firstItem(),
           'to'=>$product->lastPage()

       ],
           'data'=>$product
       ];

       return response()->json($reponse);

    }


    public function attribute(){
      return attribute::orderby('id','desc')->get();


    }

    public function attributeitems(){
       return attributeitem::orderby('id','desc')->get();

    }


    public  function showproducts($category_id ,$product_id){

         $menu=Category::where('parent_id',0)->get();
         $submenu=Category::where('parent_id','!=',0)->get();
         $category=Category::find($category_id);
         $product=product::where('PID',$product_id)->first();
         $review=Rreview::where('product_id',$product_id)->first();
         $comment=Comment::where('product_id',$product_id)->get();
         $attribute=attribute::orderby('id','desc')->get();
         $item=attributeitem::orderby('id','desc')->get();
         $score=ProductScore::where('product_id',$product_id)->paginate(6);
        return view("show",['product'=>$product,'menu'=>$menu,'submenu'=>$submenu,'category'=>$category,'category_id'=>$category_id,'review'=>$review,'attribute'=>$attribute,'item'=>$item,'score'=>$score,'comment'=>$comment]);

    }
}
