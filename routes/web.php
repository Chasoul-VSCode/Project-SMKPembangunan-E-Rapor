<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\MuridController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\MatapelajaranController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\WaliController;

// Auth
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, '__invoke'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit'); 

// Wali Kelas
Route::get('wali/dashboard', function () {
    return view('wali.dashboard');
});

Route::get('/pages/siswa', function () {
    return view('wali.pages.siswa');
});

Route::get('/pages/nilai', function () {
    return view('wali.pages.nilai');
});

Route::get('/pages/rapor', function () {
    return view('wali.pages.rapor');
});

// Guru
Route::get('/guru/dashboard', function () {
    return view('guru.dashboard');
});

Route::get('/guru/jadwal', function () {
    return view('guru.pages.jadwal');
});

Route::get('/guru/nilai', function () {
    return view('guru.pages.nilai');
});

Route::get('/guru/absensi', function () {
    return view('guru.pages.absensi');
});

// Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::prefix('admin')->group(function () {
    
    Route::get('/siswa', [MuridController::class, 'index'])->name('admin.pages.siswa');
    Route::get('/pages/siswa', [MuridController::class, 'index'])->name('admin.pages.siswa');
    Route::get('/pages/siswa/create', [MuridController::class, 'create'])->name('admin.pages.siswa.create');
    Route::post('/pages/siswa', [MuridController::class, 'store'])->name('admin.pages.siswa.store');
    Route::get('/pages/siswa/{murid}', [MuridController::class, 'show'])->name('admin.pages.siswa.show');
    Route::get('/pages/siswa/{murid}/edit', [MuridController::class, 'edit'])->name('admin.pages.siswa.edit');
    Route::put('/pages/siswa/{murid}', [MuridController::class, 'update'])->name('admin.pages.siswa.update');
    Route::delete('/pages/siswa/{murid}', [MuridController::class, 'destroy'])->name('admin.pages.siswa.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('/guru', [GuruController::class, 'index'])->name('admin.pages.guru');
    Route::get('/pages/guru', [GuruController::class, 'index'])->name('admin.pages.guru');
    Route::get('/pages/guru/create', [GuruController::class, 'create'])->name('admin.pages.guru.create');
    Route::post('/pages/guru', [GuruController::class, 'store'])->name('admin.pages.guru.store');
    Route::get('/pages/guru/{guru}', [GuruController::class, 'show'])->name('admin.pages.guru.show');
    Route::get('/pages/guru/{guru}/edit', [GuruController::class, 'edit'])->name('admin.pages.guru.edit');
    Route::put('/pages/guru/{guru}', [GuruController::class, 'update'])->name('admin.pages.guru.update');
    Route::delete('/pages/guru/{guru}', [GuruController::class, 'destroy'])->name('admin.pages.guru.destroy');
});

Route::get('/admin/kelas', function () {
    return view('admin.pages.kelas');
});
Route::get('/admin/kelas', [KelasController::class, 'index'])->name('admin.pages.kelas.index');
Route::post('/admin/pages/kelas', [KelasController::class, 'store'])->name('admin.pages.kelas.store');
Route::get('/admin/pages/kelas/{kelas}/edit', [KelasController::class, 'edit'])->name('admin.pages.kelas.edit');
Route::put('/admin/pages/kelas/{kelas}', [KelasController::class, 'update'])->name('admin.pages.kelas.update');
Route::delete('/admin/pages/kelas/{kelas}', [KelasController::class, 'destroy'])->name('admin.pages.kelas.destroy');
Route::PUT('/admin/pages/kelas/create', [KelasController::class, 'create'])->name('admin.pages.kelas.create');


Route::prefix('admin')->group(function () {
    Route::get('/matapelajaran', [MatapelajaranController::class, 'index'])->name('admin.pages.matapelajaran');
    Route::post('/matapelajaran', [MatapelajaranController::class, 'store'])->name('admin.pages.matapelajaran.store');
    Route::get('/matapelajaran/{matapelajaran}', [MatapelajaranController::class, 'show'])->name('admin.pages.matapelajaran.show');
    Route::get('/matapelajaran/{matapelajaran}/edit', [MatapelajaranController::class, 'edit'])->name('admin.pages.matapelajaran.edit');
    Route::put('/matapelajaran/{matapelajaran}', [MatapelajaranController::class, 'update'])->name('admin.pages.matapelajaran.update');
    Route::delete('/matapelajaran/{matapelajaran}', [MatapelajaranController::class, 'destroy'])->name('admin.pages.matapelajaran.destroy');
    Route::get('/pages/matapelajaran', [MatapelajaranController::class, 'index'])->name('admin.pages.matapelajaran');
});

Route::get('/admin/matapelajaran', function () {
    return view('admin.pages.matapelajaran');
});


// Wali Kelas
Route::get('/admin/wali', function () {
    return view('admin.pages.wali');
});
Route::get('/admin/wali', [WaliController::class, 'index'])->name('admin.pages.wali.index');
Route::post('/admin/wali', [WaliController::class, 'store'])->name('admin.pages.wali.store');
Route::delete('/admin/wali/{wali}', [WaliController::class, 'destroy'])->name('admin.pages.wali.destroy');

// Public
Route::get('/images/{filename}', function ($filename) {
    $path = public_path('images/' . $filename);
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
});
