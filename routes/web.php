<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ExampleController;
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
Route::get('/',[
    'uses' => '\App\Http\Controllers\ExampleController@index',
     'as'  => '/'
]);

Route::get('/bitm',[
    'uses' => '\App\Http\Controllers\ExampleController@test',
    'as'  => 'bitm'
]);

Route::get('/sojib/fahim',[
    'uses' => '\App\Http\Controllers\ExampleController@demo',
    'as'  => 'sojib-fahim'
]);

Route::get('/all-product',[
    'uses' => '\App\Http\Controllers\ProductController@index',
    'as'  => 'all-product'
]);
Route::get('/all-category',[
    'uses' => '\App\Http\Controllers\CategoryController@index',
    'as'  => 'all-product'
]);
Route::get('/item',[
    'uses' => '\App\Http\Controllers\ItemController@index',
    'as'  => 'item'
]);

Route::get('/student',[
    'uses' => '\App\Http\Controllers\StudentController@studentInfo',
    'as'  => 'student'
]);


Route::get('/all-post',[
    'uses' => '\App\Http\Controllers\PostController@allPost',
    'as'  => 'all-post'
]);
