@extends('layout.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="{{ route('auction') }}" class="btn btn-light my-2 w-100" style="background-color: #5381e2; color:white; font-weight:600;">Katalog Lelang</a>
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Pilih Kategori</span>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="">{{ $category->nama_kategori }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpg') }}">
                                    <div class="hero__text">
                                        <span>Selamat Datang Di</span>
                                        <h2>HKBP Store<br /></h2>
                                        <p>Berbagai kebutuhan dapat anda temukan di sini</p>
                                        <a href="#" class="primary-btn">Belanja sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpg') }}">
                                    <div class="hero__text">
                                        <span>Selamat Datang Di</span>
                                        <h2>HKBP Store<br /></h2>
                                        <p>Berbagai kebutuhan dapat anda temukan di sini</p>
                                        <a href="#" class="primary-btn">Belanja sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpg') }}">
                                    <div class="hero__text">
                                        <span>Selamat Datang Di</span>
                                        <h2>HKBP Store<br /></h2>
                                        <p>Berbagai kebutuhan dapat anda temukan di sini</p>
                                        <a href="#" class="primary-btn">Belanja sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button style="background: none; border:none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button style="background: none; border:none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> --}}
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/banner/baner-diskon.png') }}" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <a href="{{ route('bazar') }}">
                                <img class="d-block w-100" src="{{ asset('img/banner/banner-bazar.png') }}" alt="Second slide">
                            </a>
                          </div>
                          <div class="carousel-item">
                            <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpg') }}">
                                <div class="hero__text">
                                    <span>Selamat Datang Di</span>
                                    <h2>HKBP Store<br /></h2>
                                    <p>Berbagai kebutuhan dapat anda temukan di sini</p>
                                    <a href="#" class="primary-btn">Belanja sekarang</a>
                                </div>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <a href="">
                        <img src="{{ asset('img/categories/kategori-1.png') }}" alt="">
                        <p>Bahan Pokok & Perlengkapan Dapur</p>
                    </a>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <a href="">
                        <img src="{{ asset('img/categories/kategori-2.png') }}" alt="">
                        <p>Pakaian Wanita</p>
                    </a>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <a href="">
                        <img src="{{ asset('img/categories/kategori-3.png') }}" alt="">
                        <p>Kebersihan Rumah</p>
                    </a>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-4.png') }}" alt="">
                    <p>Perlengkapan Bayi</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-5.png') }}" alt="">
                    <p>Makanan Instan</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-6.png') }}" alt="">
                    <p>Minuman</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-7.png') }}" alt="">
                    <p>Sendal Pria</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-8.png') }}" alt="">
                    <p>Susu Bayi</p>
                </div>
            </div>
            <div class="row">
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-9.png') }}" alt="">
                    <p>Sepatu Anak</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-10.png') }}" alt="">
                    <p>Pakaian Pria</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-11.png') }}" alt="">
                    <p>Jam Tangan</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-12.png') }}" alt="">
                    <p>Bunga Altar</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-13.png') }}" alt="">
                    <p>Menu Sarapan </p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-14.png') }}" alt="">
                    <p>Makanan Ringan</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-15.png') }}" alt="">
                    <p>Hiasan Dinding</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-16.png') }}" alt="">
                    <p>Penutup Altar</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    <!-- Banner Begin -->
    {{-- <div class="banner py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="{{ route('bazar') }}">
                        <div class="banner__pic">
                            <img src="{{ asset('img/iklan.png') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Featured Section Begin -->
    <section class="featured spad" style="background-color: #FAFAF7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".sembako">Bahan Pokok</li>
                            <li data-filter=".pakaian">Pakaian</li>
                            <li data-filter=".buah-buahan">Buah-buahan</li>
                            <li data-filter=".lain-lain">Lain-lain</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($products as $product)
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges pakaian">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->gambar_produk) }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="/product/view/{{ $product->id }}">
                        <div class="featured__item__text text-left px-2 pb-2">
                            <h6 class="py-0">{{ limit_text($product->nama_produk,6) }}</h6>
                            <div>
                                <h5 style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;{{ $product->rating }} <span style="float: right; font-size:13px;">230 terjual</span>
                                </h5>
                            </div>
                            <h5><span style="font-size: 0.8em">Rp</span>{{ number_format( $product->harga_produk,0,"",".") }}</h5>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
@endsection
