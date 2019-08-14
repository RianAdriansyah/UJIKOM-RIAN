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
    <title>Data Obat</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <a href="{{ route('obat.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Obat</th>
                                        <th scope="col">Nama Obat</th>
                                        <th scope="col">Jumlah Obat</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Harga</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($obat as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kd_obat }}</td>
                                        <td>{{ $data->nm_obat }}</td>
                                        <td>{{ $data->jml_obat }} Buah</td>
                                        <td>{{ $data->ukuran }}</td>
                                        <td>Rp.{{ $data->harga }}</td>
                                        <td>
                                        <a href="{{ route('obat.edit', $data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
										<td>
                                            <a href="{{ route('obat.show', $data->id) }}" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('obat.destroy', $data->id) }}" method="post">
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