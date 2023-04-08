<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\FormPeminjamanController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home-page', function () {
//     return view('home-page');
// })->middleware(['auth', 'verified'])->name('home-page');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// // Route Home Page dengan Authentication
// Route::get('/home-page', function () {
//     return view('home-page')->name('home-page');
// });
// // )->middleware('auth')

// Route Pages
Route::controller(PagesController::class)->group(function(){
    Route::get('/profil', 'profil')->name('profil');
    Route::get('/jadwallab', 'jadwallab', 'peminjaman')->name('jadwallab');
    Route::get('/homepage', 'homepage')->name('home-page');
});

// Route::get('/', [HomeController::class, 'index']);

// Route Ruangan
Route::resource('ruangan', RuanganController::class);

// // Route Form Peminjaman
// Route::resource(peminjamanController::class)->group(function(){
//     Route::get('', 'index')->name('peminjaman');
// });

// Route Login
Route::controller(loginController::class)->group(function(){
    Route::get('/','index');
    Route::get('/login', function () {
        return view('login-page');
    });
    Route::post('/login','login')->name('login');
    // Route::get('/login',[AuthController::class, 'login']);
});

// Route Login Google
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'HandleGoogleCallback');
});
