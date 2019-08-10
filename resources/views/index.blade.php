@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Poliklinik</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <a href="#" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Poliklinik</th>
                                        <th scope="col">Nama Poliklinik</th>
                                        <th scope="col">Lantai</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($poli as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kd_poli }}</td>
                                        <td>{{ $data->nm_poli }}</td>
                                        <td>{{ $data->lantai }}</td>
                                        <td>
                                            <a href="#" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
										<td>
                                            <a href="#" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="#" method="post">
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