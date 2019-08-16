@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data | Lab</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Edit Data lab</div>
                    <div class="card-body">
                    <form action="{{ route('lab.update', $lab->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="">Rekam Medis</label>
                                <select name="rm_id" class="form-control" required>
                                    @foreach ($rm as $data)
                                <option value="{{ $data->id }}">{{ $data->pasien->nm_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Obat</label>
                                <select name="obat_id" class="form-control" required>
                                    @foreach ($obat as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_obat }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Hasil Lab</label>
                            <textarea name="hasil_lab" cols="30" rows="5" class="form-control">{{ $lab->hasil_lab }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                            <textarea name="ket" cols="30" rows="5" class="form-control">{{ $lab->ket }}</textarea>
                            </div>
        
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('lab.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection