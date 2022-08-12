@extends('layout.admin')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Lelang / Sumbangan lelang</span></h5>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header py-3">Sumbangan Lelang   </h5>
                    <hr class="my-0">
                    <table class="mx-4 mt-4">
                        <tr>
                            <td>Nama Lelang</td>
                            <td>:</td>
                            <td>Lelang Pesta Gotilon 2022</td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td>:</td>
                            <td>Pdt. Thomson</td>
                        </tr>
                        <tr>
                            <td>Periode</td>
                            <td>:</td>
                            <td>15 Agustus 2022</td>
                        </tr>
                    </table>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Modal</th>
                                    <th>Kuantitas</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="">
                                            <img src="{{ asset($product->gambar_produk) }}" alt="" width="100px" height="80px">
                                            <span>{{ $product->nama_produk }}</span>
                                        </td>
                                        <td>{{ $product->harga_awal }}</td>
                                        <td>1 set</td>
                                        <td>Menunggu persetujuan</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" ><i class="bx bx-check me-1"></i> Terima</a>
                                                    <a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalCenter"><i class="bx bx-user-x me-1"></i> Tolak</a>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Berikan alasan penolakan sumbangan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Batal
                                                        </button>
                                                        <a href="" class="btn btn-primary">Kirim</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


@endsection

