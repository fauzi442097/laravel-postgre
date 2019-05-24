<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class IndexController extends Controller
{
    //
    public static function index()
    {
        
        return view('index');
    }
}
