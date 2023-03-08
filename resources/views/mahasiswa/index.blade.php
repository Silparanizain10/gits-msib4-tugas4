@extends('mahasiswa.layout')
@section('content')

    <div class="container border p-3 bg-secondary">
        <div class="row">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h2><center> Data Mahasiswa</center></h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection