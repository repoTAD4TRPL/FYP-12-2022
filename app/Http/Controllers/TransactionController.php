<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function cart(){
        return view('transaction.shopping-chart');
    }

    public function checkout(){
        return view('transaction.checkout');
    }

    public function cart2(){
        return view('transaction.shopping-chart-2');
    }

    public function checkout2(){
        return view('transaction.checkout-minyak-goreng');
    }
}
