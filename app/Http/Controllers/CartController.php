<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Keranjang;
use App\Models\KeranjangItem;
use App\Models\Pemesanan;
use App\Models\PemesananItem;
use App\Models\PengaturanSistem;
use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cart_items = array();
        $cart = Keranjang::where('user_id',auth()->user()->id)->first();
        if($cart!=null){
            $cart_items = KeranjangItem::where('keranjang_id',$cart->id)->where('status','=',null)->get();
        }

        return view('cart.index',compact('cart_items','cart'));
    }

    public function addToCart(Request $request){
        $product = Produk::find($request->produk_id);
        $keranjang = Keranjang::where('user_id',auth()->user()->id)->first();
        if($keranjang==null){
            $keranjang = new Keranjang();
            $keranjang->user_id = auth()->user()->id;
            $keranjang->created_at = now();
            $keranjang->created_by = auth()->user()->username;
            $keranjang->save();
        }

        $item_keranjang = new KeranjangItem();
        $item_keranjang->keranjang_id = $keranjang->id;
        $item_keranjang->produk_id = $request->produk_id;
        $item_keranjang->toko_id = $product->toko_id;
        $item_keranjang->jumlah = $request->jumlah_produk;
        $item_keranjang->created_at = now();
        $item_keranjang->created_by = auth()->user()->username;
        $item_keranjang->save();

        return redirect('/cart');
    }


    public function checkout(Request $request){
        $cart = Keranjang::find($request->keranjang_id);
        $cart_items = KeranjangItem::where('keranjang_id',$request->keranjang_id)->where('status',null)->get();
        $pemesanan = new Pemesanan();
        $pemesanan->user_id = auth()->user()->id;
        $pemesanan->status = "Dipesan";
        $pemesanan->created_at = now();
        $pemesanan->created_by = auth()->user()->username;
        $pemesanan->save();

        $pajak_pembelian = PengaturanSistem::where('key','pajak_pembelian')->first();
        $pajak_penjualan = PengaturanSistem::where('key','pajak_penjualan')->first();
        $invoice = new Invoice();
        $invoice->user_id = auth()->user()->id;
        $invoice->pemesanan_id = $pemesanan->id;
        $invoice->subtotal = $request->total_harga;
        $invoice->pajak = $request->total_harga * ($pajak_pembelian->value + $pajak_penjualan->value);
        $invoice->total = $request->total_harga + ($request->total_harga*($pajak_pembelian->value + $pajak_penjualan->value));
        $invoice->status_pembayaran = "Menunggu";
        $invoice->created_at = now();
        $invoice->created_by = auth()->user()->username;
        $invoice->save();

        foreach($cart_items as $cart_item){
            $item_pesanan = new PemesananItem();
            $item_pesanan->pemesanan_id = $pemesanan->id;
            $item_pesanan->produk_id = $cart_item->produk_id;
            $item_pesanan->jumlah = $cart_item->jumlah;
            $item_pesanan->toko_id = $cart_item->toko_id;
            $item_pesanan->status = "Dipesan";
            $item_pesanan->created_at = now();
            $item_pesanan->created_by = auth()->user()->username;
            $item_pesanan->save();

            $detail_invoice = new InvoiceDetail();
            $detail_invoice->invoice_id = $invoice->id;
            $detail_invoice->produk_id = $cart_item->produk_id;
            $detail_invoice->jumlah = $cart_item->jumlah;
            $detail_invoice->toko_id = $cart_item->toko_id;
            $detail_invoice->status_pembayaran = "Menunggu";
            $detail_invoice->created_at = now();
            $detail_invoice->created_by = auth()->user()->username;
            $detail_invoice->save();

            $cart_item->status = "Dipesan";
            $cart_item->updated_at = now();
            $cart_item->updated_by = auth()->user()->username;
            $cart_item->save();
        }
        $cart->status ="Dipesan";
        $cart->updated_at = now();
        $cart->updated_by = auth()->user()->username;
        $cart->save();


        $pajak = $invoice->pajak;
        $harga = $invoice->total;
        $item_pesanan = PemesananItem::where('pemesanan_id',$pemesanan->id)->get();
        return view('order.order_form',compact('pajak','harga','item_pesanan'));
    }
}
