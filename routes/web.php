<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'discount'])->name('welcome');

Route::get('/category/{id}', [PageController::class, 'category'])->name('category');

Route::get('/product/{id}', [PageController::class, 'product'])->name('product');