<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Interest;
use Auth;

class LikeController extends Controller
{

    public function LikeComment(Request $request)
    {

        if (Auth::user()) {


            $user_id = Auth::user()->id;
            $comment_id = $request->CommentId;
            $product_id = $request->ProductID;
            $likes = Like::where(function ($query) use ($comment_id, $user_id) {
                $query->where('user_id', $user_id);
                 $query->where('comment_id', $comment_id);
            })->get();

            if (count($likes)==0) {
                $like = new Like();
                $like->comment_id = $comment_id;
                $like->product_id = $product_id;
                $like->user_id = $user_id;
                $like->type = 1;
                if ($like->save()) {

                }



            } else {
                $likes = Like::where(function ($query) use ($comment_id, $user_id) {
                  $query->where('user_id', $user_id);
                  $query->where('comment_id', $comment_id);
              })->delete();
            }
            $like_count = Like::where(function ($query) use ($comment_id, $product_id, $user_id) {
                $query->where('type', 1);
                $query->where('comment_id', $comment_id);
                $query->where('product_id', $product_id);

            })->get();

            return count($like_count);

        } else {
            return "no";
        }

    }



    public  function DisLikeComment(Request $request){
        if (Auth::user()) {


            $user_id = Auth::user()->id;
            $comment_id = $request->CommentId;
            $product_id = $request->ProductID;
            $likes = Like::where(function ($query) use ($comment_id, $user_id) {
                $query->where('user_id', $user_id);
                $query->where('comment_id', $comment_id);
            })->get();

            if (count($likes)==0) {
                $like = new Like();
                $like->comment_id = $comment_id;
                $like->product_id = $product_id;
                $like->user_id = $user_id;
                $like->type = 0;
                if ($like->save()) {

                }



            } else {
                $likes = Like::where(function ($query) use ($comment_id, $user_id) {
                    $query->where('user_id', $user_id);
                    $query->where('comment_id', $comment_id);
                })->delete();
            }
            $like_count = Like::where(function ($query) use ($comment_id, $product_id, $user_id) {
                $query->where('type', 0);
                $query->where('comment_id', $comment_id);
                $query->where('product_id', $product_id);

            })->get();

            return count($like_count);

        } else {
            return "no";
        }

    }



    public  function Like(Request $request){

        if (Auth::user()) {


            $user_id = Auth::user()->id;
                $product_id = $request->ProductID;
             $likes = Interest::where(function ($query) use ($user_id, $product_id) {
                $query->where('user_id', $user_id);
                $query->where('product_id', $product_id);

            })->get();

        if (count($likes)==0) {
            $like = new Interest();
            $like->product_id = $product_id;
            $like->user_id = $user_id;
            $like->type = 1;
            if ($like->save()) {

            }

        } else {
            $likes = Interest::where(function ($query) use ($product_id, $user_id) {
                $query->where('user_id', $user_id);
                $query->where('product_id', $product_id);
            })->delete();
        }
        $like_count = Interest::where(function ($query) use ( $product_id, $user_id) {
            $query->where('type', 1);
            $query->where('user_id', $user_id);
           $query->where('product_id', $product_id);

        })->get();

        return count($like_count);

    } else {
            return "no";
        }



    }

}
