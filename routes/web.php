<?php

use App\Http\Controllers\DiabetesController;
use App\Http\Controllers\HemogrobinaController;
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
    return view('index');
})->name('index');

Route::get('/diabetes/ver', [DiabetesController::class, 'ver']);
Route::get('/diabetes/insert', [DiabetesController::class, 'formulario']);
Route::post('/diabetes/inser', [DiabetesController::class, 'create']);
Route::get('/hemogrobina/ver', [HemogrobinaController::class, 'ver']);
Route::get('/hemogrobina/insert', [HemogrobinaController::class, 'formulario']);
Route::post('/hemogrobina/inser', [HemogrobinaController::class, 'create']);
