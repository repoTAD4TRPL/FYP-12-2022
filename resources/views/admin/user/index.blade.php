@extends('layout.admin')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Kelola akun</h5>
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic Bootstrap Table -->
                <div class="card">
                  <h5 class="card-header">Tabel akun</h5>
                  <div class="table-responsive text-nowrap"  style="min-height:300px;">
                    <table class="table">
                      <thead>
                        <tr>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->role->nama_role }}</td>
                            <td>
                                @if ($user->is_active==1)
                                <span class="badge bg-label-success bg-label-success me-1"> Aktif </span>

                                @elseif($user->is_active==0)
                                <span class="badge bg-label-success bg-label-danger me-1"> Nonaktif </span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" ><i class="bx bx-user-check me-1"></i> Aktifkan</a>
                                        <a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalCenter"><i class="bx bx-user-x me-1"></i> Nonaktifkan</a>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Berikan feedback mengapa akun di nonaktifkan</h5>
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
                <!--/ Basic Bootstrap Table -->
            </div>
        </div>
    </div>
    <!-- / Content -->


@endsection

