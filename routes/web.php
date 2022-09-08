<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CreateCourse;
use App\Http\Controllers\StudentsController;

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
Route::delete('list/{id}', [ActivityController::class, 'delete']);
Route::get('list/edit/{id}', [ActivityController::class, 'edit']);
Route::patch('list/{id}/update', [ActivityController::class, 'update'])->name('update');
//Route::get('delete/{id}', ActivityController::class, 'delete');


//Cursos//

Route::get('coursePage/{id}', [CoursesController::class, 'courseId'])->name('courseid');
Route::get('courseForm', [CoursesController::class, 'CoursePage']);
Route::post('store-course-form', [CoursesController::class, 'storeCourse']);
Route::get('courses', [CoursesController::class, 'courseList'])->name('courses');
Route::delete('coursePage/{id}', [CoursesController::class, 'deleteCourse']);

// Estudantes//

Route::post('courses', [StudentsController::class, 'storeStudents']);

//Route::get('/redirect', [LoginController::class, 'redirectToProvider']);
//Route::get('/callback', 'LoginController');



require __DIR__.'/auth.php';
