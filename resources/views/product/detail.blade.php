@extends('layout.app')

@section('content')
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="{{ asset($product->gambar_produk) }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach ($galery as $gambar)
                                <img data-imgbigurl="{{ asset($gambar->file_location) }}" src="{{ asset($gambar->file_location) }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product__details__text">
                        <h4>{{ $product->nama_produk }}</h4>
                        <div class="product__details__rating">
                            <span style="color: rgb(70, 69, 69)">{{ $product->rating }}</span>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span style="color: rgb(70, 69, 69)">(18 Penilaian)</span>
                        </div>
                        <div class="product__details__price"><span style="font-size: 0.8em">Rp</span>{{ number_format($product->harga_produk,0,"",".") }}</div>
                        <div>
                            <?php echo limit_text($product->deskripsi_produk,100) ?>
                            <br><br>
                            <a href="" style="color:black;font-weight:700; color:rgb(78, 78, 78)">Lebih banyak</a>
                        </div>
                        <form action="{{ route('addToCart') }}" method="post">
                            @csrf
                            <input type="hidden" name="produk_id" value="{{ $product->id }}">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input name="jumlah_produk" type="text" value="1">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="primary-btn"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                        </form>
                        {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                        <ul>
                            <li><b>Stok</b> <span>Tersedia</span></li>
                            <li><b>Pengiriman</b> <span>01 Hari langsung sampai. <samp>Gratis khusus hari ini</samp></span></li>
                            <li><b>Berat</b> <span>10 kg</span></li>
                            <li><b>Bagikan</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Deskripsi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Spesifikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Penilaian <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Deskripsi Produk</h6>
                                    <div>
                                        <?php echo $product->deskripsi_produk ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Spesifikasi Produk</h6>
                                    <p> <?php echo limit_text($product->deskripsi_produk,50) ?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <div class="row">
                                        <div class="col-3">
                                            <h5>Penilaian pembeli</h5>
                                            <hr>
                                            <div class="product__details__rating">
                                                <span style="color: rgb(70, 69, 69)">{{ $product->rating }}</span>
                                                <i class="fa fa-star" style="color: #ffc400;"></i>
                                                <i class="fa fa-star" style="color: #ffc400;"></i>
                                                <i class="fa fa-star" style="color: #ffc400;"></i>
                                                <i class="fa fa-star" style="color: #ffc400;"></i>
                                                <i class="fa fa-star-half-o" style="color: #ffc400;"></i>
                                                <span style="color: rgb(70, 69, 69)"> 4.5 dari 5</span>
                                            </div>
                                            <span>23 Total penilaian</span>
                                            <table>
                                                <tr>
                                                    <td style="width: 25%; font-size:0.9em">Bintang 5</td>
                                                    <td style="width: 70%;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td style="width: 5%;"> 75%</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 25%; font-size:0.9em">Bintang 4</td>
                                                    <td style="width: 70%;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td style="width: 5%;"> 10%</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 25%; font-size:0.9em">Bintang 3</td>
                                                    <td style="width: 70%;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td style="width: 5%;"> 3%</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 25%; font-size:0.9em">Bintang 2</td>
                                                    <td style="width: 70%;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td style="width: 5%;"> 10%</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 25%; font-size:0.9em">Bintang 1</td>
                                                    <td style="width: 70%;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 2%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td style="width: 5%;"> 2%</td>
                                                </tr>
                                            </table>
                                            <div>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <h5>Foto dari pembeli</h5>
                                            <div class="row">
                                                @foreach ($galery as $gambar)
                                                    <div class="col-2 p-2">
                                                        <div style="height: 140px; background-image: url({{ asset($gambar->file_location) }});background-size:cover;"></div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <a href="">Lihat gambar lainnya</a>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row my-5">
                                                <div class="col-9"><h5>Penilaian teratas dari pembeli</h5></div>
                                                <div class="col-3 text-right">
                                                    <select name="" id=""   >
                                                        <option value="">Semua</option>
                                                        <option value="">Positif</option>
                                                        <option value="">Negatif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="review">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="{{ asset('img/icon/profile.png') }}" alt="" height="40px" width="40px"><span> Pangihutan</span>
                                                                <p style="font-size: 13px;"><i class="fa fa-calendar"></i>{{ now()->format('d M Y') }}</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="product__details__rating">
                                                                    <span style="color: rgb(70, 69, 69)">{{ $product->rating }}</span>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star-half-o" style="color: #ffc400;"></i>
                                                                    <span style="color: rgb(70, 69, 69)"> Warna Black</span>
                                                                </div>
                                                                <p>Kualitas produk sangat baik</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <div class="review">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="{{ asset('img/icon/profile.png') }}" alt="" height="40px" width="40px"><span> Masturi Pangaribuan</span>
                                                                <p style="font-size: 13px;"><i class="fa fa-calendar"></i>{{ now()->format('d M Y') }}</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="product__details__rating">
                                                                    <span style="color: rgb(70, 69, 69)">{{ $product->rating }}</span>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star-half-o" style="color: #ffc400;"></i>
                                                                    <span style="color: rgb(70, 69, 69)"> Warna Hitam</span>
                                                                </div>
                                                                <p>Produk sesuai gambar, pengiriman cepat</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <div class="review">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="{{ asset('img/icon/profile.png') }}" alt="" height="40px" width="40px"><span> Dante Lubis </span>
                                                                <p style="font-size: 13px;"><i class="fa fa-calendar"></i>{{ now()->format('d M Y') }}</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="product__details__rating">
                                                                    <span style="color: rgb(70, 69, 69)">{{ $product->rating }}</span>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star-half-o" style="color: #ffc400;"></i>
                                                                    <span style="color: rgb(70, 69, 69)"> Warna Hitam</span>
                                                                </div>
                                                                <p>Produk sesuai gambar, pengiriman cepat</p>
                                                                <img src="{{ asset('img/product/batik.png') }}" alt="" height="80px" width="60px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-12">
                                                    <div class="review">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <img src="{{ asset('img/icon/profile.png') }}" alt="" height="40px" width="40px"><span> Pandapotan</span>
                                                                <p style="font-size: 13px;"><i class="fa fa-calendar"></i>{{ now()->format('d M Y') }}</p>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="product__details__rating">
                                                                    <span style="color: rgb(70, 69, 69)">{{ $product->rating }}</span>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star" style="color: #ffc400;"></i>
                                                                    <i class="fa fa-star-half-o" style="color: #ffc400;"></i>
                                                                    <span style="color: rgb(70, 69, 69)"> Warna Hitam</span>
                                                                </div>
                                                                <p>Produk sesuai gambar, pengiriman cepat</p>
                                                                <img src="{{ asset('img/product/batik.png') }}" alt="" height="80px" width="60px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    {{-- <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Produk Terkait</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('img/product/product-1.jpg'); }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Daging Sapi Segar</a></h6>
                            <h5>Rp20.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('img/product/product-2.jpg'); }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Pisang</a></h6>
                            <h5>Rp20.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('img/product/product-3.jpg'); }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Jambu</a></h6>
                            <h5>Rp20.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ URL::asset('img/product/product-7.jpg'); }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Semangka</a></h6>
                            <h5>Rp20.000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Related Product Section End -->
@endsection
