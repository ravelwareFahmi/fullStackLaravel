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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/product/{product_id?}", "ProductController@showAll");
Route::get('/product/display', 'ProductController@showAll');
Route::post('/product/save', 'ProductController@saveNew');

// controller Resource
Route::resource('categories', 'CategoryController');


Route::get('/userAdd', function () {
    App\User::create([
        'name'=>'admin',
        'email'=> uniqid(). '@gmail.com',
        'password'=> bcrypt('admin')
    ]);
    return response()->json(App\User::all());
});
