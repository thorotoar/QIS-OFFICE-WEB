<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('pegawai.pegawai-home');
    }

    public function viewsmp(){
        return view('pegawai.surat-masuk.surat-m-home');
    }

    public function tambahsmp(){
        return view('pegawai.surat-masuk.surat-m-tambah');
    }

    public function viewskp(){
        return view('pegawai.surat-keluar.surat-k-home');
    }

    public function tambahskp(){
        return view('pegawai.surat-keluar.surat-k-tambah');
    }

    public function view_dp(){
        $pegawai = Pegawai::all();
        return view('pegawai.data-pegawai.d-p-home', compact('pegawai'));
    }

    public function tambah_dp(){
        return view('pegawai.data-pegawai.d-p-tambah');
    }

    public function tambah_dpr(){
        return view('pegawai.data-pegawai.d-p-tambah-r');
    }

    public function tambah_dpd(){
        return view('pegawai.data-pegawai.d-p-done');
    }
}
