<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mata_Kuliah;


class MataKuliahController extends Controller
{
    
    public function index(Mata_Kuliah $matkul)
    {
        $data = $matkul->all();
        return view('mata_kuliah.index-matkul', compact("data", "pk"));
    }

    public function TambahData(Request $request, Mata_Kuliah $matkul)
    {
        
        if ($request->method() == "GET") {
            $pk = $matkul->select('kode_mk')->orderBy('kode_mk', 'desc')->first();
            return view('matakuliah.tambah-data', compact("pk"));
        }
        //Validate data cari 1
        $request->validate([
            'kode_mk' => 'required|digits:6|unique:Mata_Kuliah',
            'nama_mk' => 'required|max:50',
            'semester' => 'required|integer|max:2',
            'jml_sks' => 'required|integer|max:2'
        ]);    
        

        $matkul->insert([
            'kode_mk' => $request->input('kode_mk'),
            'nama_mk' => $request->input('nama_mk'),
            'semester' => $request->input('semester'),
            'jml_sks' => $request->input('jml_sks')
        ]);
        
        
        return redirect('/matakuliah')->with('status', 'Disimpan');
    }

    public function UbahData(Request $request, $nim)
    {
        if ($request->method() == "GET") {
            $mhs = Mahasiswa::where('nim',$nim)->first();
            return view('mahasiswa.ubah-data', compact('mhs'));
        }
        
        Mahasiswa::where('nim', $nim)->update([
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
            'alamat' => $request->input('alamat')
        ]);

        // DB::table('Mahasiswa')->where('nim',$nim)->update([
        //     'nama' => $request->input('nama'),
        //     'jurusan' => $request->input('jurusan'),
        //     'alamat' => $request->input('alamat')
        // ]);
        
        return redirect('/')->with('status', 'Diperbaharui');
    }

}
