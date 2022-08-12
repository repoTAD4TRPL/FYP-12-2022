@extends('layout.store')

@section('content')

<div class="content bg-white p-4">
    <div class="row">
        <div class="col-sm-6">
            <h4 class=""><i></i> Pengaturan Rekening</h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div>
                Rekening Bank (2)
            </div>
            <div class="row my-3">
                <div class="col-1">
                    <img class="p-2" width="50px" height="45px" src="{{ asset('img/icon/bank/img_bankid_bri.png') }}" alt="">
                </div>
                <div class="col-9">
                    <h5>Bank BRI</h5>
                    <span style="font-size: 0.9em;">100056829022</span>
                </div>
                <div class="col-2 text-right">
                    <a href="" class="btn btn-light"><i class="fa fa-edit"></i> Edit</a>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-1">
                    <img class="p-2" width="50px" height="45px" src="{{ asset('img/icon/bank/img_bankid_bca.png') }}" alt="">
                </div>
                <div class="col-9">
                    <h5>Bank BCA</h5>
                    <span style="font-size: 0.9em;">100056829031</span>
                </div>
                <div class="col-2 text-right">
                    <a href="" class="btn btn-light"><i class="fa fa-edit"></i> Edit</a>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12 text-center"><a href="{{ route('payment.add-credit-card') }}" style="color: black"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Tambah Rekening</a></div>
            </div>
            <hr>
            <div class="row my-4">
                <div class="col-6">COD</div>
                <div class="col-6 text-right">
                    <!-- Rounded switch -->
                    <label class="switch m-2">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <hr>
            <div class="row my-4">
                <div class="col-6">Pay Later</div>
                <div class="col-6 text-right">
                    <!-- Rounded switch -->
                    <label class="switch m-2">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
