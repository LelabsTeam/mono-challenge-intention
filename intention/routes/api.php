<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\Site\IntentionController;
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

Route::controller(IntentionController::class)->prefix('v1')->as('api.')->group(function () {

    Route::controller(AuthController::class)->prefix('user')->group(function () {
        Route::post('/login', 'loginUser')->name('login');

        Route::middleware('auth:sanctum')->group(function () {
            Route::post('/', 'createUser')->name('register');
            Route::post('/logout', 'logout')->name('logout');
        });
    });

    Route::controller(IntentionController::class)->prefix('intentions')->as('intention.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->middleware('auth:sanctum')->name('store');
    });
});
