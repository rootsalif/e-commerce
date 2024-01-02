<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtisanController;

Route::prefix('/admin')->group(function(){
    Route::middleware(['guest'])->group(function(){
    //     Route::view('/register', 'back.pages.admin.auth.register')->name('register');
    //     // Route::post('/register', [AdminController::class, 'loginRegister'])->name('registAdmin');
        Route::get('/login', [AdminController::class, 'index'])->name('loginAdmin');
    //     // Route::post('/login_index', [AdminController::class, 'loginIndex'])->name('login_index');
    });

    Route::prefix('/home')->group(function(){
        Route::middleware(['auth:admin'])->name('home.')->group(function(){
            Route::get('/home',[AdminController::class, 'home'])->name('home');
            Route::get('/dashbord', [AdminController::class, 'indexDashbord'])->name('dashbord');
            Route::get('/profil/{admin}/admin', [AdminController::class, 'profilAdmin'])->name('profilAdmin');
            Route::get('/profil/{artisan}/artisant', [AdminController::class, 'profilArtisan'])->name('showArtisan');
            Route::get('/profil/{client}/client', [AdminController::class, 'profilClient'])->name('showClient');
            Route::get('/users/artisans', [AdminController::class, 'dataUser'])->name('dataArtisan');
            Route::get('/users/clients', [AdminController::class, 'dataUser'])->name('dataClient');
            Route::get('/utils/{utils}', [AdminController::class, 'showUtil'])->name('util');
            Route::get('/utils/{utils}/{id}', [AdminController::class, 'editUtil'])->name('editUtil');
            Route::post('/utils/{utils}', [AdminController::class, 'addUtil'])->name('addUtil');
            Route::put('/utils/{utils}/{id}', [AdminController::class, 'updateUtil'])->name('updateUtil');
            Route::delete('/utils/{utils}/{id}', [AdminController::class, 'deleteUtil'])->name('deleteUtil');

            // Route::get('/util/{utils}', [AdminController::class, 'showUtil'])->name('utils');
            // Route::get('/util/{utils}/{id}', [AdminController::class, 'editUtil'])->name('editUtil');
            // Route::post('/util/{utils}', [AdminController::class, 'addUtil'])->name('addUtils');
            // Route::get('/article/{artisan}', [AdminController::class, 'getSubcategories'])->name('subcategorie');
            // Route::put('/util/{utils}/{id}', [AdminController::class, 'updateUtil'])->name('updateUtils');
            // Route::put('/articles', [AdminController::class, 'updateArticle'])->name('updateArticles');
            
            // Route::get('/images', [AdminController::class, 'addImage'])->name('addImages');
            // Route::delete('/util/{utils}/{id}', [AdminController::class, 'deleteUtil'])->name('deleteUtils');

            Route::put('/profil/{id}/update/{dataUser}', [AdminController::class, 'update'])->name('update');
            Route::delete('/profil/{artisan}/destroy/', [AdminController::class, 'destroy'])->name('destroy');
        });
    });
});