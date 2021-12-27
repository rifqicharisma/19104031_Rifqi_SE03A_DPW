<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    // mendefinisikan fungsi untuk view beranda
    public function index(){
        return view('beranda');
    }
}
