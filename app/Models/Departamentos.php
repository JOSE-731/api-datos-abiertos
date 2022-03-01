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

    public function departamento(){

       // return $this->hasMany(Departamentos::class,'codigo_departamento','cd_departamento');
    }
}
