<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth as AuthLogin;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('auth.login');
    }

    public function register_page()
    {
        return view('auth.register');
    }

    public function register_store(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:5',
            'name' => 'required'
        ], [
            'name.required' => "Field nama wajib di isi."
        ]);

        $checkEmail = Auth::where('email', $request->email)->first();
        if ( $checkEmail ) {
            return redirect()->back()->with('error', 'email sudah terdaftar');
        }

        Auth::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60)
        ]);
        // dd($daftar);
        return redirect('/')->with('successRegist', 'Akunmu berhasil didaftarkan 😍');
    }
    public function login_store( Request $request )
    {
        if ( AuthLogin::attempt(['email' => $request->email, 'password' => $request->password]) ) {

            $time = 360;
            $response = new Response(redirect('/Readteracy/home')->with('berhasilLogin', 'Selamat Datang Di Readteracy'));
            if ( $request->has('remember') ) {
                $response->withCookie(Cookie("RPL06-Readteracy", "Readteracy", $time));
                return $response;
            }
            else {
                return redirect('/Readteracy/home')->with('berhasilLogin', 'Selamat Datang Di Readteracy');
            }

        } else {
            return redirect('/account/login-page')->withErrors('wrongAuth', 'Email dan Password tidak sesuai');
        }
    }
}
