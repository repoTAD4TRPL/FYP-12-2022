@extends('layout.store')

@section('content')

    <div class="content bg-white p-5">
        <div class="row">
            <div class="col-sm-12">
                <h4 class=""><i></i> Pilih Bank</h4>
            </div>
        </div>
        <hr>
        <div class="row py-3">
            <div class="col-md-4">
                <div class="bank-box p-2">
                    <div class="row">
                        <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                        <div class="col-10">
                            <img src="{{ asset('img/icon/bank/mandiri.png') }}" alt="">
                            <p>Bank Mandiri</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bank-box p-2">
                    <div class="row">
                        <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                        <div class="col-10">
                            <img src="{{ asset('img/icon/bank/cimb.png') }}" alt="">
                            <p>CIMB Niaga</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bank-box p-2">
                    <div class="row">
                        <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                        <div class="col-10">
                            <img src="{{ asset('img/icon/bank/danamon.png') }}" alt="">
                            <p>Bank Danamon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-4">
                <div class="bank-box p-2">
                    <div class="row">
                        <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px;"></i></a></div>
                        <div class="col-10">
                            <img src="{{ asset('img/icon/bank/bni.png') }}" alt="">
                            <p>Bank Negara Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bank-box p-2">
                    <div class="row">
                        <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                        <div class="col-10">
                            <img src="{{ asset('img/icon/bank/permata.png') }}" alt="">
                            <p>Bank Permata</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bank-box p-2">
                    <div class="row">
                        <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                        <div class="col-10">
                            <img src="{{ asset('img/icon/bank/bca.png') }}" alt="">
                            <p>Bank BCA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
