@extends('layout.app')

@section('content')

    <!-- Checkout Section Begin -->
    <section class="checkout">
        <div class="container">
            <div class="checkout__form">
                <h4>Detail Pemesanan</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Nama<span>*</span></p>
                                        <input type="text" value="Lamsihar Sirait">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="Nama jalan" value="Jl.Hepata, Simpang Hutatinggi, Lapo mangga, KAB. TOBA SAMOSIR - LAGUBOTI, SUMATERA UTARA, ID 22381" class="checkout__input__add">
                                <input type="text" placeholder="Nama Bangunan">
                            </div>
                            <div class="checkout__input">
                                <p>Kota/Kabupaten<span>*</span></p>
                                <input value="Gedung Putih" type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Kode Pos<span>*</span></p>
                                <input type="text" value="22381">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>No Telepon<span>*</span></p>
                                        <input type="text" value="08211239238">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Catatan pemesanan<span>*</span></p>
                                <input type="text"
                                    placeholder="Catatan tentang pesanan anda, paket jangan di banting">
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="payment_method">
                                        <p>Metode Pembayaran<span>*</span></p>
                                        <select id="inputState" class="form-control w-100">
                                            <option selected>Pilih Metode Pembayaran</option>
                                            <option>COD</option>
                                            <option selected>Transfer Bank</option>
                                            <option>Kartu Kredit</option>
                                            <option>Dana</option>
                                            <option>Idomaret/i.saku</option>
                                            <option>Alfamart</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="payment_method">
                                        <p>Pilih Bank<span>*</span></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="metodePembayaran" id="metodePembayaran1" value="option1" checked>
                                            <label class="form-check-label" for="metodePembayaran1">
                                              <img src="{{ asset('img/icon/bank/img_bankid_bca.png') }}" alt=""> Bank BCA (Dicek manual)
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="metodePembayaran" id="metodePembayaran2" value="option2">
                                            <label class="form-check-label" for="metodePembayaran2">
                                                <img src="{{ asset('img/icon/bank/img_bankid_bni.png') }}" alt=""> Bank BNI (Dicek manual)
                                            </label>
                                          </div>
                                          <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="metodePembayaran" id="metodePembayaran3" value="option3">
                                            <label class="form-check-label" for="metodePembayaran3">
                                                <img src="{{ asset('img/icon/bank/img_bankid_bri.png') }}" alt=""> Bank BRI (Dicek manual)
                                            </label>
                                          </div>
                                          <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="metodePembayaran" id="metodePembayaran4" value="option4">
                                            <label class="form-check-label" for="metodePembayaran4">
                                                <img src="{{ asset('img/icon/bank/img_bankid_mandiri.png') }}" alt=""> Bank Mandiri (Dicek manual)
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="shipment_method">
                                        <p>Pilih Metode Pengiriman<span>*</span></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              <img src="{{ asset('img/icon/pengiriman/jnt.png') }}" width="30px" height="40px" alt=""> J&T (Tiba dalam 4 hari) <br>
                                              <span>Rp25.000</span>
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                <img src="{{ asset('img/icon/pengiriman/ninja.jpg') }}" width="30px" height="40px" alt=""> Ninja Van ID (Tiba dalam 4 hari) <br>
                                                <span>Rp25.000</span>
                                            </label>
                                          </div>
                                          <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                            <label class="form-check-label" for="exampleRadios3">
                                                <img src="{{ asset('img/icon/pengiriman/sicepat.jpg') }}" width="30px" height="40px" alt=""> Sicepat Express (Tiba dalam 4 hari) <br>
                                                <span>Rp25.000</span>
                                            </label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Pemesanan</h4>
                                <div class="checkout__order__products">Produk <span>Total</span></div>
                                <ul>
                                    @foreach ($item_pesanan as $pesanan)
                                        <li>{{ limit_text($pesanan->product->nama_produk,3) }} <span>Rp{{ number_format($pesanan->product->harga_produk*$pesanan->jumlah,0,"",".") }}</span></li>
                                    @endforeach
                                    <li>Pajak 2% <span>Rp{{ number_format($pajak,0,"",".") }}</span></li>
                                </ul>
                                <div class="checkout__order__total">Total <span>Rp{{ number_format($harga+$pajak,0,"",".") }}</span></div>
                                <a href="{{ route('order') }}" class="site-btn">Buat Pemesanan</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection
