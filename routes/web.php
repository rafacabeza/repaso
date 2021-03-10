<?php

use App\Http\Controllers\StudyController;
use Illuminate\Support\Facades\Route;

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
    return "Bienvenido a Laravel. Repaso";
    return view('welcome');
});


Route::get("prueba", [StudyController::class, 'index']);
Route::get("prueba/{name}/{surname}", [StudyController::class, 'hello']);
// GET conseguir informacion
// POST publicar información del cliente al servidor
// Formulario GET -> datos van en la url de la cabecera
// Formulario POST -> datos van ocultos en el "body" de la "request"
// HTTP tiene otros verbos que no  sabe usar el navegador: PUT, DELETE, PATCH,...

Route::resource('studies', StudyController::class); 
// //resource son 7  rutas

// Route::get('studies', [StudyController::class,'index']);
// Route::get('studies/{id}', [StudyController::class,'show']);
// Route::get('studies/create', [StudyController::class,'create']);
// Route::post('studies', [StudyController::class,'store']);
// Route::get('studies/{id}/edit', [StudyController::class,'edit']);
// Route::put('studies/{id}', [StudyController::class,'update']);
// Route::delete('studies/{id}', [StudyController::class,'destroy']);
// // spoofing