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
	// 后台登录
	Route::resource('/qishiadmin/login','Admin\LoginController');	//后台登录
Route::group(['namespace'=>'Admin','prefix'=>'qishiadmin','middleware'=>'logins'],function(){
	Route::get('/','IndexController@index');	//后台主页

	
	Route::resource('/column','ColumnController');//后台栏目
	// 友情链接-----------------------------------------------
	Route::resource('/links','LinksController');	//友情链接
	// 权限管理------------------------------------------------
	Route::resource('/users','UserController');		//管理员注册
	Route::resource('/node','NodeController');		//权限管理
	Route::get('/node/auth/{id}','NodeController@auth');	// 分配权限
	Route::post('/node/save','NodeController@save');		//保存权限
	//---------------------------------------------------------
});

//+----------------------------------------------------------
//|					前台路由
//+----------------------------------------------------------
Route::group([],function(){
	Route::get('/','Home\IndexController@index');	//前台主页
	// 友情链接
	Route::resource('/','Home\LinksController');	//前台友情链接
	
});

Route::resource('/login','Home\LoginController');	// 前台登录
Route::resource('/register','Home\RegisteredController');	//前台注册

