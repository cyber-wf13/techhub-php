<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/shop', [ProductsController::class, 'index']);
Route::get('/contacts', [ContactsController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/product/{id}', [ProductsController::class, 'single']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/product/add', [ProductController::class, 'index']);
});
