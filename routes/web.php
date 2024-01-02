<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\CommerceController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/listCommande', '/back/pages/include/section/list-commande');
Route::get('/ecommerce', [CommerceController::class, 'index'])->name('ecommerce');
// Route::get('/ecommerce/{query}', [CommerceController::class, 'search'])->name('search');
Route::get('/ecommerce/search', [SearchController::class, 'index'])->name('ecommerce.search');
Route::get('/ecommerce/add/{id}/{type}/{guard}', [CommerceController::class, 'addToCart'])->name('panier');
Route::get('/ecommerce/del/{id}/{type}/{guard}',[CommerceController::class, 'removeFromCart'])->name('removeFromCart');

Route::get('/produit/{id}/{types}', [CommerceController::class, 'show'])->name('show');
Route::get('/ecommerce/list/panier', [CommerceController::class, 'listPanier'])->name('listPanier');
// Route::get('/ecommerce/achat/panier', [CommerceController::class, 'achatPanier'])->name('achatPanier');
Route::get('/produit/{id}', [CommerceController::class, 'sousCatego'])->name('sousCatego');
Route::middleware(['guest'])->group(function(){ 
    Route::get('/register', [ArtisanController::class, 'loginRegister'])->name('registPlat');
    Route::post('/register', [ArtisanController::class, 'type'])->name('registType');
    Route::get('/regist/{type}', [ArtisanController::class, 'regist'])->name('registCreat');
    Route::post('/regist/register', [ArtisanController::class, 'store'])->name('registStore');
    // Route::get('/login', [ArtisanController::class, 'login'])->name('loginPlat');
    Route::get('/login', [ArtisanController::class, 'login'])->name('login');
   
    // Route::post('/login_index', [ArtisanController::class, 'loginIndex'])->name('login_index');
});