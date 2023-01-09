<?php

use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');


Route::get('/about', [PageController::class, 'about'])->name('about');


Route::get('/movies', [PageController::class, 'movies'])->name('movies');

Route::get('movies_details/{id}', [PageController::class, 'details'])->name('details');
