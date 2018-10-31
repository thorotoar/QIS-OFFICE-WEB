<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('welcomeq');
    }

    public function login(Request $request)
    {
        //apakah requirement proses ini memenuhi atau tidak.
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        //$request->remember = (is_null($request->remember)) ? false : $request->remember;

        //mengeksekusi proses
        try {
            //mencari user berdasarkan username yang diinputkan, firstOrFail = mengambil data paling pertama seandainya ada data yang sama
            $user = User::where('username',$request->username)->firstOrFail();
            //!Hash = decript Password
            if(!Hash::check($request->password, $user->password)) {
                return back()->with([
                    'error' => 'Username Atau Password Anda Salah!!.'
                ]);
            }
            Auth::login($user);
            $role = Auth::user()->type;
            if($role == 'pegawai'){
                return redirect()->route('home-pegawai')->with('signed','You`re now signed in as Pegawai.');
            }
            if($role == 'admin'){
                return redirect()->route('home-admin')->with('signed','You`re now signed in as Admin.');
            }
        }
        catch (ModelNotFoundException $e) {
            return back()->with([
                'error' => 'Your email or password is incorrect.'
            ]);
        }

    }

//    protected function sendLoginResponse(Request $request)
//    {
//        $request->session()->regenerate();
//
//        $this->clearLoginAttempts($request);
//
//        if ($this->guard()->user()->role->name=='admin'){
//
//            return redirect(route('home-admin'));
//        }
//        elseif ($this->guard()->user()->role->name=='pegawai'){
//
//            return redirect(route('home-pegawai'));
//        }
//        else{
//            return redirect(view('welcomeq'));
//
//        }
//    }
//    protected function credentials(Request $request)
//    {
//        return ['username'=>$request->{$this->username()}, 'password'=>$request->password];
////        return ['email'=>$this->username(),'password'=>$request->getPassword()]
//    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/loginq');
    }
}
