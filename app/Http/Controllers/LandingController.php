<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function howto() {
        return view('howto');
    }

    public function about() {
        return view('about');
    }
}
