<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <div class="postition-fixed">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Laravel-Postgre</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
    </div>

    <div class="container-fluid text-white">

        <div class="row">

            <div class="col-md-3 bg-dark">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-dark">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>

            <div class="col bg-white">
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
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{$mhs->nama}}">
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
                                    <textarea class="form-control" id="alamat" rows="3"
                                        name="alamat">{{$mhs->alamat}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</body>

</html>
