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
Route::middleware('auth')->group(function () {
    Route::get('/logout', 'TestController@logout');
    Route::get('/contact', 'ContactController@contact');
    Route::get('/about', 'AboutController@about');
    Route::get('/search','SearchController@search');
    Route::get('/insert','InsertController@insert');
    Route::get('/product','getallproductController@getallproduct');
    Route::get('/profile','ProfileController@profile');

    Route::post('/showprofile','ProfileController@postprofile');
    Route::get('/showprofile','ProfileController@showprofile');

    Route::get('/addproduct/{product_id}','homeController@post_card');

    Route::get('/shoppingcart','ShoppingcartController@showcart');
    Route::post('/shoppingcart','shoppingcartController@postbill');


    Route::get('/removeproduct/{id}','homeController@removeproduct');


    Route::get('/product/{listproduct}','getlistproductController@getlistproduct');
    Route::get('/productdetail/{detail}','getproductdetailController@getproductdetail');
    Route::get('/','homeController@home');

    Route::middleware('level')->group(function (){
        Route::get('/admin','AdminController@admin');
        /* QLloại */
        Route::group(['prefix' => 'qlcategory'],function(){
            Route::get('','QlcategoryController@getcategory');
            Route::get('delete/{id}','QlcategoryController@deletecategory');
            Route::post('','QlcategoryController@postcategory');
            Route::get('/edit/{id}','QlcategoryController@geteditcategory');
            Route::post('/edit/{id}','QlcategoryController@postedit');
        });
        /* QLĐơnhàng */
        Route::get('/qlbills','QlbillsController@getbills');


        Route::get('/qlbills/{id}','QlbillsController@getbilldetail');
        Route::get('/qlbills/{id}/{status}','QlbillsController@getstatus');

        /* QLSản phẩm */
        Route::get('/qlproduct','QlproductController@getproductandcategory');
        Route::post('/qlproduct','QlproductController@postproduct');


        Route::get('/qlproduct/delete/{id}','QlproductController@deleteproduct');
        Route::get('/qlproduct/edit/{id}','QlproductController@geteditproduct');
        Route::post('/qlproduct/edit/{id}','QlproductController@postedit');
    });
});





//

Auth::routes();



?>



