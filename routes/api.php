<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
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
Route::resource('data-siswa' , SiswaController::class);

//Guru
Route::resource('data-guru' , GuruController::class);
// Route::get('/data-guru' , GuruController::class ['index']);
// Route::post('/data-guru' , GuruController::class ['update']);
