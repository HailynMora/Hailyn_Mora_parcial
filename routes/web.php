<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Clientes;

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

Route::get('/', [Clientes::class, 'index']);

Route::get('/productos/catalogo',[Productos::class, 'catalogo']);
Route::get('/datos/blog',[Productos::class, 'blog']);