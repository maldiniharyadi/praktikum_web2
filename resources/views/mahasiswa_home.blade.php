@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="text-center">
                            <p>Foto Mahasiswa</p>
                            <img src="{{ asset('storage/foto' . Auth::user()->mahasiswa->foto) }}" alt=""
                                width="100%">
                        </div>
                    </div>
                    <div class="col-md">
                        <h2>Selamat Datang Mahasiswa :
                            <span class="text-primary">{{ $userLoggedIn->nama }}</span>
                        </h2>
                        <table class="table">
                            <tr>
                                <td width="20%">NPM</td>
                                <td with="3%">:</td>
                                <td>{{ Auth::user()->mahasiswa->npm }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Jurusan</td>
                                <td with="3%">:</td>
                                <td>{{ Auth::user()->mahasiswa->jurusan }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Gender</td>
                                <td with="3%">:</td>
                                <td>{{ Auth::user()->mahasiswa->gender }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Tempat, Tanggal Lahir</td>
                                <td with="3%">:</td>
                                <td>{{ Auth::user()->mahasiswa->tempat_lahir }},
                                    {{ Carbon\carbon::parse($mahasiswa->tanggal_lahir->format('d-m-Y')) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
