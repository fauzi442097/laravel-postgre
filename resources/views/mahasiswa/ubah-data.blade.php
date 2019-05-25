@extends('layout.master')

@section('title', 'Ubah')

@section('content')

<div class="row mt-3">
    <div class="col text-center">
        <h2 class="display-4 mb-0 bg-secondary"> Ubah Data Mahasiswa </h2>
    </div>
</div>

<div class="top-container mt-5 text-dark">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="POST">
                <input type="hidden" name="PUT" id="">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{$mhs->nim}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$mhs->nama}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Program Studi</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat">{{$mhs->alamat}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
