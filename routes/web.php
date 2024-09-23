<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::view("/", "home");

Route::resource("jobs", JobController::class, [
    // "except" => ["index"],get all, except those resourse only
    // "only" => ["index"] get those resourse only
]);
Route::get( "/register", [RegisterController::class, "create"]);
Route::get( "/login", [LoginController::class, "create"]);

Route::post( "/register", [RegisterController::class, "store"]);
Route::post( "/login", [LoginController::class, "store"]);

Route::view("/contact", "contact");
