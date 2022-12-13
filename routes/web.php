<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampañaControler;
use App\Http\Controllers\CitaController;

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

//rutas principales
Route::get('/', function () {
    return view('welcome');
});

//ruta del login
Route::get('/login', function () {
    return view('usuarios.welcome');
})->name('login');

Route::get('/inicio', function () {

    return view('inicio.index');

})->name('inicio');



//rutas campañas
Route::middleware(['auth'])->group(function(){

    Route::get('/campaña',[CampañaController::class,'index']);

    Route::put('/campaña',[CampañaController::class,'update']);

    Route::get('/citas/create',[CampañaController::class,'create']);

    Route::post('/citas',[CampañaController::class,'store']);

});





//rutas donadores ---posible eliminacion--------------------------------
Route::get('/donadores', function () {

    return view('donadores.index');

})->name('donadores');




//rutas usuarios
Route::get('/usuarios', function () {

    return view('usuarios.index');

})->name('usuarios');

Route::get('/usuario', function () {

    return view('usuarios.usuario');

})->name('usuario');

Route::get('/Crear_usuario', function () {

    return view('usuarios.index');

})->name('Crear_usuario');



//rutas citas

Route::middleware(['auth'])->group(function(){

    Route::get('/citas',[CitaController::class,'index']);

    Route::put('/citas',[CitaController::class,'update']);

    Route::get('/citas/create',[CitaController::class,'create']);

    Route::post('/citas',[CitaController::class,'store']);

});







Route::get('/home', function () {
    return view('home');
})->name('home');

//creacion de rutas hacia usercontroller
Route::middleware(['auth'])->group(function(){
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::put('/users', [UserController::class, 'update']);
});
