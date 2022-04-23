<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function(){
//     return '<h1>Primeira lógica com Laravel</h1>';
// });

Route::get('/products', [ProdutoController::class, 'index'])->name('products.view');

Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'show'])->name('products.show');
