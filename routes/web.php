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

//+----------------------------------------------------------
//|					后台路由
//+----------------------------------------------------------
Route::group(['namespace'=>'Admin','prefix'=>'qishiadmin'],function(){
	Route::get('/','IndexController@index');	//后台主页
	
	Route::resource('/column','ColumnController');//后台栏目
});

//+----------------------------------------------------------
//|					前台路由
//+----------------------------------------------------------
Route::group([],function(){
	Route::get('/','Home\IndexController@index');	//前台主页
});
