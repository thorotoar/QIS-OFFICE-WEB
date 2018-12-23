<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Pegawai;
use App\RiwayatPendidikan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $pegawaiView = RiwayatPendidikan::all()->count();
        $pegawaiShow = RiwayatPendidikan::find($request->id);
        return view('pegawai.pegawai-home', compact('pegawaiView', 'pegawaiShow'));
    }

    public function changePass(){
        return view('pegawai.pegawai-rpassword');
    }

    public function change(Request $request){

//        if (Hash::check(Auth::user()->password, $request->password_lama ) ){
//            Auth::user()->update([
//                'password' => bcrypt($request->password_baru),
//                'password_a' => $request->password_baru,
//            ]);
//        }

        if (!Hash::check($request->password_lama, Auth::user()->password)) {
            return back()->with([
                'error' => 'Password lama anda salah !'
            ]);
        } else {
            if ($request->password_baru !== $request->cpassword_baru) {
                return back()->with([
                    'error' => 'Password baru anda tidak sama !'
                ]);
            } else {
                Auth::user()->update([
                    'password' => bcrypt($request->password_baru),
                    'password_a' => $request->password_baru
                ]);
            }
            return back()->with([
                'sukses' => 'Berhasil Memperbarui Password !'
            ]);
        }
    }
}
