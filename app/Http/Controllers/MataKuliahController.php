<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mata_Kuliah;


class MataKuliahController extends Controller
{
    
    public function index(Mata_Kuliah $matkul)
    {
        $data = $matkul->all();
        return view('mata_kuliah.index-matkul', compact("data"));
    }

    public function TambahData(Request $request, Mata_Kuliah $matkul)
    {
            
        if ($request->method() == "GET") {
            $pk = $matkul->select('kode_mk')->orderBy('kode_mk', 'desc')->first();
            $kode = (int)substr($pk->kode_mk,2) + 1;
            $no_kode = strlen($kode);
            switch (strlen($no_kode)) {
                case 1: $kode_mk = "MK000".$kode; break;
                case 2: $kode_mk = "MK00".$kode; break;
                case 3: $kode_mk = "MK0".$kode; break;
                case 4: $kode_mk = "MK".$kode; break;
            }
            return view('mata_kuliah.tambah-data', compact("kode_mk"));
        }
        //Validate data cari 1
        $request->validate([
            'nama_mk' => 'required|max:50',
            'semester' => 'required|integer|max:2',
            'jml_sks' => 'required|integer'
        ]);    
        
        

        $matkul->insert([
            'kode_mk' => $request->input('kode_mk'),
            'nama_mk' => $request->input('nama_mk'),
            'semester' => $request->input('semester'),
            'jml_sks' => $request->input('jml_sks')
        ]);
        
        
        return redirect('/matakuliah')->with('status', 'Disimpan');
    }

    public function UbahData(Request $request, $kode_mk, Mata_Kuliah $matkul)
    {
        if ($request->method() == "GET") {
            $data = $matkul->where('kode_mk', $kode_mk)->first();
            return view('mata_kuliah.ubah-data', compact('data'));
        }
        
        //Validate data cari 1
        $request->validate([
            'nama_mk' => 'required|max:50',
            'semester' => 'required|integer|max:2',
            'jml_sks' => 'required|integer'
        ]); 

        $matkul->where('kode_mk', $kode_mk)->update([
            'nama_mk' => $request->input('nama_mk'),
            'semester' => $request->input('semester'),
            'jml_sks' => $request->input('jml_sks')
        ]);

        return redirect('/matakuliah')->with('status', 'Diperbaharui');
    }

}
