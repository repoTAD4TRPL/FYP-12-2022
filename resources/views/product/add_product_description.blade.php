@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="mb-0 mt-3">Toko Saya  >  Tambah Produk > Informasi Produk</p>
            </div>
        </div>
    </div>
    <section class="deskripsi-produk">
        <div class="container py-4">
            <div class="row px-4 my-3">
                <div class="col-lg-12">
                    <h4 class="">Informasi Produk</h4>
                    <hr>
                </div>
            </div>
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="row px-4 my-3">
                <div class="col-sm-2"><h5>*Kategori Produk</h5></div>
                <div class="col-sm-10">
                    <p>Pakaian  >  Celana  >  Celana panjang</p>
                </div>
            </div>
            <div class="row px-4 my-3">
                <div class="col-sm-2"><h5>*Produk Berbahaya</h5></div>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Tidak</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Mengandung baterai/bahan mudah terbakar/magnet</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
