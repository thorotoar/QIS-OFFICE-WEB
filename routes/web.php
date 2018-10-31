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
    return view('welcomeq');
});

Route::get('/test', function () {
    return view('welcomeq');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

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

//Route::get('/homeu', 'TestNavigationController@home')->name('home-pegawai');
Route::get('/homesm', 'TestNavigationController@viewsm');
Route::get('/hometsm', 'TestNavigationController@viewtsm');
Route::get('/homesk', 'TestNavigationController@viewsk');
Route::get('/hometsk', 'TestNavigationController@viewtsk');
Route::get('/homepd', 'TestNavigationController@viewpd');
Route::get('/homep', 'TestNavigationController@viewp');
Route::get('/homek', 'TestNavigationController@viewk');
Route::get('/homed', 'TestNavigationController@viewd');
Route::get('/hometd', 'TestNavigationController@viewtd');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function (){

    Route::get('/', [
        'uses' => 'AdminController@index',
        'as' => 'home-admin'
    ]);

});

Route::group(['prefix' => 'pegawai', 'namespace' => 'Pegawai', 'middleware' => 'pegawai'], function (){

    Route::get('/', [
        'uses' => 'PegawaiController@index',
        'as' => 'home-pegawai'
    ]);

});

//Route::get('/homea', 'AdminController@index')->name('home-admin');
Route::get('/homesma', 'TestNavigationController@viewsma');
Route::get('/homeska', 'TestNavigationController@viewska');
