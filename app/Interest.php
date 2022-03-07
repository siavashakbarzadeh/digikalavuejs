<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
   protected  $table="interests";

   protected  $appends=['product_title','product_image','product_price','product_url'];


   public function getProductTitleAttribute()
   {
       $product=product::find($this->product_id);

       return $product->productname ;
   }

    public function getProductImageAttribute()
    {
        $product=product::find($this->product_id);

        return $product->productimage ;
    }

    public function getProductPriceAttribute()
    {
        $product=product::find($this->product_id);

        return $product->price ;
    }


    public function getProductUrlAttribute()
    {
        $product=product::find($this->product_id);

        return "/product/".$product->category_id ."/".$product->PID ;
    }

   public  $timestamps=false;
}
