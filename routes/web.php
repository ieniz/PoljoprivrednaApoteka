<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\BrendController;
use App\Http\Controllers\KupovinaController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum','verified'])->get('proizvodi', [ProizvodController::class,'index'])->name('proizvodi');
Route::middleware(['auth:sanctum','verified'])->get('dodaj_proizvod', [ProizvodController::class,'create'])->name('dodaj_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('spremi_proizvod', [ProizvodController::class,'spremi'])->name('spremi_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('obrisi_proizvod', [ProizvodController::class,'obrisi'])->name('obrisi_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('edit_proizvod', [ProizvodController::class,'edit'])->name('edit_proizvod');
Route::middleware(['auth:sanctum','verified'])->post('azuriraj_proizvod', [ProizvodController::class,'azuriraj'])->name('azuriraj_proizvod');




Route::middleware(['auth:sanctum','verified'])->get('brendovi', [BrendController::class,'index'])->name('brendovi');

Route::middleware(['auth:sanctum','verified'])->get('kupovina', [KupovinaController::class,'index'])->name('kupovina');