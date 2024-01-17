<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\BottomController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\UpperController; 
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Additional;
use App\Models\Bottom;
use App\Models\Outfit;
use App\Models\Upper;

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

Route::apiResource('/users', Controller::class);
Route::apiResource('/additionals', AdditionalController::class);
Route::apiResource('/bottoms', BottomController::class);
Route::apiResource('/outfits', OutfitController::class);
Route::apiResource('/uppers', UpperController::class);

Route::get('/outfits', [OutfitController::class, 'index']);
Route::get('/outfits/{user_id}/{start}', [OutfitController::class, 'show']);
Route::put('/outfits/{user_id}/{start}', [OutfitController::class, 'update']);
Route::post('/outfits', [OutfitController::class, 'store']);
Route::delete('/outfits/{user_id}/{start}', [OutfitController::class, 'destroy']);

Route::get('/user', [Controller::class, 'index']);
Route::get('/user/{user_id}/{start}', [Controller::class, 'show']);
Route::put('/user/{user_id}/{start}', [Controller::class, 'update']);
Route::post('/user', [Controller::class, 'store']);
Route::delete('/user/{user_id}/{start}', [Controller::class, 'destroy']);

Route::get('/additionals', [AdditionalController::class, 'index']);
Route::get('/additionals/{additionals_id}/{start}', [AdditionalController::class, 'show']);
Route::put('/additionals/{additionals_id}/{start}', [AdditionalController::class, 'update']);
Route::post('/additionals', [AdditionalController::class, 'store']);
Route::delete('/additionals/{additionals_id}/{start}', [AdditionalController::class, 'destroy']);



