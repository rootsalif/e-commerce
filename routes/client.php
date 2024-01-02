<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommerceController;
use Illuminate\Support\Facades\Route;

Route::prefix('/client')->group(function(){

    Route::middleware(['guest'])->group(function(){
     //     Route::view('/register', 'back.pages.admin.auth.register')->name('register');
     Route::post('/regist', [ArtisanController::class, 'type'])->name('typeClient');
     // Route::get('/register', [ArtisanController::class, 'create'])->name('register');
     Route::post('/register/{type}', [ArtisanController::class, 'store'])->name('storeClient');
     // Route::get('/login', [ArtisanController::class, 'login'])->name('login');
     // Route::post('/login_index', [ArtisanController::class, 'loginIndex'])->name('login_index');
         Route::get('/register', [ArtisanController::class, 'loginRegister'])->name('registClient');
         Route::get('/login', [ArtisanController::class, 'login'])->name('loginClient');
     //     // Route::post('/login_index', [AdminController::class, 'loginIndex'])->name('login_index');
     
        });

    Route::prefix('/home')->group(function(){
        Route::middleware(['auth:client'])->name('home.')->group(function(){
        Route::get('/dashbord', [CommerceController::class, 'index'])->name('dashClient');
        Route::get('/list/panier', [CommerceController::class, 'listPanier'])->name('clientPanier');
        Route::get('/panier', [CommerceController::class, 'achatPanier'])->name('clientCommande');
        
        Route::get('/status/livraison', [CommerceController::class, 'statusCommande'])->name('commandeLivraison');
        Route::get('/status/commande', [CommerceController::class, 'statusCommande'])->name('commandeStatus');
        // Route::get('/ecommerce/achat/panier', [CommerceController::class, 'achatPanier'])->name('achatPanier');

        Route::post('/commande', [CommerceController::class, 'commande'])->name('commande');
        Route::get('/gerer/panier', [CommerceController::class, 'listPanier'])->name('clientListPanier');
        Route::get('/add/{id}/{type}/{guard}', [CommerceController::class, 'addToCart'])->name('clientAddPanier');
        Route::get('/del/{id}/{type}/{guard}',[CommerceController::class, 'removeFromCart'])->name('clientRemoveFromCart');

           
        });
    });
});