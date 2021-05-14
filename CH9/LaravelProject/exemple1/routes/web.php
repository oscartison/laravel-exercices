<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloCtrl;
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

Route::get('/hello/{name}',[HelloCtrl::class, 'index']);


Route::get('/todos',[\App\Http\Controllers\TodoController::class, 'index' ]);

Route::get('/todos/{id}',[\App\Http\Controllers\TodoController::class, 'show' ]);
