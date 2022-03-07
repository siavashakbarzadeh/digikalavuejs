<?php

namespace App\Http\Controllers;

use App\address;
use App\Category;
use App\Comment;
use App\Company;
use App\order;
use App\product;
use App\Interest;
use App\User;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{

    public  function  home(){
        $menu=Category::where('parent_id',0)->get();

        $submenu=Category::where('parent_id','!=',0)->get();

        $product=product::orderby('PID','desc')->get();
        return view('user.profile',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product]);
    }



    public function order(){

        $menu=Category::where('parent_id',0)->get();

        $submenu=Category::where('parent_id','!=',0)->get();

        $product=product::orderby('PID','desc')->get();

        $order=order::where('user_id',Auth::user()->id)->paginate(5);
        return view('user.order',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'order'=>$order]);
    }



    public  function interest(){
        $menu=Category::where('parent_id',0)->get();

        $submenu=Category::where('parent_id','!=',0)->get();

        $product=product::orderby('PID','desc')->get();

        $interest=Interest::where('user_id',Auth::user()->id)->paginate(5);
        return view('user.interest',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'interest'=>$interest]);
    }


    public  function personal()
    {
        $menu=Category::where('parent_id',0)->get();
        $submenu=Category::where('parent_id','!=',0)->get();
        $product=product::orderby('PID','desc')->get();
        $interest=Interest::where('user_id',Auth::user()->id)->paginate(5);
        return view('user.personal',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'interest'=>$interest]);
    }

    public function RemoveInterest(Request $request){
        if ($request->id){
            $Interest=Interest::find($request->id)->delete();

            return redirect()->back();

        }
    }

    public function comment(){
        $menu=Category::where('parent_id',0)->get();

        $submenu=Category::where('parent_id','!=',0)->get();

        $product=product::orderby('PID','desc')->get();
        $comment=Comment::orderby('id','desc')->get();
        return view('user.comment',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'comment'=>$comment]);
    }

    public  function addresses()
    {
        $menu=Category::where('parent_id',0)->get();
        $submenu=Category::where('parent_id','!=',0)->get();
        $product=product::orderby('PID','desc')->get();
        $comment=Comment::orderby('id','desc')->get();
        $address=address::where('user_id',Auth::user()->id)->get();

        return view('user.address',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'comment'=>$comment,'address'=>$address]);
    }

    public  function removcomment(Request $request){
        if ($request->id){
            $Interest=Comment::find($request->id)->delete();

            return redirect()->back();

        }
    }


    public  function insert_address(Request $request){

        $a = new address();


        $a->mobile = $request->mobile;
        $a->province = $request->province;
        $a->city = $request->city;
        $a->zipcode = $request->zipcode;
        $a->address = $request->address;
        $a->fullname = $request->name;
        $a->name = $request->name;
        $a->user_id = Auth::user()->id;


        if ($a->save()){
            return redirect('/profile/addresses');
        }
    }

    public  function UpdateAddress(Request $request)
    {
        $address=address::where('id',$request->id)->update([
            'mobile' => $request->mobile,
            'province' => $request->province,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'fullname' => $request->name,
        ]);


        if ($address){

            return redirect()->back();
        }
    }


    public function DeleteAddress(Request $request){

        $adress=address::find($request->id)->delete();


        return redirect()->back();
    }


    public  function UserInfo(){

        $menu=Category::where('parent_id',0)->get();
        $submenu=Category::where('parent_id','!=',0)->get();
        $product=product::orderby('PID','desc')->get();
        $comment=Comment::orderby('id','desc')->get();
        $address=address::where('user_id',Auth::user()->id)->get();

        return view('user.user_info',['menu'=>$menu,'submenu'=>$submenu,'product'=>$product,'comment'=>$comment,'address'=>$address]);
    }



    public  function StoreUserInfo(ProfileRequest $request){


        if ($request->has('name')){
            $name=$request->name;
        }else{
            $name='';
        }

        if ($request->has('lname')){
            $lname=$request->name;
        }else{
            $lname='';
        }



        if ($request->has('year') && $request->has('mounth') && $request->has('day')){
            $date=$request->year .'/'.$request->mounth .'/'.$request->day;
        }else{
            $date='';
        }


        if ($request->has('mobile')){
            $mobile=$request->mobile;
        }else{
            $mobile='';
        }



        if ($request->has('email')){
            $email=$request->email;
        }else{
            $email='';
        }



        if ($request->has('banknumber')){
            $banknumber=$request->banknumber;
        }else{
            $banknumber='';
        }

        if ($request->has('NationalCode')){
            $NationalCode=$request->NationalCode;
        }else{
            $NationalCode='';
        }


        if ($request->has('company_name')){
            $company_name=$request->company_name;
        }else{
            $company_name='';
        }


        if ($request->has('code')){
            $code=$request->code;
        }else{
            $code='';
        }



        if ($request->has('nationalcode')){
            $nationalcode=$request->nationalcode;
        }else{
            $nationalcode='';
        }




        if ($request->has('number')){
            $number=$request->number;
        }else{
            $number='';
        }




        if ($request->has('phone')){
            $phone=$request->phone;
        }else{
            $phone='';
        }




        if ($request->has('state')){
            $state=$request->state;
        }else{
            $state='';
        }




        if ($request->has('city')){
            $city=$request->city;
        }else{
            $city='';
        }

        $user_id=Auth::user()->id;
        $user= User::where('id',$user_id)->update([
            'name'=>$name,
            'lname'=>$lname,
            'email'=>$email,
            'banknumber'=>$banknumber,
            'mobile'=>$mobile,
            'NationalCode'=>$NationalCode,
            'Dateofbirth'=>$date
        ]);

        if ($user==1){

            if ($request->has('company')) {

                $company = new Company();
                $company->company_name = $company_name;
                $company->code = $code;
                $company->number = $number;
                $company->phone = $phone;
                $company->state = $state;
                $company->city = $city;

                $company->save();

                return redirect('/profile/user-info');

            }
        }

    }

}
