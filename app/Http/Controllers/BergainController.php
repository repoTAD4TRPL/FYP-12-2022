<?php

namespace App\Http\Controllers;

use App\Models\Penawaran;
use Illuminate\Http\Request;

class BergainController extends Controller
{
    public function bergainReject($id){
        $penawaran = Penawaran::find($id);
        $penawaran->status = "Ditolak";
        $penawaran->updated_at = now();
        $penawaran->updated_by = auth()->user()->username;
        $penawaran->save();
        return redirect('/store/order/detail/'.$penawaran->item_pemesanan_id);
    }

    public function bergainApprove($id){
        $penawaran = Penawaran::find($id);
        $penawaran->status = "Diterima";
        $penawaran->updated_at = now();
        $penawaran->updated_by = auth()->user()->username;
        $penawaran->save();
        return redirect('/store/order/detail/'.$penawaran->item_pemesanan_id);
    }

    public function bergain(Request $request){
        $penawaran = new Penawaran();
        $penawaran->item_pemesanan_id = $request->item_pemesanan_id;
        $penawaran->harga_sebelum = $request->harga_sebelum;
        $penawaran->harga_sesudah = $request->harga_sesudah;
        $penawaran->created_at = now();
        $penawaran->created_by = auth()->user()->username;
        $penawaran->save();

        return redirect("/order/detail/".$request->item_pemesanan_id);
    }


    public function bergainPost(Request $request){

        $penawaran = Penawaran::find($request->penawaran_id);
        $penawaran->status = "Menunggu";
        $penawaran->updated_at = now();
        $penawaran->updated_by = auth()->user()->username;
        $penawaran->save();
        return redirect("/order/detail/".$request->item_pemesanan_id);
    }

    public function rebergain(Request $request){
        $penawaran = Penawaran::find($request->id);
        $penawaran->harga_sesudah = $request->harga_sesudah;
        $penawaran->status = "";
        $penawaran->updated_at = now();
        $penawaran->updated_by   = auth()->user()->username;
        $penawaran->save();

        return redirect("/order/detail/".$request->item_pemesanan_id);
    }

    public function cancelBergain($id){
        $penawaran = Penawaran::find($id);
        $order_id = $penawaran->item_pemesanan_id;
        $penawaran->delete();
        return redirect("/order/detail/".$order_id);
    }
}
