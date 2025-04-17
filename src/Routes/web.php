<?php

use Illuminate\Support\Facades\Route;
use Zeeshan\ChatApp\Controllers\ChatController;

Route::group([
    'prefix' => config('chat-app.route_prefix'),
    'middleware' => config('chat-app.middleware'),
], function () {
    Route::get('/', [ChatController::class, 'index'])->name('chat.index');
});