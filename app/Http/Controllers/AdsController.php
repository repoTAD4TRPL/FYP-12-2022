<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(){
        return view('admin.ads.index');
    }

    public function add(){
        return view('admin.ads.create');
    }
}
