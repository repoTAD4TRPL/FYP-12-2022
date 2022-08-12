@extends('layout.app')

@section('content')

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Profile > Toko Saya</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 px-2 h-100">
                    <div class="sidebar bg-white py-3">
                        <div class="sidebar-menu ">
                            <a href="" >Produk Saya</a>
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
                    <div class="content bg-white p-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class=""><i class="fa fa-file-text-o"></i> Penjualan Saya</h4>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="" style="font-weight: 400; font-size: 18px; line-height: 28px; color: #878787;">Lihat Riwayat penjualan >></a>
                            </div>
                        </div>
                        <hr>
                        <div class="row my3">
                            <div class="status-penjualan text-center">
                                <img src="{{ asset('img/icon/penjualan/icon1.png') }}" width="50px" height="50px" alt="">
                                <p>Pesanan</p>
                            </div>
                            <div class="status-penjualan text-center">
                                <img src="{{ asset('img/icon/penjualan/icon2.png') }}" width="50px" height="50px" alt="">
                                <p>Dikemas</p>
                            </div>
                            <div class="status-penjualan text-center">
                                <img src="{{ asset('img/icon/penjualan/icon3.png') }}" width="50px" height="50px" alt="">
                                <p>Dikirim</p>
                            </div>
                            <div class="status-penjualan text-center">
                                <img src="{{ asset('img/icon/penjualan/icon4.png') }}" width="50px" height="50px" alt="">
                                <p>Pesanan Dibatalkan</p>
                            </div>
                            <div class="status-penjualan text-center">
                                <img src="{{ asset('img/icon/penjualan/icon5.png') }}" width="50px" height="50px" alt="">
                                <p>Pengembalian <br>Dana/Barang</p>
                            </div>
                        </div>

                        <div class="row my-3" style="">
                            <div class="col-10">
                                <h4 style="font-size: 21px;"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp; Produk Saya</h4>
                            </div>
                            <div class="col-2 text-right">
                                <h4 style="font-size: 21px;">></h4>
                            </div>
                        </div>
                        <div class="row my-3" style="">
                            <div class="col-10">
                                <h4 style="font-size: 21px;"><i class="fa fa-truck"></i>&nbsp;&nbsp;<a href="{{ route('add-product') }}" style="color: black"> Tambah Produk Baru</a></h4>
                            </div>
                            <div class="col-2 text-right">
                                <h4 style="font-size: 21px;">></h4>
                            </div>
                        </div>
                        <div class="row my-3" style="">
                            <div class="col-10">
                                <h4 style="font-size: 21px;"><i class="fa fa-handshake-o"></i>&nbsp;&nbsp; Kelola Lelang</h4>
                            </div>
                            <div class="col-2 text-right">
                                <h4 style="font-size: 21px;">></h4>
                            </div>
                        </div>
                        <div class="row my-3" style="">
                            <div class="col-10">
                                <h4 style="font-size: 21px;"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;<a href="{{ route('payment.setting') }}" style="color: black"> Metode Pembayaran</a></h4>
                            </div>
                            <div class="col-2 text-right">
                                <h4 style="font-size: 21px;">></h4>
                            </div>
                        </div>
                        <div class="row my-3" style="">
                            <div class="col-10">
                                <h4 style="font-size: 21px;"><i class="fa fa-truck"></i>&nbsp;&nbsp;<a href="{{ route('shipment') }}" style="color: black"> Jasa Pengiriman</a></h4>
                            </div>
                            <div class="col-2 text-right">
                                <h4 style="font-size: 21px;">></h4>
                            </div>
                        </div>
                        <br>
                        <div class="row my-3" style="">
                            <div class="col-10">
                                <h4 style="font-size: 21px;"><i class="fa fa-dollar"></i>&nbsp;&nbsp;<a href="{{ route('payment.saldo') }}" style="color: black"> Saldo Penjualan</a></h4>
                            </div>
                            <div class="col-2 text-right">
                                <h4 style="font-size: 21px;">></h4>
                            </div>
                        </div>
                        <div class="row my-3" style="">
                            <div class="col-10">
                                <h4 style="font-size: 21px;"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;<a href="{{ route('store-monitoring') }}" style="color:black"> Analisis Pembeli </a> </h4>
                            </div>
                            <div class="col-2 text-right">
                                <h4 style="font-size: 21px;">></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
