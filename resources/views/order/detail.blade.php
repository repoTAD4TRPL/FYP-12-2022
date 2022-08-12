@extends('layout.app')

@section('content')
    <section style="background-color: #FAFAF7">
        <div class="container-fluid">
            @if ($penawaran!=null)
            @if ($penawaran->status=="Ditolak")
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="alert alert-danger" role="alert">
                       <div class="row">
                            <div class="col-8">
                                <i class="fa fa-close"></i> Penawaran telah ditolak oleh penjual dengan alasan, “Harga yang ditawarkan terlalu rendah”
                            </div>
                            <div class="col-4 text-right">
                                <a href="#"  data-toggle="modal" data-target="#tawarUlang"> Lakukan Penawaran Kembali </a> | <a href="/bergain/cancel/{{ $penawaran->id }}"> Batalkan Penawaran</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="tawarUlang" tabindex="-1" role="dialog" aria-labelledby="tawarUlangLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{  route('rebergain') }}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tawarUlangLabel">Lakukan Penawaran untuk produk Mareli Heels Sendal Wanita Ukuran 38</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        Sebelum Ditawar
                                    </div>
                                    <div class="col-6">
                                        Sesudah Ditawar
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $penawaran->id }}">
                                    <input type="hidden" name="item_pemesanan_id" value="{{ $order_detail->id }}">
                                    <div class="col-6">
                                        <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" value="{{ number_format($order_detail->product->harga_produk * $order_detail->jumlah,0,"",".") }}" disabled>
                                        <input name="harga_sebelum" value="{{ $order_detail->product->harga_produk * $order_detail->jumlah }}" hidden>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input name="harga_sesudah" type="number" class="form-control" id="inlineFormInputGroup" placeholder="harga tawaran">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endif
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
                                            @if ($order_detail->status =="Dipesan")
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres4.png') }}) no-repeat center;background-size:98%;  color:white;">{{ now()->format("d M Y") }}</h5>
                                            @else
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres2.png') }}) no-repeat center;background-size:98%; ">{{ now()->format("d M Y") }}</h5>
                                            @endif
                                        </div>
                                        <div class="col-3">
                                            Dikemas
                                            @if ($order_detail->status =="Dikemas")
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres4.png') }}) no-repeat center;background-size:98%;  color:white;">{{ now()->format("d M Y") }}</h5>
                                            @else
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres2.png') }}) no-repeat center;background-size:98%; ">{{ now()->format("d M Y") }}</h5>
                                            @endif
                                        </div>
                                        <div class="col-3">
                                            Dikirim
                                            @if ($order_detail->status =="Dikirim")
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres4.png') }}) no-repeat center;background-size:98%;  color:white;">{{ now()->format("d M Y") }}</h5>
                                            @else
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres2.png') }}) no-repeat center;background-size:98%; ">{{ now()->format("d M Y") }}</h5>
                                            @endif
                                        </div>
                                        <div class="col-3">
                                            Selesai
                                            @if ($order_detail->status =="Selesai")
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres4.png') }}) no-repeat center;background-size:98%;  color:white;">{{ now()->format("d M Y") }}</h5>
                                            @else
                                            <h5 class="py-1 text-center" style="background: url({{ asset('img/progres/progres2.png') }}) no-repeat center;background-size:98%; ">{{ now()->format("d M Y") }}</h5>
                                            @endif
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
                                                    <td> {{ $order_detail->jumlah }} </td>
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
                                            @if ($order_detail->status =="Selesai")
                                                <div class="row mt-5">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('order.rating',$order_detail->id) }}"  class="btn btn-sm btn-info w-25" style=" border:solid 0.5px #cccc ">Beri Penilaian</a>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($order_detail->status =='Dipesan' )
                                                @if ($penawaran==null )
                                                <div class="row mt-5">
                                                    <div class="col-12 text-right">
                                                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm w-25" style="background:white; border:solid 0.5px #cccc "><i class="fa fa-money"></i> Lakukan Penawaran</button>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{  route('bergain') }}" method="post">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Lakukan Penawaran untuk produk Mareli Heels Sendal Wanita Ukuran 38</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            Sebelum  Ditawar
                                                                        </div>
                                                                        <div class="col-6">
                                                                            Sesudah Ditawar
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <input type="hidden" name="item_pemesanan_id" value="{{ $order_detail->id }}">
                                                                        <div class="col-6">
                                                                            <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">Rp</div>
                                                                            </div>
                                                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" value="{{ number_format($order_detail->product->harga_produk * $order_detail->jumlah,0,"",".") }}" disabled>
                                                                            <input name="harga_sebelum" value="{{ $order_detail->product->harga_produk * $order_detail->jumlah }}" hidden>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text">Rp</div>
                                                                            </div>
                                                                            <input name="harga_sesudah" type="number" class="form-control" id="inlineFormInputGroup" placeholder="harga tawaran">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
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
                                                <div class="row mt-3">
                                                    <div class="col-12 text-right">
                                                        <button type="button" data-toggle="modal" data-target="#pembayaranModal" class="btn btn-sm btn-primary w-25"><i class="fa fa-credit-card"></i> Bayar sekarang</button>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="pembayaranModal" tabindex="-1" role="dialog" aria-labelledby="pembayaranModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form action="" method="post">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Lakukan Pembayaran untuk produk Mareli Heels Sendal Wanita Ukuran 38</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table>
                                                                            <tr>
                                                                                <td>Harga</td>
                                                                                <td>:</td>
                                                                                <td>Rp208.000</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Nama Bank</td>
                                                                                <td>:</td>
                                                                                <td>BNI</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>No. Rekening</td>
                                                                                <td>:</td>
                                                                                <td>92312337219</td>
                                                                            </tr>
                                                                        </table>
                                                                        <div class="row my-2">
                                                                            <div class="col-12">
                                                                                Upload Bukti Pembayaran
                                                                                <div class="wrapper">
                                                                                    <div class="file-upload  w-100" style="height: 200px">
                                                                                    <input type="file" name="foto_utama" required="">
                                                                                    <i class="fa fa-upload"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3 px-3">
                                                    <div class="w-75">

                                                    </div>
                                                    <div class="w-25 text-right">
                                                        <hr>
                                                        <a href="{{ route('order') }}" class="btn btn-sm btn-danger w-100"> Batalkan Pesanan</a>
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
                                            <button id="button-chat" onclick="openChat()" class="btn btn-sm btn-light float-right" style="color:rgba(139, 134, 134, 0.8)"><i class="fa fa-comment"></i> Chat</button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="{{ asset('img/logo2.jpeg') }}" alt="">
                                                </div>
                                                <div class="col-6" style="font-size: 90%">
                                                    <a href="">{{ $order_detail->store->nama_toko }}</a><br>
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
                                <div class="col-12">
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
                                                            <td class="text-right">{{ $order_detail->jumlah }} Item</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Sebelum</td>
                                                            <td class="text-right">Rp{{number_format( $penawaran->harga_sebelum,0,"",".") }}</td>
                                                        </tr>
                                                        <tr  style="font-weight: bold">
                                                            <td>Total Sesudah</td>
                                                            <td class="text-right">Rp{{number_format( $penawaran->harga_sesudah,0,"",".") }}</td>
                                                        </tr>
                                                    </table>
                                                    @if ($penawaran->status == null)
                                                    <hr>
                                                    <form action="{{ route('bergain-post') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="item_pemesanan_id" value="{{ $order_detail->id }}">
                                                        <input type="hidden" name="penawaran_id" value="{{ $penawaran->id }}">
                                                        <button type="submit" class="btn btn-primary w-100" >Ajukan Penawaran</button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </div>
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
