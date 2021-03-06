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

    Route::get('/ubah-password-admin', [
        'uses' => 'AdminController@changePassAdmin',
        'as' => 'upass-admin'
    ]);

    Route::post('/update-password-admin', [
        'uses' => 'AdminController@changeAdmin',
        'as' => 'ua-pass',
    ]);

    //Route::post('/tambah/user','AdminController@tambahuser')->name('save.user');

    Route::group(['prefix' => 'manajemen-user'], function (){

        Route::get('/', [
            'uses' => 'UserManajemenController@index',
            'as' => 'um-home'
        ]);

        Route::get('/manajemen-user-tambah', [
            'uses' => 'UserManajemenController@create',
            'as' => 'um-tambah'
        ]);

        Route::get('/lihat-user/{id}', [
            'uses' => 'UserManajemenController@show',
            'as' => 'um-lihat'
        ]);

        Route::post('/tambah-user', [
            'uses' => 'UserManajemenController@store',
            'as' => 'um-tambah-selesai'
        ]);

        Route::get('/user-edit', [
            'uses' => 'UserManajemenController@edit',
            'as' => 'um-edit'
        ]);

        Route::post('/update-user/{id}', [
            'uses' => 'UserManajemenController@update',
            'as' => 'um-update'
        ]);

        Route::delete('/hapus-user/{id}', [
            'uses' => 'UserManajemenController@destroy',
            'as' => 'um-hapus'
        ]);
    });

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

        Route::get('/jabatan-edit', [
            'uses' => 'JabatanController@edit',
            'as' => 'jm-edit'
        ]);

        Route::post('/update-jabatan/{id}', [
            'uses' => 'JabatanController@update',
            'as' => 'jm-update'
        ]);

        Route::delete('/hapus-jabatan/{id}', [
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
            'uses' => 'JenisSuratController@create',
            'as' => 'jsm-tambah'
        ]);

        Route::post('/tambah-jenis-surat', [
            'uses' => 'JenisSuratController@store',
            'as' => 'jsm-tambah-selesai'
        ]);

        Route::get('/jenis-surat-edit', [
            'uses' => 'JenisSuratController@edit',
            'as' => 'jsm-edit'
        ]);

        Route::post('/update-jenis-surat/{id}', [
            'uses' => 'JenisSuratController@update',
            'as' => 'jsm-update'
        ]);

        Route::delete('/hapus-jenis-surat/{id}', [
            'uses' => 'JenisSuratController@destroy',
            'as' => 'jsm-hapus'
        ]);
    });

    Route::group(['prefix' => 'manajemen-jenjang'], function (){

        Route::get('/', [
            'uses' => 'JenjangController@index',
            'as' => 'jen-home'
        ]);

        Route::get('/manajemen-jenjang-tambah', [
            'uses' => 'JenjangController@create',
            'as' => 'jen-tambah'
        ]);

        Route::post('/tambah-jenjang', [
            'uses' => 'JenjangController@store',
            'as' => 'jen-tambah-selesai'
        ]);

        Route::get('/jenjang-edit', [
            'uses' => 'JenjangController@edit',
            'as' => 'jen-edit'
        ]);

        Route::post('/update-jenjang/{id}', [
            'uses' => 'JenjangController@update',
            'as' => 'jen-update'
        ]);

        Route::delete('/hapus-jenjang/{id}', [
            'uses' => 'JenjangController@destroy',
            'as' => 'jen-hapus'
        ]);
    });

    Route::group(['prefix' => 'manajemen-jurusan'], function (){

        Route::get('/', [
            'uses' => 'JurusanController@index',
            'as' => 'jur-home'
        ]);

        Route::get('/manajemen-jurusan-tambah', [
            'uses' => 'JurusanController@create',
            'as' => 'jur-tambah'
        ]);

        Route::post('/tambah-jurusan', [
            'uses' => 'JurusanController@store',
            'as' => 'jur-tambah-selesai'
        ]);

        Route::get('/jurusan-edit', [
            'uses' => 'JurusanController@edit',
            'as' => 'jur-edit'
        ]);

        Route::post('/update-jurusan/{id}', [
            'uses' => 'JurusanController@update',
            'as' => 'jur-update'
        ]);

        Route::delete('/hapus-jurusan/{id}', [
            'uses' => 'JurusanController@destroy',
            'as' => 'jur-hapus'
        ]);
    });

    Route::group(['prefix' => 'manajemen-lembaga'], function (){

        Route::get('/', [
            'uses' => 'LembagaController@index',
            'as' => 'lem-home'
        ]);

        Route::get('/manajemen-lembaga-tambah', [
            'uses' => 'LembagaController@create',
            'as' => 'lem-tambah'
        ]);

        Route::post('/tambah-lembaga', [
            'uses' => 'LembagaController@store',
            'as' => 'lem-tambah-selesai'
        ]);

        Route::get('/lembaga-edit', [
            'uses' => 'LembagaController@edit',
            'as' => 'lem-edit'
        ]);

        Route::post('/update-lembaga/{id}', [
            'uses' => 'LembagaController@update',
            'as' => 'lem-update'
        ]);

        Route::delete('/hapus-lembaga/{id}', [
            'uses' => 'LembagaController@destroy',
            'as' => 'lem-hapus'
        ]);
    });

});

Route::group(['prefix' => 'pegawai', 'namespace' => 'Pegawai', 'middleware' => 'pegawai'], function (){

    Route::get('/', [
        'uses' => 'PegawaiController@index',
        'as' => 'home-pegawai'
    ]);

    Route::get('/ubah-password', [
        'uses' => 'PegawaiController@changePass',
        'as' => 'upass-pegawai'
    ]);

    Route::post('/update-password', [
        'uses' => 'PegawaiController@change',
        'as' => 'u-pass'
    ]);

    Route::group(['prefix' => 'surat-keluar'], function (){

        Route::get('/', [
            'uses' => 'SuratKeluarController@index',
            'as' => 'surk-home'
        ]);

        Route::get('/data-surat-keluar-tambah', [
            'uses' => 'SuratKeluarController@create',
            'as' => 'surk-tambah'
        ]);

        Route::get('/surat-keluar-edit', [
            'uses' => 'SuratKeluarController@edit',
            'as' => 'surk-edit'
        ]);

        Route::get('/hapus-konten-surat/{id}', [
            'uses' => 'SuratKeluarController@destroyKonten',
            'as' => 'h-konten'
        ]);

        Route::delete('/hapus-surat-keluar/{id}', [
            'uses' => 'SuratKeluarController@destroy',
            'as' => 'surk-hapus'
        ]);

        Route::get('/surat-keluar-print', [
            'uses' => 'SuratKeluarController@print',
            'as' => 'surk-print'
        ]);

        Route::get('/jabatan', [
            'uses' => 'SuratKeluarController@jabatan',
            'as' => 'json-jabatan'
        ]);
    });

    Route::group(['prefix' => 'surat-masuk'], function (){

        Route::get('/', [
            'uses' => 'SuratMasukController@index',
            'as' => 'surm-home'
        ]);

        Route::get('/data-surat-masuk-tambah', [
            'uses' => 'SuratMasukController@create',
            'as' => 'surm-tambah'
        ]);

        Route::post('/tambah-surat-masuk', [
            'uses' => 'SuratMasukController@store',
            'as' => 'surm-tambah-selesai'
        ]);

        Route::get('/surat-masuk-edit', [
            'uses' => 'SuratMasukController@edit',
            'as' => 'surm-edit'
        ]);

        Route::post('/update-surat-masuk/{id}', [
            'uses' => 'SuratMasukController@update',
            'as' => 'surm-update'
        ]);

        Route::delete('/hapus-surat-masuk/{id}', [
            'uses' => 'SuratMasukController@destroy',
            'as' => 'surm-hapus'
        ]);

    });

    Route::group(['prefix' => 'surat-keputusan'], function (){

        Route::post('/tambah-surat-keputusan', [
            'uses' => 'SuratKeluar\SuratKeputusanController@store',
            'as' => 'surke-tambah-selesai'
        ]);

        Route::post('/update-surat-keputusan/{id}', [
            'uses' => 'SuratKeluar\SuratKeputusanController@update',
            'as' => 'surke-update'
        ]);

        Route::delete('/hapus-keputusan-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratKeputusanController@destroy',
            'as' => 'surke-hapus'
        ]);

        Route::get('/surat-keputusan-print-all', [
            'uses' => 'SuratKeluar\SuratKeputusanController@print_all',
            'as' => 'surke-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-lain'], function (){

        Route::post('/tambah-surat-lain', [
            'uses' => 'SuratKeluar\SuratLainController@store',
            'as' => 'surl-tambah-selesai'
        ]);

        Route::post('/update-surat-lain/{id}', [
            'uses' => 'SuratKeluar\SuratLainController@update',
            'as' => 'surl-update'
        ]);

    });

    Route::group(['prefix' => 'surat-pemberitahuan'], function (){

        Route::post('/tambah-pemberitahuan-lain', [
            'uses' => 'SuratKeluar\SuratPemberitahuanController@store',
            'as' => 'surp-tambah-selesai'
        ]);

        Route::post('/update-surat-pemberitahuan/{id}', [
            'uses' => 'SuratKeluar\SuratPemberitahuanController@update',
            'as' => 'surp-update'
        ]);

        Route::delete('/hapus-pemberitahuan-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratPemberitahuanController@destroy',
            'as' => 'surp-hapus'
        ]);

        Route::get('/surat-pemberitahuan-print-all', [
            'uses' => 'SuratKeluar\SuratPemberitahuanController@print_all',
            'as' => 'surp-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-penagihan'], function (){

        Route::post('/tambah-surat-penagihan', [
            'uses' => 'SuratKeluar\SuratPenagihanController@store',
            'as' => 'surpena-tambah-selesai'
        ]);

        Route::post('/update-surat-penagihan/{id}', [
            'uses' => 'SuratKeluar\SuratPenagihanController@update',
            'as' => 'surpena-update'
        ]);

        Route::delete('/hapus-penagihan-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratPenagihanController@destroy',
            'as' => 'surpena-hapus'
        ]);

        Route::get('/surat-penagihan-print-all', [
            'uses' => 'SuratKeluar\SuratPenagihanController@print_all',
            'as' => 'surpena-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-pengajuan'], function (){

        Route::post('/tambah-surat-pengajuan', [
            'uses' => 'SuratKeluar\SuratPengajuanController@store',
            'as' => 'surpenga-tambah-selesai'
        ]);Route::post('/update-surat-pengajuan/{id}', [
            'uses' => 'SuratKeluar\SuratPengajuanController@update',
            'as' => 'surpenga-update'
        ]);

        Route::delete('/hapus-pengajuan-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratPengajuanController@destroy',
            'as' => 'surpenga-hapus'
        ]);

        Route::get('/surat-pengajuan-print-all', [
            'uses' => 'SuratKeluar\SuratPengajuanController@print_all',
            'as' => 'surpenga-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-pengalaman'], function (){

        Route::post('/tambah-surat-pengalaman', [
            'uses' => 'SuratKeluar\SuratPengalamanController@store',
            'as' => 'surpengal-tambah-selesai'
        ]);

        Route::post('/update-surat-pengalaman/{id}', [
            'uses' => 'SuratKeluar\SuratPengalamanController@update',
            'as' => 'surpengal-update'
        ]);

        Route::delete('/hapus-pengalaman-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratPengalamanController@destroy',
            'as' => 'surpengal-hapus'
        ]);

        Route::get('/surat-pengalaman-print-all', [
            'uses' => 'SuratKeluar\SuratPengalamanController@print_all',
            'as' => 'surpengal-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-pengangkatan'], function (){

        Route::post('/tambah-surat-pengangkatan', [
            'uses' => 'SuratKeluar\SuratPengangkatanController@store',
            'as' => 'surpengang-tambah-selesai'
        ]);

        Route::post('/update-surat-pengangkatan/{id}', [
            'uses' => 'SuratKeluar\SuratPengangkatanController@update',
            'as' => 'surpengang-update'
        ]);

        Route::delete('/hapus-pengangkatan-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratPengangkatanController@destroy',
            'as' => 'surpengang-hapus'
        ]);

        Route::get('/surat-pengangkatan-print-all', [
            'uses' => 'SuratKeluar\SuratPengangkatanController@print_all',
            'as' => 'surpengang-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-peringatan'], function (){

        Route::post('/tambah-surat-peringatan', [
            'uses' => 'SuratKeluar\SuratPeringatanController@store',
            'as' => 'surper-tambah-selesai'
        ]);

        Route::post('/update-surat-peringatan/{id}', [
            'uses' => 'SuratKeluar\SuratPeringatanController@update',
            'as' => 'surper-update'
        ]);

        Route::delete('/hapus-peringatan-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratPeringatanController@destroy',
            'as' => 'surper-hapus'
        ]);

        Route::get('/surat-peringatan-print-all', [
            'uses' => 'SuratKeluar\SuratPeringatanController@print_all',
            'as' => 'surper-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-rpp'], function (){

        Route::post('/tambah-surat-rpp', [
            'uses' => 'SuratKeluar\SuratRppController@store',
            'as' => 'surpp-tambah-selesai'
        ]);

        Route::post('/update-surat-rpp/{id}', [
            'uses' => 'SuratKeluar\SuratRppController@update',
            'as' => 'surpp-update'
        ]);

        Route::delete('/hapus-rpp-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratRppController@destroy',
            'as' => 'surpp-hapus'
        ]);

        Route::get('/surat-rpp-print-all', [
            'uses' => 'SuratKeluar\SuratRppController@print_all',
            'as' => 'surpp-print-all'
        ]);

    });

    Route::group(['prefix' => 'surat-sylabus'], function (){

        Route::post('/tambah-surat-sylabus', [
            'uses' => 'SuratKeluar\SuratSylabusController@store',
            'as' => 'sursy-tambah-selesai'
        ]);

        Route::post('/update-surat-sylabus/{id}', [
            'uses' => 'SuratKeluar\SuratSylabusController@update',
            'as' => 'sursy-update'
        ]);

        Route::delete('/hapus-sylabus-masuk/{id}', [
            'uses' => 'SuratKeluar\SuratSylabusController@destroy',
            'as' => 'sursy-hapus'
        ]);

        Route::get('/surat-sylabus-print-all', [
            'uses' => 'SuratKeluar\SuratSylabusController@print_all',
            'as' => 'sursy-print-all'
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

        Route::get('/jabatan', [
            'uses' => 'DataPegawaiController@jabatan',
            'as' => 'json-jabatan'
        ]);

        Route::post('/tambah-pegawai', [
            'uses' => 'DataPegawaiController@store',
            'as' => 't-d-pegawai'
        ]);

        Route::get('/edit-pegawai', [
            'uses' => 'DataPegawaiController@edit',
            'as' => 'd-p-edit'
        ]);

        Route::post('/update-pegawai/{id}', [
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

        Route::get('/edit-pendidikan', [
            'uses' => 'DataPegawaiController@edit_r',
            'as' => 'd-p-edit-r'
        ]);

        Route::post('/update-pendidikan', [
            'uses' => 'DataPegawaiController@update_r',
            'as' => 'u-d-p-pegawai'
        ]);

        Route::delete('/hapus/{id}', [
            'uses' => 'DataPegawaiController@destroy',
            'as' => 'h-d-p-pegawai'
        ]);

        Route::delete('/hapus-semua}', [
            'uses' => 'DataPegawaiController@destroyAll',
            'as' => 'h-s-pegawai'
        ]);

        Route::get('/data-pegawai-berhasil-ditambahkan', [
            'uses' => 'DataPegawaiController@tambah_dpd',
            'as' => 'd-p-done'
        ]);

        Route::get('/pegawai-print', [
            'uses' => 'DataPegawaiController@print',
            'as' => 'd-p-print'
        ]);

        Route::get('/pegawai-print-all', [
            'uses' => 'DataPegawaiController@print_all',
            'as' => 'd-p-print-all'
        ]);
    });

    Route::group(['prefix' => 'peserta-didik'], function (){

        Route::get('/', [
            'uses' => 'PesertaController@index',
            'as' => 'p-home'
        ]);

        Route::get('/data-peserta-tambah', [
            'uses' => 'PesertaController@create',
            'as' => 'p-tambah'
        ]);

        Route::get('/kabupaten', [
            'uses' => 'PesertaController@kabupaten',
            'as' => 'json-kabupaten'
        ]);

            Route::get('/kecamatan', [
                'uses' => 'PesertaController@kecamatan',
                'as' => 'json-kecamatan'
            ]);

        Route::post('/tambah-peserta', [
            'uses' => 'PesertaController@store',
            'as' => 'p-tambah-peserta'
        ]);

        Route::get('/peserta-edit', [
            'uses' => 'PesertaController@edit',
            'as' => 'p-edit'
        ]);

        Route::post('/update-peserta/{id}', [
            'uses' => 'PesertaController@update',
            'as' => 'p-update'
        ]);

        Route::delete('/hapus-peserta/{id}', [
            'uses' => 'PesertaController@destroy',
            'as' => 'p-hapus'
        ]);

        Route::get('/peserta-print', [
            'uses' => 'PesertaController@print',
            'as' => 'p-print'
        ]);

        Route::get('/peserta-print-all', [
            'uses' => 'PesertaController@print_all',
            'as' => 'p-print-all'
        ]);

    });

    Route::group(['prefix' => 'dokumen'], function (){

        Route::get('/', [
            'uses' => 'DokumenController@index',
            'as' => 'd-home'
        ]);

        Route::get('/dokumen-show', [
            'uses' => 'DokumenController@show',
            'as' => 'd-show'
        ]);

        Route::get('/dokumen-download', [
            'uses' => 'DokumenController@download',
            'as' => 'd-download'
        ]);

        Route::get('/data-dokumen-tambah', [
            'uses' => 'DokumenController@create',
            'as' => 'd-tambah'
        ]);

        Route::post('/tambah-dokumen', [
            'uses' => 'DokumenController@store',
            'as' => 'd-tambah-selesai'
        ]);

        Route::get('/dokumen-edit', [
            'uses' => 'DokumenController@edit',
            'as' => 'd-edit'
        ]);

        Route::post('/update-dokumen/{id}', [
            'uses' => 'DokumenController@update',
            'as' => 'd-update'
        ]);

        Route::delete('/hapus-dokumen/{id}', [
            'uses' => 'DokumenController@destroy',
            'as' => 'd-hapus'
        ]);

    });

});
