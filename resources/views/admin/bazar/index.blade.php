@extends('layout.admin')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bazar</span></h5>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header py-3">Kelola Bazar</h5>
                    <hr class="my-0">
                    <div class="row">
                        <div class="col-12 text-end">
                            <a href="{{ route('manage-bazar.add') }}" class="btn btn-primary mx-4 mt-3" style="width: 180px"><i class="bx bx-plus-circle"></i> Tambah Bazar</a>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-8">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="" class="btn btn-primary">Cari</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="">
                                        <img src="{{ asset('img/bazar/16274ff3-26f2-43bd-bf10-601e838820da 1.png') }}" alt="" width="100px" height="80px">
                                        <span>Kerajinan Tangan Tas Anyaman</span>
                                    </td>
                                    <td>Rp102.000</td>
                                    <td>230</td>
                                    <td>3</td>
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-1"></i> Rincian</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Hapus</a>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <img src="{{ asset('img/bazar/3e2102c5-5bb3-4dda-97e1-5e1a8665bc72 1.png') }}" alt="" width="100px" height="80px">
                                        <span>Kue basah (kue tampah)</span>
                                    </td>
                                    <td>Rp171.000</td>
                                    <td>56</td>
                                    <td>23</td>
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-1"></i> Rincian</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Hapus</a>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
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

