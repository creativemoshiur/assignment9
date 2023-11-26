<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;



Route::get("/", [pageController::class,"home"]);

Route::get("/about", [pageController::class,"about"]);
Route::get("/projects", [pageController::class,"projects"]);
Route::get("/contact", [pageController::class,"contact"]);
