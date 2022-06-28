<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\V1\ClientController;
use App\Http\Controllers\Api\V1\CompanyController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', [AuthController::class,'register']);
        Route::post('login', [AuthController::class,'login']);
        Route::post('logout', [AuthController::class,'logout'])->middleware('auth:api');
    });

    Route::group(['namespace' => 'V1', 'prefix' => 'V1', 'middleware' => 'auth:api'], function () {
        Route::post('get_companies', [CompanyController::class, 'get_companies']);
        Route::post('get_clients', [ClientController::class, 'get_clients']);
        Route::post('get_client_companies', [ClientController::class, 'get_client_companies']);
    });
});
