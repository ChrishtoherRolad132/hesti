@extends('layouts.main')

@section('container')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Unit Kerja</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dosen as $d)
                    <tr>
                        <td>{{ $d->nip }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->jabatan }}</td>
                        <td>{{ $d->unit_kerja }}</td>
                        <td>
                            <a href="/data-dosen/{{ $d->nip }}/hapus"><i class="fa fa-trash text-danger"></i></a>
                            <a href="/data-dosen/{{ $d->nip }}/edit"><i class="fa fa-search text-success"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/data-dosen/tambah" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" placeholder="NIP">
                    </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Dosen">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Unit Kerja</label>
                        <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja">
                    </div>
                    <div class="form-group">
                        <label>Nilai SKP</label>
                        <input type="text" name="k1" class="form-control" placeholder="Nilai SKP">
                    </div>
                    <div class="form-group">
                        <label>Orientasi Pelayanan</label>
                        <input type="text" name="k2" class="form-control" placeholder="Orientasi Pelayanan">
                    </div>
                    <div class="form-group">
                        <label>Komitmen</label>
                        <input type="text" name="k3" class="form-control" placeholder="Komitmen">
                    </div>
                    <div class="form-group">
                        <label>Disiplin</label>
                        <input type="text" name="k4" class="form-control" placeholder="Disiplin">
                    </div>
                    <div class="form-group">
                        <label>Kerjasama</label>
                        <input type="text" name="k5" class="form-control" placeholder="Kerjasama">
                    </div>
                    <div class="form-group">
                        <label>Kepemimpinan</label>
                        <input type="text" name="k6" class="form-control" placeholder="Kepemimpinan">
                    </div>
                    <div class="form-group">
                        <label>Integritas</label>
                        <input type="text" name="k7" class="form-control" placeholder="Integritas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection