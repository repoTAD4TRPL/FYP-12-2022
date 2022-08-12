@extends('layout.admin')

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-8 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Selamat Datang {{ auth()->user()->username }} 🎉</h5>
                <p class="mb-4">
                  Kamu memiliki <span class="fw-bold">3</span> calon partner baru yang ingin bergabung, ayo konfirmasi sekarang
                </p>

                <a href="javascript:;" class="btn btn-sm btn-outline-primary">Lihat Pendaftaran</a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="assets/img/illustrations/man-with-laptop-light.png"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="assets/img/icons/unicons/chart-success.png"
                      alt="chart success"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt3"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                      <a class="dropdown-item" href="javascript:void(0);">Lihat</a>
                      <a class="dropdown-item" href="javascript:void(0);">Hapus</a>
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Keuntungan</span>
                <h3 style="font-size: 18px;" class="card-title text-nowrap mb-1"><span style="font-size: 15px;">Rp</span>440.679</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="assets/img/icons/unicons/wallet-info.png"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt6"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                      <a class="dropdown-item" href="javascript:void(0);">Lihat</a>
                      <a class="dropdown-item" href="javascript:void(0);">Hapus</a>
                    </div>
                  </div>
                </div>
                <span>Penjualan</span>
                <h3 style="font-size: 18px;" class="card-title text-nowrap mb-1"><span style="font-size: 15px;"></span>124</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Expense Overview -->
      <div class="col-md-6 col-lg-8 order-1 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <button
                  type="button"
                  class="nav-link active"
                  role="tab"
                  data-bs-toggle="tab"
                  data-bs-target="#navs-tabs-line-card-income"
                  aria-controls="navs-tabs-line-card-income"
                  aria-selected="true"
                >
                  Pemasukan
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab">Pengeluaran</button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" role="tab">Keuntungan</button>
              </li>
            </ul>
          </div>
          <div class="card-body px-0">
            <div class="tab-content p-0">
              <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                <div class="d-flex p-4 pt-3">
                  <div class="avatar flex-shrink-0 me-3">
                    <img src="assets/img/icons/unicons/wallet.png" alt="User" />
                  </div>
                  <div>
                    <small class="text-muted d-block">Saldo</small>
                    <div class="d-flex align-items-center">
                      <h6 class="mb-0 me-1">Rp7.907.000</h6>
                      <small class="text-success fw-semibold">
                        <i class="bx bx-chevron-up"></i>
                        42.9%
                      </small>
                    </div>
                  </div>
                </div>
                <div id="incomeChart"></div>
                <div class="d-flex justify-content-center pt-4 gap-2">
                  <div class="flex-shrink-0">
                    <div id="expensesOfWeek"></div>
                  </div>
                  <div>
                    <p class="mb-n1 mt-1">Pengeluaran bulan ini</p>
                    <small class="text-muted">Rp210.000 Lebih sedikit dari minggu lalu</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Expense Overview -->

      <!-- Transactions -->
      <div class="col-md-6 col-lg-4 order-2 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Transaksi</h5>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="transactionID"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                <a class="dropdown-item" href="javascript:void(0);">Minggu lalu</a>
                <a class="dropdown-item" href="javascript:void(0);">Bulan lalu</a>
                <a class="dropdown-item" href="javascript:void(0);">Tahun lalu</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">{{ now()->addMonth(2) }}</small>
                    <h6 class="mb-0">Tangido</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                      <span class="text-muted">Rp</span>
                    <h6 class="mb-0">2.000</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">{{ now()->addDays(2); }}</small>
                    <h6 class="mb-0">Parsaoran</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <span class="text-muted">Rp</span>
                    <h6 class="mb-0">8.000</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">{{ now() }}</small>
                    <h6 class="mb-0">Moriarti</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <span class="text-muted">Rp</span>
                    <h6 class="mb-0">10.000</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">{{ now() }}</small>
                    <h6 class="mb-0">Masturi</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <span class="text-muted">Rp</span>
                    <h6 class="mb-0">96.000</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">{{ now() }}</small>
                    <h6 class="mb-0">Wahyuni</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <span class="text-muted">Rp</span>
                    <h6 class="mb-0">18.000</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <small class="text-muted d-block mb-1">{{ now() }}</small>
                    <h6 class="mb-0">Parsaoran</h6>
                  </div>
                  <div class="user-progress d-flex align-items-center gap-1">
                    <span class="text-muted">Rp</span>
                    <h6 class="mb-0">21.000</h6>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Transactions -->
    </div>
  </div>
  <!-- / Content -->
@endsection

