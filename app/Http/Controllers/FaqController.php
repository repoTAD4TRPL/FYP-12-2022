<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        return view('faq.index');
    }

    public function show(){
        return view('faq.detail');
    }

    public function manageFaq(){
        return view('admin.faq.index');
    }

    public function add(){
        return view('admin.faq.create');
    }
}
