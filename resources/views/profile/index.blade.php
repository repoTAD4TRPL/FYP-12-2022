@extends('layout.app')

@section('content')
    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="background: white;margin: 20px 0px; padding:10px;">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <img src="{{ asset('img/avatar.png') }}" width="200px" height="200px" alt="">
                            <h4>{{$user->username }}</h4>
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
                                <a href="{{ route('lelang') }}" >Lelang</a>
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
                    <h4 class="">Profile saya</h4>
                    <p>Kelola informasi profil untuk menjaga keamanan akun.</p>
                    <hr>
                    <form action="">
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Username :</h5>
                            </div>
                            <div class="col-sm-9">
                            <h5>{{ $user->username }}</h5>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Nama :</h5>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Gambar :</h5>
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset($user->foto_profil) }}" alt="">
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
                                <h5>{{ $user->email }}</h5>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Jenis Kelamin :</h5>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" @if ($user->jenis_kelamin == 'Laki-laki') checked @endif>
                                            <label class="form-check-label" for="exampleRadios1">
                                            Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" @if ($user->jenis_kelamin == 'Perempuan ') checked @endif>
                                            <label class="form-check-label" for="exampleRadios2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
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
                                <a href="" class="btn btn-primary w-100" >Simpan Perubahan</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
