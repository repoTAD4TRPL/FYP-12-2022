@extends('layout.store')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="content bg-white p-3">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Riwayat Lelang </h4>
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-3">
            <a href="{{ route('store.auction.add') }}" class="btn btn-primary w-20">Tambah Lelang +</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga Terjual</th>
                    <th scope="col">Status</th>
                    <th scope="col">Pemenang</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            <img src="{{ asset($product->gambar_produk) }}" width="70px" height="70px" alt="">
                            <span>{{ $product->nama_produk }}</span>
                        </td>
                        <td>Rp{{number_format($product->harga_awal,0,"",".") }}</td>
                        <td>Sedang berlangsung</td>
                        <td>-</td>
                        <td>
                            <a href="">Rincian</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
