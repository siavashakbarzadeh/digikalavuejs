<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
use  App\address;
use App\product;
use Auth;

class ShopControllers extends Controller
{


    public function addcart(Request $request){

        if (session::has('cart')) {
            $cart = session::get('cart');


            if (array_key_exists($request->id, $cart)) {

                $cart[$request->id]++;
            } else {
                $cart[$request->id] = 1;

            }

            session::put('cart', $cart);
        }else{
            $cart=array();
            $cart[$request->id] = 1;
            session::put('cart', $cart);
        }

         //return view('shop');

       return $cart;

    }

    public function cart(){


        $menu=Category::where('parent_id',0)->get();

        $submenu=Category::where('parent_id','!=',0)->get();



        return view("cart",['menu'=>$menu,'submenu'=>$submenu]);


    }

    public  function deletecart(Request $request){

        $cart = session::get('cart');
        session::forget('cart');
        $cart2=array();
        foreach ($cart as $key=>$value){


            if ($key!=$request->PID){
                $cart2[$key]=$value;

            }else{
                $count=$cart[$request->PID]-1;

                if ($count == 0){

                }else{
                    $cart2[$request->PID]=$count;
                }
            }
        }
        session::put('cart',$cart2);
        return redirect()->back();

    }

    public function shipping(){
        $id=Auth::user()->id;
        $address=address::where('user_id',$id)->first();



include_once ('jdf.php');

                    $timezone = 0;
                    $now = date("Y-m-d", time()+$timezone);
                    $time = date("H:i:s", time()+$timezone);
                    $threeDaysAgo = time() + (2 * 24 * 60 * 60);
                    list($year, $month, $day) = explode("-" , date("Y-m-d", $threeDaysAgo));
                    list($hour, $minute, $second) = explode(':', $time);
                    $timestamp = mktime($hour, $minute, $second, $month, $day, $year);
                    $d1 = $jalali_date = jdate("d F",$timestamp);
                    $d2 = $jalali_date = jdate("l",$timestamp);




                    $threeDaysAgo1 = time() + (3 * 24 * 60 * 60);
                    list($year1, $month1, $day1) = explode("-" , date("Y-m-d", $threeDaysAgo1));
                    list($hour1, $minute1, $second1) = explode(':', $time);
                    $timestamps = mktime($hour1, $minute1, $second1, $month1, $day1, $year1);
                    $da1 = $jalali_date = jdate("d F",$timestamps);
                    $da2 = $jalali_date = jdate("l",$timestamps);




        $threeDaysAgo2 = time() + (4 * 24 * 60 * 60);
        list($year2, $month2, $day2) = explode("-" , date("Y-m-d", $threeDaysAgo2));
        list($hour2, $minute2, $second2) = explode(':', $time);
        $timestampss = mktime($hour2, $minute2, $second2, $month2, $day2, $year2);
        $daa1 = $jalali_date = jdate("d F",$timestampss);
        $daa2 = $jalali_date = jdate("l",$timestampss);





        $threeDaysAgo3 = time() + (5 * 24 * 60 * 60);
        list($year3, $month3, $day3) = explode("-" , date("Y-m-d", $threeDaysAgo3));
        list($hour3, $minute3, $second3) = explode(':', $time);
        $timestamps = mktime($hour3, $minute3, $second3, $month1, $day3, $year3);
        $daaa1 = $jalali_date = jdate("d F",$timestamps);
        $daaa2 = $jalali_date = jdate("l",$timestamps);





        $threeDaysAgo4 = time() + (6 * 24 * 60 * 60);
        list($year4, $month4, $day4) = explode("-" , date("Y-m-d", $threeDaysAgo4));
        list($hour4, $minute4, $second4) = explode(':', $time);
        $timestamps = mktime($hour4, $minute4, $second4, $month4, $day4, $year4);
        $daaaa1 = $jalali_date = jdate("d F",$timestamps);
        $daaaa2 = $jalali_date = jdate("l",$timestamps);

        return view('shipping',['address'=>$address,'d1'=>$d1,'d2'=>$d2 ,'da1'=>$da1,'da2'=>$da2,'daa2'=>$daa2,'daa1'=>$daa1,'daaa2'=>$daaa2,'daaa1'=>$daaa1,'daaaa2'=>$daaaa2,'daaaa1'=>$daaaa1]);
    }


    public function addtime(Request $request){


        $date= $request->date;
        $address=address::where('id',$request->id)->update([


            'date'=>$date


        ]);
        return $address;

    }

    public function checkout2(){
        $id=Auth::user()->id;
        $address=address::where('user_id',$id)->first();
        return view('checkout2',['address'=>$address]);
    }


    public function buy(Request $request){

    }
    public  function  order(){

    }
}
