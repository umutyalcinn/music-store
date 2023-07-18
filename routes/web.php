<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\TeacherController;


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

Route::get('/', function () {
    return redirect("/login");
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);

Route::post('/product/update/{id}', [ProductController::class, 'update']);
Route::post('/product/store', [ProductController::class, 'store']);

Route::get('customer', [CustomerController::class, 'index']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'destroy']);
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit']);

Route::post('/customer/store', [CustomerController::class, 'store']);

Route::get('/classes', [ClassesController::class, 'index']);
Route::get('/classes/create', [ClassesController::class, 'create']);

Route::get('teacher', [TeacherController::class, 'index']);
Route::get('/teacher/create', [TeacherController::class, 'create']);

Route::post('/teacher/store', [TeacherController::class, 'store']);
Route::get('/teacher/delete/{id}', [TeacherController::class, 'destroy']);
