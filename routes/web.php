<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::get('/cadastro/item', [CadastroController::class, 'mostrarItem'])->name('visualizarItem');

Route::post('/cadastro/item', [CadastroController::class, 'cadastrarItem'])->name('cadastrarItem');

//Rota de edição do item
//Rota get exibe o formulario
Route::get('/cadastro/editar/{id}', [CadastroController::class, 'listarProdutos'])->name('editarForm');
//Rota postfaz a edição
Route::post('/cadastro/editar/{id}', [CadastroController::class, 'editarProdutos'])->name('editarItem');

Route::get('/estoque/produtos',[CadastroController::class, 'listarProdutos'])->name('listaDeProdutos');

Route::delete('/estoque/produtos/{id}', [CadastroController::class, 'excluirProduto'])->name('excluirItem');