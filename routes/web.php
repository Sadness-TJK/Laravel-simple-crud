<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/edit', [App\Http\Controllers\HomeController::class, 'home_edit'])->name('home_edit');

Route::post('/home/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');

Route::get('/home/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');

Route::get('/home/change/{id}', [App\Http\Controllers\HomeController::class, 'change'])->name('change');
Route::get('/home/insert/{id}', [App\Http\Controllers\HomeController::class, 'get_to_change'])->name('get_to_change');
