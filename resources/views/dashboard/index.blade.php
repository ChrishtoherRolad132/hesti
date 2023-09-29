@extends('layouts.main')

@section('container')
<div class="card">
    <div class="card-header text-center">
        <h1>SISTEM PENDUKUNG KEPUTUSAN PENENTUAN DOSEN BERPRESTASI MENGGUNAKAN METODE SIMPLE ADDATIVE WEIGHTING</h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Dosen</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dosen }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection