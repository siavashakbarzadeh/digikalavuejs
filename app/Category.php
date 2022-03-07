<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\attributegroup;
class Category extends Model
{
    protected $table="category";

    public  $timestamps=false;

    public function groups(){

        return $this->hasOne(attributegroup::class);

    }
}
