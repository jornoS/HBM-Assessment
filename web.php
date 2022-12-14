<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaakLijstController;

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

//main pagina door sturen
Route::get('/', [TaakLijstController::class, 'index'] );

//route voor de taak opslaan in database
Route::post('/saveTaakRoute', [TaakLijstController::class, 'saveTaak'])->name('saveTaak');

//route voor om een taak compleet te maken in database
Route::post('/CompleetRoute/{id}', [TaakLijstController::class, 'Compleet'])->name('Compleet');
