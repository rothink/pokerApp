<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/health', function (\Illuminate\Http\Request $request) {
    return response()->json(['apitest' => true]);
});

Route::post('login', [AuthenticatedSessionController::class, 'store']);
