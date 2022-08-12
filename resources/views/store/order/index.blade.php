@extends('layout.store')

@section('content')
<div class="content bg-white p-5">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Pesanan</h4>
        </div>
    </div>
    <hr>
    <div class="row my-3 text-right">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <h5>Waktu Pesanan Dibuat</h5>
        </div>
        <div class="col-md-5"> <input type="date" class="form-control"></div>
    </div>
    <div class="row my-3">
        <div style="width: 30%">
            <select id="inputGroupSelect01">
                <option selected>No. Pesanan</option>
                <option value="1">102</option>
                <option value="2">105</option>
                <option value="3">107</option>
            </select>
        </div>
        <div style="width: 55%">
            <input type="text" class="form-control" placeholder="Masukkan No. Pesanan">
        </div>
        <div style="width: 15%; padding:0px 10px;">
            <a href="" class="btn btn-primary w-100">Cari</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">Semua</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Perlu Di Proses</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Telah Di Proses</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                    <div class="table-title my-4">
                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jasa Kirim</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach ($orders as $order_item)
                            @if ($order_item->status == "Dipesan")
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">{{ $i }}</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> {{ $order_item->order->user->username}}</td>
                                <td colspan="2" class="text-right">No. Pesanan {{ $order_item->id }}</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset($order_item->product->gambar_produk) }}" width="70px" height="70px" alt=""></td>
                                <td>Rp{{ number_format($order_item->product->harga_produk*$order_item->jumlah,0,"",".") }}</td>
                                <td>{{ $order_item->status }}</td>
                                <td>Si Cepat REG</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="/store/order/detail/{{ $order_item->id }}" class="btn btn-primary">
                                        Lihat pesanan
                                    </a>
                                </td>
                            </tr>
                            @php
                                $i++
                            @endphp
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-title my-4">
                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jasa Kirim</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">1</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Lamsihar Sirait</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="table-title my-4">
                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jasa Kirim</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">1</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Lamsihar Sirait</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/batik.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Dalam pengiriman</td>
                                <td>Si Cepat REG</td>
                                <td>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Buat No. Resi
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">2</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Yesiska Gultom</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/kebaya.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Dalam pengiriman</td>
                                <td>Si Cepat REG</td>
                                <td>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Buat No. Resi
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">No. Pesanan 11790045</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-truck" style="font-size: 42px;"></i>
                            </div>
                            <div class="col-9">
                                <h5>Masukkan  nomor resi SiCepat REG</h5>
                                <p>
                                    Masukkan nomor resi pengiriman pada
                                    kolom dibawah agar pesanan dapat
                                    dilacak dari Rincian Pesanan pembeli.
                                </p>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Resi</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No.Resi">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <section style="background-color: #FAFAF7">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5 bg-white py-3">
                    <nav>
                        <div class="nav nav-pills" id="nav-tab" role="tablist">

                            <a class="nav-item nav-link active" id="nav-aktif-tab" data-toggle="tab" href="#nav-aktif" role="tab" aria-controls="nav-aktif" aria-selected="true">Aktif</a>
                            <a class="nav-item nav-link" id="nav-selesai-tab" data-toggle="tab" href="#nav-selesai" role="tab" aria-controls="nav-selesai" aria-selected="false">Selesai</a>
                            <a class="nav-item nav-link" id="nav-dibatalkan-tab" data-toggle="tab" href="#nav-dibatalkan" role="tab" aria-controls="nav-dibatalkan" aria-selected="false">Dibatalkan</a>
                        </div>
                    </nav>
                    <div class="tab-content my-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-aktif" role="tabpanel" aria-labelledby="nav-aktif-tab">
                            <table id="table-without-top-controller" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama item</th>
                                        <th scope="col">Nama toko</th>
                                        <th scope="col">Total item</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    @if ($order->status == "Dipesan")
                                    <tr>
                                        <th scope="row"><a href="/store/order/detail/{{ $order->id }}">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td><a href="order/detail/{{ $order->id }}" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-selesai" role="tabpanel" aria-labelledby="nav-selesai-tab">
                            <table id="table-without-top-controller" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama item</th>
                                        <th scope="col">Nama toko</th>
                                        <th scope="col">Total item</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    @if ($order->status == "Selesai")
                                    <tr>
                                        <th scope="row"><a href="">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-dibatalkan" role="tabpanel" aria-labelledby="nav-dibatalkan-tab">
                            <table id="table-without-top-controller" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama item</th>
                                        <th scope="col">Nama toko</th>
                                        <th scope="col">Total item</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    @if ($order->status == "Dibatalkan")
                                    <tr>
                                        <th scope="row"><a href="">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
