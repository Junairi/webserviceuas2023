<?php

use App\Http\Controllers\API\AtlitController;
use App\Http\Controllers\API\CabangOlahragaController;
use App\Http\Controllers\API\PelatihController;
use App\Http\Controllers\API\TeamController;
use App\Http\Controllers\API\WasitController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    //Rout API Atlit
    Route::group(['prefix' => 'atlit'], function () {
        Route::get('/', [AtlitController::class, 'index']);
        Route::get('/{id}', [AtlitController::class, 'show']);
        Route::post('/store', [AtlitController::class, 'store']);
        Route::patch('/{id}', [AtlitController::class, 'update']);
        Route::delete('/{id}', [AtlitController::class, 'delete']);
    });

    //Route API Cabang Olahraga
    Route::group(['prefix' => 'cabangolahraga'], function () {
        Route::get('/', [CabangOlahragaController::class, 'index']);
        Route::get('/{id}', [CabangOlahragaController::class, 'show']);
        Route::post('/store', [CabangOlahragaController::class, 'store']);
        Route::patch('/{id}', [CabangOlahragaController::class, 'update']);
        Route::delete('/{id}', [CabangOlahragaController::class, 'delete']);
    });

    //Route API Pelatih
    Route::group(['prefix' => 'pelatih'], function () {
        Route::get('/', [PelatihController::class, 'index']);
        Route::get('/{id}', [PelatihController::class, 'show']);
        Route::post('/store', [PelatihController::class, 'store']);
        Route::patch('/{id}', [PelatihController::class, 'update']);
        Route::delete('/{id}', [PelatihController::class, 'delete']);
    });

    //Route API Team
    Route::group(['prefix' => 'team'], function () {
        Route::get('/', [TeamController::class, 'index']);
        Route::get('/{id}', [TeamController::class, 'show']);
        Route::post('/store', [TeamController::class, 'store']);
        Route::patch('/{id}', [TeamController::class, 'update']);
        Route::delete('/{id}', [TeamController::class, 'delete']);
    });

    //Route API Wasit
    Route::group(['prefix' => 'wasit'], function () {
        Route::get('/', [WasitController::class, 'index']);
        Route::get('/{id}', [WasitController::class, 'show']);
        Route::post('/store', [WasitController::class, 'store']);
        Route::patch('/{id}', [WasitController::class, 'update']);
        Route::delete('/{id}', [WasitController::class, 'delete']);
    });

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});