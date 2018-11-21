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
    return view('test');
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

        Route::get('/jabatan-edit/{id}/edit', [
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

    Route::group(['prefix' => 'surat-masuk'], function (){

        Route::get('/', [
            'uses' => 'PegawaiController@viewsmp',
            'as' => 'surat-masuk-pegawai'
        ]);

        Route::get('/tambah-surat-masuk', [
            'uses' => 'PegawaiController@tambahsmp',
            'as' => 'tambah-s-m-p'
        ]);

    });

    Route::group(['prefix' => 'surat-keluar'], function (){

        Route::get('/', [
            'uses' => 'PegawaiController@viewskp',
            'as' => 'surat-keluar-pegawai'
        ]);

        Route::get('/tambah-surat-keluar', [
            'uses' => 'PegawaiController@tambahskp',
            'as' => 'tambah-s-k-p'
        ]);

    });

    Route::group(['prefix' => 'data-pegawai'], function (){

        Route::get('/', [
            'uses' => 'DataPegawaiController@index',
            'as' => 'd-pegawai'
        ]);

        Route::get('/tambah-pegawai', [
            'uses' => 'DataPegawaiController@create',
            'as' => 'd-p-tambah'
        ]);

        Route::post('/tambah-pegawai', [
            'uses' => 'DataPegawaiController@store',
            'as' => 't-d-pegawai'
        ]);

        Route::get('/{pegawai}/edit-pegawai', [
            'uses' => 'DataPegawaiController@edit',
            'as' => 'd-p-edit'
        ]);

        Route::post('/{pegawai}/update-pegawai', [
            'uses' => 'DataPegawaiController@update',
            'as' => 'u-d-pegawai'
        ]);

        Route::get('/tambah-pendidikan-pegawai', [
            'uses' => 'DataPegawaiController@create_r',
            'as' => 'd-p-tambah-r'
        ]);

        Route::post('/tambah-pendidikan-pegawai', [
            'uses' => 'DataPegawaiController@store_r',
            'as' => 't-d-p-pegawai'
        ]);

        Route::get('/{pegawai}/edit-pendidikan', [
            'uses' => 'DataPegawaiController@edit_r',
            'as' => 'd-p-edit-r'
        ]);

        Route::post('/{pegawai}/update-pendidikan', [
            'uses' => 'DataPegawaiController@update_r',
            'as' => 'u-d-p-pegawai'
        ]);

        Route::post('/{id}/hapus', [
            'uses' => 'DataPegawaiController@destroy',
            'as' => 'h-d-p-pegawai'
        ]);

        Route::get('/data-pegawai-berhasil-ditambahkan', [
            'uses' => 'DataPegawaiController@tambah_dpd',
            'as' => 'd-p-done'
        ]);
    });

//    Route::group(['prefix' => 'data-pegawai', 'namespace' => 'Data-Pegawai', 'middleware' => 'pegawai'], function (){
//        Route::resource('/proses-tambah-data-pegawai-selesai',[
//            'user' => 'DataPegawaiController',
//            'as' => 'd-p-proses'
//        ]);
//    });

    //Route::resource('d-p-proses', 'PegawaiController');

});
