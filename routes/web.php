<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeAdmin;
use App\Http\Controllers\MenuAdmin;
use App\Http\Controllers\CommandeController;





Route::get('/app', function () {
    return view('app'); // Renvoie une vue spécifique pour ton application Vue.js
});
Route::post('/contact/store', [MenuAdmin::class, 'storeContact'])->name('storecontact');

Route::get('/contact', [MenuAdmin::class, 'indexcontact'])->name('contact');
Route::get('/menu/patiss/patisssouka', [MenuAdmin::class, 'indexx'])->name('menu');
Route::post('/valider_commande', [CommandeController::class, 'validerCommande'])->name('valider_commande');
Route::get('/commande/{id}', [CommandeController::class, 'showCommandeForm'])->name('showcommande');
Route::post('/valider_commande', [CommandeController::class, 'validerCommande'])->name('valider_commande');
Route::get('/filter-products', [MenuAdmin::class, 'filterProducts']);
Route::get('/get-cake-types', [MenuAdmin::class, 'getCakeTypes']);
Route::get('/filter-products-by-type', [MenuAdmin::class, 'filterProductsByType']);
//Birthday cake menu
Route::get('/menu/birthday', [MenuAdmin::class, 'indexbirthday'])->name('menubirthday');
Route::get('/filter/birthday-products', [MenuAdmin::class, 'filterbirthdayProducts']);
Route::get('/getbirthday-cake-types', [MenuAdmin::class, 'getbirthdayCakeTypes']);
Route::get('/filter/birthday-products-by-type', [MenuAdmin::class, 'filterbirthdayProductsByType']);
///////////////////////////SIMPLE CAKE MENU//////////////////////////////////////////////////////////////
Route::get('/menu/simple', [MenuAdmin::class, 'indexsimple'])->name('menusimple');
Route::get('/filter/simple-products', [MenuAdmin::class, 'filtersimpleProducts']);
Route::get('/getsimple-cake-types', [MenuAdmin::class, 'getsimpleCakeTypes']);
Route::get('/filter/simple-products-by-type', [MenuAdmin::class, 'filtersimpleProductsByType']);
// Buffet cake/////////////////////////////////////////////////BUFFETCAKE//////////ROUTE
Route::get('/menu/buffet', [MenuAdmin::class, 'indexbuffet'])->name('menubuffet');
Route::get('/filter/buffet-products', [MenuAdmin::class, 'filterbuffetProducts']);
Route::get('/getbuffet-cake-types', [MenuAdmin::class, 'getbuffetCakeTypes']);
Route::get('/filter/buffet-products-by-type', [MenuAdmin::class, 'filterbuffetProductsByType']);

Route::get('/', function () {

    return view('homepatiss');
})->name('home');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeAdmin::class, 'index'])->name('dashboard');
    Route::post('/creationdecompte', [HomeAdmin::class, 'store'])->name('creationcomptes');
    Route::get('/liste/produit/gestion', [MenuAdmin::class, 'indexxx'])->name('liste.produit');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/admin/menu', [MenuAdmin::class, 'index'])->name('admin.menu');
    Route::get('/admin/menu/edit/{id}', [MenuAdmin::class, 'edit'])->name('admin.menu.edit');
    Route::post('/admin/menu/update/{id}', [MenuAdmin::class, 'update'])->name('admin.menu.update');
    Route::delete('/admin/commandes/{id}', [MenuAdmin::class, 'deleteCommande'])->name('admin.deleteCommande');
    Route::get('/admin/commandes/client', [MenuAdmin::class, 'commandes'])->name('admin.commande');
    Route::get('/admin/contact/client', [MenuAdmin::class, 'contactes'])->name('admin.contact');
    Route::delete('/admin/contacts/{id}', [MenuAdmin::class, 'destroycontact'])->name('admin.deleteContact');
    // Route pour supprimer un produit
    Route::delete('/admin/menu/destroy/{id}', [MenuAdmin::class, 'destroy'])->name('admin.menu.destroy');
    // Route pour ajouter un produit
    Route::post('/admin/menu/store', [MenuAdmin::class, 'store'])->name('admin.menu.store');
});
