<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;



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




Auth::routes();
Route::get('/', function () {return view('auth.login');});
//Dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//pagina principal Usuarios
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
//Crear Usuario
Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
//Crear Usuario
Route::post('/usuarios/store', [UserController::class, 'store'])->name('usuarios.store');
//Editar Usuario
Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('usuarios.edit');
//Mostrar Usuario
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('usuarios.show');
//Actualizar Usuario
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('usuarios.update');

Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('usuarios.delete');

//pagina principal Productos
Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');
//Crear Usuario
Route::get('/productos/create', [ProductController::class, 'create'])->name('productos.create');
//Editar Usuario
Route::post('/productos/store', [ProductController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}/edit', [ProductController::class, 'edit'])->name('productos.edit');
//Mostrar Usuario
Route::get('/productos/{producto}', [ProductController::class, 'show'])->name('productos.show');
//Actualizar Usuario
Route::put('/productos/{producto}', [ProductController::class, 'update'])->name('productos.update');


//pagina principal
/*
Route::get('/usuarios', [UserController::class, 'index']);
//Crear Usuario
Route::post('/usuarios/create', [UserController::class, 'store'])->name('usuarios.store');
//Editar Usuario
Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('usuarios.edit');
//Mostrar Usuario
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('usuarios.show');
//Actualizar Usuario
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('usuarios.update');
*/

//pagina principal Proveedores
Route::get('/proveedores', [ProviderController::class, 'index'])->name('proveedores.index');
//Crear Usuario
Route::get('/proveedores/create', [ProviderController::class, 'create'])->name('proveedores.create');

Route::post('/proveedores/store', [UserController::class, 'store'])->name('proveedores.store');
//Editar Usuario
Route::get('/proveedores/{proveedor}/edit', [ProviderController::class, 'edit'])->name('proveedores.edit');
//Mostrar Usuario
Route::get('/proveedores/{proveedor}', [ProviderController::class, 'show'])->name('proveedores.show');
//Actualizar Usuario
Route::put('/proveedores/{proveedor}', [ProviderController::class, 'update'])->name('proveedores.update');






