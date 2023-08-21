<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\BlogController;

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

// Route::get('blog', function () {
//     return view('blog');
// });

// Route::get('santri', [SantriController::class, 'index']);
// Route::get('santri/{nama}', [SantriController::class, 'getNama']);
// Route::get('biodata', [SantriController::class, 'biodata']);
// Route::get('pendaftaran', [SantriController::class, 'pendaftaran']);
// Route::post('pendaftaran/proses', [SantriController::class, 'proses']);

Route::get('/', [BlogController::class, 'home']);
Route::get('tentang', [BlogController::class, 'tentang']);
Route::get('kontak', [BlogController::class, 'kontak']);
