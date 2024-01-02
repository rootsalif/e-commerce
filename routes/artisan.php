<?php


use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Route;

Route::prefix('/artisan')->group(function(){

    Route::middleware(['guest'])->group(function(){
        //     Route::view('/register', 'back.pages.admin.auth.register')->name('register');
        Route::post('/regist', [ArtisanController::class, 'type'])->name('typeArtisan');
        // Route::get('/register', [ArtisanController::class, 'create'])->name('register');
        Route::post('/register/{type}', [ArtisanController::class, 'store'])->name('storeArtisan');
        // Route::get('/login', [ArtisanController::class, 'login'])->name('login');
        // Route::post('/login_index', [ArtisanController::class, 'loginIndex'])->name('login_index');
            Route::get('/register', [ArtisanController::class, 'loginRegister'])->name('registArtisan');
            Route::get('/login', [ArtisanController::class, 'login'])->name('loginArtisan');
        //     // Route::post('/login_index', [AdminController::class, 'loginIndex'])->name('login_index');
        });
   
    Route::prefix('/home')->group(function(){
        Route::middleware(['auth:artisan'])->name('home.')->group(function(){
            Route::get('/dashbord',[ArtisanController::class, 'index'])->name('home');
            // Route::get('/article',[ArtisanController::class, 'add'])->name('addArticle');
            // Route::get('/article/{categorie}', [ArtisanController::class, 'getSubcategories'])->name('subcategories');
            // Route::post('/article',[ArtisanController::class, 'addStore'])->name('articleArtisan');
            Route::resource('/articles/images', ArtisanController::class)->only(['destroy']);

            Route::get('/{utils}', [ArtisanController::class, 'showUtil'])->name('articles');
            Route::get('/{utils}/{id}', [ArtisanController::class, 'editUtil'])->name('editArticle');
            Route::post('/{utils}', [ArtisanController::class, 'addUtil'])->name('addArticle');
            // Route::get('/article/{artisan}', [ArtisanController::class, 'getSubcategories'])->name('subcategorie');
            Route::put('/images/{id}', [ArtisanController::class, 'updateImage'])->name('updateImage');
            Route::put('/articles/{id}', [ArtisanController::class, 'updateArticle'])->name('updateArticles');
            
            Route::get('/images', [ArtisanController::class, 'addImage'])->name('addImages');
            Route::delete('/articles/{utils}/{id}', [ArtisanController::class, 'deleteUtil'])->name('deleteUtils');

            Route::get('/profil/{artisan}/artisant', [ArtisanController::class, 'profilArtisan'])->name('profilArtisan');
            Route::get('/profil/{client}/client', [ArtisanController::class, 'profilClient'])->name('profilClient');
            Route::put('/profil/{id}/update/{dataUser}', [ArtisanController::class, 'update'])->name('updated');
            Route::delete('/profil/{artisan}/destroy/', [ArtisanController::class, 'destroy'])->name('destroyed');

            Route::get('/stock', [ArtisanController::class, 'stock'])->name('stock');

            
        });
    });
});