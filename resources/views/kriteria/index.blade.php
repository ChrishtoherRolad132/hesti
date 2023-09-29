@extends('layouts.main')

@section('container')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Kriteria</th>
                        <th>Kriteria</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kriteria as $k)
                    <tr>
                        <td>{{ $k->kd_kriteria }}</td>
                        <td>{{ $k->kriteria }}</td>
                        <td>{{ $k->nilai }}</td>
                        <td>
                            <a href="/data-kriteria/{{ $k->kd_kriteria }}/edit"><i class="fa fa-search text-success"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection