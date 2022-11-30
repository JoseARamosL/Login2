<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ConceptoController;

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
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');//Mostrar usuarios
Route::get('/usuarios/{id}', [UserController::class, 'edit'])->name('usuarios.edit');//Mostrar vista de actualizar
Route::get('/create/usuarios', [UserController::class, 'create'])->name('usuarios.create');//Mostrar vista de crear
Route::post('/store/usuarios', [UserController::class, 'store'])->name('usuarios.store');//Crear usuario
Route::put('/update/usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');//Actualizar usuarios
Route::delete('/destroy/usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');//Eliminar usuarios

Route::get('/facturas', [FacturaController::class, 'index'])->name('facturas.index');//Mostrar Facturas
Route::get('/facturas/{id}', [FacturaController::class, 'edit'])->name('facturas.edit');//Mostrar vista de actualizar
Route::put('/update/facturas/{id}', [FacturaController::class, 'update'])->name('facturas.update');//Actualizar facturas
Route::delete('/destroy/facturas/{id}', [FacturaController::class, 'destroy'])->name('facturas.destroy');//Eliminar factura
Route::get('/create/facturas', [FacturaController::class, 'create'])->name('facturas.create');//Ver vista de crear
Route::post('/store/facturas', [FacturaController::class, 'store'])->name('facturas.store');//Crear factura
Route::get('/show/factura/{id}', [FacturaController::class, 'show'])->name('facturas.show');

Route::get('/conceptos', [ConceptoController::class, 'index'])->name('conceptos.index');
Route::get('/conceptos/{id}', [ConceptoController::class, 'edit'])->name('conceptos.edit');
Route::put('/update/conceptos/{id}', [ConceptoController::class, 'update'])->name('conceptos.update');
Route::get('/create/conceptos', [ConceptoController::class, 'create'])->name('conceptos.create');
Route::post('/store/conceptos', [ConceptoController::class, 'store'])->name('conceptos.store');
Route::delete('/destroy/conceptos/{id}', [ConceptoController::class, 'destroy'])->name('conceptos.destroy');
