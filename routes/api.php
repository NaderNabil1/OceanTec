<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['api'], 'prefix' => 'auth'], function(){
    Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('/refresh', [App\Http\Controllers\Api\AuthController::class, 'refresh']);

    // User routes
    Route::prefix('users')->group(function(){
        Route::GET('/', [App\Http\Controllers\Api\UserController::class, 'index']);
        Route::POST('/add', [App\Http\Controllers\Api\UserController::class, 'add']);
        Route::POST('/edit', [App\Http\Controllers\Api\UserController::class, 'edit']);
        Route::any('/delete', [App\Http\Controllers\Api\UserController::class, 'delete']);
        Route::GET('/show', [App\Http\Controllers\Api\UserController::class, 'show']);
    });
    // Managers routes
    Route::prefix('managers')->group(function(){
        Route::GET('/', [App\Http\Controllers\Api\ManagerController::class, 'index']);
        Route::POST('/add', [App\Http\Controllers\Api\ManagerController::class, 'add']);
        Route::POST('/edit', [App\Http\Controllers\Api\ManagerController::class, 'edit']);
        Route::any('/delete', [App\Http\Controllers\Api\ManagerController::class, 'delete']);
        Route::GET('/show', [App\Http\Controllers\Api\ManagerController::class, 'show']);
    });
    Route::prefix('tasks')->group(function(){
        Route::GET('/', [App\Http\Controllers\Api\TaskController::class, 'index']);
        Route::POST('/add', [App\Http\Controllers\Api\TaskController::class, 'add']);
        Route::POST('/edit', [App\Http\Controllers\Api\TaskController::class, 'edit']);
        Route::POST('/delete', [App\Http\Controllers\Api\TaskController::class, 'delete']);
        Route::GET('/show', [App\Http\Controllers\Api\TaskController::class, 'show']);
        Route::PUT('/update/{taskId}', [App\Http\Controllers\Api\TaskController::class, 'update']);
    });
});