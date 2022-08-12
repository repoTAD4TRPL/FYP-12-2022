@extends('layout.app')

@section('content')

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Profile > Toko Saya  >  Metode Pembayaran  >  Saldo Penjual</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 px-2 h-100">
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
                    <div class="content bg-white p-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class=""><i></i> Saldo Penjualan</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="saldo">
                                    <h4>Saldo</h4>
                                    <h3>Rp.1.000.000</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <h4 class=""><i></i> History Transakasi</h4>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-light">Urutkan</button>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">ID Pesanan</th>
                                            <th scope="col">Rekening</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Rp.200.000</th>
                                            <td>Masuk</td>
                                            <td>{{ now() }}</td>
                                            <td>20032</td>
                                            <td>BRI</td>
                                            <td>Keterangan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Rp.700.000</th>
                                            <td>Keluar</td>
                                            <td>{{ now() }}</td>
                                            <td>20033</td>
                                            <td>BRI</td>
                                            <td>Keterangan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Rp.600.000</th>
                                            <td>Masuk</td>
                                            <td>{{ now() }}</td>
                                            <td>20031</td>
                                            <td>BRI</td>
                                            <td>Keterangan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Rp.230.000</th>
                                            <td>Masuk</td>
                                            <td>{{ now() }}</td>
                                            <td>20034</td>
                                            <td>BNI</td>
                                            <td>Keterangan</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Rp.100.000</th>
                                            <td>Keluar</td>
                                            <td>{{ now() }}</td>
                                            <td>20035</td>
                                            <td>Mandiri</td>
                                            <td>Keterangan</td>
                                        </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
