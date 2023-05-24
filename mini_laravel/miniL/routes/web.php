<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
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

Route::get('/', function () {
    return view('list');
});

// 페이지 이동
Route::get('/insert',[BoardController::class,'create'])->name('list.create');
Route::get('/detail',[BoardController::class,'show'])->name('list.show');
Route::get('/update',[BoardController::class,'edit'])->name('list.edit');