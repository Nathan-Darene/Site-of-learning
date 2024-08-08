<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\DeleteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user_page', function () {
    return view('users_page.page.content');
});


Route::get('page_admin', function () {
    return view('admin_page.page.analytics');
});


// Route pour l'ajout de formation
Route::post('/formation', [AddController::class, 'store'])->name('formations.store');

// Route pour l'ajout d'utilisateur
Route::post('/user', [AddController::class, 'adduser' ])->name('add.user');

// Route pour l'ajout de formateur
Route::post('/formateur', [AddController::class, 'addformateur' ])->name('add.formateur');


/*Route pour la Supression de formateur*/
// Route::get('/formateurs/deletes', [DeleteController::class, 'index'])->name('formateurs.index');
Route::get('/formateurs/delete', [DeleteController::class, 'index'])->name('formateurs.index');

// Pour une méthode de suppression avec un ID
Route::delete('/formateur/delete', [DeleteController::class, 'deleteFormateur'])->name('delete.formateur');


