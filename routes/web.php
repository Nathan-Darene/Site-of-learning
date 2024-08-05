<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;



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

// Route pour l'ajout de formateur
Route::post('/formateur', [AddController::class, 'addformateur' ])->name('add.formateur');
