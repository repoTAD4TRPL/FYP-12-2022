@extends('layout.app')

@section('content')

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Profile > Toko Saya  >  Kelola Lelang > Buat Lelang</p>
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
                                <h4 class=""><i></i> Buat Lelang </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 deskripsi-produk">
                                <div class="row px-4 my-3">
                                    <div class="col-sm-2">
                                        <h5>Foto Produk</h5>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>*Foto Utama</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 1</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 2</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 3</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 4</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 5</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 6</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 7</p>
                                            </div>
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                                <p>Foto 8</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 my-3">
                                    <div class="col-sm-2">
                                        <h5>Video Produk</h5>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="row">
                                            <div class="foto-produk text-center">
                                                <a href=""><i class="fa fa-plus align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <ul>
                                            <li>Ukuran maksimal 30 MB</li>
                                            <li>Durasi: 10-60 detik</li>
                                            <li>Format: MP 4</li>
                                            <li>Catatan: Membuat video sesuai dengan produk yang ingin dijual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row px-4 my-3">
                                    <div class="col-sm-2"><h5>*Nama Produk</h5></div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row px-4 my-3">
                                    <div class="col-sm-2"><h5>*Deskripsi Produk</h5></div>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content bg-white p-3 my-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class=""><i></i> Pengaturan Lelang </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 deskripsi-produk">
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
                    <div class="row mb-4">
                        <div class="col-12 text-right">
                            <a href="{{ route('auction.detail') }}" class="btn btn-primary">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
