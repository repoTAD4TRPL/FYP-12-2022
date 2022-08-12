@extends('layout.admin')

@section('content')
    <style>
        .wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .wrapper .file-upload {
            height: 80px;
            width: 80px;
            border-radius: 3px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px dashed #2590EB;
            overflow: hidden;
            background-size: 100% 200%;
            transition: all 1s;
            color: #FFFFFF;
            font-size: 100px;
        }
        .wrapper .file-upload i{
            font-size: 20px;
            color: #2590EB;
            }


            .wrapper .file-upload input[type=file] {
                height: 100px;
                width: 100px;
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
                cursor: pointer;
            }
    </style>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bazar </span></h5>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header py-3">Informasi Bazar</h5>
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-3">
                                *Foto produk
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_utama" required="">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">* Foto Utama</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_1">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 1</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_2">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 2</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_3">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 3</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_4">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 4</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_5">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 5</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_6">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 6</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_7">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 7</h5>
                                    </div>
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_8">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Foto 8</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Video produk
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-2 mb-4 text-center">
                                        <div class="wrapper">
                                            <div class="file-upload">
                                              <input type="file" name="foto_utama" required="">
                                              <i class="bx bx-plus"></i>
                                            </div>
                                        </div>
                                        <h5 style="font-size: 15px">Video</h5>
                                    </div>
                                    <div class="col-10">
                                        <ol>
                                            <li>Ukuran maksimal 30 MB</li>
                                            <li>Durasi: 10-60 detik</li>
                                            <li>Format: MP 4</li>
                                            <li>Catatan: Membuat video sesuai dengan produk yang ingin dijual</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Nama Produk
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Deskripsi Produk
                            </div>
                            <div class="col-9">
                                <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Stok produk
                            </div>
                            <div class="col-9">
                                <input type="number"  class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Harga produk
                            </div>
                            <div class="col-9">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Diskon harga
                            </div>
                            <div class="col-9">
                                <div class="input-group input-group-merge">
                                    <input type="number" class="form-control">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-end">
                                <a href="" class="btn btn-primary">Simpan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


@endsection

