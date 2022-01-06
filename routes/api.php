<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ContactController;


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


Route::post('/create-account', [AuthenticationController::class, 'createAccount']);
Route::post('/signin', [AuthenticationController::class, 'signin']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::get('/contacts', [ContactController::class, 'allForUserId']);
    Route::delete('/contact/{id}', [ContactController::class, 'delete']);
    Route::put('/contact/{id}', [ContactController::class, 'update']);
    Route::post('/contact', [ContactController::class, 'create']);

    Route::post('/delete', [ContactController::class, 'delete']);
    Route::post('/sign-out', [AuthenticationController::class, 'logout']);
});
