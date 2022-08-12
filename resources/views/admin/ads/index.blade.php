@extends('layout.admin')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Iklan </span></h5>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-header">Tabel Iklan</h5>
                        </div>
                        <div class="col-6 text-end">
                            <a href="{{ route("manage-ads.add") }}" class="btn btn-primary mx-4 mt-3" style="width: 180px"><i class="bx bx-plus-circle"></i> Tambah Iklan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Iklan</th>
                                    <th>Judul Iklan</th>
                                    <th>Tautan Iklan</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('img/banner/baner-diskon.png') }}" alt="" width="200px" height="80px">
                                    </td>
                                    <td>Diskon Toba Galery</td>
                                    <td>
                                        <a href="http://hkbp-store.herokuapp.com/bazar">http://hkbp-store.herokuapp.com/bazar</a>
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">Aktif</span></td>
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Ubah</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Hapus</a>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('img/banner/banner-bazar.png') }}" alt="" width="200px" height="80px">
                                    </td>
                                    <td>Bazar Paskah</td>
                                    <td>
                                        <a href="http://hkbp-store.herokuapp.com/bazar">http://hkbp-store.herokuapp.com/bazar</a>
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">Aktif</span></td>
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Ubah</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Hapus</a>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('img/banner/banner-2.jpg') }}" alt="" width="200px" height="80px">
                                    </td>
                                    <td>Diskon Minuman Kemasan</td>
                                    <td>
                                        <a href="http://hkbp-store.herokuapp.com/bazar">http://hkbp-store.herokuapp.com/bazar</a>
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">Aktif</span></td>
                                    <td>
                                        <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Ubah</a>
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

