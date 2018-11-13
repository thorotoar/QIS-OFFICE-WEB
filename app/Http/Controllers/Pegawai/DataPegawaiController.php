<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Pegawai;
use Illuminate\Http\Request;


class DataPegawaiController extends Controller
{
    public function index(){
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
