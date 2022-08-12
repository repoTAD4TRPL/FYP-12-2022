<?php

namespace App\Http\Controllers;

use App\Models\GaleriProduk;
use App\Models\Produk;
use App\Models\ProdukLelang;
use App\Models\Toko;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index(){
        $toko = Toko::where('user_id',auth()->user()->id)->first();
        $products = ProdukLelang::where('toko_id',$toko->id)->get();
        return view('store.auction.index',compact('products'));
    }

    public function show(){
        return view('store.auction.detail');
    }

    public function showClosedAuction(){
        return view('store.auction.detail-closed');
    }

    public function create(){
        return view('store.auction.create');
    }

    public function katalog(){
        $products = ProdukLelang::all();
        return view('auction.index',compact('products'));
    }

    public function detail($id){
        $product = ProdukLelang::find($id);
        return view('auction.detail',compact('product'));
    }

    public function bid(Request $request){

        return redirect('/auction')->with('success',"Berhasil melakukan lelang");
    }

    public function createPost(Request $request){
        $toko = Toko::where('user_id',auth()->user()->id)->first();
        $product = new ProdukLelang();
        $product->nama_produk = $request->nama_produk;
        $product->toko_id = $toko->id;
        $product->deskripsi_produk = $request->deskripsi_produk;
        $product->spesifikasi_produk = $request->deskripsi_produk;
        if ($request->hasFile('foto_utama')) {
            $filenameWithExt = $request->file('foto_utama')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_utama')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('foto_utama')->storeAs('public/img', $filenameSimpan);
            $product->gambar_produk = 'storage/img/'.$filenameSimpan;
        }
        $product->harga_awal = $request->harga_produk;
        $product->harga_tertinggi = $request->harga_produk;
        $product->lelang_mulai = $request->lelang_mulai;
        $product->lelang_selesai = $request->lelang_selesai;
        $product->rating = 5.0;
        $product->save();

        for($i = 1;$i<9;$i++){
            if ($request->hasFile('foto_'.$i)) {
                $filenameWithExt = $request->file('foto_'.$i)->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('foto_'.$i)->getClientOriginalExtension();
                $filenameSimpan = $filename.'_'.time().'.'.$extension;
                $path = $request->file('foto_'.$i)->storeAs('public/img', $filenameSimpan);

                $galery = new GaleriProduk();
                $galery->produk_id = $product->id;
                $galery->file_location = 'storage/img/'.$filenameSimpan;
                $galery->created_by = auth()->user()->username;
                $galery->created_by = now();
                $galery->save();
            }
        }
        if ($request->hasFile('video_produk')) {
            $filenameWithExt = $request->file('video_produk')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('video_produk')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('video_produk')->storeAs('public/img', $filenameSimpan);

            $galery = new GaleriProduk();
            $galery->produk_id = $product->id;
            $galery->file_location = 'storage/img/'.$filenameSimpan;
            $galery->created_by = auth()->user()->username;
            $galery->created_by = now();
            $galery->save();
        }

        return redirect('/store/auction')->with('success',"Berhasil menambahkan produk lelang");
    }


    public function lelang(){

        $products = ProdukLelang::take(3)->get();
        return view('profile.auction.index',compact('products'));
    }

    public function lelangPost(Request $request){
        return redirect('/lelang')->with('success',"Selamat produk yang anda lelang akan segera di proses oleh admin");
    }

    public function manageLelang(){
        return view('admin.auction.index');
    }

    public function buatLelangPost(){
        return redirect('/manageLelang')->with('success',"Berhasil menambahkan lelang");
    }
    public function detailLelang(){
        $products = ProdukLelang::all();
        return view('admin.auction.detail',compact('products'));
    }
}
