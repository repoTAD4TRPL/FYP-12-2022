@extends('layout.app')

@section('content')
<section style="background-color: #FAFAF7">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
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
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    @if ($order->status == "Dipesan")
                                    <tr>
                                        <th scope="row"><a href="order/detail/{{ $order->id }}">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  . . .
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="order/detail/{{ $order->id }}">Lihat</a>
                                                  <a class="dropdown-item" href="#">Batalkan Pesanan</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
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
                                    @foreach ($orders as $order)
                                    @if ($order->status == "Dikemas")
                                    <tr>
                                        <th scope="row"><a href="order/detail/{{ $order->id }}">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  . . .
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="order/detail/{{ $order->id }}">Lihat</a>
                                                  <a class="dropdown-item" href="#">Batalkan Pesanan</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
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
                                    @foreach ($orders as $order)
                                    @if ($order->status == "Dikirim")
                                    <tr>
                                        <th scope="row"><a href="order/detail/{{ $order->id }}">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  . . .
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="order/detail/{{ $order->id }}">Lihat</a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <th scope="row"><a href="order/detail/{{ $order->id }}">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  . . .
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="order/detail/{{ $order->id }}">Lihat</a>
                                                </div>
                                            </div>
                                        </td>
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
                                        <th scope="row"><a href="order/detail/{{ $order->id }}">{{ $order->product->nama_produk }} </a></th>
                                        <td>{{ $order->store->nama_toko }}</td>
                                        <td>{{ $order->jumlah }} item</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  . . .
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="order/detail/{{ $order->id }}">Lihat</a>
                                                </div>
                                            </div>
                                        </td>
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
    </section>
@endsection
