@extends('layout.app')

@section('content')

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
                        {{-- <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Produk Terbaru</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('img/latest-product/lp-1.jpg') }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Sayur Manis</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('img/latest-product/lp-2.jpg') }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Paprika</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('img/latest-product/lp-3.jpg') }}" alt="">
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
                                                <img src="{{ asset('img/latest-product/lp-1.jpg') }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('img/latest-product/lp-2.jpg') }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('img/latest-product/lp-3.jpg') }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>Rp20.000</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                                <input type="text" placeholder="Bahan Pokok">
                                <a type="submit" class="site-btn">CARI</a>
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
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/bahan-pokok/bahan-pokok2.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Minyak Goreng</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp10.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/bahan-pokok/bahan-pokok1.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Abon Ikan</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>
                                    </div>
                                    <h5>Rp30.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/bahan-pokok/bahan-pokok3.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Ikan Asin</h6>
                                    <div>
                                        <p style="margin: 0px">
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                        <i class="fa fa-star" style="color: #F0D25A;"></i>
                                         &nbsp;(220)</p>x
                                    </div>
                                    <h5>Rp20.000</h5>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/bahan-pokok/bahan-pokok4.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Beras Merah</h6>
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
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/bahan-pokok/bahan-pokok5.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Garam Meja</h6>
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
                                <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/img/bahan-pokok/bahan-pokok6.png') }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#">
                                <div class="featured__item__text text-left">
                                    <h6>Ikan Teri</h6>
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
                                        <li><a href="{{ route('produk.detail2') }}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a href="{{ route('produk.detail2') }}">
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
