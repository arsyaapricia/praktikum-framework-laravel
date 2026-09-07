<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return ('Selamat datang di Toko Kelontong Jaya');
});

Route::get('/products', function () {
    return 'Daftar produk POS (Kopi, Teh, Roti)';
});
Route::post('/transactions/checkout', function () {
    return 'Transaksi berhasil!';
});

Route:: get('/user/id', function ($id) {
    return 'id user :'. $id;
})->where('id', '[0-9]+');

Route:: get('/home', function(){
    return '<a href="'. route('biodata') . '">Ke profile</a>';
});

// --- Pertemuan ke-3 ---

use App\Http\Controllers\DashboardController;
 
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// --- Tugas 3 --- 



