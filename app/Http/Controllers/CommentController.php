<?php

namespace App\Http\Controllers;

use App\Category;
use App\product;
use App\Comment;
use App\ProductScore;
use Illuminate\Http\Request;
use Auth;
class CommentController extends Controller
{
   public  function index($category_id,$product_id){
        $menu=Category::where('parent_id',0)->get();
        $submenu=Category::where('parent_id','!=',0)->get();
        $category=Category::find($category_id);
        $product=product::where('PID',$product_id)->first();
     return view('comment',['id'=>$product_id,'product'=>$product,'menu'=>$menu,'submenu'=>$submenu,'category'=>$category,'category_id'=>$category_id]);
    }
    public  function addComments(Request $request)
    {
        $advantages=$request->plus;
        $disadvantages=$request->mines;
        $a='';
        $d='';
        foreach($advantages as $key=>$value){

            echo $a.=$value.'@$';
        }
        foreach($disadvantages as $key=>$value){

            echo $d.=$value.'@$';
        }
       $comment=new Comment();
       $comment->comment_title=$request->comment_title;
       $comment->text=$request->text;
       $comment->product_id=$request->product_id;
       $comment->user_id=Auth::user()->id;
       $comment->advantages=$a;
       $comment->disadvantages=$d;
       if ($comment->save()){


           foreach($request->item_value as $key=>$value){


              $score=new ProductScore();
              $score->product_id=$request->product_id;
              $score->item_value=$value;
              $score->item_id=$key;

              $score->save();
           }

           return redirect()->back();
       }
    }






}
