<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//VIEW
Route::get('/', 'IndexController@index');

//Mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/tambah', 'MahasiswaController@TambahData');
Route::get('/mahasiswa/ubah/{id}', 'MahasiswaController@UbahData');


//MataKuliah
Route::get('/matakuliah', 'MataKuliahController@index');
Route::get('/matakuliah/tambah', 'MataKuliahController@TambahData');
Route::get('/matakuliah/ubah/{kodemk}', 'MataKuliahController@UbahData');



//crud
//Mahasiswa
Route::post('/mahasiswa/tambah', 'MahasiswaController@TambahData');
Route::put('/mahasiswa/ubah/{nim}', 'MahasiswaController@UbahData');
Route::get('/mahasiswa/hapus/{nim}', 'MahasiswaController@DeleteData');

//MataKuliah
Route::post('/matakuliah/tambah', 'MataKuliahController@TambahData');
Route::put('/matakuliah/ubah/{kodemk}', 'MataKuliahController@UbahData');
