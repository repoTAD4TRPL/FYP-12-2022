<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->check()){
            if(auth()->user()->role_id==1){
                return view('admin.index');
            }
        }
        $categories = KategoriProduk::all();
        $products = Produk::all();
        return view('dashboard',compact('categories','products'));
    }

    public function bahasaBatak(){
        if(auth()->check()){
            if(auth()->user()->role_id==1){
                return view('admin.index');
            }
        }
        $categories = KategoriProduk::all();
        $products = Produk::all();
        return view('dashboard_batak',compact('categories','products'));
    }

}
