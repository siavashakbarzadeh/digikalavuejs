<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
class UserControllers extends Controller
{
   public function index(){



        return view('admin.user.index');
   }
   public function store(Request $request){

       $fname=$request->fname;
       $lname=$request->lname;
       $email=$request->email;
       $role=$request->role;
       $password=Hash::make($request->password);



       $user=new User();
       $user->fname=$fname;
       $user->lname=$lname;
       $user->email=$email;
       $user->roule=$role;
       $user->password=$password;
       $user->state=1;


       if($user->save()){

           return $user;
       }

   }

   public function show(){



       return view('admin.user.show');


   }



    public function getuser()
    {
        $user=User::orderBy('id','desc')->paginate(10);

        return $user;

    }

    public function deleteuser(Request $request){

       $user=User::find($request->id)->delete();


       if($user){
           return 'true';
       }
    }



    public function updatestatus(Request $request){

       $id=$request->id;

       $u=User::find($id);

       if ($u->state == 1){

           $user=User::where('id',$id)->update([

               'state'=>0



       ]);
       }
       else{
           $user=User::where('id',$id)->update([

               'state'=>1



           ]);
       }


       return $user;


    }


}
