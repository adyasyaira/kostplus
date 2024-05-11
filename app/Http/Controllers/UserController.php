<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('pelanggan/index');
    }

    public function register(){
        $data['title'] = 'Register';
        return view('login/reg', $data);
    }

    public function register_action(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $register = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ],[
            'name.required' => 'Nama Wajib diisi',
            'email.required' => 'Email Wajib diisi',
            'email.email' => 'Silahkan masukan email yang valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password Wajib diisi',
            'password.min' => 'Minimum password adalah 6 karakter',
            'password_confirmation' => 'Password Wajib diisi',
            'password_confirmation.same' => 'Password Tidak sesuai',
        ]);
        $user= new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();
        return redirect()->route('index');
    }

    public function login(){
        $data['title'] = 'Login';
        return view('login/form_login', $data);
    }

    public function login_action(Request $request){
        Session::flash('email', $request->email);
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email, 
            'password'=> $request->password,
        ];
        if(Auth::attempt($infologin)){
            // Jika sukses
            return redirect()->route('index')->with('success','Berhasil Login');
        } else {
            //jika gagal
            // var_dump($login);
            return redirect('login')->withErrors('Username dan password yang anda masukan tidak valid');
        }

    }

    function logout(){
        Auth::logout();
        return redirect('login')->with('success','Berhasil Logout');
    }

    public function detail(){
        return view('pelanggan/detail_kost');
    }

    public function kos_saya(){
        return view('pelanggan/kos_saya');
    }

    public function ubah_profil(){
        return view('pelanggan/ubah_profil');
    }
    
    public function favorit(){
        return view('pelanggan/favorit');
    }
            
}
