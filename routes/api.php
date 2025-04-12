<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\electronic_wasteController;
use App\Http\Controllers\Api\WasteController;

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
Route::group(['prefix' => 'v1' , 'namespace' => 'api'],function (){
    Route::get('test',function(){
        return "ahmed mohammed";
    });
    Route::post('show',[ClientController::class,"show"]);
    Route::post('register',[ClientController::class,"register"]);
    Route::post('login',[ClientController::class,"login"]);
    Route::get('wastes',[WasteController::class,"wastes"]);
    Route::group(['middleware'=>'auth:api'],function(){
        // start Auth
        Route::get('showData',[ClientController::class,'showData']);
        Route::get('update_profile',[ClientController::class,'update_profile']);
        Route::post('addWastes',[WasteController::class,'addWastes']);

    });

});
// Route::prefix('electronic_waste')->group(function(){
//     Route::get('/',[electronic_wasteController::class,'index']);
//     Route::get('{id}',[electronic_wasteController::class,'show']);
//     Route::get('/',[electronic_wasteController::class,'store']);
//     Route::get('{id}',[electronic_wasteController::class,'update']);
//     Route::get('{id}',[electronic_wasteController::class,'destory']);








