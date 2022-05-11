<?php

use  Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;

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

Route::get('form',     [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::get('list', [ActivityController::class, 'showActivity'])->name('list');
//Route::get('delete/{id}', ActivityController::class, 'delete');

Route::delete('list/{id}', [ActivityController::class, 'delete']);
Route::get('list/{id}', [ActivityController::class, 'update']);
