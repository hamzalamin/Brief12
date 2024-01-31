<?php

use App\Http\Controllers\homePageController;
use App\Http\Controllers\RecettesController;
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

Route::get('/', [homePageController::class, 'index'])->name('homePage');

Route::get('/show', [RecettesController::class, 'index'])->name('show');

Route::get('/add', [RecettesController::class, 'create'])->name('add');

Route::post('/search', [RecettesController::class, 'recipes_for_search'])->name('search');

Route::get('/showOne/{id}', [RecettesController::class, 'showOne'])->name('showOne');





Route::resource(name:'recettes', controller: App\Http\Controllers\RecettesController::class);
