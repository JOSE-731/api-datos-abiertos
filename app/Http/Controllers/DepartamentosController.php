<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    public function index(){

        $data = Departamentos::all();

        return $data;
    }
    
}
