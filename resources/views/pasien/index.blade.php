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
    <title>Data Pasien</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <a href="{{ route('pasien.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Pasien</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Agama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Usia</th>
                                        <th scope="col">No Telpon</th>
                                        <th scope="col">No KK</th>
                                        <th scope="col">Hub. Keluarga</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($pasien as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->no_pasien }}</td>
                                        <td>{{ $data->nm_pasien }}</td>
                                        <td>{{ $data->jk }}</td>
                                        <td>{{ $data->agama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->usia }} Tahun</td>
                                        <td>{{ $data->no_tlp }}</td>
                                        <td>{{ $data->nm_kk }}</td>
                                        <td>{{ $data->hub_kel }}</td>
                                        <td>
                                        <a href="{{ route('pasien.edit', $data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
										<td>
                                            <a href="{{ route('pasien.show', $data->id) }}" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('pasien.destroy', $data->id) }}" method="post">
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