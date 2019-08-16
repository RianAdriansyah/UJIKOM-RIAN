@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data | Dokter</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Show Data Dokter</div>
                    <div class="card-body">
                    <form action="{{ route('dokter.show', $dokter->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Dokter</label>
                            <input type="text" name="kd_dokter" class="form-control" disabled value="{{ $dokter->kd_dokter }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Dokter</label>
                                <input type="text" name="nm_dokter" class="form-control" disabled value="{{ $dokter->nm_dokter }}">
                            </div>
                                <div class="form-group">
                                    <label for="">Nama Poliklinik</label>
                                <input type="text" name="nm_poli" class="form-control" disabled value="{{ $dokter->poliklinik->nm_poli }}">
                                </div>
                                <div class="form-group">
                                    <label for="">SIP</label>
                                    <input type="text" name="sip" class="form-control" disabled value="{{ $dokter->sip }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Kunjungan</label>
                                <input type="text" name="tgl_kunjungan" class="form-control" disabled value="{{ $dokter->kunjungan->tgl_kunjungan }}">
                                </div>
                                <div class="form-group">
                                    <label for="">No Telpon</label>
                                    <input type="text" name="no_tlp" class="form-control" disabled value="{{ $dokter->no_tlp }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" disabled value="{{ $dokter->tempat_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                <textarea name="alamat" cols="30" rows="5" class="form-control" disabled>{{ $dokter->alamat }}</textarea>
                                </div>
        
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('dokter.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection