<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata_Kuliah extends Model
{
    protected $table = 'Mata_Kuliah';
    protected $primaryKey = 'kode_mk';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
