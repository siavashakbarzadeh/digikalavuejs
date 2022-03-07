<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix'=>'admin',['middleware'=>'signup']],function(){


    Route::get('index','AdminControllers@index');

    Route::get('category','AdminControllers@category');
    Route::post('addcategory','AdminControllers@addcategory');
    Route::post('imagecategory','CategoryController@image');
    Route::post('updateimage','CategoryController@updateimage');
    Route::post('deletecategory','AdminControllers@deletecategory');
    Route::get('getcategory','AdminControllers@getcategory');

    Route::get('create','CategoryController@create');
    Route::get('adduser','UserControllers@create');
    Route::post('deletecat1','CategoryController@delete');
    Route::post('updatecategory','CategoryController@updatecategory');

    Route::post('updatecategory','CategoryController@updatecategory');

    /********route User****************/

    Route::get('user','UserControllers@index');
    Route::get('showuser','UserControllers@show');
    Route::get('getuser','UserControllers@getuser');
    Route::post('adduser','UserControllers@store');

    Route::post('deleteuser','UserControllers@deleteuser');

    Route::post('updatestatus','UserControllers@updatestatus');

    /**********************product*******************************/


    Route::get('product','ProductControllers@index');
    Route::post('addproduct','ProductControllers@addproduct');
    Route::post('addreview','ProductControllers@addreview');
    Route::post('image','ProductControllers@image');
    Route::post('productimage','ProductControllers@productimage');
    Route::post('changestatus','ProductControllers@changestatus');


    /**********************attribute***************************/

    Route::post('atrrgroup','AttributeControllers@addgroup');
    Route::post('attribute','AttributeControllers@attribute');
    Route::post('attributeitem','AttributeControllers@attributeitem');


    /**********discount***********************/


    Route::get('/discount','AdminControllers@discountshow');
    Route::get('/showdiscount','AdminControllers@showdiscount');
    Route::get('/removediscount/{id?}','AdminControllers@removediscount');




    Route::get('/review','AdminControllers@Review');


Route::post('/addDiscount','AdminControllers@addDiscount');


Route::get('/brand','BrandControllers@index');

    Route::post('imagebrand','BrandControllers@image');
    Route::post('addbrand','BrandControllers@addbrand');
    Route::get('/showbrand','BrandControllers@showbrand');
    Route::get('/order','AdminControllers@order');




});


    Route::get('signup','HomeController@signup');




Route::get('/ShowProduct','FilterControllers@ShowProduct');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::get('/search/{id?}','FilterControllers@index');

Route::get('/attribute','FilterControllers@attribute');

Route::get('/attributeitems','FilterControllers@attributeitems');
Route::get('/product/{category_id}/{id}','FilterControllers@showproducts');


/********************/

Route::post('/addcart','ShopControllers@addcart');
Route::post('/deletecart','ShopControllers@deletecart');
Route::get('/cart','ShopControllers@cart');
Route::get('/shipping','ShopControllers@shipping')->middleware('auth');
Route::post('/addtime','ShopControllers@addtime');

Route::get('/checkout2','ShopControllers@checkout2');
Route::post('/address','HomeController@address');
Route::get('/buy','ShopControllers@buy');
Route::get('/order','ShopControllers@order');

Route::post('/addComment','CommentController@addComments');
Route::post('/LikeComment','LikeController@LikeComment');
Route::post('/DisLikeComment','LikeController@DisLikeComment');
Route::post('/DisLikeComment','LikeController@DisLikeComment');
Route::get('/getLikeCount','LikeController@getLikeCount');
Route::post('/Like','LikeController@Like');
Route::post('/DisLike','LikeController@Like');
Route::get('comment/{category_id?}/{product_id?}','CommentController@index')->middleware('auth');

/*********profile**********************/

Route::group(['prefix'=>'profile',['middleware'=>'auth']],function() {
    Route::get('/','ProfileController@home')->middleware('auth');
    Route::get('/order','ProfileController@order')->middleware('auth');
    Route::get('/interest','ProfileController@interest')->middleware('auth');
    Route::get('/comment','ProfileController@comment')->middleware('auth');
    Route::get('/addresses','ProfileController@addresses')->middleware('auth');
    Route::get('/personal','ProfileController@personal')->middleware('auth');
    Route::get('/user-info','ProfileController@UserInfo')->middleware('auth');
    Route::post('/insert-user-info','ProfileController@StoreUserInfo')->middleware('auth');
    Route::post('/removeinterest','ProfileController@RemoveInterest')->middleware('auth');
    Route::post('/removcomment','ProfileController@removcomment')->middleware('auth');
    Route::post('/insert-address','ProfileController@insert_address')->middleware('auth');
    Route::post('/update-address','ProfileController@UpdateAddress')->middleware('auth');
    Route::post('/delete-address','ProfileController@DeleteAddress')->middleware('auth');
    Route::get('/password/reset','PasswordController@index')->middleware('auth');
    Route::post('/change/password','PasswordController@Change')->middleware('auth');


});