<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TestingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Siswa
Route::resource('data-siswa', SiswaController::class);

//Guru
Route::resource('data-guru', GuruController::class);

Route::resource('peminjaman', PeminjamanController::class);

Route::resource('kelas', KelasController::class);

Route::resource('data-buku', BukuController::class);

Route::controller(TestingController::class)->group(function () {
    Route::get('/test', 'getdata');
    Route::post('/test', 'postdata');
    Route::delete('/test/{id}', 'deletedata');
    Route::put('/test/{id}', 'updatedata');
});

//JWT-Auth
Route::post('/register',RegisterController::class)->name('register');

Route::post('/login', LoginController::class)->name('login');

Route::post('/logout', LogoutController::class)->name('logout');