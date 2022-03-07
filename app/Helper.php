<?php
namespace App;
use App\attribute;
use App\attribute_product;
use App\attributeitem_product;
use App\attributeitem;
use App\Category;
use App\imageproduct;
use App\image;
use App\brand;
use App\attributegroup;
use App\address;
use DB;
use Verta;
class Helper{
public  $name1;
    public static function attribute($id){

    $attr=attribute_product::where('product_id',$id)->first();


    if ($attr){

      $id1=$attr->attribute_id;

        $attr1=attribute::find($id1);

        return $attr1->name2 ;
    }




}

        public static  function item($id){

            $attr=attributeitem_product::where('product_id',$id)->first();


            if ($attr){

                $id1=$attr->attributeitem_id;

                $attr1=attributeitem::find($id1);

                return $attr1->name1 ;
            }


        }


        public  static  function CategoryRoot($id){

        $menu=Category::where('id',$id)->first();


        $smenu=Category::where('id',$menu->parent_id)->first();


        $smenus=Category::where('id',$smenu->parent_id)->first();

            if ($smenus){
                $s=$smenus->name;
            }else{
                $s="";
            }


        echo "<a class='category' href='/'>فروشگاه اینترنتی دیجی کالا</a>  ".'/'."<a class='category'  href='/search/'>$s </a>". '/'."<a  class='category' href='/search/'>$smenu->name </a>" .'/'."<a class='category' href='/search/'>$menu->name </a>"  ;

        }



        public  static  function category($id){

            $menu=Category::where('id',$id)->first();
            $smenu=Category::where('id',$menu->parent_id)->first();

            $smenus=Category::where('id',$smenu->parent_id)->first();

            if ($smenus){
                $s=$smenus->name;
            }else{
                $s="";
            }

           echo "<ul class='categorys'> <li ><i class='icon icon-angle-left'></i><a>$s</a></li> <li style='padding: 10px'><i class='icon icon-angle-down'></i><a href=''>$smenu->name</a></li> <li style='padding-right: 25px;font-weight: bold;'><i class='icon icon-angle-down'></i><a>$menu->name</a></li>  </ul>";
        }


        public static function ShowImage($id){

                $image=imageproduct::where('product_PID',$id)->get();

                foreach ($image as $images){


                    $img=image::find($images->image_id);

                    echo "<li><img src='/productimage/$img->image' class='showimage'></li>";


                }

        }

        public  static  function brand($id){

        $brand=brand::where('product_id',$id)->first();

        if ( $brand){
            return $brand->name;
        }



        }

        public  static  function attributes($id){

            $attr=attribute_product::where('product_PID',$id)->get();


          foreach ($attr as $attrs){

              $attr1=attribute::find($attrs->attribute_id);

              echo "<li>$attr1->name2</li>";
          }

        }

    public static  function items($id){



        $item=DB::table('attributeitem_product as a')->where('a.product_PID',$id)
            ->join('attributeitems as a1','a.attributeitem_id','=','a1.id')
            ->join('attributes as a2','a1.attribute_id','=','a2.id')->get();
        if ($item){

                foreach ($item as $items){

                     $attr1=attributeitem::find($items->attributeitem_id);

                  echo "<li>  <span style='background: #faf6f6;padding: 5px 19px 10px 156px;'>$items->name</span> <span style='margin-right: 22px;background: #faf6f6;padding: 5px 19px 10px 72%'>$attr1->name</span> </li>";

                }

        }


    }



    public static  function mortabet($id)
    {


        echo $group = attributegroup::where('category_id', $id)->first();


        if ($group) {



        $product = product::where('category_id', $group->category_id)->get();


        if ($product) {

            foreach ($product as $products) {

                echo "  <li>
                                <img src='/imagepro/$products->productimage' width='210px' height='210px'>
                                <span class='text'>$products->productname</span>
                                <span class='price'> $products->priceتومان </span>
                            </li>";

            }

        }

    }

    }



    public  static  function get_current_user($user_id){


        $user=User::find($user_id);

        echo "<td  style='cursor: pointer'><a data-toggle='modal' data-target='#mymodal$user_id'>$user->name $user->lname</a></td>  <td>$user->email</td><td>$user->mobile</td>";


    }


    public static  function  get_product_order($product_id){

        $product=product::find($product_id);

      //  echo "<td data-toggle='modal' data-target='#modalproduct$product_id'>$product->productname</td>";



    }

    public static  function  get_product_discount($product_id){

       $products=product::where('PID',$product_id)->first();

       echo "<td >$products->productname</td>";



    }


    public static  function  get_address_order($address_id){


    echo $address=address::find($address_id);


     //echo "<td>$address->province</td>";


    }


    public  static  function  get_user($user_id){

        $user=User::find($user_id);

        echo "<td>$user->fname  $user->lname</td><td>$user->email  </td><td>$user->banknumber  </td><td>$user->phone  </td><td>$user->mobile  </td><td>$user->gender  </td>";

    }


    public static  function  get_product($id){



        $product=product::find($id);


        $date=new Verta($product->created_at);

        if($product->productimage){
            $img="<img src=/productimage/$product->productimage  style='width: 80px;height: 80px;'>";
        }

        echo "<td>$product->price</td><td>$date</td><td>$img</td><td>$product->count</td>";
    }


}



