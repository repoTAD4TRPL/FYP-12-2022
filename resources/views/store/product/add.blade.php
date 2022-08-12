@extends('layout.app')

@section('content')

    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Toko Saya  >  Tambah Produk</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="">Tambah Produk Baru</h4>
                    <p>Pilih kategori produk yang ingin anda jual</p>
                    <hr>
                </div>
            </div>
            <form action="{{ route('product.add-new') }}" method="post">
                @csrf
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>Nama Produk</h5>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Ketik nama produk" required>
                    </div>
                </div>
                <div class="row product-category-section my-4">
                    <div class="col-sm-3 text-right">
                        <h5>Kategori Produk</h5>
                    </div>
                    <div class="col-sm-9 ">
                        <input type="text" name="kategori_produk" id="kategori_produk" class="form-control" placeholder="Ketik kategori produk" required>
                        <h5 class="my-2" style="font-size: 15px;">Silahkan pilih kategori produk anda.</h5>
                        <div class="row px-3">
                            <div class="col-md-4 category-menu">
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
                            <div class="col-md-4 category-menu">
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
                            <div class="col-md-4 category-menu">
                                <div class="nama-kategori">
                                    <a href="" style="color:blue;">Celana Panjang<span style="position: absolute; right:20px;">  </span></a>
                                </div>
                                <div class="nama-kategori">
                                    <a href="">Celana Pendek<span style="position: absolute; right:20px">    </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
