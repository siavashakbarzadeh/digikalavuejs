<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{


    public function create(){
       $category=Category::paginate(20);
        return view("admin.category.show",["category"=>$category]);
    }


    public function delete(Request $request){

        $cat=Category::find($request->id)->delete();


        if($cat){
            return "true";
        }
    }


    public function updatecategory(Request $request){

       $name=$request->name;
           $parent_id=$request->parent_id;
        $id=$request->id;

           $category=Category::where('id',$id)->update([

               'name'=>$name,

              'parent_id'=>$parent_id,

           ]);



           if ($category){
               return $category;
           }
    }



    public function image(Request $request){



        $file=$request->file('file');
        $filename=time().$file->getClientOriginalName();
        $file->move('imagecategory', $filename);


        return $filename;


    }


    public function updateimage(Request $request){

        $id=$request->categoryId;

        $file=$request->file('file');
        $filename=time().$file->getClientOriginalName();
        $file->move('imagecategory', $filename);



        $s=Category::where('id',$id)->update([

            'image'=>$filename




        ]);


        if ($s){

            return $s;

        }

    }

}
