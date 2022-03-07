<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\brand;
use App\Category;
use DB;
class BrandControllers extends Controller
{
    public function index(){


        $product=product::orderby('PID','desc')->get();

        $category=Category::orderby('id','desc')->get();
        return view('admin.brand.index',['product'=>$product,'category'=>$category]);

    }


    public function image(Request $request){

        $file=$request->file('file');
        $filename=time().$file->getClientOriginalName();
        $file->move('brand', $filename);

        return $filename;

    }


    public function addbrand(Request $request){

        $data=$request->all();

      return  $brand=brand::create($data);




    }


        public function showbrand(){

      return   $product=DB::table('brands')
      ->select('category_id' ,'Ename','name')
      ->leftjoin('products','brands.product_id','=','products.PID')
      ->get();



    }
}
