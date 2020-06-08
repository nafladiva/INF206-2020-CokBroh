<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    //Alhamdulillah udh bisa
    public function kupon()
    {
        $user_id = Auth::user()->id;

        $data = DB::table('kupon_user')
        ->join('kupon', 'kupon.id', '=', 'id_kupon')
        ->select('id_user', 'id_kupon', 'nama', 'berlaku_sampai', 'deskripsi')
        ->where('id_user', $user_id)
        ->get();

        return view('kuponUser', ['data' => $data]);
    }


}
