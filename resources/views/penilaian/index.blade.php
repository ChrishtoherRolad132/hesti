@extends('layouts.main')

@section('container')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hasil as $h => $k)
                    <tr>
                        <td>{{ $k[0] }}</td>
                        <td>{{ $k[1] }}</td>
                        <td>{{ $k[2] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection