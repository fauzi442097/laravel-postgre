<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Requests\ValidasiDataMahasiswa;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    public static function index()
    {
        $mhs = Mahasiswa::all();
        return view('mahasiswa.index-mhs', compact('mhs'));
    }

    public function TambahData(Request $request)
    {
        
        if ($request->method() == "GET") {
            return view('mahasiswa.tambah-data');
        }
        //Validate data cari 1
        $request->validate([
            'nim' => 'required|digits:8|unique:Mahasiswa',
            'nama' => 'required|max:50',
            'jurusan' => 'required'
        ]);
        
        


        Mahasiswa::insert([
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
            'alamat' => $request->input('alamat')
        ]);
        
        
        return redirect('/')->with('status', 'Disimpan');
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

    public function DeleteData($nim)
    {        
        Mahasiswa::where('nim', $nim)->delete();
        return redirect('/')->with('status', 'Dihapus');
    }
    


}
