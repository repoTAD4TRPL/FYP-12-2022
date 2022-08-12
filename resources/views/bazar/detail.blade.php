@extends('layout.app')

@section('content')
    <!-- Product Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="{{ asset('img/bazar/3e2102c5-5bb3-4dda-97e1-5e1a8665bc72 1.png') }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel owl-loaded owl-drag">
                                                    <div class="owl-stage-outer"><div class="owl-stage"></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product__details__text">
                        <h4>Kue basah (kue tampah)</h4>
                        <h5 class="mt-4">
                            <strong>Deskripsi</strong><br>
                            Kue basah jajanan pasar <br> Isi : 100 <br> Varian kue: 25 <br>
                        </h5>
                        <div class="product__details__price"><span style="font-size: 0.8em">Rp</span>171.000</div>
                        <div>
                        <ul>
                            <li><b>Stok</b> <span>Tersisa 5 buah</span></li>
                        </ul>
                    </div>
                    <a href="/" class="btn btn-primary float-right" >Beli sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
