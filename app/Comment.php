<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Hekmatinasser\Verta\Verta;
class Comment extends Model
{
    protected $table="comments";
    protected  $appends=['user_full_name','comment_full_advantage','product_image','product_url' ];


    public function getProductImageAttribute()
    {
        if ($this->product_id){
            $product=product::find($this->product_id);

            return $product->productimage ;
        }
    }
    public function  getUserFullNameAttribute()
    {

        $id=$this->user_id;

        $user=User::find($id);
       echo "<p >".$user->name . $user->lname."<span> در تاریخ ".  verta($this->created_at). "</span>". "</p>";

    }



    public  function getCommentFullAdvantageAttribute()
    {


      //  <span style='width: 10px;height: 10px; border-radius: 100%;background:#00bfd6;position: absolute;right: 106px;top: 135px;'></span>

        if (!empty($this->advantages)){

            echo "<p style='color: #00bfd6;'>نقاط قوت </p> ";


            $advantage=explode('@$',$this->advantages);

            echo "<ul style='margin-top: -37px;'>";
            foreach ($advantage as $advantages){

                if (!empty($advantages)){
                echo "<li  style='margin-right: 66px; margin-top: 17px;'><span  style='color:#00bfd6;margin-left: 12px;font-size: 10px;'  class='icon icon-circle'> </span>" .$advantages . "</li>";
            }

            }



            echo "</ul>";
        }


        echo "<div style='float: left;position: absolute;top: 126px;left: 140px;'>";

        if (!empty($this->disadvantages)){

            echo "<p style='color: #ff637d;'>نقاط ضعف </p> ";


            $disadvantages=explode('@$',$this->disadvantages);

            echo "<ul style='margin-top: -37px;'>";
            foreach ($disadvantages as $disadvantagess){

                if (!empty($disadvantagess)){
                    echo "<li  style='margin-right: 66px; margin-top: 17px;'><span  style='color:#ff637d;margin-left: 12px;font-size: 10px;'  class='icon icon-circle'> </span>" .$disadvantagess . "</li>";
                }

            }



            echo "</ul>";
        }

        echo "</div>";


    }

    protected  $fillable=['comment_title','text','product_id','user_id','advantages'];




}
