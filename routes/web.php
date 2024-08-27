<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('/products','App\Http\Controllers\ProductController');
Route::get('/product/soft/delete/{id}','App\Http\Controllers\ProductController@softDelete')
->name('soft.delete');
Route::get('/product/trash','App\Http\Controllers\ProductController@trashedProducts')
->name('product.trash');
Route::get('/product/back/from/trash/{id}','App\Http\Controllers\ProductController@backFromSoftDelete')
->name('product.back.from.trash');
Route::get('/product/delete/from/database/{id}','App\Http\Controllers\ProductController@deleteForEver')
->name('product.delete.from.database');
//Route::get('/hameed', 'App\Http\Controllers\dd@indexx');
//Route::get('/users/{id}', 'App\Http\Controllers\dd@show');
/*Route::get('/sum/{id}', 'App\Http\Controllers\dd@sum');
Route::get('/k', 'App\Http\Controllers\kc@index');
Route::get('/k/{id}', 'App\Http\Controllers\kc@show');*/
