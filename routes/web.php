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

    Route::get('/manajemen-user', [
        'uses' => 'AdminController@view_um',
        'as' => 'um-home'
    ]);

    Route::get('/manajemen-user-tambah', [
        'uses' => 'AdminController@tambah_um',
        'as' => 'um-tambah'
    ]);

    //Route::post('/tambah/user','AdminController@tambahuser')->name('save.user');

    Route::group(['prefix' => 'manajemen-jabatan'], function (){

        Route::get('/', [
            'uses' => 'JabatanController@index',
            'as' => 'jm-home'
        ]);

        Route::get('/manajemen-jabatan-tambah', [
            'uses' => 'JabatanController@create',
            'as' => 'jm-tambah'
        ]);

        Route::get('/lihat-jabatan/{id}', [
            'uses' => 'JabatanController@show',
            'as' => 'jm-lihat'
        ]);

        Route::post('/tambah-jabatan', [
            'uses' => 'JabatanController@store',
            'as' => 'jm-tambah-selesai'
        ]);

        Route::get('/manajemen-jabatan-edit/{id}/edit', [
            'uses' => 'JabatanController@edit',
            'as' => 'jm-edit'
        ]);

        Route::post('/update-jabatan/{id}', [
            'uses' => 'JabatanController@update',
            'as' => 'jm-update'
        ]);

        Route::post('/hapus-jabatan/{id}', [
            'uses' => 'JabatanController@destroy',
            'as' => 'jm-hapus'
        ]);
    });

    Route::group(['prefix' => 'manajemen-jenis-surat'], function (){

        Route::get('/', [
            'uses' => 'JenisSuratController@index',
            'as' => 'jsm-home'
        ]);

        Route::get('/manajemen-jenis-surat-tambah', [
            'uses' => 'JenisSuratController@tambah_jsm',
            'as' => 'jsm-tambah'
        ]);
    });

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

    Route::get('/tambah-surat-masuk', [
        'uses' => 'PegawaiController@tambahsmp',
        'as' => 'tambah-s-m-p'
    ]);

    Route::get('/surat-keluar', [
        'uses' => 'PegawaiController@viewskp',
        'as' => 'surat-keluar-pegawai'
    ]);

    Route::get('/tambah-surat-keluar', [
        'uses' => 'PegawaiController@tambahskp',
        'as' => 'tambah-s-k-p'
    ]);

    Route::get('/data-pegawai', [
        'uses' => 'PegawaiController@view_dp',
        'as' => 'd-pegawai'
    ]);

    Route::get('/tambah-data-pegawai', [
        'uses' => 'PegawaiController@tambah_dp',
        'as' => 'd-p-tambah'
    ]);

    Route::get('/tambah-data-pegawai-riwayat-pendidikan', [
        'uses' => 'PegawaiController@tambah_dpr',
        'as' => 'd-p-tambah-r'
    ]);

    Route::get('/tambah-data-pegawai-selesai', [
        'uses' => 'PegawaiController@tambah_dpd',
        'as' => 'd-p-done'
    ]);

//    Route::group(['prefix' => 'data-pegawai', 'namespace' => 'Data-Pegawai', 'middleware' => 'pegawai'], function (){
//        Route::resource('/proses-tambah-data-pegawai-selesai',[
//            'user' => 'DataPegawaiController',
//            'as' => 'd-p-proses'
//        ]);
//    });

    //Route::resource('d-p-proses', 'PegawaiController');

});
