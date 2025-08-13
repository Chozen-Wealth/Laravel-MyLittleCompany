<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "home"])->name("home");
Route::get('/contact', [HomeController::class, "contact"])->name("contact");
Route::get('/produits', [HomeController::class, "produits"])->name("produits");
Route::get('/equipe', [HomeController::class, "equipe"])->name("equipe");
Route::post('/newmessage', [MessageController::class, "newMessage"])->name("message");
Route::get('/confirmation', [MessageController::class, "confirmation"])->name("confirmation");
