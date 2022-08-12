<?php

namespace App\Http\Controllers;

use App\Models\GaleriProduk;
use App\Models\Inventory;
use App\Models\InventoryItem;
use App\Models\Keranjang;
use App\Models\KeranjangItem;
use App\Models\Produk;
use App\Models\Toko;
use Illuminate\Http\Request;
use stdClass;

class ProductController extends Controller
{
    public function index(){
        $toko = Toko::where('user_id',auth()->user()->id)->first();
        $inventory = Inventory::where('toko_id',$toko->id)->first();
        $inventory_items = InventoryItem::where('inventory_id',$inventory->id)->get();
        return view('store.product.index',compact('inventory_items'));
    }

    public function search(Request $request){
        $products = Produk::where('nama_produk', 'ilike', '%' .$request->keyword . '%')->get();
        return view('product.search',compact('products'));
    }

    public function view($id){
        $product = Produk::find($id);
        $galery = GaleriProduk::where('produk_id',$id)->get();
        return view('product.detail',compact('product','galery'));
    }

    public function add(){
        return view('store.product.add');
    }

    public function addNew(Request $request){
        $product = new stdClass;
        $product->nama_produk = $request->nama_produk;
        $product->kategori_produk = $request->kategori_produk;

        return view('store.product.add-description',compact('product'));
    }

    public function addPost(Request $request){

        $toko = Toko::where('user_id',auth()->user()->id)->first();
        $inventory = Inventory::where('toko_id',$toko->id)->first();

        $product = new Produk();
        $product->kategori_produk_id = 2;
        $product->toko_id = $toko->id;
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi_produk = $request->deskripsi_produk;
        $product->spesifikasi_produk = 'bahan '.$request->bahan_produk;
        if ($request->hasFile('foto_utama')) {
            $filenameWithExt = $request->file('foto_utama')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_utama')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('foto_utama')->storeAs('public/img', $filenameSimpan);
            $product->gambar_produk = 'storage/img/'.$filenameSimpan;
        }
        $product->harga_produk = $request->harga_produk;
        $product->save();

        $inventory_item = new InventoryItem();
        $inventory_item->inventory_id = $inventory->id;
        $inventory_item->produk_id = $product->id;
        $inventory_item->jumlah = $request->stok_produk;
        $inventory_item->save();

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


        return redirect('/store/product');
    }

}
