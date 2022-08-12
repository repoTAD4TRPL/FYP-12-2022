@extends('layout.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg" style="height: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Lelang</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Lelang</span>
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
                                    <h6><span>{{ count($products) }}</span> Produk ditemukan</h6>
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
                    @if (count($products)!=0)
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->gambar_produk) }}" style="min-height:170px">
                                    <ul class="featured__item__pic__hover">
                                        <li ><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text text-left px-2 pb-2">
                                    <h6>{{ limit_text($product->nama_produk,7) }}</h6>
                                    <p style="margin: 0px">
                                        <i class="fa fa-clock"></i> 2 jam tersisa
                                    </p>
                                    <div>
                                    </div>
                                    <h5>Harga tertinggi : <span style="font-size: 0.8em">Rp</span>{{ number_format( $product->harga_tertinggi,0,"",".") }}</h5>
                                    <a class="btn btn-primary mt-3 w-100" href="/auction/detail/{{ $product->id }}">Ikut Lelang</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-12 text-center py-5">
                            <h5>Maaf kami tidak menemukan produk yang anda cari</h5>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
