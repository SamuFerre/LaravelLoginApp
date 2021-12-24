<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');
Route::get('/user/{id}/edit', [App\Http\Controllers\Auth\EditController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [App\Http\Controllers\Auth\EditController::class, 'update'])->name('user.update');

