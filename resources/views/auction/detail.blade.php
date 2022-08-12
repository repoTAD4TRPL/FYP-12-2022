@extends('layout.app')

@section('content')
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ asset($product->gambar_produk) }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            {{-- @foreach ($galery as $gambar)
                                <img data-imgbigurl="{{ asset($gambar->file_location) }}" src="{{ asset($gambar->file_location) }}" alt="">
                            @endforeach --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product__details__text">
                        <h4>{{ $product->nama_produk }}</h4>
                        <div><?php echo limit_text($product->deskripsi_produk,60) ?></div>
                        <table class="table w-100">
                            <tr>
                                <td  style="border: none">Waktu lelang dimulai</td>
                                <td style="border: none">:</td>
                                <td style="border: none"><i class="fa fa-clock-o"></i> {{ $product->lelang_mulai }}</td>
                            </tr>
                            <tr>
                                <td style="border: none">Waktu lelang selesai    </td>
                                <td style="border: none">:</td>
                                <td style="border: none"><i class="fa fa-clock-o"></i> {{ $product->lelang_selesai }}</td>
                            </tr>
                            <tr>
                                <td style="border: none">Sisa waktu</td>
                                <td style="border: none">:</td>
                                <td style="border: none">{{ gmdate("H:i:s",strtotime($product->lelang_selesai) - strtotime(now())) }}</td>
                            </tr>
                            <tr>
                                <td style="border: none">Harga tertinggi sekarang</td>
                                <td style="border: none">:</td>
                                <td style="border: none"><strong> Rp{{ number_format($product->harga_tertinggi,0,"",".")}}</strong></td>
                            </tr>
                        </table>
                        <form action="{{ route('auction.detail-post') }}" method="post" id="auction-form">
                            @csrf
                            <table class="table">
                                <tr>
                                    <td style="border: none">Ikut Lelang</td>
                                    <td colspan="2" style="border: none">
                                        <input type="text" min="{{ $product->harga_tertinggi }}" name="harga_bid" class="form-control" id="harga_bid" aria-label="Username" aria-describedby="basic-addon1" value="{{ $product->harga_tertinggi }}">
                                    </td>
                                </tr>
                            </table>
                            <input type="hidden" name="produk_id" value="{{ $product->id }}">
                            <button style="border: none;" type="submit" class="primary-btn float-right  "><i class="fa fa-shopping-cart "></i>Ikut Lelang</button>
                        </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#auction-form").validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    harga_bid: {
                        required: true,
                        number: true,
                        min: {{ $product->harga_tertinggi+1 }}
                    },

                },
                messages : {
                    harga_bid: {
                        required: "Masukkan harga",
                        min: "Masukkan harga yang lebih tinggi dari Rp{{ number_format($product->harga_tertinggi,0,"",".") }}"
                    },
                }
            });
        });
    </script>
@endsection
