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
}
