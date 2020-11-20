<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/index', [EmployeeController::class, 'index']);
Route::get('/employee/list', [EmployeeController::class, 'index']);
Route::get('/employee/form', [EmployeeController::class, 'index']);
Route::get('/employee/edit/{num}', [EmployeeController::class, 'index']);
