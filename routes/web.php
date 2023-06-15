<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pakarcontroller;
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

Route::get('/',[pakarcontroller::class,'index']);
Route::get('konsul',[pakarcontroller::class,'konsul']);
Route::post('input',[pakarcontroller::class,'simpan']);
Route::post('hapus',[pakarcontroller::class,'hapus_pertanyaan']);
