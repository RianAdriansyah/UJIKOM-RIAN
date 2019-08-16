    @extends('layouts.app')

    @section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Data | Dokter</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">Tambah Data Dokter</div>
                        <div class="card-body">
                        <form action="{{ route('dokter.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Kode Dokter</label>
                                    <input type="text" name="kd_dokter" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Dokter</label>
                                    <input type="text" name="nm_dokter" class="form-control" required>
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
                                        <label for="">SIP</label>
                                        <input type="text" name="sip" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Kunjungan</label>
                                            <select name="kunjungan_id" class="form-control" required>
                                                @foreach ($kjn as $data)
                                                    <option value="{{ $data->id }}">{{ $data->tgl_kunjungan }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="text" name="no_tlp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" cols="30" rows="5" class="form-control"></textarea>
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