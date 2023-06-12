<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\frontend\BeritaController;
use App\Http\Controllers\frontend\LaporanController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\StrukturController;
use App\Http\Controllers\frontend\VisiMisiController;
use App\Http\Controllers\backend\InputBeritaController;
use App\Http\Controllers\frontend\PengumumanController;
use App\Http\Controllers\backend\ChangePasswordController;
use App\Http\Controllers\backend\InputPengumumanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [HomeController::class, 'index'], function () {
    return view('/home');
});

Route::get('/dashboard', [DashboardController::class, 'index'], function() {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth', 'verified');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

Route::resource('home', App\Http\Controllers\frontend\HomeController::class);   
Route::resource('laporan', App\Http\Controllers\frontend\LaporanController::class);   
Route::resource('berita', App\Http\Controllers\frontend\BeritaController::class);
  
Route::resource('pengumuman', App\Http\Controllers\frontend\PengumumanController::class); 
Route::resource('pokja', App\Http\Controllers\frontend\PokjaController::class);   
Route::resource('pokjathu', App\Http\Controllers\frontend\PokjathuController::class);
Route::resource('pokjatre', App\Http\Controllers\frontend\PokjatreController::class);
Route::resource('pokjafou', App\Http\Controllers\frontend\PokjafouController::class);
Route::resource('visimisi', App\Http\Controllers\frontend\VisiMisiController::class);   
Route::resource('struktur', App\Http\Controllers\frontend\StrukturController::class);   
Route::resource('mars', App\Http\Controllers\frontend\MarsController::class);   
Route::resource('lambangpkk', App\Http\Controllers\frontend\LambangController::class);
Route::resource('sejarah', App\Http\Controllers\frontend\SejarahController::class);
Route::resource('input_berita', App\Http\Controllers\backend\InputBeritaController::class);   
Route::resource('input_pengumuman', App\Http\Controllers\backend\InputPengumumanController::class);   
Route::resource('profile', App\Http\Controllers\backend\ProfileController::class);   
Route::resource('change_password', App\Http\Controllers\backend\ChangePasswordController::class);   
Route::resource('galeri', App\Http\Controllers\backend\GaleriController::class);
Route::resource('galery', App\Http\Controllers\frontend\GaleryController::class);
Route::get('frontend/show/{id}', [BeritaController::class, 'show'])->name('frontend.show');

Route::resource('input_berita', App\Http\Controllers\backend\InputBeritaController::class);   
Route::resource('input_pengumuman', App\Http\Controllers\backend\InputPengumumanController::class);   
Route::resource('profile', App\Http\Controllers\backend\ProfileController::class);   
Route::resource('change_password', App\Http\Controllers\backend\ChangePasswordController::class);
Route::resource('jumlah_berita', App\Http\Controllers\backend\JumlahBeritaController::class);
Route::resource('galeri', App\Http\Controllers\backend\GaleriController::class);
Route::resource('kesehatan', App\Http\Controllers\backend\KesehatanController::class);
Route::resource('kelestarian_lingkungan_hidup', App\Http\Controllers\backend\KelestarianLingkunganHidupController::class);
Route::resource('perencanaan_sehat', App\Http\Controllers\backend\PerencanaanSehatController::class);
Route::resource('showkes', App\Http\Controllers\frontend\TampilkesController::class); 
Route::resource('showling', App\Http\Controllers\frontend\TampilkunganController::class);
Route::resource('showhat', App\Http\Controllers\frontend\TampilsehatController::class);
 
