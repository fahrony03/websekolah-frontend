<?php
// admin
use App\Http\Controllers\DashboardController;




// Frontend
use App\Http\Controllers\PengumumanController;
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
Route::get('/pengumuman', [PengumumanController::class, 'index']);


// ADMIN
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/pengumumanadmin', function () {
    return view('pengumuman.pengumumanadmin');
});
Route::get('/galeriadmin', function () {
    return view('galeri.galeriadmin');
});
Route::get('/beritaadmin', function () {
    return view('berita.beritaadmin');
});
