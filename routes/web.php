<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;

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

Route::get('/creates', [AllController::class, 'creates']);
Route::get('/create', [AllController::class, 'create'])->name('courses.create');
Route::post('/courses', [AllController::class, 'store'])->name('courses.store');
