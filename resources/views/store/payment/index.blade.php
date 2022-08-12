@extends('layout.store')

@section('content')
<div class="content bg-white p-5">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Saldo Penjualan</h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="saldo">
                <h4>Saldo</h4>
                <h3>Rp.1.000.000</h3>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-6">
            <h4 class=""><i></i> History Transakasi</h4>
        </div>
        <div class="col-sm-6 text-right">
            <button class="btn btn-light">Urutkan</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">ID Pesanan</th>
                        <th scope="col">Rekening</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Rp.200.000</th>
                        <td>Masuk</td>
                        <td>{{ now() }}</td>
                        <td>20032</td>
                        <td>BRI</td>
                        <td>Keterangan</td>
                    </tr>
                    <tr>
                        <th scope="row">Rp.700.000</th>
                        <td>Keluar</td>
                        <td>{{ now() }}</td>
                        <td>20033</td>
                        <td>BRI</td>
                        <td>Keterangan</td>
                    </tr>
                    <tr>
                        <th scope="row">Rp.600.000</th>
                        <td>Masuk</td>
                        <td>{{ now() }}</td>
                        <td>20031</td>
                        <td>BRI</td>
                        <td>Keterangan</td>
                    </tr>
                    <tr>
                        <th scope="row">Rp.230.000</th>
                        <td>Masuk</td>
                        <td>{{ now() }}</td>
                        <td>20034</td>
                        <td>BNI</td>
                        <td>Keterangan</td>
                    </tr>
                    <tr>
                        <th scope="row">Rp.100.000</th>
                        <td>Keluar</td>
                        <td>{{ now() }}</td>
                        <td>20035</td>
                        <td>Mandiri</td>
                        <td>Keterangan</td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
