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
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Iklan </span></h5>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header py-3">Informasi Iklan</h5>
                    <hr class="my-0">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-3">
                                *Spanduk Iklan
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Judul Iklan
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Kategori Iklan
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3">
                                *Konten Iklan
                            </div>
                            <div class="col-9">
                                <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
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

