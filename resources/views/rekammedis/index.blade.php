@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <title>Data Rekam Medis</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <a href="{{ route('rekammedis.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">User</th>
                                        <th scope="col">No RM</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Keluhan</th>
                                        <th scope="col">Tanggal Pemeriksaan</th>
                                        <th scope="col">Diagnosa</th>
                                        <th scope="col">Tindakan</th>
                                        <th scope="col">Obat</th>
                                        <th scope="col">Resep</th>
                                        <th scope="col">Keterangan</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($rm as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->no_rm }}</td>
                                        <td>{{ $data->pasien->nm_pasien }}</td>
                                        <td>{{ $data->keluhan }}</td>
                                        <td>{{ $data->tgl_pemeriksaan }}</td>
                                        <td>{{ $data->diagnosa }}</td>
                                        <td>{{ $data->tindakan->nm_tindakan }}</td>
                                        <td>{{ $data->obat->nm_obat }}</td>
                                        <td>{{ $data->resep }}</td>
                                        <td>{{ $data->ket }}</td>
                                        <td>
                                        <a href="{{ route('rekammedis.edit', $data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
										<td>
                                            <a href="{{ route('rekammedis.show', $data->id) }}" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('rekammedis.destroy', $data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection