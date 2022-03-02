<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LenguasNativas extends Model
{
    use HasFactory;
    protected $table = "lenguas_nativas";
    protected $fillable = ['id_departamento', 'nombre_lengua'];
    public $timestamps = false;
}
