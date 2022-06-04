<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});

Route::post('/storeData', [UserController::class, 'storeData'])->name('storeData');
Route::get('/showData', [UserController::class, 'showData'])->name('showData');
Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
Route::get('/editData/{id}', [UserController::class, 'editData'])->name('editData');
Route::post('/editdatasave/{id}', [UserController::class, 'editdatasave'])->name('editdatasave');
