<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\Request;
use App\Http\Controllers\PhotoController;


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
    return view('index');
});



Route::prefix('produtos')->group( function (){
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');

    Route::get('/cadastrarProdutos', [ProdutosController::class, 'cadastrarProdutos'])->name('cadastrar.produto');

    Route::post('/cadastrarProdutos', [ProdutosController::class, 'cadastrarProdutos'])->name('cadastrar.produto');

    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
});


