<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;

Route::get('/about', function () {
    return ('Selamat datang di Toko Kelontong Jaya');
});

Route:: get('/user/id', function ($id) {
    return 'id user :'. $id;
})->where('id', '[0-9]+');

Route:: get('/home', function(){
    return '<a href="'. route('biodata') . '">Ke profile</a>';
});

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/products', function () {
    return 'Daftar produk POS (Kopi, Teh, Roti)';
});
Route::post('/transactions/checkout', function () {
    return 'Transaksi berhasil!';
});

// --- pertemuan ke-4 ---
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
});

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});

// --- Tugas 4 ---
use App\Http\Controllers\UserController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

Route::get('index', function(){
    $posts =[
        (object)['title' => 'Belajar Blade', 'publised'=> true],
        (object)['title' => 'Belajar Blade', 'publised'=> true],
        (object)['title' => 'Belajar Blade', 'publised'=> true],
    ];
    return view('posts.index');

});

Route::view('/aboutus', 'aboutus', [
    'name' => 'Toko Buku',
    'email' => 'tokobuku@example.com'
]);

Route::get('/pos/history', function () {
    return 'Halaman Riwayat Transaksi';
})->name('pos.history');

//--- Import PostController ---
use App\Http\Controllers\PostController;

Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');



