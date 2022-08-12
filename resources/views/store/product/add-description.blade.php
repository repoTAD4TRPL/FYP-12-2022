@extends('layout.app')

@section('content')

    <section class="pb-4" style="background: #F5F5F5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Toko Saya  >  Tambah Produk</p>
                </div>
            </div>
        </div>
    </section>

    <form action="{{ route('product.add-post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section style="background: #F5F5F5">
            <div class="container mb-5 p-4" style="background: #ffffff">
                <div class="row">
                    <div class="col-12">
                        <h5 class="" style="font-weight: bold">Informasi Produk</h5>
                        <hr>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>Foto Produk</h5>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_utama" required/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">* Foto Utama</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_1"/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 1</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_2" />
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 2</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_3"/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 3</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_4"/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 4</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_5"/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 5</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_6"/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 6</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_7"/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 7</h5>
                            </div>
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="foto_8" />
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Foto 8</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>Video Produk</h5>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-2 mb-4 text-center">
                                <div class="wrapper">
                                    <div class="file-upload">
                                      <input type="file" name="video_produk"/>
                                      <i class="fa fa-plus"></i>
                                    </div>
                                </div>
                                <h5 style="font-size: 15px">Video Produk</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Nama Produk</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="nama_produk" type="text" class="form-control" value="{{ $product->nama_produk }}" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Deskripsi Produk</h5>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="deskripsi_produk" id="editor" style="height: 400px" required>

                        </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Kategori</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="kategori_produk" type="text" class="form-control" value="{{ $product->kategori_produk }}" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Produk Berbahaya</h5>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="produk_berbahaya" id="produk_berbahaya" value="Tidak" required>
                                    <label class="form-check-label" for="jenis-kelamin">
                                    Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="produk_berbahaya" id="produk_berbahaya" value="Mengandung baterai/bahan mudah terbakar/magnet" required>
                                    <label class="form-check-label" for="jenis-kelamin">
                                    Mengandung baterai/bahan mudah terbakar/magnet
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-5 p-4" style="background: #ffffff">
                <div class="row">
                    <div class="col-12">
                        <h5 class="" style="font-weight: bold">Spesifikasi</h5>
                        <hr>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Merek</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="merek_produk" type="text" class="form-control" placeholder="Masukkan merek produk" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Bahan</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="bahan_produk" type="text" class="form-control" placeholder="Masukkan bahan produk" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Ukuran</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="ukuran_produk" type="text" class="form-control" placeholder="Masukkan ukuran produk" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Warna</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="warna_produk" type="text" class="form-control" placeholder="Masukkan warna produk" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>Model</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="model_produk" type="text" class="form-control" placeholder="Masukkan model produk" required>
                    </div>
                </div>
            </div>
            <div class="container mb-5 p-4" style="background: #ffffff">
                <div class="row">
                    <div class="col-12">
                        <h5 class="" style="font-weight: bold">Informasi Penjualan</h5>
                        <hr>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Harga</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="harga_produk" type="number" min="99" class="form-control" placeholder="Masukkan harga produk" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Stok</h5>
                    </div>
                    <div class="col-sm-9">
                        <input name="stok_produk" type="number" min="1" class="form-control" placeholder="Masukkan stok produk" required>
                    </div>
                </div>
            </div>
            <div class="container p-4" style="background: #ffffff">
                <div class="row">
                    <div class="col-12">
                        <h5 class="" style="font-weight: bold">Pengiriman</h5>
                        <hr>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Berat</h5>
                    </div>
                    <div class="col-sm-9">
                        <div class="input-group flex-nowrap">
                            <input type="number" class="form-control" min="0" placeholder="Masukkan berat produk" name="berat_produk" required>
                            <span class="input-group-text" id="addon-wrapping">kg</span>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 text-right">
                        <h5>* Ukuran</h5>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group flex-nowrap">
                                    <input type="number" class="form-control" min="0" placeholder="Lebar" name="ukuran_produk_lebar" required>
                                    <span class="input-group-text" id="addon-wrapping">cm</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group flex-nowrap">
                                    <input type="number" class="form-control" min="0" placeholder="Panjang" name="ukuran_produk_panjang" required>
                                    <span class="input-group-text" id="addon-wrapping">cm</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group flex-nowrap">
                                    <input type="number" class="form-control" min="0" placeholder="Tinggi" name="ukuran_produk_tinggi" required>
                                    <span class="input-group-text" id="addon-wrapping">cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row py-4">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
