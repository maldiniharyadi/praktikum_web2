@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p>Tambah Data Mahasiswa</p>
                <form action="{{ Route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="">NPM</label>
                        <input type="text" name="npm" id="" class="form-control">
                        @error('npm')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="" class="form-control">
                        @error('nama')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" class="form-control">
                            <option value="">--Pilih Jurusan</option>
                            <option value="SI">SI</option>
                            <option value="TI">TI</option>
                        </select>
                        @error('jurusan')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="mt-4">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki-laki">
                            <label for="flexRadioDefault1" class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan">
                            <label for="flexRadioDefault2" class="form-check-label">Perempuan</label>
                        </div>
                        @error('gender')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="" class="form-control">
                                @error('tempat_lahir')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="" class="form-control">
                                @error('tanggal_lahir')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                            @error('alamat')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" name="foto">
                            @error('foto')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" id="">
                            </div>
                            @error('username')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="">
                            </div>
                            @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="float-end mt-4">
                        <a href="{{ Route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
