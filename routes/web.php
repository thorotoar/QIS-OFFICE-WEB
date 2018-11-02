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
})->middleware('unauthorized');

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

    Route::get('/surat-masuk', [
        'uses' => 'AdminController@viewsma',
        'as' => 'surat-masuk-admin'
    ]);

    Route::get('/surat-keluar', [
        'uses' => 'AdminController@viewska',
        'as' => 'surat-keluar-admin'
    ]);

});

Route::group(['prefix' => 'pegawai', 'namespace' => 'Pegawai', 'middleware' => 'pegawai'], function (){

    Route::get('/', [
        'uses' => 'PegawaiController@index',
        'as' => 'home-pegawai'
    ]);

    Route::get('/surat-masuk', [
        'uses' => 'PegawaiController@viewsmp',
        'as' => 'surat-masuk-pegawai'
    ]);

    Route::get('/surat-keluar', [
        'uses' => 'PegawaiController@viewskp',
        'as' => 'surat-keluar-pegawai'
    ]);



});
