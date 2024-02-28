<?php

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VentaController;
use App\Models\Product;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formularioProducto',[ProductController::class,'create']);
Route::post('/crearProducto',[ProductController::class,'store'])->name('product.store');

Route::get('/formularioInventario',[InventarioController::class,'create']);
Route::post('/crearInventario',[InventarioController::class,'store'])->name('product.store');

Route::get('/formularioVenta',[VentaController::class,'create']);
Route::post('/crearVenta',[VentaController::class,'store'])->name('product.store');