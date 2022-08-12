@extends('layout.admin')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Pendaftaran Toko</h5>
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic Bootstrap Table -->
                <div class="card">
                  <h5 class="card-header">Tabel pendaftaran toko</h5>
                  <div class="table-responsive text-nowrap"  style="min-height:300px;">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Toko</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->nama_toko }}</strong></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                <span class="badge
                                @if ($user->seller_registration_status=='Menunggu')
                                bg-label-warning
                                @elseif($user->seller_registration_status=='Diterima')
                                bg-label-success
                                @elseif($user->seller_registration_status=='Ditolak')
                                bg-label-secondary
                                @endif
                                me-1">
                                    {{ $user->seller_registration_status }}
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/user/confirm-member-registration/{{ $user->user_id }}"><i class="bx bx-user-check me-1"></i> Konfirmasi</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-user-x me-1"></i> Tolak</a>
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

