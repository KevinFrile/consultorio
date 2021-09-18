<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\DoctoresController;
use App\Http\Controllers\MiPerfilController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\selecionarcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('comienzo');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('seleccionar',  [selecionarcontroller::class, 'index']);

Route::get('/Ingresar', function () {
    return view('modulos.Ingresar');
});

Route::get('Inicio',[InicioController::class, 'index']);

Route::get('Consultorios',[ConsultoriosController::class, 'index']);

Route::post('Consultorios',[ConsultoriosController::class, 'store']);

Route::put ('Consultorio/{id}',[ConsultoriosController::class,'update']);

Route::delete ('borrar-Consultorio/{id}',[ConsultoriosController::class,'destroy']);

Route::get('Doctores',[DoctoresController::class, 'index']);

Route::post('Doctores',[DoctoresController::class, 'store']);

Route::get('Eliminar-Doctor/{id}',[DoctoresController::class, 'destroy']);

Route::get('Pacientes',[PacientesController::class, 'index']);

Route::get('Crear-Paciente',[PacientesController::class, 'create']);

Route::post('Crear-Paciente',[PacientesController::class, 'store']);

Route::get('Editar-Paciente/{id}',[PacientesController::class, 'edit']);

Route::put('actualizar-paciente/{paciente}',[PacientesController::class, 'update']);

Route::get('Eliminar-Paciente/{id}',[PacientesController::class,'destroy']);

Route::get('Mis-Datos',[MiPerfilController::class,'index']);

Route::get('Mis-Datos-edit/{id}',[MiPerfilController::class,'edit']);

Route::put('Actualizar-perfil/{id}',[MiPerfilController::class,'update']);

Route::get('Editar-Inicio/{id}', [InicioController::class, 'Edit']);

Route::put('actualizar-Inicio/{id}', [InicioController::class, 'update'])->name('update.inicio');
