<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ServiceController;

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
})->middleware('auth')->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::prefix('services')->name('services.')->middleware('auth')->group(function () {

    Route::get('/index', [ServiceController::class, 'index'])->name('index');
    Route::get('/get-data', [ServiceController::class, 'getAll'])->name('get-all');
    Route::post('/store', [ServiceController::class, 'store'])->name('store'); 
    Route::get('/{id}/edit', [ServiceController::class, 'edit'])->name('edit');
    Route::post('/update', [ServiceController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [ServiceController::class, 'delete'])->name('delete');

});