@extends('layout.store')

@section('content')
<form action="{{ route('store.auction.add-post') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="content mb-5 p-4" style="background: #ffffff">
        <div class="row">
            <div class="col-12">
                <h5 class="" style="font-weight: bold">Informasi Produk</h5>
                <hr>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-3 text-right">
                <h5>Foto Produk</h5>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_utama" required/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">* Foto Utama</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_1"/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 1</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_2" />
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 2</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_3"/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 3</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_4"/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 4</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_5"/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 5</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_6"/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 6</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_7"/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 7</h5>
                    </div>
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="foto_8" />
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Foto 8</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-3 text-right">
                <h5>Video Produk</h5>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-2 mb-4 text-center">
                        <div class="wrapper">
                            <div class="file-upload">
                              <input type="file" name="video_produk"/>
                              <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <h5 style="font-size: 15px">Video Produk</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-3 text-right">
                <h5>* Nama Produk</h5>
            </div>
            <div class="col-sm-9">
                <input name="nama_produk" type="text" class="form-control" value="" required>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-3 text-right">
                <h5>* Harga Awal</h5>
            </div>
            <div class="col-sm-9">
                <input name="harga_produk" type="number" class="form-control" value="" required>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-3 text-right">
                <h5>* Deskripsi Produk</h5>
            </div>
            <div class="col-sm-9">
                <textarea name="deskripsi_produk" id="editor" style="height: 400px" required>

                </textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
            </div>
        </div>
    </div>
    <div class="content bg-white p-3 my-4">
        <div class="row">
            <div class="col-sm-6">
                <h4 class=""><i></i> Pengaturan Lelang </h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12 deskripsi-produk">
                <table>
                    <tr>
                        <td style="padding: 10px 20px">Waktu Lelang Dimulai</td>
                        <td style="padding: 10px 20px"><input type="datetime-local" class="form-control" name="lelang_mulai" id=""></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 20px">Waktu Lelang Selesai</td>
                        <td style="padding: 10px 20px"><input type="datetime-local" class="form-control" name="lelang_selesai" id=""></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 text-right">
            <button type="submit" class="btn btn-primary w-25">Simpan</button>
        </div>
    </div>
</form>
@endsection
