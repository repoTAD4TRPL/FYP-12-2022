
@extends('layout.store')

@section('content')
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
                <h4 style="font-size: 21px;"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;<a href="{{ route('product') }}" style="color: black"> Produk Saya</a></h4>
            </div>
            <div class="col-2 text-right">
                <h4 style="font-size: 21px;">></h4>
            </div>
        </div>
        <div class="row my-3" style="">
            <div class="col-10">
                <h4 style="font-size: 21px;"><i class="fa fa-truck"></i>&nbsp;&nbsp;<a href="{{ route('product.add') }}" style="color: black"> Tambah Produk Baru</a></h4>
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
                <h4 style="font-size: 21px;"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;<a href="" style="color: black"> Metode Pembayaran</a></h4>
            </div>
            <div class="col-2 text-right">
                <h4 style="font-size: 21px;">></h4>
            </div>
        </div>
        <div class="row my-3" style="">
            <div class="col-10">
                <h4 style="font-size: 21px;"><i class="fa fa-truck"></i>&nbsp;&nbsp;<a href="" style="color: black"> Jasa Pengiriman</a></h4>
            </div>
            <div class="col-2 text-right">
                <h4 style="font-size: 21px;">></h4>
            </div>
        </div>
        <br>
        <div class="row my-3" style="">
            <div class="col-10">
                <h4 style="font-size: 21px;"><i class="fa fa-dollar"></i>&nbsp;&nbsp;<a href="" style="color: black"> Saldo Penjualan</a></h4>
            </div>
            <div class="col-2 text-right">
                <h4 style="font-size: 21px;">></h4>
            </div>
        </div>
        <div class="row my-3" style="">
            <div class="col-10">
                <h4 style="font-size: 21px;"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;<a href="" style="color:black"> Analisis Pembeli </a> </h4>
            </div>
            <div class="col-2 text-right">
                <h4 style="font-size: 21px;">></h4>
            </div>
        </div>
    </div>
@endsection
