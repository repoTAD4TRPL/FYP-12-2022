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
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">MILO ACTIV-GO Susu Coklat Renceng 22g - 11 pcs </a></th>
                                        <td>Nestle Indonesia</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Mareli Heels Sendal Wanita Ukuran 38</a></th>
                                        <td>Mareli Official Store</td>
                                        <td>1 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Cosmic Clothes Official Shop </a></th>
                                        <td>Cosmic Off Store</td>
                                        <td>1 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Paket 3 Buku Bicara Itu ada seninya </a></th>
                                        <td>Salemba Toko Buku</td>
                                        <td>4 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Buku Toko: Marthin Luther King </a></th>
                                        <td>Gramedia Off Store</td>
                                        <td>1 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Olay Reginest Ritual Krim Malam </a></th>
                                        <td>Olay Official Shop</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Pasoe Smart Facial Tissue 250 </a></th>
                                        <td>BBy CCp shop</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Toner Some By Me AHA BHA 30 </a></th>
                                        <td>Some by Me Official Store</td>
                                        <td>7 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Rinso Metic Wangi Terbaru 1 kg </a></th>
                                        <td>Unilever Official Store</td>
                                        <td>3 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">MASKER DUCKBILL GARIS 3PLY ISI 50PCS/BOX PREMIUM QUALITY 3D </a></th>
                                        <td>Rura Silindung</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Alkitab Katolik TB 064 TI Deuterokanonika-Edisi Huruf Besar + Cover </a></th>
                                        <td>lilinkecil</td>
                                        <td>1 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Couple Pasangan Baju Tenun Dress KondanganPesta Baju Couple ke gereja - Couple, XXL </a></th>
                                        <td>Tenun Ikat Mulia Jaya</td>
                                        <td>5 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="{{ route('pesanan.detail') }}">Purbasari Pore Perfecting BB Cushion - Light Beige </a></th>
                                        <td>PURBASARI INDONESIA</td>
                                        <td>2 item</td>
                                        <td><a href="" class="btn btn-sm btn-light">. . .</a></td>
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
                                        <th scope="row"><a href="">Earphone rexione Handsfree Flat Ear Nylon Stamp 3D Stereo Sound AF01-K </a></th>
                                        <td>Kenken Official</td>
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
                                        <th scope="row"><a href="">handsfree u 19 macaron</a></th>
                                        <td>melodynewacc</td>
                                        <td>1 item</td>
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
                                        <th scope="row"><a href="">BB Cushion Dior </a></th>
                                        <td>warreshop</td>
                                        <td>4 item</td>
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
