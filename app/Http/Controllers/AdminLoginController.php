<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index() {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('user');
        }
    }

    public function loginAdmin(){
        return view('login-admin');
    }

    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password, 'level' => 'admin'])) {
            $data = DB::table('users')->get();
            return redirect('/data-user');
        } else {
            return redirect('/')->with('alert', 'Maaf, Anda bukan admin');
        }
    }

    public function datauser() {
        $data = DB::table('users')->get();
        return view('data-user', compact('data'));
    }

    public function datakupon() {
        $data = DB::table('kupon')->get();
        return view('data-kupon', compact('data'));
    }

    //not fix
    public function searchUser(Request $request) {
        $search = $request->search;

        $data = DB::table('users')
        ->where('nama_depan', 'like', "%".$search."%")
        ->get();

        return redirect('data-user');
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('alert','Kamu sudah logout');
    }
}
