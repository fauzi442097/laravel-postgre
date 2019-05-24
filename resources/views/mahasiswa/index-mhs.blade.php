@extends('layout.master')

@section('title', 'Mahasiswa')


@section('content')

<div class="row mt-3">
    <div class="col text-center">
        <h2 class="display-4 mb-0 bg-secondary"> Kelola Data Mahasiswa </h2>
    </div>
</div>

<div class="top-container mt-5">

    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data mahasiswa <strong> berhasil </strong> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    <a class="btn btn-primary mb-2" href="/mahasiswa/tambah">Tambah Data</a>
    <table class="table table-hover table-responsive-lg">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Alamat</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mhs as $index => $m)
            <tr>
                <td>{{++$index}}</td>
                <td>{{$m->nim}}</td>
                <td>{{$m->nama}}</td>
                <td>{{$m->jurusan}}</td>
                <td>{{$m->alamat}}</td>
                <td class="text-center">
                    <a href="/mahasiswa/ubah/{{$m->nim}}" class="btn btn-primary mr-3" title="Edit">
                        <span class="fas fa-pen"></span>
                    </a>
                    <a href="/mahasiswa/hapus/{{$m->nim}}" class="btn btn-danger" title="Hapus"
                        onclick="return confirm('Hapus data mahasiswa ini?');">
                        <span class="fas fa-trash"></span>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td>Data tidak ditemukan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
