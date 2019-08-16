@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data | Dokter</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Edit Data Dokter</div>
                    <div class="card-body">
                    <form action="{{ route('dokter.update', $dokter->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Dokter</label>
                            <input type="text" name="kd_dokter" class="form-control" value="{{ $dokter->kd_dokter }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Dokter</label>
                                <input type="text" name="nm_dokter" class="form-control" value="{{ $dokter->nm_dokter }}">
                            </div>
                                <div class="form-group">
                                    <label for="">Nama Poliklinik</label>
                                    <select name="poli_id" class="form-control">
                                        @foreach ($poli as $data)
                                        <option value="{{ $data->id }}">{{ $data->nm_poli }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">SIP</label>
                                    <input type="text" name="sip" class="form-control" value="{{ $dokter->sip }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Kunjungan</label>
                                        <select name="kunjungan_id" class="form-control">
                                            @foreach ($kjn as $data)
                                                <option value="{{ $data->id }}">{{ $data->tgl_kunjungan }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="">No Telpon</label>
                                    <input type="text" name="no_tlp" class="form-control" value="{{ $dokter->no_tlp }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{ $dokter->tempat_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                <textarea name="alamat" cols="30" rows="5" class="form-control">{{ $dokter->alamat }}</textarea>
                                </div>
        
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
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