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
                                    <div class="row">
                                        <div class="col-8">
                                            <h5>
                                                {{ $order_detail->product->nama_produk }}
                                            </h5>
                                        </div>
                                        <div class="col-4 text-right">
                                            <h5>
                                                NO. PESANAN. {{ $order_detail->id }} <br>
                                                @if ($penawaran != null)
                                                    @if ($penawaran->status == "Menunggu")
                                                    <span class="badge bg-warning ml-4" style="color:white; font-size:0.6em; font-weight:600;">Menunggu konfirmasi penawaran</span>
                                                    @elseif ($penawaran->status == "Diterima")
                                                    <span class="badge bg-success ml-4" style="color:white; font-size:0.6em; font-weight:600;">Penawaran disetujui</span>
                                                    @elseif ($penawaran->status == "Ditolak")
                                                    <span class="badge bg-danger ml-4" style="color:white; font-size:0.6em; font-weight:600;">Penawaran ditolak</span>
                                                    @endif
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
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
                                            <img src="{{ asset($order_detail->product->gambar_produk) }}" alt="">
                                        </div>
                                        <div class="col-10">
                                            <table>
                                                <tr>
                                                    <td>Total Item</td>
                                                    <td class="px-3"> : </td>
                                                    <td>{{ $order_detail->jumlah }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Harga</td>
                                                    <td class="px-3"> : </td>
                                                    @if ($penawaran != null)
                                                        <td>Rp{{ number_format($penawaran->harga_sesudah,0,"",".") }} <span style="text-decoration: line-through; font-size:0.9em; color:rgb(204, 19, 19);" class="px-3">Rp{{ number_format($order_detail->jumlah * $order_detail->product->harga_produk,0,"",".") }}</span></td>
                                                    @else
                                                        <td>Rp{{ number_format($order_detail->jumlah * $order_detail->product->harga_produk,0,"",".") }}</td>
                                                    @endif
                                                </tr>
                                            </table>
                                            @if ($penawaran != null)
                                            <hr>
                                            <div class="row my-3">
                                                <div class="col-6">
                                                    Harga Sebelum Dilakukan Penawaran
                                                </div>
                                                <div class="col-6">
                                                    Harga Setelah Dilakukan Penawaran
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 style="text-decoration:line-through; color:rgb(204, 19, 19); ">Rp{{ number_format($penawaran->harga_sebelum,0,"",".") }}</h5>
                                                </div>
                                                <div class="col-6">
                                                    <h5 style="text-decoration:none; color:rgb(0, 0, 0); ">Rp{{ number_format($penawaran->harga_sesudah,0,"",".") }}</h5>
                                                </div>
                                            </div>
                                            @endif
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
                            @if ($penawaran!=null)
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
                                                    <td class="text-right">Rp{{ number_format($penawaran->harga_sebelum,0,"",".") }}</td>
                                                </tr>
                                                <tr  style="font-weight: bold">
                                                    <td>Total Sesudah</td>
                                                    <td class="text-right">Rp{{ number_format($penawaran->harga_sesudah,0,"",".") }}</td>
                                                </tr>
                                            </table>
                                            @if ($penawaran->status == "Menunggu")
                                            <hr>
                                            <div class="row">
                                                <div class="col-6 text-center">
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal" style="border: solid 0.5px #cccc" class="btn btn-light w-100">Tolak</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body text-left">
                                                                <p>Silahkan berikan alasan penolakan terhadap tawaran.  </p>
                                                                <textarea name="" id="" class="form-control" cols="15" rows="10"></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <a href="/bergain/reject/{{ $penawaran->id }}" class="btn btn-primary">Kirim</a>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <a href="/bergain/approve/{{ $penawaran->id }}" class="btn btn-primary w-100">Terima</a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
