<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Http\Requests\ValidasiDataMahasiswa;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    protected $mahasiswa;

    public function __construct(Mahasiswa $mhs)
    {
        $this->mahasiswa = $mhs;
    }

    public function index()
    {
        $mhs = $this->mahasiswa->all();
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
        

        $this->mahasiswa->insert([
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
            'alamat' => $request->input('alamat')
        ]);
        
        
        return redirect('/mahasiswa')->with('status', 'Disimpan');
    }

    public function UbahData(Request $request, $nim)
    {
        if ($request->method() == "GET") {
            $mhs = $this->mahasiswa->where('nim',$nim)->first();
            return view('mahasiswa.ubah-data', compact('mhs'));
        }
        
        $this->mahasiswa->where('nim', $nim)->update([
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
            'alamat' => $request->input('alamat')
        ]);
        
        return redirect('/mahasiswa')->with('status', 'Diperbaharui');
    }

    public function DeleteData($nim)
    {        
        $this->mahasiswa->where('nim', $nim)->delete();
        return redirect('/mahasiswa')->with('status', 'Dihapus');
    }
    


}
