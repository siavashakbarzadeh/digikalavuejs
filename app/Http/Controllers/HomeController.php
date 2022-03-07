<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\attributegroup;
use App\product;
use App\discount;
use App\attribute;
use App\attributeitem;
use App\address;

use Auth;
class HomeController extends Controller
{

    public function address(Request $request)
    {

        $a = new address();

        $a->name = $request->name;
        $a->lname = $request->lname;
        $a->mobile = $request->mobile;
        $a->codemeli = $request->codemeli;
        $a->province = $request->province;
        $a->city = $request->city;
        $a->zipcode = $request->zipcode;
        $a->address = $request->address;
        $a->fullname = $request->fullname;
        $a->nocode = $request->nocode;
        $a->user_id = Auth::user()->id;


        if ($a->save()){
            return redirect('/shipping');
        }

}


    public function index()
    {

      $menu=Category::where('parent_id',0)->get();

      $submenu=Category::where('parent_id','!=',0)->get();

    $product=product::orderby('PID','desc')->get();
    $group=attributegroup::orderby('id','desc')->get();
        $newp=product::orderby('created_at','desc')->get();
        $discount=discount::orderby('id','desc')->get();
        $attribute=attribute::orderby('id','desc')->get();
        $item=attributeitem::orderby('id','desc')->get();
        return view('home',['attribute'=>$attribute,'item'=>$item,'menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'group'=>$group,'newp'=>$newp,'discount'=>$discount]);
    }


    public function signup(){
        return view('auth.signup');
    }
}
