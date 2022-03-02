<?php

namespace App\Http\Controllers;

use App\Models\LenguasNativas;
use Illuminate\Http\Request;

class LenguasNativasController extends Controller
{
    public function index(){

        $data = LenguasNativas::all();

        return $data;
    }
}
