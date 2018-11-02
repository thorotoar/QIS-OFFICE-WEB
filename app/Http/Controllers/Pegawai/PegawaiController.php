<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
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

    public function viewskp(){
        return view('pegawai.surat-keluar.surat-k-home');
    }
}
