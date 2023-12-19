<?php

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

Auth::routes(['register' => false]);
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

// form pelanggaran
Route::get('form_pelanggaran', [\App\Http\Controllers\FormPelanggaranController::class, 'index'])->name('form_pelanggaran.index');
Route::post('form_pelanggaran_store', [\App\Http\Controllers\FormPelanggaranController::class, 'store'])->name('form_pelanggaran.store');

// tentang kami
Route::get('tentang_kami', [\App\Http\Controllers\TentangKamiController::class, 'index'])->name('tentang_kami.index');

// hubungi kami
Route::get('hubungi_kami', [\App\Http\Controllers\HubungiKamiController::class, 'index'])->name('hubungi_kami.index');
Route::post('hubungi_kami_store', [\App\Http\Controllers\HubungiKamiController::class, 'store'])->name('hubungi_kami.store');

// admin
Route::group(['middleware' => ['is_admin', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class)->except('show');
    Route::resource('pelanggar', \App\Http\Controllers\Admin\PelanggarController::class)->except('show');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
