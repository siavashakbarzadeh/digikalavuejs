<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\attributegroup;
use App\attribute;
use App\product;
use App\attributeitem;
class AttributeControllers extends Controller
{


    public function addgroup(Request $request){


        $name=$request->name;
        $id=$request->id;

        $group=  new attributegroup();

            $group->name=$name;
            $group->category_id=$id;

            if ($group->save()){

                return  $group;

            }

    }


    public function attribute( Request $request){


        $name=$request->name;
        $id=$request->id;

        $productid=$request->productid;

        $group=  new attribute();

        $group->name_attr=$name;
        $group->attributegroup_id =$id;

        if ($group->save()) {


            if (  $productid){

                $product = product::find($productid);
            }else{
                $product=product::latest()->first();
            }





        }
            $attribute=attribute::find($group->id);

            $attr=$product->attributes()->attach($attribute->id);



            return $attr;

    }

    public function attributeitem(Request $request){



        $name=$request->attributeitem;
        $attribute_id =$request->itemid ;

        $productid=$request->productid;

        $item=  new attributeitem();

        $item->name=$name;
        $item->attribute_id  = $attribute_id ;

        if ($item->save()) {


            if (  $productid){

                $product = product::find($productid);
            }else{
                $product=product::latest()->first();
            }





        }
        $attributeitems=attribute::find($item->id);

        $attr=$product->attributeitems()->attach($attributeitems->id);



        return $attr;


    }





}
