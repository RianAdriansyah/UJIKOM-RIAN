@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data | Rekam Medis</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Show Data Rekam Medis</div>
                    <div class="card-body">
                    <form action="{{ route('rekammedis.show', $rm->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">No RM</label>
                                <input type="text" name="no_rm" class="form-control" value="{{ $rm->no_rm }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label>
                                <input type="text" name="pasien_id" class="form-control" value="{{ $rm->pasien->nm_pasien }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control" value="{{ $rm->keluhan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pemeriksaan</label>
                                <input type="date" name="tgl_pemeriksaan" class="form-control" value="{{ $rm->tgl_pemeriksaan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">diagnosa</label>
                                <input type="text" name="diagnosa" class="form-control" value="{{ $rm->diagnosa }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Tindakan</label>
                            <input type="text" name="tindakan_id" class="form-control" value="{{ $rm->tindakan->nm_tindakan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Obat</label>
                            <input type="text" name="obat_id" class="form-control" value="{{ $rm->obat->nm_obat }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="">Resep</label>
                            <textarea name="resep" id="" cols="30" rows="5" class="form-control" disabled>{{ $rm->resep }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Ket</label>
                            <textarea name="ket" id="" cols="30" rows="5" class="form-control" disabled>{{ $rm->ket }}</textarea>
                            </div>
        
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('rekammedis.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection