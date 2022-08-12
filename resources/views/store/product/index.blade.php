
@extends('layout.store')

@section('content')
<div class="content bg-white p-5">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Produk Saya</h4>
        </div>
    </div>
    <hr>
    <div class="row my-3">
        <div class="col-3">
            <a href="{{ route('product.add') }}" class="btn btn-primary w-20">Tambah Produk +</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Variasi</th>
                    <th scope="col">Penjualan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($inventory_items as $inventory_item)
                    <tr>
                        <td>
                            <img src="{{ asset($inventory_item->product->gambar_produk) }}" width="70px" height="70px" alt=""> <br>
                            <span style="font-size: 13px">{{ $inventory_item->product->nama_produk }}</span>
                        </td>
                        <td>{{ $inventory_item->product->harga_produk }}</td>
                        <td>{{ $inventory_item->jumlah }}</td>
                        <td>{{ $inventory_item->product->spesifikasi_produk }}</td>
                        <td>{{ $inventory_item->terjual }}</td>
                        <td>
                            <a href="">Ubah</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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

@endsection
