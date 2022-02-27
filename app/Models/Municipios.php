<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;
    protected $table = "municipios";
    protected $fillable = ['codigo_municipio', 'nombre_departamento'];
}
