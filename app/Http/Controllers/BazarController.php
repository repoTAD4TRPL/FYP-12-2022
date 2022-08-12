<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazarController extends Controller
{
    public function index(){
        return view('bazar.index');
    }

    public function show(){
        return view('bazar.detail');
    }

    public function add(){
        return view('admin.bazar.create');
    }

    public function manageBazar(){
        return view('admin.bazar.index');
    }
}
