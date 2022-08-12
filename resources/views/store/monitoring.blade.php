@extends('layout.store')

@section('content')

<div class="content bg-white p-3 mb-3">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Analisis Pembeli</h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart" width="400" height="250"></canvas>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 text-center">
                    <p>Total Pegunjung</p>
                    <h4>100</h4>
                    <span>vs.kemarin 10% +</span>
                </div>
                <div class="col-md-6 text-center">
                    <p>Produk Dilihat</p>
                    <h4>30</h4>
                    <span>vs.kemarin 5% -</span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 text-center">
                    <p>Pesanan</p>
                    <h4>200</h4>
                    <span>vs.kemarin 11% +</span>
                </div>
                <div class="col-md-6 text-center">
                    <p>Tingkat Konversi</p>
                    <h4>50,6%</h4>
                    <span>vs.kemarin 10% -</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content bg-white p-3 my-3">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Performa <span style="font-size: 15px;">(Operasional Toko)</span></h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Prooduk Dilarang</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pesanan Terselesaikan</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pelayanan Pembeli</a>
                    <a class="nav-item nav-link" id="nav-satisfy-tab" data-toggle="tab" href="#nav-satisfy" role="tab" aria-controls="nav-contact" aria-selected="false">Kepuasan Pembeli</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Aspek</th>
                            <th scope="col">Toko Saya</th>
                            <th scope="col">Target</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Pelanggaran Produk Berat</td>
                            <td>0</td>
                            <td>0</td>
                          </tr>
                          <tr>
                            <td>% Produk Pre-Order</td>
                            <td>0.00%</td>
                            <td>20.00%</td>
                          </tr>
                          <tr>
                            <td>Pelanggaran Produk Ringan</td>
                            <td>0</td>
                            <td>0</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Aspek</th>
                            <th scope="col">Toko Saya</th>
                            <th scope="col">Target</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tingkat Pesanan Tidak Terselesaikan</td>
                            <td>0</td>
                            <td>10.00%</td>
                          </tr>
                          <tr>
                            <td>Tingkat Keterlambatan Pengiriman Pesanan</td>
                            <td>0</td>
                            <td>20.00%</td>
                          </tr>
                          <tr>
                            <td>Masa Pengemasan</td>
                            <td>0</td>
                            <td>2.00 days</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Aspek</th>
                            <th scope="col">Toko Saya</th>
                            <th scope="col">Target</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tingkat Pesanan Tidak Terselesaikan</td>
                            <td>57.00%</td>
                            <td>70.00%</td>
                          </tr>
                          <tr>
                            <td>Tingkat Keterlambatan Pengiriman Pesanan</td>
                            <td>0</td>
                            <td>1 days</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-satisfy" role="tabpanel" aria-labelledby="nav-satisfy-tab">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Aspek</th>
                            <th scope="col">Toko Saya</th>
                            <th scope="col">Target</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tingkat Pesanan Tidak Terselesaikan</td>
                            <td>57.00%</td>
                            <td>3.5/5</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
