@extends('layout.app')

@section('content')
    <section style="background-color: #FAFAF7">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5 bg-white py-3">
                    <nav>
                        <div class="nav nav-pills" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-belum-bayar-tab" data-toggle="tab" href="#nav-belum-bayar" role="tab" aria-controls="nav-belum-bayar" aria-selected="true">Belum Bayar</a>
                            <a class="nav-item nav-link" id="nav-dikemas-tab" data-toggle="tab" href="#nav-dikemas" role="tab" aria-controls="nav-dikemas" aria-selected="false">Dikemas</a>
                            <a class="nav-item nav-link" id="nav-dikirim-tab" data-toggle="tab" href="#nav-dikirim" role="tab" aria-controls="nav-dikirim" aria-selected="false">Dikirim</a>
                            <a class="nav-item nav-link" id="nav-selesai-tab" data-toggle="tab" href="#nav-selesai" role="tab" aria-controls="nav-selesai" aria-selected="false">Selesai</a>
                            <a class="nav-item nav-link" id="nav-dibatalkan-tab" data-toggle="tab" href="#nav-dibatalkan" role="tab" aria-controls="nav-dibatalkan" aria-selected="false">Dibatalkan</a>
                        </div>
                    </nav>
                    <div class="tab-content my-4" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-belum-bayar" role="tabpanel" aria-labelledby="nav-belum-bayar-tab">
                            <table id="table-without-top-controller" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama item</th>
                                        <th scope="col">Nama toko</th>
                                        <th scope="col">Total item</th>
                                        <th scope="col">Total harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pemesanan.detail') }}">Mareli Heels Sendal Wanita Ukuran 38</a></th>
                                        <td>Mareli Off Store</td>
                                        <td>2 item</td>
                                        <td style="font-weight: 700">Rp45.000 <br><a href=""  style="font-weight: 500">Lihat hasil tawaran</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><a href="{{ route('pemesanan.detail') }}">Ulos sibolang </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td style="font-weight: 700">Rp45.000 <br><a href=""  style="font-weight: 500">Lihat hasil tawaran</a></td>
                                    </tr>
                                    {{-- <tr>
                                        <th scope="row"><a href="{{ route('pemesanan.detail') }}">Tandok 2 kaleng </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td style="font-weight: 700">Rp45.000 <br><a href=""  style="font-weight: 500">Lihat hasil tawaran</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pemesanan.detail') }}">Kebaya </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td style="font-weight: 700">Rp45.000 <br><a href=""  style="font-weight: 500">Lihat hasil tawaran</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pemesanan.detail') }}">Ombus-ombus </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td style="font-weight: 700">Rp45.000 <br><a href=""  style="font-weight: 500">Lihat hasil tawaran</a></td>
                                    </tr> --}}

                                    <tr>
                                        <th scope="row"><a href="{{ route('pemesanan.detail') }}">Topi </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td style="font-weight: 700">Rp45.000 <br><a href=""  style="font-weight: 500">Lihat hasil tawaran</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pemesanan.detail') }}">Beras merah asli </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td style="font-weight: 700">Rp45.000 <br><a href=""  style="font-weight: 500">Lihat hasil tawaran</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-dikemas" role="tabpanel" aria-labelledby="nav-dikemas-tab">
                            <table id="example" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama item</th>
                                        <th scope="col">Nama toko</th>
                                        <th scope="col">Total item</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="">Rinso Metic Wangi Terbaru 1 kg </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-dikirim" role="tabpanel" aria-labelledby="nav-dikirim-tab">
                            <table id="example" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama item</th>
                                        <th scope="col">Nama toko</th>
                                        <th scope="col">Total item</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="">Rinso Metic Wangi Terbaru 1 kg </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
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
                                    <tr>
                                        <th scope="row"><a href="">Rinso Metic Wangi Terbaru 1 kg </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
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
                                    <tr>
                                        <th scope="row"><a href="">Rinso Metic Wangi Terbaru 1 kg </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
