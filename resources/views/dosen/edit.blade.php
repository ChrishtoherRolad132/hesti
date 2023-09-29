<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="card">
        <div class="card-header text-center">
            <h1>{{ $title }}</h1>
        </div>
        <div class="card-body">
            @foreach($data as $d)
            <form action="/data-dosen/{{ $d->nip }}/update" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" name="nama" value="{{ $d->nama }}" class="form-control" placeholder="Nama Dosen">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" value="{{ $d->jabatan }}" class="form-control" placeholder="Jabatan">
                </div>
                <div class="form-group">
                    <label>Unit Kerja</label>
                    <input type="text" name="unit_kerja" value="{{ $d->unit_kerja }}" class="form-control" placeholder="Unit Kerja">
                </div>
                <div class="form-group">
                    <label>Nilai SKP</label>
                    <input type="text" name="k1" value="{{ $d->k1 }}" class="form-control" placeholder="Nilai SKP">
                </div>
                <div class="form-group">
                    <label>Orientasi Pelayanan</label>
                    <input type="text" name="k2" value="{{ $d->k2 }}" class="form-control" placeholder="Orientasi Pelayanan">
                </div>
                <div class="form-group">
                    <label>Komitmen</label>
                    <input type="text" name="k3" value="{{ $d->k3 }}" class="form-control" placeholder="Komitmen">
                </div>
                <div class="form-group">
                    <label>Disiplin</label>
                    <input type="text" name="k4" value="{{ $d->k4 }}" class="form-control" placeholder="Disiplin">
                </div>
                <div class="form-group">
                    <label>Kerjasama</label>
                    <input type="text" name="k5" value="{{ $d->k5 }}" class="form-control" placeholder="Kerjasama">
                </div>
                <div class="form-group">
                    <label>Kepemimpinan</label>
                    <input type="text" name="k6" value="{{ $d->k6 }}" class="form-control" placeholder="Kepemimpinan">
                </div>
                <div class="form-group">
                    <label>Integritas</label>
                    <input type="text" name="k7" value="{{ $d->k7 }}" class="form-control" placeholder="Integritas">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Update</button>
                <a href="/data-dosen" class="btn btn-secondary mt-2">Back</a>
            </form>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>