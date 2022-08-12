@extends('layout.app')

@section('content')

    <section class="pengaturan-pencarian" style="background: #F5F5F5">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Profile > Toko Saya  >  Pesanan</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 px-2 h-100">
                    <div class="sidebar bg-white py-3">
                        <div class="sidebar-menu ">
                            <a href="{{ route('my-product') }}" >Produk Saya</a>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesanan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('order') }}">Pesanan </a>
                                <a class="dropdown-item" href="{{ route('order.cancelled') }}">Pembatalan</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kelola Lelang</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('auction.add') }}">Buat Lelang </a>
                                <a class="dropdown-item" href="{{ route('auction') }}">Riwayat Lelang</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Metode Pembayaran</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('payment.saldo') }}">Saldo Penjual </a>
                                <a class="dropdown-item" href="{{ route('payment.setting') }}">Pengaturan Rekening</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengiriman</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('shipment') }}">Jasa Pengiriman</a>
                                <a class="dropdown-item" href="{{ route('shipment') }}">Pengiriman Saya</a>
                                <a class="dropdown-item" href="{{ route('shipment.setting') }}">Pengaturan Pengiriman</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="{{ route('store-monitoring') }}">Analisis Pembeli</a>
                        </div>
                    </div>
                </div>
                <div class="col-9 px-">
                    <div class="content bg-white p-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class=""> Pengaturan Pengiriman</h4>
                            </div>
                        </div>
                        <hr>
                        <h5><i class="fa fa-gear"> Jasa Kirim</i></h5>
                        <p>Pilih jasa pengiriman</p>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Regular (Cashless)</h5>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="" class="btn btn-light" >Tutup <i class="fa fa-caret-down"></i></a>
                                    </div>
                                </div>
                                <div class="row my-3" style="background:#EBEBEB; padding:10px 10px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">COD</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingPengantaranLangsung">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#pengantaranLangsung" aria-expanded="true" aria-controls="pengantaranLangsung"> Pengantaran Langsung </button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="pengantaranLangsung" class="collapse show" aria-labelledby="headingPengantaranLangsung" data-parent="#accordion">
                                                <div class="card-body">
                                                    Pengantaran Langsung hanya melayani jasa pengantaran pada daerah sekitar atau dalam provinsi.
                                                    <br><br>
                                                    Pengantaran Langsung tidak menerima pengiriman barang-barang berikut: <br>
                                                    1. Binatang/tumbuhan hidup<br>
                                                    2. Surat berharga<br>
                                                    3. Senjata<br>
                                                    4. Barang yang mudah meledak<br>
                                                    5. Barang akrilik<br>
                                                    6. Barang dari marmer<br>
                                                    7. Barang dari gelas<br>
                                                    8. Alkohol/minuman beralkohol<br>
                                                    <br><br>
                                                    Berat maks.: 50kg<br>
                                                    Dimensi maks.: 50x50x50cm<br>
                                                    Kontak: 021-50603333 (Customer Service), atau cs@hkbpstore.id (email).<br>
                                                    Situs: https://hkbpstore.id/<br>
                                                    Batasan<br>
                                                    Berat maks: 50000gr<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingPengambilanLangsung">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePengambilanLangsung" aria-expanded="true" aria-controls="collapsePengambilanLangsung"> Pengambilan Langsung </button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="collapsePengambilanLangsung" class="collapse" aria-labelledby="headingPengambilanLangsung" data-parent="#accordion">
                                                <div class="card-body">
                                                    Pengambilan langsung dapat di atur jadwal pengambilan pada jam kerja atau jam 09.00 hingga 17.00
                                                    <br><br>
                                                    Pengambilan langsung tidak memperkenankan barang-barang berikut: <br>
                                                    1. Binatang/tumbuhan hidup<br>
                                                    2. Surat berharga<br>
                                                    3. Senjata<br>
                                                    4. Barang yang mudah meledak<br>
                                                    5. Barang akrilik<br>
                                                    6. Barang dari marmer<br>
                                                    7. Barang dari gelas<br>
                                                    8. Alkohol/minuman beralkohol<br>
                                                    <br><br>
                                                    Berat maks.: 50kg<br>
                                                    Dimensi maks.: 50x50x50cm<br>
                                                    Kontak: 021-50603333 (Customer Service), atau cs@hkbpstore.id (email).<br>
                                                    Situs: https://hkbpstore.id/<br>
                                                    Batasan<br>
                                                    Berat maks: 50000gr<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne"> J&T Express </button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    J&T Express adalah jasa kirim dengan tipe layanan pengiriman Reguler untuk pengiriman ke seluruh Indonesia.
                                                    <br><br>
                                                    J&T Express tidak menerima pengiriman barang-barang berikut: <br>
                                                    1. Obat-obatan terlarang <br>
                                                    2. Uang koin/kertas <br>
                                                    3. Kartu ATM/kredit <br>
                                                    4. Barang yang mudah meledak/terbakar <br>
                                                    5. Senjata api <br>
                                                    6. Gas terkompresi <br>
                                                    7. Bahan pengoksidasi <br>
                                                    8. Zat beracun dan menular <br>
                                                    9. Bahan radioaktif/korosif <br>
                                                    10. Hewan hidup <br>
                                                    11. Barang berbahaya lainnya <br>
                                                    <br><br>
                                                    Berat maks.: 50kg <br>
                                                    Dimensi maks.: 300x110x76cm <br>
                                                    Kontak: 021-80661888 (Customer Service), atau jntcallcenter@jet.co.id (email). <br>
                                                    <br><br>
                                                    Situs: http://jet.co.id/ <br>
                                                    Batasan <br>
                                                    Berat maks: 50000gr
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row  mt-4">
                                    <div class="col-sm-6">
                                        <h5>Hemat</h5>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="" class="btn btn-light" >Tutup <i class="fa fa-caret-down"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Sicepat Halu </button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anteraja Reguler adalah jasa kirim dengan tipe layanan pengiriman Reguler yang menawarkan jasa penjemputan paket (pick up). Wilayah yang didukung oleh Anteraja Reguler adalah Jabodetabek, Jawa Barat, Jawa Timur, Jawa Tengah, D.I. Yogyakarta, Sumatera, Kalimantan, Sulawesi, Bali, Nusa Tenggara, dan Papua.
                                                    <br><br>
                                                    Anteraja Reguler tidak menerima pengiriman barang-barang berikut: <br>
                                                    1. Binatang/tumbuhan hidup<br>
                                                    2. Surat berharga<br>
                                                    3. Senjata<br>
                                                    4. Barang yang mudah meledak<br>
                                                    5. Barang akrilik<br>
                                                    6. Barang dari marmer<br>
                                                    7. Barang dari gelas<br>
                                                    8. Alkohol/minuman beralkohol<br>
                                                    <br><br>
                                                    Berat maks.: 50kg<br>
                                                    Dimensi maks.: 50x50x50cm<br>
                                                    Kontak: 021-50603333 (Customer Service), atau cs@anteraja.id (email).<br>
                                                    Situs: https://anteraja.id/<br>
                                                    Batasan<br>
                                                    Berat maks: 50000gr<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne"> JNT Economy </button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anteraja Reguler adalah jasa kirim dengan tipe layanan pengiriman Reguler yang menawarkan jasa penjemputan paket (pick up). Wilayah yang didukung oleh Anteraja Reguler adalah Jabodetabek, Jawa Barat, Jawa Timur, Jawa Tengah, D.I. Yogyakarta, Sumatera, Kalimantan, Sulawesi, Bali, Nusa Tenggara, dan Papua.
                                                    <br><br>
                                                    Anteraja Reguler tidak menerima pengiriman barang-barang berikut: <br>
                                                    1. Binatang/tumbuhan hidup<br>
                                                    2. Surat berharga<br>
                                                    3. Senjata<br>
                                                    4. Barang yang mudah meledak<br>
                                                    5. Barang akrilik<br>
                                                    6. Barang dari marmer<br>
                                                    7. Barang dari gelas<br>
                                                    8. Alkohol/minuman beralkohol<br>
                                                    <br><br>
                                                    Berat maks.: 50kg<br>
                                                    Dimensi maks.: 50x50x50cm<br>
                                                    Kontak: 021-50603333 (Customer Service), atau cs@anteraja.id (email).<br>
                                                    Situs: https://anteraja.id/<br>
                                                    Batasan<br>
                                                    Berat maks: 50000gr<br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row  mt-4">
                                    <div class="col-sm-6">
                                        <h5>Kargo</h5>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="" class="btn btn-light" >Buka <i class="fa fa-caret-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row  mt-4">
                                    <div class="col-sm-6">
                                        <h5>Hari Yang Sama</h5>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="" class="btn btn-light" >Tutup <i class="fa fa-caret-down"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">JNT </button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anteraja Reguler adalah jasa kirim dengan tipe layanan pengiriman Reguler yang menawarkan jasa penjemputan paket (pick up). Wilayah yang didukung oleh Anteraja Reguler adalah Jabodetabek, Jawa Barat, Jawa Timur, Jawa Tengah, D.I. Yogyakarta, Sumatera, Kalimantan, Sulawesi, Bali, Nusa Tenggara, dan Papua.
                                                    <br><br>
                                                    Anteraja Reguler tidak menerima pengiriman barang-barang berikut: <br>
                                                    1. Binatang/tumbuhan hidup<br>
                                                    2. Surat berharga<br>
                                                    3. Senjata<br>
                                                    4. Barang yang mudah meledak<br>
                                                    5. Barang akrilik<br>
                                                    6. Barang dari marmer<br>
                                                    7. Barang dari gelas<br>
                                                    8. Alkohol/minuman beralkohol<br>
                                                    <br><br>
                                                    Berat maks.: 50kg<br>
                                                    Dimensi maks.: 50x50x50cm<br>
                                                    Kontak: 021-50603333 (Customer Service), atau cs@anteraja.id (email).<br>
                                                    Situs: https://anteraja.id/<br>
                                                    Batasan<br>
                                                    Berat maks: 50000gr<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">Ninja Van ID</button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anteraja Reguler adalah jasa kirim dengan tipe layanan pengiriman Reguler yang menawarkan jasa penjemputan paket (pick up). Wilayah yang didukung oleh Anteraja Reguler adalah Jabodetabek, Jawa Barat, Jawa Timur, Jawa Tengah, D.I. Yogyakarta, Sumatera, Kalimantan, Sulawesi, Bali, Nusa Tenggara, dan Papua.
                                                    <br><br>
                                                    Anteraja Reguler tidak menerima pengiriman barang-barang berikut: <br>
                                                    1. Binatang/tumbuhan hidup<br>
                                                    2. Surat berharga<br>
                                                    3. Senjata<br>
                                                    4. Barang yang mudah meledak<br>
                                                    5. Barang akrilik<br>
                                                    6. Barang dari marmer<br>
                                                    7. Barang dari gelas<br>
                                                    8. Alkohol/minuman beralkohol<br>
                                                    <br><br>
                                                    Berat maks.: 50kg<br>
                                                    Dimensi maks.: 50x50x50cm<br>
                                                    Kontak: 021-50603333 (Customer Service), atau cs@anteraja.id (email).<br>
                                                    Situs: https://anteraja.id/<br>
                                                    Batasan<br>
                                                    Berat maks: 50000gr<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne"> J&T Express </button>
                                                        </div>
                                                        <div class="col-sm-6 text-right">
                                                            <!-- Rounded switch -->
                                                            <label class="switch m-2">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <i class="fa fa-caret-down mr-3"></i>
                                                        </div>
                                                    </div>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anteraja Reguler adalah jasa kirim dengan tipe layanan pengiriman Reguler yang menawarkan jasa penjemputan paket (pick up). Wilayah yang didukung oleh Anteraja Reguler adalah Jabodetabek, Jawa Barat, Jawa Timur, Jawa Tengah, D.I. Yogyakarta, Sumatera, Kalimantan, Sulawesi, Bali, Nusa Tenggara, dan Papua.
                                                    <br><br>
                                                    Anteraja Reguler tidak menerima pengiriman barang-barang berikut: <br>
                                                    1. Binatang/tumbuhan hidup<br>
                                                    2. Surat berharga<br>
                                                    3. Senjata<br>
                                                    4. Barang yang mudah meledak<br>
                                                    5. Barang akrilik<br>
                                                    6. Barang dari marmer<br>
                                                    7. Barang dari gelas<br>
                                                    8. Alkohol/minuman beralkohol<br>
                                                    <br><br>
                                                    Berat maks.: 50kg<br>
                                                    Dimensi maks.: 50x50x50cm<br>
                                                    Kontak: 021-50603333 (Customer Service), atau cs@anteraja.id (email).<br>
                                                    Situs: https://anteraja.id/<br>
                                                    Batasan<br>
                                                    Berat maks: 50000gr<br>
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
@endsection
