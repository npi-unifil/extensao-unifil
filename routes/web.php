<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CreateCourse;

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

//Route::get('/', function () {
//    return redirect('register');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/projects', function() {
    return view('projects');
})->middleware(['auth'])->name('projects');


//Atividades
Route::get('form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::get('list', [ActivityController::class, 'showActivity'])->name('list');
//Route::get('delete/{id}', ActivityController::class, 'delete');

Route::delete('list/{id}', [ActivityController::class, 'delete']);
Route::get('list/edit/{id}', [ActivityController::class, 'edit']);
Route::patch('list/{id}/update', [ActivityController::class, 'update'])->name('update');


//Cursos//
Route::get('courseForm', [CreateCourse::class, 'CoursePage']);
Route::post('store-course-form', [CoursesController::class, 'storeCourse']);
Route::get('course-list', [CreateCourse::class, 'showCourses']);

route::get('/courses', function() {
    return view('course-register');
})->middleware(['auth'])->name('courses');


//Route::get('/redirect', [LoginController::class, 'redirectToProvider']);
//Route::get('/callback', 'LoginController');



require __DIR__.'/auth.php';
