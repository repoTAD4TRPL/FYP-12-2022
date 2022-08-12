@extends('layout.app')

@section('content')

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Profile > Toko Saya  >  Kelola Lelang > Informasi Lelang</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 px-2">
                    <div class="sidebar bg-white py-3">
                        <div class="sidebar-menu ">
                            <a href="{{ route('my-product') }}" >Produk Saya</a>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesanan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('order') }}">Pesanan </a>
                                <a class="dropdown-item" href="{{ route('order.cancelled') }}">Pembatalan</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kelola Lelang</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('auction.add') }}">Buat Lelang </a>
                                <a class="dropdown-item" href="{{ route('auction') }}">Riwayat Lelang</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Metode Pembayaran</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('payment.saldo') }}">Saldo Penjual </a>
                                <a class="dropdown-item" href="{{ route('payment.setting') }}">Pengaturan Rekening</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengiriman</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('shipment') }}">Jasa Pengiriman</a>
                                <a class="dropdown-item" href="{{ route('shipment') }}">Pengiriman Saya</a>
                                <a class="dropdown-item" href="{{ route('shipment.setting') }}">Pengaturan Pengiriman</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="{{ route('store-monitoring') }}">Analisis Pembeli</a>
                        </div>
                    </div>
                </div>
                <div class="col-9 px-2">
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
                                        <img src="{{ asset('img/product/batik.png') }}" alt="" ><span style="font-size: 18px; margin:0px 20px; font-weight:600;">Batik Motif Pekalongan Brown</span>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-3">
                                        <h5>Deskripsi Produk</h5>
                                    </div>
                                    <div class="col-9">
                                        <textarea name="" class="form-control" id="" cols="30" rows="10">Batik Motif Pekalongan Brown. Dengan panjang 180 cm, ukuran M  Model sabrina</textarea>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <table>
                                        <tr>
                                            <td style="padding: 10px 20px">Waktu Lelang Dimulai</td>
                                            <td style="padding: 10px 20px"><input type="date" class="form-control" value=""></td>
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
                    <div class="content bg-white p-3 my-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class=""><i></i> Informasi Pemenang Lelang </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 ">
                                <table>
                                    <tr>
                                        <td class="mb-4 pr-4 w-25"><h5>Username</h5></td>
                                        <td class="mb-4 pr-4 w-70"><input type="text" class="form-control" value="lamsihar74"></td>
                                    </tr>
                                    <tr>
                                        <td class="mb-4 pr-4 w-25"><h5>Harga Final</h5></td>
                                        <td class="mb-4 pr-4 w-70"><input type="text" class="form-control" value="RP.210.000"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
