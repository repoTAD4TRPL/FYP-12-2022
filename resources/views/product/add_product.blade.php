@extends('layout.app')

@section('content')

    <section class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Toko Saya  >  Tambah Produk</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 header">
                    <h4 class="">Tambah Produk Baru</h4>
                    <p>Pilih kategori produk yang ingin anda jual</p>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 text-right">
                            <h5>Nama Produk</h5>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control" placeholder="Masukkan nama produk">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-category-section">
        <div class="container ">
            <div class="row py-4">
                <div class="col-md-12">
                    <div class="form-pencarian w-75">
                        <i class="fa fa-search icon" style="padding: 10px; min-width: 40px;padding: 10px 20px; min-width: 40px;position: absolute;"></i>
                        <input class="form-control" type="text" placeholder="Nama Kategori" style="padding: 10px 40px;">
                    </div>
                </div>
            </div>
            <div class="row px-3">
                <div class="col-md-3 category-menu">
                    <div class="nama-kategori">
                        <a href="" style="color:blue;">Pakaian<span style="position: absolute; right:20px; color:blue;"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Tas<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Aksesoris<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Perlengkapan bayi<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Elektronik<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Sepatu<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Buku dan alat tulis<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Kesehatan<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Kendaraan<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Perlengkapan Rumah<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Olahraga<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Makanan<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Minuman <span style="position: absolute; right:20px"> > </span></a>
                    </div>
                </div>
                <div class="col-md-3 category-menu">
                    <div class="nama-kategori">
                        <a href="">Baju Wanita<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Baju Pria<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="" style="color:blue;">Celana<span style="position: absolute; right:20px;color:blue;"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Rok<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Kostum<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Jaket<span style="position: absolute; right:20px"> > </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Baju Hamil<span style="position: absolute; right:20px"> > </span></a>
                    </div>

                </div>
                <div class="col-md-3 category-menu">
                    <div class="nama-kategori">
                        <a href="" style="color:blue;">Celana Panjang<span style="position: absolute; right:20px;">  </span></a>
                    </div>
                    <div class="nama-kategori">
                        <a href="">Celana Pendek<span style="position: absolute; right:20px">    </span></a>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-12">
                    <h5>Dipilih : Pakaian  >  Celana  >  Celana panjang</h5>
                    <a href="{{ route('add-product-description') }}" class="btn btn-primary">Lanjut</a>
                </div>

            </div>
        </div>
    </section>
@endsection
