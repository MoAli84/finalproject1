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
//----------nationality----
Route::get('admin/index/nationality','adminController@index_nationality');
Route::get('admin/create/nationality','adminController@create_nationality');
Route::post('admin/store/nationality','adminController@store_nationality');
Route::get('admin/edit/nationality/{id}','adminController@edit_nationality');
Route::post('admin/update/nationality','adminController@update_nationality');
Route::delete('admin/delete/nationality/{id}','adminController@destroy_nationality');

//----------year----
Route::get('admin/index/year','adminController@index_year');
Route::get('admin/create/year','adminController@create_year');
Route::post('admin/store/year','adminController@store_year');
Route::get('admin/edit/year/{id}','adminController@edit_year');
Route::post('admin/update/year','adminController@update_year');
Route::delete('admin/delete/year/{id}','adminController@destroy_year');

//----------level----
Route::get('admin/index/level','adminController@index_level');
Route::get('admin/create/level','adminController@create_level');
Route::post('admin/store/level','adminController@store_level');
Route::get('admin/edit/level/{id}','adminController@edit_level');
Route::post('admin/update/level','adminController@update_level');
Route::delete('admin/delete/level/{id}','adminController@destroy_level');

//----------Sublevel----
Route::get('admin/index/sublevel','adminController@index_sublevel');
Route::get('admin/create/sublevel','adminController@create_sublevel');
Route::post('admin/store/sublevel','adminController@store_sublevel');
Route::get('admin/edit/sublevel/{id}','adminController@edit_sublevel');
Route::post('admin/update/sublevel','adminController@update_sublevel');
Route::delete('admin/delete/sublevel/{id}','adminController@destroy_sublevel');

//----------Courses----
Route::get('admin/index/course','adminController@index_course');
Route::get('admin/create/course','adminController@create_course');
Route::post('admin/store/course','adminController@store_course');
Route::get('admin/edit/course/{id}','adminController@edit_course');
Route::post('admin/update/course','adminController@update_course');
Route::delete('admin/delete/course/{id}','adminController@destroy_course');
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

// -------------------- Entry-Officer ---------------------------
Route::get('entry/home','entryOfficerController@home');
Route::get('entry/index','entryOfficerController@index');
Route::get('entry/create','entryOfficerController@create');
Route::post('entry/store','entryOfficerController@store');
Route::get('entry/edit/{id}','entryOfficerController@edit');
Route::post('entry/update','entryOfficerController@update');
Route::delete('entry/delete/{id}','entryOfficerController@destroy');
Route::get('entry/show/{id}','entryOfficerController@show');
