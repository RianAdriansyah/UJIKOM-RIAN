@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $poli->nm_poli }} &mdash; Poliklinik</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Edit Data Poliklinik</div>
                    <div class="card-body">
                    <form action="{{ route('poliklinik.show', $poli->id ) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Poliklinik</label>
                            <input type="text" name="kd_poli" class="form-control" value="{{ $poli->kd_poli }}" disabled>
                                </div>
                            <div class="form-group">
                                <label for="">Nama Poliklinik</label>
                                <input type="text" name="nm_poli" class="form-control" value="{{ $poli->nm_poli }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Lantai</label>
                                <input type="text" name="lantai" class="form-control" value="{{ $poli->lantai }}" disabled>
                            </div>
        
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