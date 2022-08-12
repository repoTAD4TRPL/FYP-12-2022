@extends('layout.app')

@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg" style="height: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Bazar</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>bazar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Urutkan</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Nama</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6></h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                  <div class="col-md-3">
                                    <img src="{{ asset('img/bazar/3e2102c5-5bb3-4dda-97e1-5e1a8665bc72 1.png') }}" alt="...">
                                  </div>
                                  <div class="col-md-9">
                                    <div class="card-body">
                                      <h4 class="card-title">Kue basah (kue tampah)</h4>
                                      <h5 class="card-text"><i class="fa fa-map"></i> HKBP DR. I.L. Nommensen Sigumpar</h5>
                                      <br>
                                      <h5 class="card-text">Ressort Sigumpar</h5>
                                      <h5 class="py-4">
                                        Harga
                                          <span style="
                                          font-style: normal;
                                          font-weight: 400;
                                          font-size: 25px;
                                          line-height: 41px;">Rp171.000</span>
                                          <span style="
                                          font-style: normal;
                                          font-weight: 400;
                                          color: #DF1627;
                                          text-decoration:line-through;
                                          font-size: 20px;
                                          line-height: 41px;"> Rp180.000</span>
                                      </h5>
                                      <a href="{{ route('bazar.detail') }}" class="btn btn-info float-right">Beli Sekarang</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                  <div class="col-md-3">
                                    <img src="{{ asset('img/bazar/16274ff3-26f2-43bd-bf10-601e838820da 1.png') }}" alt="...">
                                  </div>
                                  <div class="col-md-9">
                                    <div class="card-body">
                                      <h4 class="card-title">Kerajinan Tangan Tas Anyaman</h4>
                                      <h5 class="card-text"><i class="fa fa-map"></i> HKBP DR. I.L. Nommensen Sigumpar</h5>
                                      <br>
                                      <h5 class="card-text">Ressort Sigumpar</h5>
                                      <h5 class="py-4">
                                        Harga
                                          <span style="
                                          font-style: normal;
                                          font-weight: 400;
                                          font-size: 25px;
                                          line-height: 41px;">Rp102.000</span>
                                          <span style="
                                          font-style: normal;
                                          font-weight: 400;
                                          color: #DF1627;
                                          text-decoration:line-through;
                                          font-size: 20px;
                                          line-height: 41px;"> Rp120.000</span>
                                      </h5>
                                      <a href="{{ route('bazar.detail') }}" class="btn btn-info float-right">Beli Sekarang</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
