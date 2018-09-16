<?php

use Illuminate\Support\Facades\Route;
use Jam0r85\NovaNexmo\Http\Controllers\BalanceController;
use Jam0r85\NovaNexmo\Http\Controllers\SendSmsController;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('balance', BalanceController::class.'@show');
Route::post('send-sms', SendSmsController::class);
