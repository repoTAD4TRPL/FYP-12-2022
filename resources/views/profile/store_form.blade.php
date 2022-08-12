@extends('layout.app')

@section('content')
    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="background: white;margin: 20px 0px; padding:10px;">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <img src="{{ asset('img/avatar.png') }}" width="200px" height="200px" alt="">
                            <h4>{{auth()->user()->username }}</h4>
                            <a href=""><h5 style="color: #ABA7A7"><i class="fa fa-edit"></i>&nbsp;Ubah Profile</h5></a>
                        </div>
                    </div>
                    <div class="row sidebar">
                        <div class="col-lg-12">

                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun Saya</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('user.account-setting') }}">Pengaturan Akun</a>
                                    @if (auth()->user()->role_id==2)
                                    <a class="dropdown-item" href="{{ route('user.seller-registration') }}">Daftar Sebagai Penjual</a>
                                    @endif
                                </div>
                            </div>
                            @if (auth()->user()->is_registered_as_seller)
                                <div class="sidebar-menu">
                                    <a href="{{ route('store') }}" >Toko Saya</a>
                                </div>
                            @endif
                            <div class="sidebar-menu">
                                <a href="{{ route('order') }}" >Pesanan Saya</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Favorit</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Notifikasi</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Komunitas</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Tentang HKBP</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 20px;">

                </div>
                <div class="content" style="background: white;margin: 20px 0px;  padding:20px 40px; width:73%;">
                    <div class="row">
                        <div class="col-12">
                            <h4>Atur Informasi Toko</h4>
                            <hr>
                        </div>
                        <div class="col-12 text-center">

                            <form action="{{ route('registerSellerPost') }}" method="post">
                                @csrf
                                <div class="row my-3">
                                    <div class="col-sm-3 text-right">
                                        <h5> Nama Toko :</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name="nama_toko" type="text" class="form-control" placeholder="Masukkan nama toko anda" required>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-3 text-right">
                                        <h5> Nama :</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Masukkan nama anda" value="{{  auth()->user()->username }}">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-3 text-right">
                                        <h5> Gambar :</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <img src="{{ asset('img/store.jpg') }}" alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control">
                                        <p style="font-size: 12px;">Ukuran gambar: maks: 1 MB <br>Format gambar: .JPEG, .PNG</p>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-3 text-right">
                                        <h5> Email :</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-3 text-right">
                                        <h5> Tanggal Lahir :</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-3 text-right">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary w-100" >Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
