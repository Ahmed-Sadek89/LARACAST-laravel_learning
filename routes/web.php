<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view("/", "home");

Route::resource("jobs", JobController::class, [
    // "except" => ["index"],get all, except those resourse only
    // "only" => ["index"] get those resourse only
]);

Route::view("/contact", "contact");
