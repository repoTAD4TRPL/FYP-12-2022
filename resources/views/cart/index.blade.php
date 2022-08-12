@extends('layout.app')

@section('content')

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                    $toko = "";
                                @endphp
                                @foreach ($cart_items as $cart_item)
                                <tr>
                                    <td colspan="3" class="py-1 text-left">
                                        <strong>{{ $cart_item->store->nama_toko }}</strong>
                                    </td>
                                    <td colspan="2" class="py-1">
                                       <!-- Button trigger modal -->
                                        <button  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" style="background: #FFFFFF;border: 1px solid #D2D5DB;border-radius: 2px; color:#838383">
                                            <i class="fa fa-ticket"></i> Lihat promo
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="">Gunakan kode promo</label>
                                                        <input type="text" placeholder="Masukkan kode promo" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="row my-2">
                                                    <div class="col-12">
                                                        <div class="card px-1 py-2">
                                                            <div class="row">
                                                                <div class="col-1 py-4">
                                                                    <input class="align-middle" type="radio" name="promo" checked>
                                                                </div>
                                                                <div class="col-3 text-center">
                                                                    <img src="{{ asset('img/Popup/image.png') }}" alt="">
                                                                </div>
                                                                <div class="col-8">
                                                                    <h5 style="font-size: 17px">Diskon 10% hingga 10 Ribu</h5>
                                                                    <span  style="font-size: 12px">Hanya berlaku untuk pembelian pertama</span>
                                                                    <a href="" class="btn btn-light btn-sm">NEWCUSTOMER</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12">
                                                        <div class="card px-1 py-2">
                                                            <div class="row">
                                                                <div class="col-1 py-4">
                                                                    <input class="align-middle" type="radio" name="promo">
                                                                </div>
                                                                <div class="col-3 text-center">
                                                                    <img src="{{ asset('img/Popup/webp_Kemasan_Polos_Stiker3_-_2280X856 (1) 1.png') }}" alt="">
                                                                </div>
                                                                <div class="col-8">
                                                                    <h5 style="font-size: 17px">Diskon 10% hingga 10 Ribu</h5>
                                                                    <span  style="font-size: 12px">Hanya berlaku untuk pembelian pertama</span>
                                                                    <a href="" class="btn btn-light btn-sm">NEWCUSTOMER</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12">
                                                        <div class="card px-1 py-2">
                                                            <div class="row">
                                                                <div class="col-1 py-4">
                                                                    <input class="align-middle" type="radio" name="promo">
                                                                </div>
                                                                <div class="col-3 text-center">
                                                                    <img src="{{ asset('assets/img/elements/12.jpg') }}" alt="">
                                                                </div>
                                                                <div class="col-8">
                                                                    <h5 style="font-size: 17px">Diskon 10% hingga 10 Ribu</h5>
                                                                    <span  style="font-size: 12px">Hanya berlaku untuk pembelian pertama</span>
                                                                    <a href="" class="btn btn-light btn-sm">NEWCUSTOMER</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Gunakan Voucher</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="{{ asset($cart_item->product->gambar_produk) }}" alt="">
                                            </div>
                                            <div class="col-9">
                                                <span>{{ $cart_item->product->nama_produk }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <span style="font-size: 0.9em">Rp</span>{{ number_format($cart_item->product->harga_produk,0,"",".") }}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{ $cart_item->jumlah }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <span style="font-size: 0.9em">Rp</span>{{ number_format($cart_item->product->harga_produk*$cart_item->jumlah,0,"",".") }}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                @php
                                    $total+=($cart_item->product->harga_produk*$cart_item->jumlah);
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="" class="primary-btn cart-btn">Lanjutkan Berbelanja</a>
                        <a href="" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Update Keranjang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Kode Diskon</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">Tambahkan Kupon</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Total Pembelian</h5>
                        <ul>
                            {{-- <li>Subtotal <span>Rp180.000</span></li> --}}
                            <li>Total <span>Rp{{ number_format($total,0,"",".") }}</span></li>
                        </ul>
                        <form action="{{ route('checkout') }}" method="post">
                            @csrf
                            @if ($cart!=null)
                            <input type="hidden" name="keranjang_id" value="{{ $cart->id }}">
                            <input type="hidden" name="total_harga" value="{{ $total }}">
                            @endif
                            <button type="submit" class="btn btn-lg btn-primary w-100">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
