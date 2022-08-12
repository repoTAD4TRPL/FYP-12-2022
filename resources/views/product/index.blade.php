@extends('layout.app')

@section('content')

    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Kategori</h4>
                            <ul>
                                <li><a href="{{ route('product.search.bahan-pokok') }}">Bahan Pokok</a></li>
                                <li><a href="{{ route('product.search.pakaian') }}">Pakaian</a></li>
                                <li><a href="{{ route('product.search.detergen') }}">Kebersihan Rumah</a></li>
                                <li><a href="#">Buah-buahan</a></li>
                                <li><a href="#">Pakaian</a></li>
                                <li><a href="#">Ulos</a></li>
                                <li><a href="#">Peralatan Elektronik</a></li>
                                <li><a href="#">Peralatan Dapur</a></li>
                                <li><a href="#">Makanan & Minuman</a></li>
                                <li><a href="#">Perabot</a></li>
                                <li><a href="#">Kebaya</a></li>
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Harga</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Lokasi</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Medan
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Tobasa
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Jakarta
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Bandung
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Produk Terbaru</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-1.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Sayur Manis</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-2.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Paprika</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-3.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Ayam Goreng</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-1.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-2.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="img/latest-product/lp-3.jpg" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Semua Kategori
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Apa yang sedang anda cari?">
                                <a href="{{ route('product.search') }}" class="site-btn">CARI</a>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <a href="">
                                    <h5>Keranjang Saya</h5>
                                    <span>17 Barang dalam keranjang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Lagi Diskon</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/jaket.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Jaket Pria/wanita</span>
                                            <h5><a href="#">Jaket Untuk pria atau wanita</a></h5>
                                            <div class="product__item__price">Rp20.000 <span>Rp25.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-2.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Sayuran</span>
                                            <h5><a href="product/detail">Paket Buah dan Sayur</a></h5>
                                            <div class="product__item__price">Rp200.000 <span>Rp225.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/kebaya-2.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Pakaian</span>
                                            <h5><a href="#">Kebaya</a></h5>
                                            <div class="product__item__price">Rp200.000 <span>Rp25.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('img/product/batik.png') }}">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Pakaian</span>
                                            <h5><a href="#">Batik Wanita</a></h5>
                                            <div class="product__item__price">Rp20.000 <span>Rp25.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/gula.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Sembako</span>
                                            <h5><a href="#">Gula</a></h5>
                                            <div class="product__item__price">Rp20.000 <span>Rp25.000</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/kaos.png">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Pakaian</span>
                                            <h5><a href="#">Kaos</a></h5>
                                            <div class="product__item__price">Rp20.000 <span>Rp25.000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    {{-- <h6><span>16</span> Products found</h6> --}}
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
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/kebaya.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Kebaya</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/rinso.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Rinso</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp5.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/sabub-cair.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Bedak Bayi</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/sikat-gigi.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Sikat Gigi Kodomo</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/molto.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Molto</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/switsal.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Minyak Telon</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/nivea.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Nivea</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/pondan.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Pondan</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/minyak-makan.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Minyak Makan</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/kemeja.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Kemeja Pink</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
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
