<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use HasFactory;

    protected $table = "departamentos";
    protected $fillable = ['codigo_departamento', 'nombre_departamento'];
    public $timestamps = false;

    public function Departamentos(){
        //Un departamento tiene muchos municipios
        return $this->hasMany(Municipios::class, 'id');
    }

    public function DepartamentosLenguas(){
        //Un departamento tiene muchas lenguas
        return $this->hasMany(LenguasNativas::class, 'id');
    }
}
