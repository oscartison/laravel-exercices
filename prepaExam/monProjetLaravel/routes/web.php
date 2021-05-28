<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[\App\Http\Controllers\StudentController::class, 'index' ]);

Route::get('/pae/students', [ StudentController::class, 'tasks' ]);


Route::get('/pae/students/{id}', [ StudentController::class, 'tasks' ]);

Route::post('/pae/students/delete/{id}/{course}', [ StudentController::class, 'delete' ]);
