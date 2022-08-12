@extends('layout.store')

@section('content')

<div class="content bg-white p-5">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Pesanan</h4>
        </div>
    </div>
    <hr>
    <div class="row my-3 text-right">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <h5>Waktu Pesanan Dibuat</h5>
        </div>
        <div class="col-md-5"> <input type="date" class="form-control"></div>
    </div>
    <div class="row my-3">
        <div style="width: 30%">
            <select id="inputGroupSelect01">
                <option selected>No. Pesanan</option>
                <option value="1">102</option>
                <option value="2">105</option>
                <option value="3">107</option>
            </select>
        </div>
        <div style="width: 55%">
            <input type="text" class="form-control" placeholder="Masukkan No. Pesanan">
        </div>
        <div style="width: 15%; padding:0px 10px;">
            <a href="" class="btn btn-primary w-100">Cari</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-lg-12">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Semua</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Menunggu Respon</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Dibatalkan</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table-title my-4">
                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jasa Kirim</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">1</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Lamsihar Sirait</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/batik.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Dibatalkan</td>
                                <td>Si Cepat REG</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Rincian
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">2</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Yesiska Gultom</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/kebaya.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Dibatalkan</td>
                                <td>Si Cepat REG</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Rincian
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-title my-4">
                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jasa Kirim</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">1</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Lamsihar Sirait</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/batik.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Menunggu Respon</td>
                                <td>Si Cepat REG</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Rincian
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">2</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Yesiska Gultom</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/kebaya.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Menunggu Respon</td>
                                <td>Si Cepat REG</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Rincian
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="table-title my-4">
                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jasa Kirim</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">1</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Lamsihar Sirait</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/batik.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Dibatalkan</td>
                                <td>Si Cepat REG</td>
                                <td>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Rincian
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="vertical-align: middle;">2</td>
                                <td colspan="3"><i class="fa fa-user-circle"></i> Yesiska Gultom</td>
                                <td colspan="2" class="text-right">No. Pesanan 11790045</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('img/product/kebaya.png') }}" width="70px" height="70px" alt=""></td>
                                <td>Rp.200.000</td>
                                <td>Dibatalkan</td>
                                <td>Si Cepat REG</td>
                                <td>
                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Rincian
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
