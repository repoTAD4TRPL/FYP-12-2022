@extends('layout.app')

@section('content')

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Profile > Toko Saya  >  Jasa Pengiriman  >  Pengiriman Saya</p>
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
                    <div class="content bg-white p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class=""><i></i> Pengiriman Pesanan</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row my3 text-right">
                            <div class="col-md-3"></div>
                            <div class="col-md-4">
                                <h5>Waktu Pesanan Dibuat</h5>
                            </div>
                            <div class="col-md-5"> <input type="date" class="form-control"></div>
                        </div>
                        <div class="row my-3">
                            <div style="width: 30%">
                                <select id="inputGroupSelect01">
                                    <option selected>No. Pesanan</option>
                                    <option value="1">102</option>
                                    <option value="2">105</option>
                                    <option value="3">107</option>
                                </select>
                            </div>
                            <div style="width: 55%">
                                <input type="text" class="form-control" placeholder="Masukkan No. Pesanan">
                            </div>
                            <div style="width: 15%; padding:0px 10px;">
                                <a href="" class="btn btn-primary w-100">Cari</a>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-12">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Semua</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Perlu Di Proses</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Telah Di Proses</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="table-title my-4">
                                            <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                                        </div>
                                        <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">No Pemesanan</th>
                                                <th scope="col">Harga Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Jasa Kirim</th>
                                                <th scope="col">Aksi</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="table-title my-4">
                                            <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                                        </div>
                                        <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">No Pemesanan</th>
                                                <th scope="col">Harga Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Jasa Kirim</th>
                                                <th scope="col">Aksi</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="table-title my-4">
                                            <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                                        </div>
                                        <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">No Pemesanan</th>
                                                <th scope="col">Harga Total</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Jasa Kirim</th>
                                                <th scope="col">Aksi</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>139321</td>
                                                    <td>Rp.200.000</td>
                                                    <td>Dalam pengiriman</td>
                                                    <td>Si Cepat REG</td>
                                                    <td>
                                                        <a href="" class="btn btn-sm">edit</a>
                                                        <a href="" class="btn btn-sm">hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
