<?php

use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\MunicipiosController;
use App\Models\Departamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Departamentos
//http://127.0.0.1:8000/api/departamentos
Route::get('/departamentos', [DepartamentosController::class,'index']);

//Municipios
//http://127.0.0.1:8000/api/municipios
Route::get('/municipios', [MunicipiosController::class,'index']);