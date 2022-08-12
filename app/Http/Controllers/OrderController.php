<?php

namespace App\Http\Controllers;

use App\Models\PemesananItem;
use App\Models\Penawaran;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index(){
        $orders = PemesananItem::join('pemesanan','item_pemesanan.pemesanan_id','=','pemesanan.id')
            ->select('item_pemesanan.*')
            ->where('pemesanan.user_id',auth()->user()->id)->get();

        return view('order.index',compact('orders'));
    }

    public function show($id){
        $penawaran = Penawaran::where('item_pemesanan_id',$id)->first();

        $order_detail = PemesananItem::find($id);
        return view('order.detail',compact('order_detail','penawaran'));
    }

    public function storeOrder(){
        $store = Toko::where('user_id',auth()->user()->id)->first();
        $orders = PemesananItem::where('toko_id',$store->id)->get();
        return view('store.order.index',compact('orders'));
    }

    public function storeOrderDetail($id){
        $penawaran = Penawaran::where('item_pemesanan_id',$id)->first();

        $order_detail = PemesananItem::find($id);
        return view('store.order.detail',compact('order_detail','penawaran'));
    }

    public function cancelledOrder(){
        return view('store.order.cancelled');
    }

    public function rating($id){
        $penawaran = Penawaran::where('item_pemesanan_id',$id)->first();

        $order_detail = PemesananItem::find($id);
        return view('order.rating',compact('order_detail','penawaran'));
    }
    public function sendRating($id){
        $penawaran = Penawaran::where('item_pemesanan_id',$id)->first();

        $order_detail = PemesananItem::find($id);
        return view('order.send_rating',compact('order_detail','penawaran'));
    }

    public function orderForm(){
        return view('order.order_form');
    }

    public function cancel(){
        return redirect('/order')->with('success',"Berhasil membatalkan pesanan");
    }
}
