<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "home"])->name("home");
Route::get('/contact', [HomeController::class, "contact"])->name("contact");
Route::get('/produits', [HomeController::class, "produits"])->name("produits");
Route::get('/equipe', [HomeController::class, "equipe"])->name("equipe");
Route::post('/newmessage', [MessageController::class, "newMessage"])->name("message");
Route::get('/confirmation', [MessageController::class, "confirmation"])->name("confirmation");

// Backend

Route::get("/backend/employes", [EquipeController::class, "employes"])->name("employes");
Route::get("/backend/employes/create_employe", [EquipeController::class, "create_employe_page"])->name("create_employe_page");
Route::post("/backend/employes/create", [EquipeController::class, "newEmploye"])->name("create_employe");
Route::delete("/backend/employes/delete_employe/{id}", [EquipeController::class, "delete_employe"])->name("delete_employe");
Route::get("/backend/messages", [MessageController::class, "messages"])->name("messages");
Route::delete("/backend/messages/delete_message/{id}", [MessageController::class, "delete_message"])->name("delete_message");

Route::get("/backend/produits", [ProduitController::class, "produits"])->name("backend_produits");
Route::get("/backend/produits/create_page", [ProduitController::class, "create_produits_page"])->name("create_produits_page");
Route::post("/backend/produits/create", [ProduitController::class, "create_produits"])->name("create_produits");