@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data | Rekam Medis</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Edit Data Rekam Medis</div>
                    <div class="card-body">
                    <form action="{{ route('rekammedis.update', $rm->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="">No RM</label>
                            <input type="text" name="no_rm" class="form-control" value="{{ $rm->no_rm }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label>
                                <select name="pasien_id" class="form-control" >
                                    @foreach ($pasien as $data)
                                <option value="{{ $data->id }}">{{ $data->nm_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control" value="{{ $rm->keluhan }}">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pemeriksaan</label>
                                <input type="date" name="tgl_pemeriksaan" class="form-control" value="{{ $rm->tgl_pemeriksaan }}">
                            </div>
                            <div class="form-group">
                                <label for="">diagnosa</label>
                                <input type="text" name="diagnosa" class="form-control" value="{{ $rm->diagnosa }}">
                            </div>
                            <div class="form-group">
                                <label for="">Tindakan</label>
                                <select name="tindakan_id" class="form-control" >
                                    @foreach ($tdk as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_tindakan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Obat</label>
                                <select name="obat_id" class="form-control" >
                                    @foreach ($obat as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_obat }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Resep</label>
                            <textarea name="resep" id="" cols="30" rows="5" class="form-control">{{ $rm->resep }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Ket</label>
                            <textarea name="ket" id="" cols="30" rows="5" class="form-control">{{ $rm->ket }}</textarea>
                            </div>
        
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
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