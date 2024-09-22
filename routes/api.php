<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Peyas\PreOrderForm\PreOrderForm;


Route::middleware('guest')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
    PreOrderForm::routes([
        'pre-order-store',
    ]);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [LoginController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return new \App\Http\Resources\UserResource($request->user());
    });
    PreOrderForm::routes([
        'pre-order-delete',
        'pre-order-index-show-view'
    ]);

    Route::get('test', [\App\Http\Controllers\TestController::class,'index']);
});



