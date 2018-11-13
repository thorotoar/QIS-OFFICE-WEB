<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JenisSurat;
use Illuminate\Http\Request;

class JenisSuratController extends Controller
{
    public function index(){
        $jenisSurat = JenisSurat::all();
        return view('admin.j-s-management.m-j-s-home', compact('jenisSurat'));
    }

    public function tambah_jsm(){
        return view('admin.j-s-management.m-j-s-tambah');
    }
}
