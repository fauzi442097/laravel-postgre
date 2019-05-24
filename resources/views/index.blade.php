@extends('layout.master')

@section('title', 'Index')


@section('content')
<div class="row mt-3 justify-content-center">
    <div class="jumbotron bg-dark">
        <h1 class="display-4">Hello, selamat datang!</h1>
        <p class="lead">Ini adalah aplikasi sederhana pengelolaan data menggunakan database
            PostgreSQL</p>
        <hr class="my-4">
        <p>Kedepannya aplikasi ini akan menggunakan API untuk tambahan informasi terkait data yang
            diolah.</p>
    </div>
</div>
@endsection
