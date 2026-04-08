<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\MesaageController;
use App\Http\Controllers\Api\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');




// auth


Route::prefix('auth')->group(function () {

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');



});



// settings

Route::prefix('settings')->group(function(){
    
Route::get('/', SettingController::class);

});

// cities

Route::prefix('cities')->group(function(){

Route::get('/',[CityController::class,'index']);
Route::post('/',[CityController::class,'store']);
Route::put('/{city}',[CityController::class,'update']);
Route::delete('/{city}',[CityController::class,'destroy']);


});


// districts

Route::prefix('districts')->group(function(){
Route::get('/',[DistrictController::class,'index']);
Route::post('/',[DistrictController::class,'store']);
Route::get('/{district}',[DistrictController::class,'show']);
Route::put('/{district}',[DistrictController::class,'update']);
Route::delete('/{district}',[DistrictController::class,'destroy']);

});


// messages

Route::prefix('messages')->group(function(){

Route::get('/',[MesaageController::class,'index']);
Route::post('/',[MesaageController::class,'store']);
Route::delete('/{message}',[MesaageController::class,'destroy']);


});



