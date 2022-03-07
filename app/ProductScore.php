<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductScore extends Model
{
    protected $table='product_score';
    protected $fillable =['product_id','item_id','item_value'];
    public $timestamps=false;
}
