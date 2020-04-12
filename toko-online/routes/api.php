<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "latihan"], function () {
    Route::get("/kategori/all", "CategoryController@index");
    Route::get('kategori/search', 'CategoryController@search');
    Route::get('kategori/{id}/delete', 'CategoryController@restore');
    Route::get('kategori/{id}/permanent-delete', 'CategoryController@permanentDelete');
});

Route::get('latihan/kategori/all', 'CategoryController@index');
