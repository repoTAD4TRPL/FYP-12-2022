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
                                            <span>Penilaian keseluruhan</span>
                                            <div class="product__details__rating">
                                                <a href="" style="color: rgb(134, 134, 134)"><i class="fa fa-star"></i></a>
                                                <a href="" style="color: rgb(134, 134, 134)"><i class="fa fa-star"></i></a>
                                                <a href="" style="color: rgb(134, 134, 134)"><i class="fa fa-star"></i></a>
                                                <a href="/order/send-rating/{{ $order_detail->id }}" style="color: rgb(134, 134, 134)"><i class="fa fa-star"></i></a>
                                                <a href="" style="color: rgb(134, 134, 134)"><i class="fa fa-star"></i></a>
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
