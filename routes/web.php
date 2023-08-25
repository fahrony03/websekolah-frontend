<?php
use App\Http\Controllers\DetailArtikelController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\LandingpageController;
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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dokumentasi', [DokumentasiController::class, 'index']);
Route::get('/ekstra', [EkstraController::class, 'index']);
Route::get('/sambutan', [SambutanController::class, 'index']);
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/detailartikel', [DetailArtikelController::class, 'index']);