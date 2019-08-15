@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data | Pasien</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Edit Data Pasien</div>
                    <div class="card-body">
                    <form action="{{ route('pasien.update', $pasien->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="">No Pasien</label>
                            <input type="text" name="no_pasien" class="form-control" value="{{ $pasien->no_pasien }}">
                                </div>
                            <div class="form-group">
                                <label for="">Nama Pasien</label>
                                <input type="text" name="nm_pasien" class="form-control" value="{{ $pasien->nm_pasien }}">
                            </div>
                            <div class="form-group">
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="text" class="form-control" value="{{ $pasien->jk }}" disabled><br>
                                    <input type="radio" name="jk" value="Laki Laki">Laki Laki
                                    <input type="radio" name="jk" value="Perempuan">Perempuan
                                    <input type="radio" name="jk" value="Netral">Netral
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama" class="form-control">
                                    <option value="{{ $pasien->agama }}">{{ $pasien->agama }}</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Sunda Wiwitan">Sunda Wiwitan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" cols="30" rows="5" class="form-control">{{ $pasien->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="{{ $pasien->tgl_lahir }}">
                            </div>
                            <div class="form-group">
                                <label for="">Usia</label>
                                <input type="number" name="usia" class="form-control" value="{{ $pasien->usia }}">
                            </div>
                            <div class="form-group">
                                <label for="">No Telpon</label>
                                <input type="text" name="no_tlp" class="form-control" value="{{ $pasien->no_tlp }}">
                            </div>
                            <div class="form-group">
                                <label for="">No KK</label>
                                <input type="text" name="nm_kk" class="form-control" value="{{ $pasien->nm_kk }}">
                            </div>
                            <div class="form-group">
                                <label for="">Hub. Keluarga</label>
                                <input type="text" name="hub_kel" class="form-control" value="{{ $pasien->hub_kel }}">
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