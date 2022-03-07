<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use App\Category;
use App\image;
use App\attributegroup;
use App\attributeitem;
use App\order;
use App\attribute;
use App\Rreview;
class ProductControllers extends Controller
{


    public function index(){

        $category=Category::all();
        $group=attributegroup::orderBy('id','desc')->get();
        $items=attribute::orderBy('id','desc')->get();
        return view('admin.product.index',['category'=>$category,'group'=>$group,'items'=>$items]);
    }
    public function image(Request $request){

        $file=$request->file('file');
        $filename=time().$file->getClientOriginalName();

        $file->move('imagepro', $filename);

        return $filename;

    }

    public function addproduct(Request $request){


        $name=$request->name;
        $price=$request->price;
        $count=$request->count;
        $text=$request->text;
        $category=$request->category;


        $p=new  product();
        $p->productname=$name;
        $p->disc=$text;
        $p->price=$price;
        $p->count=$count;
        $p->disc=$text;
        $p->productimage=$request->image;
        $p->category_id=$category;

        if($p->save()){


return $p;

}





    }



    public function addreview(Request $request){


        $r=new Rreview();
        $r->text=$request->text;
        $r->state1=$request->state1;
        $r->state2=$request->state2;
        $r->state3=$request->state3;
        $r->state4=$request->state4;
        $r->product_id=$request->product_id;

        if ($r->save()){
            return "ok";

        }
    }



    public function productimage(Request $request){


        $id=$request->id;
        $file=$request->file('file');
        $filename=time().$file->getClientOriginalName();
        $file->move('productimage', $filename);


        $image=new image();

        $image->image=$filename;
        $image->product_id=$id;

        if($image->save()){

                $product=product::find($id);

        }else{

            $product=product::latest()->first();
        }


        return  $image=image::find($image->id);

           $product->images()->attach($image->id);


    }


    public function  changestatus(Request $request){


        $id=$request->id;
        $status=$request->status;

       $order=order::where('id',$id)->update([

        'status'=>$status


       ]);

       if($order){
           return redirect('/admin/order');
       }


    }



}
