@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data | Obat</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Edit Data Obat</div>
                    <div class="card-body">
                    <form action="{{ route('obat.update', $obat->id) }}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Obat</label>
                            <input type="text" name="kd_obat" class="form-control" value="{{ $obat->kd_obat }}">
                                </div>
                            <div class="form-group">
                                <label for="">Nama Obat</label>
                                <input type="text" name="nm_obat" class="form-control" value="{{ $obat->nm_obat }}">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Obat</label>
                                <input type="number" name="jml_obat" class="form-control" value="{{ $obat->jml_obat }}">
                            </div>
                            <div class="form-group">
                                <label for="">Ukuran Obat</label>
                                <input type="text" name="ukuran" class="form-control" value="{{ $obat->ukuran }}">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Obat</label>
                                <input type="number" name="harga" class="form-control" value="{{ $obat->harga }}">
                            </div>
        
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('obat.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection