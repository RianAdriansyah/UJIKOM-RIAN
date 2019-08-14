@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data | Tindakan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Tambah Data Tindakan</div>
                    <div class="card-body">
                    <form action="{{ route('tindakan.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Tindakan</label>
                                <input type="text" name="kd_tindakans" class="form-control" required>
                                </div>
                            <div class="form-group">
                                <label for="">Nama Tindakan</label>
                                <input type="text" name="nm_tindakan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea name="ket" class="form-control" 
                                cols="30" rows="5"></textarea>
                            </div>
        
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('poliklinik.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection