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
    <title>Data Kunjungan</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <a href="{{ route('kunjungan.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal Kunjungan</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Nama Poliklinik</th>
                                        <th scope="col">Jam Kunjungan</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($kjn as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->tgl_kunjungan }}</td>
                                        <td>{{ $data->pasien->nm_pasien }}</td>
                                        <td>{{ $data->poliklinik->nm_poli }}</td>
                                        <td>Pukul {{ $data->jam_kunjungan }} WIB</td>
                                        <td>
                                        <a href="{{ route('kunjungan.edit', $data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
										<td>
                                            <a href="{{ route('kunjungan.show', $data->id) }}" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('kunjungan.destroy', $data->id) }}" method="post">
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