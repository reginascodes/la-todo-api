<?php

use App\Http\Controllers\TaskController;

Route::prefix('task')->group(function () {
    Route::get('/', [TaskController::class, 'index']);
    Route::post('/', [TaskController::class, 'store']);
});