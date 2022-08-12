@extends('layout.admin')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Lelang</span></h5>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header py-3">Kelola Lelang</h5>
                    <hr class="my-0">
                    <div class="row">
                        <div class="col-12 text-end">
                            <div class="mt-3">
                                <!-- Button trigger modal -->
                                <button type="button" data-bs-toggle="modal" data-bs-target="#basicModal"class="btn btn-primary mx-4 mt-3" style="width: 180px"><i class="bx bx-plus-circle"></i> Tambah Lelang
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="/buatLelangPost" method="post">
                                            @csrf
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel1">Tambah Lelang</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameBasic" class="form-label">Nama Lelang</label>
                                                  <input type="text" id="nameBasic" class="form-control" placeholder="Nama Lelang">
                                                </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">Gereja</label>
                                                    @php
                                                        use App\Models\Gereja;
                                                        $gereja = Gereja::all();
                                                    @endphp
                                                    <select name="" class="form-control" id="">
                                                      @foreach ($gereja as $church)
                                                          <option value="">{{ $church->nama_gereja }}</option>
                                                      @endforeach
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">Ketua Pelaksanan</label>
                                                    <input type="text" id="nameBasic" class="form-control" placeholder="Ketua pelaksana">
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">Periode</label>
                                                    <input type="date" id="nameBasic" class="form-control">
                                                  </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Batal
                                              </button>
                                              <button type="submit" class="btn btn-primary">Buat Lelang</button>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                                  Buka
                                </button>
                              </li>
                              <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                                  Tutup
                                </button>
                              </li>
                              <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="false">
                                  Selesai
                                </button>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama lelang</th>
                                            <th>Periode</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">
                                                <a href="{{ route('detailLelang') }}">Lelang Tahunan Pesta Gotilon</a>
                                            </td>
                                            <td>{{ now()->addDays(5)->format('d M Y') }}</td>
                                            <td>Buka</td>
                                            <td><a href="" class="fa fa-success">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="">Lelang perayaan ulang tahun gereja</a>
                                            </td>
                                            <td>{{ now()->addDays(7)->format('d M Y') }}</td>
                                            <td>Buka</td>
                                            <td><a href="" class="fa fa-success">Edit</a></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama lelang</th>
                                            <th>Periode</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">
                                                <a href="">Lelang Tahunan Pesta Gotilon</a>
                                            </td>
                                            <td>{{ now()->addDays(5)->format('d M Y') }}</td>
                                            <td>Tutup</td>
                                            <td><a href="" class="fa fa-success">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="">Lelang perayaan ulang tahun gereja</a>
                                            </td>
                                            <td>{{ now()->addDays(7)->format('d M Y') }}</td>
                                            <td>Tutup</td>
                                            <td><a href="" class="fa fa-success">Edit</a></td>

                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama lelang</th>
                                            <th>Periode</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">
                                                <a href="">Lelang Tahunan Pesta Gotilon</a>
                                            </td>
                                            <td>{{ now()->addDays(5)->format('d M Y') }}</td>
                                            <td>Selesai</td>
                                            <td><a href="" class="fa fa-success">Edit</a></td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="">Lelang perayaan ulang tahun gereja</a>
                                            </td>
                                            <td>{{ now()->addDays(7)->format('d M Y') }}</td>
                                            <td>Selesai</td>
                                            <td><a href="" class="fa fa-success">Edit</a></td>

                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


@endsection

