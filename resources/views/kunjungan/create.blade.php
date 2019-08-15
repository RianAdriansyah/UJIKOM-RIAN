@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data | Kunjungan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Tambah Data Kunjungan</div>
                    <div class="card-body">
                    <form action="{{ route('kunjungan.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Tanggal Kunjungan</label>
                                <input type="date" name="tgl_kunjungan" class="form-control" required>
                                </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label>
                                <select name="pasien_id" class="form-control" required>
                                    @foreach ($pasien as $data)
                                <option value="{{ $data->id }}">{{ $data->nm_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Poliklinik</label>
                                <select name="poli_id" class="form-control" required>
                                    @foreach ($poli as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_poli }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jam Kunjungan</label>
                                <input type="time" name="jam_kunjungan" class="form-control" required>
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