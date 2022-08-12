@extends('layout.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Request Penjual</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Request Penjual</li>
        </ol>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Request Penjual
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Resort</th>
                                    <th>Email</th>
                                    <th>Status Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Resort Medan 1 Teladan</td>
                                    <td>medan1teladan@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-success">Disetujui</a></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-gear"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Resort Medan Kota</td>
                                    <td>medankota@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-warning">Pending</a></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-gear"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Resort Medan IV</td>
                                    <td>medan4@gmail.com</td>
                                    <td class="text-center"><a href="" class="btn btn-danger">Disetujui</a></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-gear"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
