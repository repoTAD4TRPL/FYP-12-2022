@extends('layout.app')

@section('content')
    <section style="background-color: #FAFAF7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 my-5">
                    <div class="row">
                        <div class="col-9">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        Mareli Heels Sendal Wanita Ukuran 38 <span class="badge bg-warning ml-4" style="color:white; font-size:0.6em; font-weight:600;">Menunggu konfirmasi</span>
                                        <span class="float-right">NO. PESANAN. 30N3210I02J2 </span>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            Belum Bayar
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres5.png') }}) no-repeat center;background-size:98%; color:white;">{{ now()->format("d M Y") }}</h5>
                                        </div>
                                        <div class="col-3">
                                            Dikemas
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres2.png') }}) no-repeat center;background-size:98%;">{{ now()->format("d M Y") }}</h5>
                                        </div>
                                        <div class="col-3">
                                            Dikirim
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres2.png') }}) no-repeat center;background-size:98%;">{{ now()->format("s M Y") }}</h5>
                                        </div>
                                        <div class="col-3">
                                            Selesai
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres2.png') }}) no-repeat center;background-size:98%;">{{ now()->format("d M Y") }}</h5>
                                        </div>
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-2">
                                            <img src="{{ asset('img/product/mareli.png') }}" alt="">
                                        </div>
                                        <div class="col-10">
                                            <table>
                                                <tr>
                                                    <td>Total Item</td>
                                                    <td class="px-3"> : </td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Harga</td>
                                                    <td class="px-3"> : </td>
                                                    <td>Rp250.000</td>
                                                </tr>
                                            </table>
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
                                            <a href="" class="btn btn-sm btn-light float-right" style="color:rgba(139, 134, 134, 0.8)"><i class="fa fa-comment"></i> Chat</a>
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
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            Ringkasan Tawaran
                                        </div>
                                        <div class="card-body">
                                            <table style="width: 100%">
                                                <tr>
                                                    <td>Item</td>
                                                    <td class="text-right">2 Item</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Sebelum</td>
                                                    <td class="text-right">Rp280.000</td>
                                                </tr>
                                                <tr  style="font-weight: bold">
                                                    <td>Total Sesudah</td>
                                                    <td class="text-right">Rp250.000</td>
                                                </tr>
                                            </table>
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
