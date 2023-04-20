<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\BeritaController;
use App\Http\Controllers\frontend\LaporanController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\StrukturController;
// use App\Http\Controllers\backend\TampilBeritaController;
use App\Http\Controllers\frontend\VisiMisiController;
use App\Http\Controllers\backend\InputBeritaController;
use App\Http\Controllers\frontend\PengumumanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return view('/home');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth', 'verified');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['namespace' => 'frontend'], function()
{
    Route::get('home', [HomeController::class, 'index']);
    Route::get('berita', [BeritaController::class, 'index']);
    Route::get('laporan', [LaporanController::class, 'index']);
    Route::get('pengumuman', [PengumumanController::class, 'index']);
    Route::get('visimisi', [VisiMisiController::class, 'index']);
    Route::get('struktur', [StrukturController::class, 'index']);
});

Route::group(['namespace' => 'backend'], function()
{
    Route::get('/dashboard', [DashboardController::class, 'index']);       
});

Route::resource('input_berita', App\Http\Controllers\backend\InputBeritaController::class);   
// Route::resource('input_berita', App\Http\Controllers\backend\InputBeritaController::class);  
 
