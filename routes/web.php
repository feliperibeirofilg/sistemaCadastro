<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::get('/cadastro/item', [CadastroController::class, 'listarProdutos'])->name('visualizarItem');

Route::post('/cadastro/item', [CadastroController::class, 'cadastrarItem'])->name('cadastrarItem');


Route::get('/estoque/produtos',[CadastroController::class, 'listarProdutos'])->name('listaDeProdutos');