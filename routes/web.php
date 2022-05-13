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

Route::get('/ww', function () {
    return view('StudentAffairs.ww');
});



//---------------------Admin-------------------------------
Route::get('admin/index/nationality','adminController@index_nationality');
Route::get('admin/create/nationality','adminController@create_nationality');
Route::post('admin/store/nationality','adminController@store_nationality');
Route::get('admin/edit/nationality/{id}','adminController@edit_nationality');
Route::post('admin/update/nationality','adminController@update_nationality');
Route::delete('admin/delete/nationality/{id}','adminController@destroy_nationality');



Route::get('admin/index/year','adminController@index_year');
Route::get('admin/create/year','adminController@create_year');
Route::post('admin/store/year','adminController@store_year');
Route::get('admin/edit/year/{id}','adminController@edit_year');
Route::post('admin/update/year','adminController@update_year');
Route::delete('admin/delete/year/{id}','adminController@destroy_year');
//--------------------------------------------------------------

//-------------------------StudentAffairs--------------------------
Route::get('affair/home','studentAffairsController@home');
Route::get('affair/index','studentAffairsController@index');
Route::get('affair/create','studentAffairsController@create');
Route::post('affair/store','studentAffairsController@store');
Route::get('affair/edit/{id}','studentAffairsController@edit');
Route::post('affair/update','studentAffairsController@update');
Route::delete('affair/delete/{id}','studentAffairsController@destroy');
Route::get('affair/show/{id}','studentAffairsController@show');
//---------------------------------------------------------------
