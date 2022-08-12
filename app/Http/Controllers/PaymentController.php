<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return view('store.payment.index');
    }

    public function paymentSetting(){
        return view('store.payment.setting');
    }

    public function addCreditCard(){
        return view('store.payment.add_credit_card');
    }
}
