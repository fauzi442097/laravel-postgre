@extends('layout.master')

@section('title', 'Mata Kuliah')


@section('content')

<div class="row mt-3">
    <div class="col text-center">
        <h2 class="display-4 mb-0 bg-secondary"> Kelola Data Mata Kuliah </h2>
    </div>
</div>

<div class="top-container mt-5">

    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Mata Kuliah <strong> berhasil </strong> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    <a class="btn btn-primary mb-2" href="/matakuliah/tambah">Tambah Data</a>
    <table class="table table-hover table-responsive-lg">
        <thead>
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">Kode MK</th>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Semester</th>
                <th scope="col" class="text-center">Jml SKS</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $index => $mk)
            <tr>
                <td class="text-center">{{++$index}}</td>
                <td class="text-center">{{$mk->kode_mk}}</td>
                <td>{{$mk->nama_mk}}</td>
                <td class="text-center">{{$mk->semester}}</td>
                <td class="text-center">{{$mk->jml_sks}}</td>
                <td class="text-center">
                    <a href="/matakuliah/ubah/{{$mk->kode_mk}}" class="btn btn-primary mr-3" title="Edit">
                        <span class="fas fa-pen"></span>
                    </a>
                    {{-- <a href="/mata_kuliah/hapus/{{$mk->kode_mk}}" class="btn btn-danger" title="Hapus"
                    onclick="return confirm('Hapus mata kuliah ini?');">
                    <span class="fas fa-trash"></span>
                    </a> --}}
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
