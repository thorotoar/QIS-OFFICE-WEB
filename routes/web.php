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

Route::get('/test', function () {
    return view('welcomeq');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['namespace'=>'users', 'prefix'=>'/'], function (){
//    Route::get('/homeu', 'TestNavigationController@home');
//    Route::get('/homesm', 'TestNavigationController@viewsm');
//    Route::get('/hometsm', 'TestNavigationController@viewtsm');
//    Route::get('/homesk', 'TestNavigationController@viewsk');
//    Route::get('/hometsk', 'TestNavigationController@viewtsk');
//    Route::get('/homepd', 'TestNavigationController@viewpd');
//    Route::get('/homep', 'TestNavigationController@viewp');
//    Route::get('/homek', 'TestNavigationController@viewk');
//    Route::get('/homed', 'TestNavigationController@viewd');
//    Route::get('/hometd', 'TestNavigationController@viewtd');
//});

Route::get('/loginq', 'TestNavigationController@index');
Route::get('/homeu', 'TestNavigationController@home');
Route::get('/homesm', 'TestNavigationController@viewsm');
Route::get('/hometsm', 'TestNavigationController@viewtsm');
Route::get('/homesk', 'TestNavigationController@viewsk');
Route::get('/hometsk', 'TestNavigationController@viewtsk');
Route::get('/homepd', 'TestNavigationController@viewpd');
Route::get('/homep', 'TestNavigationController@viewp');
Route::get('/homek', 'TestNavigationController@viewk');
Route::get('/homed', 'TestNavigationController@viewd');
Route::get('/hometd', 'TestNavigationController@viewtd');


Route::get('/homea', 'TestNavigationController@index_admin');
Route::get('/homesma', 'TestNavigationController@viewsma');
Route::get('/homeska', 'TestNavigationController@viewska');
