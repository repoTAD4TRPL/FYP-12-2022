@extends('layout.admin')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">FAQ  </span></h5>
        <div class="row p-4 my-2">
            <div class="col-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pertanyaan</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="" disabled selected hidden>Pilih kategori</option>
                        <option value="1">Pembayaran</option>
                        <option value="2">Pengembalian</option>
                        <option value="3">Promosi</option>
                        <option value="3">Pendaftaran Toko</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="" disabled selected hidden>Pilih status</option>
                        <option value="1">Aktif</option>
                        <option value="2">Nonaktif</option>
                    </select>
                </div>
            </div>
            <div class="col-12 text-end">
                <a href="#" class="btn btn-info">Saring</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-header">Tabel FAQ</h5>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary mx-4 mt-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                                <i class="bx bx-plus-circle"></i> Tambah FAQ
                            </button>
                            <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel3">Tambah Pertanyaan</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="emailLarge" class="form-label">Kategori</label>
                                                    <select id="defaultSelect" class="form-select">
                                                        <option value="3">Pembayaran</option>
                                                        <option value="1">Lelang</option>
                                                        <option value="2">Bazar</option>
                                                    </select>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="dobLarge" class="form-label">Status</label>
                                                    <select id="defaultSelect" class="form-select">
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Nonaktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <label for="nameLarge" class="form-label">Pertanyaan</label>
                                                    <input type="text" id="nameLarge" class="form-control" placeholder="Masukkan pertanyaan" />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <label for="nameLarge" class="form-label">Jawaban</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan jawaban"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Batal
                                        </button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Pertanyaan</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Urutan</th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tr>
                                    <td>
                                        Bagaimana cara mempromosikan toko saya?
                                    </td>
                                    <td>Promosi</td>
                                    <td><span class="badge bg-label-primary me-1">Diaktifkan</span></td>
                                    <td>
                                        2
                                    </td>
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
                                    <td>
                                        Bagaimana cara memenangkan lelang?
                                    </td>
                                    <td>Promosi</td>
                                    <td><span class="badge bg-label-primary me-1">Diaktifkan</span></td>
                                    <td>
                                        5
                                    </td>
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
                                    <td>
                                        Bagaimana cara melakukan pembayaran di tempat?
                                    </td>
                                    <td>Pembayaran</td>
                                    <td><span class="badge bg-label-primary me-1">Diaktifkan</span></td>
                                    <td>
                                        1
                                    </td>
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
                                    <td>
                                        Bagaimana cara melakukan pengembalian barang
                                    </td>
                                    <td>Pengembalian</td>
                                    <td><span class="badge bg-label-primary me-1">Diaktifkan</span></td>
                                    <td>
                                        3
                                    </td>
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
                                    <td>
                                        Bagaimana cara mempromosikan toko saya?
                                    </td>
                                    <td>Promosi</td>
                                    <td><span class="badge bg-label-primary me-1">Diaktifkan</span></td>
                                    <td>
                                        1
                                    </td>
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

