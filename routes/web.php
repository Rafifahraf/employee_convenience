<?php

use App\Http\Controllers\CustomController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('employee', EmployeeController::class);

    Route::get('/dashboard', [CustomController::class, 'show_dashboard'])->name('dashboard');
});

Route::get('login', [CustomController::class, 'show_login'])->name('login');

Route::get('register', [CustomController::class, 'show_register'])->name('register');

Route::post('login', [CustomController::class, 'login_process'])->name('login_process');

Route::post('register', [CustomController::class, 'register_process'])->name('register_process');

Route::post('logout', [CustomController::class, 'logout'])->name('logout');

