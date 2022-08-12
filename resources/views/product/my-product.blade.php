    @extends('layout.app')

    @section('content')

        <section class="profil-section" style="background: #F5F5F5">
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-12">
                        <p class="mb-0 mt-3">Profile > Toko Saya  >  Produk Saya</p>
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
                                <a href="" >Kelola Lelang</a>
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
                                    <h4 class=""><i></i> Produk Saya</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row my-3">
                                <div class="col-3">
                                    <a href="" class="btn btn-primary w-20">Tambah Produk +</a>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-lg-12">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th scope="col">Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Variasi</th>
                                            <th scope="col">Penjualan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('img/product/batik.png') }}" width="70px" height="70px" alt=""> <br>
                                                    <span>Batik Wanita</span>
                                                </td>
                                                <td>Rp.200.000</td>
                                                <td>32</td>
                                                <td>Cokelat,Biru Dongker, Merah Maron</td>
                                                <td>0</td>
                                                <td>
                                                    <a href="">Ubah</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('img/product/kebaya.png') }}" width="70px" height="70px" alt="">
                                                    <br>
                                                    <span>Kebaya</span>
                                                </td>
                                                <td>Rp.340.000</td>
                                                <td style="color:red">Habis</td>
                                                <td>Pink, Hijau</td>
                                                <td>18</td>
                                                <td>
                                                    <a href="">Ubah</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">No. Pesanan 11790045</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <i class="fa fa-truck" style="font-size: 42px;"></i>
                                                    </div>
                                                    <div class="col-9">
                                                        <h5>Masukkan  nomor resi SiCepat REG</h5>
                                                        <p>
                                                            Masukkan nomor resi pengiriman pada
                                                            kolom dibawah agar pesanan dapat
                                                            dilacak dari Rincian Pesanan pembeli.
                                                        </p>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">No. Resi</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No.Resi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="button" class="btn btn-primary">Konfirmasi</button>
                                            </div>
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
