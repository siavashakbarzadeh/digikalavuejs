<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table ="orders";

    protected  $appends=['product_full_name'];

    public  function getProductFullNameAttribute(){

        $product=product::find($this->product_id);


        return $product->productname ;
    }

}
