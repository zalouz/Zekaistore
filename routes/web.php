<?php

use Illuminate\Support\Facades\Route;

// API Routes
Route::prefix('api')->group(function () {
    Route::post('verify-user', 'Api\UserController@verify');
    Route::post('checkout', 'Api\CheckoutController@process');
    Route::get('process-topup/{id}', 'Api\TopupController@process');
    Route::get('order-status/{id}', 'Api\OrderController@status');
});
