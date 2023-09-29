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
            <form action="/data-kriteria/{{ $d->kd_kriteria }}/update" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label>Kode Kriteria</label>
                    <input type="text" name="kd_kriteria" value="{{ $d->kd_kriteria }}" class="form-control" placeholder="Kode Kriteria" readonly>
                </div>
                <div class="form-group">
                    <label>Kriteria</label>
                    <input type="text" name="kriteria" value="{{ $d->kriteria }}" class="form-control" placeholder="Kriteria" readonly>
                </div>
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" name="nilai" value="{{ $d->nilai }}" class="form-control" placeholder="Nilai">
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