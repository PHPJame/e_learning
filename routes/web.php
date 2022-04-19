<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CouseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\LessonController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');
Route::get('Admin/Home', [App\Http\Controllers\HomeController::class, 'ADHome'])->name('ADHome')->middleware('status_id');
Route::get('Teacher/Home', [App\Http\Controllers\HomeController::class, 'TCHome'])->name('TCHome')->middleware('status_id');

Route::get('/IndexUser', [UserController::class, 'index'])->name('IndexUser');
Route::get('/CreateUser', [UserController::class, 'create'])->name('CreateUser');
Route::post('/AddUser', [UserController::class, 'store'])->name('AddUser');
Route::get('/EditUser/{id}', [UserController::class, 'edit']);
Route::post('/UpdateUser/{id}', [UserController::class, 'update']);
Route::get('/DeleteUser/{id}', [UserController::class, 'destroy']);

Route::get('/IndexCouse', [CouseController::class, 'index'])->name('IndexCouse');
Route::get('/CreateCouse', [CouseController::class, 'create'])->name('CreateCouse');
Route::post('/AddCouse', [CouseController::class, 'store'])->name('AddCouse');
Route::get('/EditCouse/{id}', [CouseController::class, 'edit']);
Route::post('/UpdateCouse/{id}', [CouseController::class, 'update']);
Route::get('/DeleteCouse/{id}', [CouseController::class, 'destroy']);

Route::get('/ADIndexTopic', [TopicController::class, 'index'])->name('ADIndexTopic');
Route::get('/ADCreateTopic', [TopicController::class, 'create'])->name('ADCreateTopic');
Route::post('/ADAddTopic', [TopicController::class, 'store'])->name('ADAddTopic');
Route::get('/ADEditTopic/{id}', [TopicController::class, 'edit']);
Route::post('/ADUpdateTopic/{id}', [TopicController::class, 'update']);
Route::get('/ADDeleteTopic/{id}', [TopicController::class, 'destroy']);

Route::get('/ADIndexLesson', [LessonController::class, 'index'])->name('ADIndexLesson');
Route::get('/ADCreateLesson', [LessonController::class, 'create'])->name('ADCreateLesson');
Route::post('/ADAddLesson', [LessonController::class, 'store'])->name('ADAddLesson');
Route::get('/ADEditLesson/{id}', [LessonController::class, 'edit']);
Route::post('/ADUpdateLesson/{id}', [LessonController::class, 'update']);
Route::get('/ADDeleteLesson/{id}', [LessonController::class, 'destroy']);