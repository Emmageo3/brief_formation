<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\SouscategoryController;
use App\Models\Formation;
use Illuminate\Support\Facades\Route;

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

Route::resource('formations', FormationController::class);

Route::resource('categories', CategoryController::class);

Route::controller(Formation::class)->group(function () {
    Route::get('category/{id}/souscategories/formations', 'index')->name('formations.souscategory.category');
});

