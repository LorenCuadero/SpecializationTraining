<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students', [StudentController::class, 'index']); // FETCH DATA FROM MYSQL
Route::post('students', [StudentController::class, 'store']); // CREATE DATA FROM MYSQL
Route::get('students/{id}', [StudentController::class, 'show']); // CREATE DATA FROM MYSQL
Route::delete('students/{id}', [StudentController::class, 'destroy']); // CREATE DATA FROM MYSQL
Route::put('students/{id}', [StudentController::class, 'update']); // CREATE DATA FROM MYSQL
