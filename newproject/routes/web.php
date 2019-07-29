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




Route::get('/login', 'LoginController@login');
Route::get('/signup','SignupController@signup');
Route::post('/signup','SignupController@postsignup');

Route::get('/contact', 'ContactController@contact');
Route::get('/about', 'AboutController@about');
Route::get('/search','SearchController@search');
Route::get('/insert','InsertController@insert');
Route::get('/product','getallproductController@getallproduct');
Route::get('/','homeController@home');
Route::get('/product/{listproduct}','getlistproductController@getlistproduct');
Route::get('/productdetail/{detail}','getproductdetailController@getproductdetail');
Route::get('/admin','AdminController@admin');

/* QLloại */
Route::get('/qlcategory','QlcategoryController@getcategory');
Route::get('/qlcategory/delete/{id}','QlcategoryController@deletecategory');
Route::post('/qlcategory','QlcategoryController@postcategory');
Route::get('/qlcategory/edit/{id}','QlcategoryController@geteditcategory');
Route::post('/qlcategory/edit/{id}','QlcategoryController@postedit');


/* QLSản phẩm */
Route::get('/qlproduct','QlproductController@getproductandcategory');
Route::get('/qlproduct/delete/{id}','QlproductController@deleteproduct');
Route::post('/qlproduct','QlproductController@postproduct');
Route::get('/qlproduct/edit/{id}','QlproductController@geteditproduct');
Route::post('/qlproduct/edit/{id}','QlproductController@postedit');

?>




