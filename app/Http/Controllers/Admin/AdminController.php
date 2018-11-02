<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.admin-home');
    }

    public function viewsma(){
        return view('admin.surat-masuk.surat-m-home');
    }

    public function viewska(){
        return view('admin.surat-keluar.surat-k-home');
    }
}
