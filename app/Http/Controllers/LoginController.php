<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (auth()->user()->name == 'admin'){
            return redirect('admin/index');
        }
        
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        // dd('berhasil login');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/index');
        }
        else{
            return redirect()->back()->with('error', 'Login Gagal!!'); //redirect kembali ke halaman login
        }
    }
    public function admin()
    {
        $user = Auth::user();
        // dd($user);
        return view('admin.admin',[
            'user' => $user
        ]);
    }
}
