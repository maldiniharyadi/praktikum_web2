@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="row">
                    <div class="col-md">
                        <p>Data Mahasiswa</p>
                    </div>
                    <div class="col-md text-right">
                        <form action="{{ route('mahasiswa.search') }}">
                            <div class="form-group">
                                <input type="text" name="keyword" id="" class="form-control"
                                    placeholder="Cari berdasarkan NPM" value="{{ old('keyword') }}">
                            </div>
                        </form>
                    </div>
                    <div class="col-md">
                        <div class="float-end">
                            <a href="{{ Route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data</a>
                            <a href="{{ Route('mahasiswa.print') }}" class="btn btn-primary" target="_blank">Cetak Data</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NPM</td>
                                <td>Jurusan</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mahasiswa)
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mahasiswa->user->nama }}</td>
                                <td>{{ $mahasiswa->npm }}</td>
                                <td>{{ $mahasiswa->jurusan }}</td>
                                <td>{{ $mahasiswa->tempat_lahir }},
                                    {{ Carbon\carbon::parse($mahasiswa->tanggal_lahir->format('d-m-Y')) }}</td>
                                <td>
                                    <form action="{{ route('mahasiswa.delete', $mahasiswa->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                                            class="btn btn-sm btn-primary"> Detail Data</a>
                                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                                            class="btn btn-sm btn-info">
                                            Edit Data</a>
                                    </form>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
