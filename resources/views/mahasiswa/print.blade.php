@extends('layouts.print')
@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive mt-4">
                    <div class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>NPM</td>
                                <td>Jurusan</td>
                                <td> Tempat , Tanggal Lahir</td>
                            </tr>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mhs->user->nama }}</td>
                                    <td>{{ $mhs->npm }}</td>
                                    <td>{{ $mhs->jurusan }}</td>
                                    <td>{{ $mhs->tempat_lahir }},
                                        {{ Carbon\carbon::parse($mhs->tanggal_lahir)->format('d-m-Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        </thead>
                    </div>
                </div>
            </div>
        </div>
    </div>
