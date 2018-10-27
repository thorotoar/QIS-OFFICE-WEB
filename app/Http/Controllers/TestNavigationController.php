<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestNavigationController extends Controller
{
    public function index(){
        return view('welcomeq');
    }

    public function home(){
        return view('user.homeu');
    }

    public function viewsm(){
        return view('user.smasuk.homesm');
    }

    public function viewtsm(){
        return view('user.smasuk.hometsm');
    }

    public function viewsk(){
        return view('user.skeluar.homesk');
    }

    public function viewtsk(){
        return view('user.skeluar.hometsk');
    }

    public function viewpd(){
        return view('usek.pdidilk.');
    }

    public function viewp(){
        return view('user.pegawai.');
    }

    public function viewk(){
        return view('user.kurikulum.');
    }

    public function viewd(){
        return view('user.dokumen.homed');
    }

    public function viewtd(){
        return view('user.dokumen.hometd');
    }

    public function index_admin(){
        return view('admin.homea');
    }

    public function viewsma(){
        return view('admin.smasuka.lihatsma');
    }

    public function viewska(){
        return view('admin.skeluara.lihatska');
    }
}
