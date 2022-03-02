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

    public function LenguasDepartamento(){
        //Una lengua pertenece a un departamento
        return $this->belongsTo(Departamentos::class, 'id_departamento');
    }
}
