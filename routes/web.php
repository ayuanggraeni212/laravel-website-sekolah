<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AbsenController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/program-keahlian', [PagesController::class, 'program']);
Route::get('/kegiatan-sekolah', [PagesController::class, 'kegiatan']);
Route::get('/kontak', [PagesController::class, 'kontak']);
Route::get('/e-learning', [PagesController::class, 'learning']);
Route::get('/informasi', [PagesController::class, 'informasi']);
Route::get('/jadwal', [PagesController::class, 'jadwal']);
Route::get('/login-page', [PagesController::class, 'login']);
Route::get('/login-page-siswa', [PagesController::class, 'login2']);
Route::post('/absensi/index', [AbsenController::class, 'store']);
Route::get('/absensi', [AbsenController::class, 'index']);
Route::get('/absensi/create', [AbsenController::class, 'create']);
Route::post('/absensi', [AbsenController::class, 'store']);
Route::delete('/{absensi}', [AbsenController::class, 'destroy']);
Route::get('/{absensi}/edit', [AbsenController::class, 'edit']);
Route::patch('/absensi/{absensi}', [AbsenController::class, 'update']);
Route::get('/login-page-guru', [PagesController::class, 'guru']);
Route::post('/login-page-guru', [AbsenController::class, 'store']);
Route::get('/coba-login-admin', [PagesController::class, 'cobaadmin']);
Route::get('/coba-login-guru', [PagesController::class, 'cobaguru']);
