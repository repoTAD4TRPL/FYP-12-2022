@extends('layout.app')

@section('content')
    <section style="background-color: #FAFAF7">
        <div class="container-fluid">
            @if ($order_detail->status =='Dikirim')
            <div class="row">
                <div class="col-12 my-3">
                    <div class="alert alert-warning" role="alert">
                        <div class="row">
                            <div class="col-9">
                                <h5 style="font-size: 14px">Semua item telah sampai di tujuan.  Silahhkan cek dan konfirmasi apabila item telah anda terima. Sistem akan otomatis selesai setelah 3 hari.</h5>
                            </div>
                            <div class="col-3 text-right">
                                <strong>
                                    <a href="">Complain</a> | <a href="">Atur sebagai Selesai</a>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-12 my-3">
                    <div class="row">
                        <div class="col-9">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5>Bagaimana Pendapat anda mengenai aplikasi ini?</h5>
                                            <span >Penilaian hanya bisa dikirim satu kali</span>
                                        </div>
                                        <div class="col-4 text-right">
                                            <div class="product__details__rating"  style="color: rgb(134, 134, 134)">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-2">
                                            <img src="{{ asset($order_detail->product->gambar_produk) }}" alt="">
                                        </div>
                                        <div class="col-10">
                                            <h5 class="mb-3">{{$order_detail->product->nama_produk  }}</h5>
                                            <div class="product__details__rating" style="color: rgb(134, 134, 134)">
                                                Good
                                                <i style="color: rgb(245, 149, 24)" class="fa fa-star"></i>
                                                <i style="color: rgb(245, 149, 24)" class="fa fa-star"></i>
                                                <i style="color: rgb(245, 149, 24)" class="fa fa-star"></i>
                                                <i style="color: rgb(245, 149, 24)" class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>

                                            <div class="row my-3">
                                                <div class="col-8">
                                                    <h5>Bagikan gambar yang sesuai</h5>
                                                    <span>Gambar yang di upload adalah 2 item</span>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <a href="" class="btn btn-sm btn-light" style="border: 1px solid #cccc"><i class="fa fa-upload"></i> Unggah</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img class="m-3" src="{{ asset('img/product/beras-merah.png') }}" style="width: 80px;height:80px;" alt="">
                                                    <img class="m-3" src="{{ asset('img/product/bedak.png') }}" style="width: 80px;height:80px;" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 style="font-size: 15px;">Penilaian (opsional)</h5>
                                                    <ul style="list-style: none ;" class="comment-button py-3">
                                                        <li><a href="" style="border-radius:100px; padding:5px 10px; border:1px solid rgb(58, 61, 223);margin:5px;  ">Harganya Terjangkau</a></li>
                                                        <li><a href="" style="border-radius:100px; padding:5px 10px; border:1px solid rgb(58, 61, 223);margin:5px;  ">Harganya Murah</a></li>
                                                        <li><a href="" style="border-radius:100px; padding:5px 10px; border:1px solid rgb(58, 61, 223);margin:5px;  ">Informasinya lengkap</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                                    <span>Jelaskan mengenai deskripsi produk serta kualitas produk anda</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <strong>
                                                        <span>Tandai sebagai tanpa</span>
                                                    </strong>
                                                    <label class="switch m-2">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    <a href="" class="btn btn-primary">Kirim Penilaian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            Info Penjual
                                            <button id="button-chat" onclick="openChat()" class="btn btn-sm btn-light float-right" style="color:rgba(139, 134, 134, 0.8)"><i class="fa fa-comment"></i> Chat</button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="{{ asset('img/logo2.jpeg') }}" alt="">
                                                </div>
                                                <div class="col-6" style="font-size: 90%">
                                                    <a href="">HKBP Store App</a><br>
                                                    <span style="font-size: 11px">Jakarta Selatan</span>
                                                </div>
                                                <div class="col-3">
                                                    <span><i class="fa fa-star" style="color:#F89D25"></i> 4.5</span>
                                                </div>
                                            </div>
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
