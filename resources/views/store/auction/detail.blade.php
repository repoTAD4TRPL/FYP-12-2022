@extends('layout.store')

@section('content')

<div class="content bg-white p-3">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Informasi Lelang </h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 deskripsi-produk">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('assets/img/pakaian/gambar12.png') }}" alt="" ><span style="font-size: 18px; margin:0px 20px; font-weight:600;">Dres Polos Brown Wanita</span>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-3">
                    <h5>Deskripsi Produk</h5>
                </div>
                <div class="col-9">
                    <textarea name="" class="form-control" id="" cols="30" rows="10">Dres Polos Brown Wanita. Dengan panjang 180 cm, ukuran M  Model sabrina</textarea>
                </div>
            </div>
            <div class="row my-4">
                <table>
                    <tr>
                        <td style="padding: 10px 20px">Waktu Lelang Dimulai</td>
                        <td style="padding: 10px 20px"><input type="date" class="form-control"></td>
                        <td style="padding: 10px 20px"><input type="time" class="form-control" name="" id=""></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 20px">Waktu Lelang Selesai</td>
                        <td style="padding: 10px 20px"><input type="date" class="form-control"></td>
                        <td style="padding: 10px 20px"><input type="time" class="form-control" name="" id=""></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
