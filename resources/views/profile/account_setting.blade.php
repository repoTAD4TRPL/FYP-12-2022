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
                            <h4>Pengaturan Akun</h4>
                            <p>Lakukan verifikasi dan ubah password secara berkala untuk keamanan akun anda</p>
                            <hr>
                        </div>
                        <div class="col-12 px-5 py-2">
                            <h5>Ubah Password</h5>
                            <div class="box py-3 my-2" style="border: 1px solid #ABA7A7;">
                                <table class="w-100">
                                    <tr>
                                        <td class="text-right p-3">Password Saat ini</td>
                                        <td class="text-right p-3"> : </td>
                                        <td class="text-right p-3">
                                            <input type="text" class="form-control">
                                        </td>
                                        <td class=" p-3"><span style="color: #ABA7A7"> Lupa Password?</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right p-3">Password yang baru</td>
                                        <td class="text-right p-3"> : </td>
                                        <td class="text-right p-3">
                                            <input type="text" class="form-control">
                                        </td>
                                        <td class=" p-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right p-3">Konfirmasi password</td>
                                        <td class="text-right p-3"> : </td>
                                        <td class="text-right p-3">
                                            <input type="text" class="form-control">
                                        </td>
                                        <td class=" p-3"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right p-3"></td>
                                        <td class="text-right p-3"></td>
                                        <td class="p-3">
                                            <a href="" class="btn btn-primary">Konfirmasi</a>
                                        </td>
                                        <td class="p-3"></td>
                                    </tr>
                                </table>
                            </div>
                            <a href="" class="btn btn-secondary m-4">Hapus akun saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
