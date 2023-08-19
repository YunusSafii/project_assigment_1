<?php

use App\Http\Controllers\API\kelasController;
use App\Http\Controllers\API\siswaController;
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

Route::get('siswa', [siswaController::class, 'index']);

Route::get('siswa/show', [siswaController::class, 'show']);

Route::get('kelas', [kelasController::class, 'index']);

Route::get('kelas/show', [kelasController::class, 'show']);

Route::post('kelas/store', [kelasController::class, 'store']);

Route::post('kelas/update/{id}', [kelasController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
