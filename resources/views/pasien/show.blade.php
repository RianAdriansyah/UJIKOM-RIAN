@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data | Pasien</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Show Data Pasien</div>
                    <div class="card-body">
                    <form action="{{ route('pasien.show', $pasien->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">No Pasien</label>
                            <input type="text" name="no_pasien" class="form-control" value="{{ $pasien->no_pasien }}" disabled>
                                </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label>
                                <input type="text" name="nm_pasien" class="form-control" value="{{ $pasien->nm_pasien }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control" value="{{ $pasien->jk }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <input type="text" name="agama" class="form-control" value="{{ $pasien->agama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" cols="30" rows="5" class="form-control" disabled>{{ $pasien->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="{{ $pasien->tgl_lahir }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Usia</label>
                                <input type="number" name="usia" class="form-control" value="{{ $pasien->usia }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">No Telpon</label>
                                <input type="text" name="no_tlp" class="form-control" value="{{ $pasien->no_tlp }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">No KK</label>
                                <input type="text" name="nm_kk" class="form-control" value="{{ $pasien->nm_kk }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Hub. Keluarga</label>
                                <input type="text" name="hub_kel" class="form-control" value="{{ $pasien->hub_kel }}" disabled>
                            </div>
        
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" class="btn btn-md btn-warning" 
                            href="{{ route('pasien.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection