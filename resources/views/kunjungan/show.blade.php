@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data | Kunjungan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Show Data Kunjungan</div>
                    <div class="card-body">
                    <form action="{{ route('kunjungan.show', $kjn->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Tanggal Kunjungan</label>
                                <input type="date" name="tgl_kunjungan" class="form-control" value="{{ $kjn->tgl_kunjungan }}" disabled>
                                </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label>
                            <input type="text" class="form-control" value="{{ $kjn->pasien->nm_pasien }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Poliklinik</label>
                                <input type="text" class="form-control" value="{{ $kjn->poliklinik->nm_poli }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Kunjungan</label>
                                <input type="time" name="jam_kunjungan" class="form-control" value="{{ $kjn->jam_kunjungan }}" disabled>
                            </div>
        
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('kunjungan.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection