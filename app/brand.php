<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table ="brands";
    public $timestamps=false;

    protected $fillable=['name','country','image','product_id'];
}
