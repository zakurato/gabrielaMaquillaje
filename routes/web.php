<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,"index"])->name("index");

Route::get('/loginAdministracion',[HomeController::class,"loginAdministracion"])->name("loginAdministracion");

Route::get('/login',[HomeController::class,"login"])->name("login");

Route::get('/loginDentro',[HomeController::class,"loginDentro"])->name("loginDentro")->middleware("auth");
Route::get('/loginFuera',[HomeController::class,"loginFuera"])->name("loginFuera")->middleware("auth");

Route::get('/vistaCrearCategoria',[HomeController::class,"vistaCrearCategoria"])->name("vistaCrearCategoria")->middleware("auth");

Route::post('/storeCategoria',[HomeController::class,"storeCategoria"])->name("storeCategoria")->middleware("auth");

Route::post('/store',[HomeController::class,"store"])->name("store")->middleware("auth");

Route::get('/eliminarCategoria',[HomeController::class,"eliminarCategoria"])->name("eliminarCategoria")->middleware("auth");

Route::get('/eliminarTrabajo',[HomeController::class,"eliminarTrabajo"])->name("eliminarTrabajo")->middleware("auth");

Route::get('/acercaDe',[HomeController::class,"acercaDe"])->name("acercaDe");
