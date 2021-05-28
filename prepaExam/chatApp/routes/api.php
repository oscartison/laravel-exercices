<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatCtrl;

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

Route::get('/channels', [ChatCtrl::class, 'show']);
Route::post('/channels/{chatRoomId}/messages', [ChatCtrl::class, 'store'])->where('chatRoomId', '[0-9]+');
Route::get('/channels/{chatRoomId}/messages', [ChatCtrl::class, 'param'])->where('chatRoomId', '[0-9]+');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
