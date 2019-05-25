@extends('layout.master')

@section('title', 'Tambah')


@section('content')

<div class="row mt-3">
    <div class="col text-center">
        <h2 class="display-4 mb-0 bg-secondary"> Tambah Data Mata Kuliah </h2>
    </div>
</div>

<div class="top-container mt-5 text-dark">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif --}}
        <form action="" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" class="form-control" id="kode_mk" name="kode_mk" value="{{$kode_mk}}">
            </div>
            <div class="form-group">
                <label for="nama_mk">Mata Kuliah</label>
                <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama_mk"
                    name="nama_mk">
                @error('nama_mk')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select class="form-control" id="semester" name="semester">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jml_sks">Jumlah SKS</label>
                <select class="form-control" id="jml_sks" name="jml_sks">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

@endsection
