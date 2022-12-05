<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('welcome');
})->name('/');

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('inicio', [HomeController::class, 'inicio'])->name('inicio');
Route::get('inicio2', function () {
    return Inertia::render('inicio/inicio2');
})->name('inicio2');





Route::resource('employee', EmployeeController::class)->only(['index', 'store', 'update', 'destroy']);

require __DIR__.'/auth.php';

