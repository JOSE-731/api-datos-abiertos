<?php

namespace App\Http\Controllers;

use App\Models\Municipios;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    public function index(){

        $data = Municipios::all();

        return $data;
    }
}
