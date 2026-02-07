<?php

use App\Http\Controllers\ZekaiStoreController;

Route::post('/verify-user', [ZekaiStoreController::class, 'verifyUser']);
Route::post('/checkout', [ZekaiStoreController::class, 'checkout']);
Route::get('/process-topup/{id}', [ZekaiStoreController::class, 'processTopup']);
