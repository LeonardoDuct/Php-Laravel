<?php

use App\Http\Controllers\ProdutoController;

// Defina as rotas do CRUD de produtos
Route::resource('produtos', ProdutoController::class);

// Rota para a página de criação de produtos
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');

Route::get('/', function () {
    $products = App\Models\Product::all(); // Esta linha busca todos os produtos do banco de dados
    return view('welcome', compact('products'));
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
