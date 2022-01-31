<?php

use App\Http\Controllers\JrsController;
use App\Http\Controllers\MhsController;
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

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
Route::resource('mahasiswa', MhsController::class);
Route::resource('jurusan', JrsController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('mahasiswa',[MhsController::class, 'index']);
// Route::get('mahasiswa/create',[MhsController::class, 'create']);
// Route::post('mahasiswa/create',[MhsController::class, 'store']);
// Route::get('mahasiswa/edit',[MhsController::class, 'edit']);
// Route::put('mahasiswa/edit',[MhsController::class, 'update']);
// Route::get('mahasiswa/{id}',[MhsController::class, 'destroy']);
