<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Peyas\PreOrderForm\PreOrderForm;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

PreOrderForm::routes([
    'orders'
]);
