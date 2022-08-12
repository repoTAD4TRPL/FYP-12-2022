<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(){
        return view('store.shipment.index');
    }

    public function setting(){
        return view('store.shipment.pengaturan');
    }
}
