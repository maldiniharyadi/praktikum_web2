@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p>Tambah Data Mahasiswa</p>
                <form action="{{ Route('mahasiswa.store') }}" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="">NPM</label>
                        <input type="text" name="npm" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Jurusan</label>
                        <select name="jurusan" id="" class="form-control">
                            <option value="">--Pilih Jurusan</option>
                            <option value="SI">SI</option>
                            <option value="TI">TI</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <a href="{{ Route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
