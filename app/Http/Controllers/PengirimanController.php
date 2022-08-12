<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index(){
        return view('pengiriman.index');
    }

    public function setting(){
        return view('pengiriman.pengaturan');
    }
}
