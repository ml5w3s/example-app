<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
Use App\Http\Controllers\PostsController;
Use App\Models;

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

Route::get('/',[ProdutoController::class, "index"]);

Route::resource('posts', PostsController::class);

Route::resource('produtos', ProdutoController::class);
