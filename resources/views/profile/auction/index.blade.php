@extends('layout.app')

@section('content')
<section class="profil-section" style="background: #F5F5F5">
    <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
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
                    <h4 class="">Lelang</h4>
                    <p>Lelang akan diadakan pada tanggal <strong>14 Agustus 2022</strong>.</p>
                    <hr>
                    <div class="row my-3">
                        <div class="col-sm-3 text-right">
                            <h5> Ketua Panitia :</h5>
                        </div>
                        <div class="col-sm-9">
                        <h5>Pdt. Thomson</h5>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-3 text-right">
                            <h5> Sekretaris :</h5>
                        </div>
                        <div class="col-sm-9">
                        <h5>Cpdt. Lasma Pangaribuan</h5>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-3 text-right">
                            <h5> Bendahara :</h5>
                        </div>
                        <div class="col-sm-9">
                        <h5>Sintua Polin Hutabarat</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-3 px-4">
                            <h5><strong>Syarat dan ketentuan</strong></h5>
                            <ol>
                                <li>Lelang produk atau barang dapat diikuti oleh jemaat manapun yang ingin memberikan sumbangan</li>
                                <li>Jemaat diperbolehkan memberikan sumbangan lelang berupa makanan, produk / barang, dan jenis lainnya.</li>
                                <li>Barang yang disumbangkan untuk di lelang diserahkan kepada panitia pukul 08:00 pada hari pelaksanaan lelang.</li>
                                <li>Hasil penjualan dari lelang produk akan diberikan kepada gereja yang melakukan lelang</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-12 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Sumbangkan Lelang
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <form action="/lelangPost" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sumbangkan Lelang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="w-100">
                                                    <tr>
                                                        <td class="py-2">Nama Produk</td>
                                                        <td class="py-2">:</td>
                                                        <td class="py-2"><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-2">Berat/Ukuran</td>
                                                        <td class="py-2">:</td>
                                                        <td class="py-2"><input type="text" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-2" style="vertical-align: top">Deskripsi</td>
                                                        <td class="py-2" style="vertical-align: top">: </td>
                                                        <td class="py-2"><textarea name="" class="form-control" id="" cols="30" rows="10"></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-2" style="vertical-align: top">Gambar</td>
                                                        <td class="py-2" style="vertical-align: top">: </td>
                                                        <td class="py-2"><input type="file" class="form-control"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
        <div class="col-sm-12">
            <h5 class="mb-4">Lelang saya</h5>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">Barang</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Modal</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            <img src="{{ asset($product->gambar_produk) }}" width="70px" height="70px" alt="">
                            <span>{{ $product->nama_produk }}</span>
                        </td>
                        <td>1 Set</td>
                        <td>Rp{{number_format($product->harga_awal,0,"",".") }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <table>
                                <tr>
                                    <td class="p-0">
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                    <td class="p-0">
                                        <a href="" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
