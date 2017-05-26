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

//首页
Route::get('/', function(){
    return view('home.index');
});
//投资-Sun  存包
Route::get('home/invest/returns', 'Home\InvestController@returns');
Route::get('home/invest/notify', 'Home\InvestController@notify');
Route::any('home/invest/{action}', function($action='invest'){
    return view("home.invest.$action");
});
Route::resource('home/invest', 'Home\InvestController');
//投资-理财产品
Route::resource('home/infor', 'Home\InforController');
