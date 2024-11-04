<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\SupplierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('suppliers', SupplierController::class);
    Route::apiResource('branches', BranchController::class);
});