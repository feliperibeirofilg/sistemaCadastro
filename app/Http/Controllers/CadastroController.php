<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CadastroController extends Controller
{
    public function mostrarItem(){
        return view('cadastro.item');
    }

    public function cadastrarItem(Request $request){
        $request->validate([
            'ds_produto' => 'required|string|max:255',
            'lote_produto' => 'required|string|max:255',
            'dt_vencimento' => 'required|date',
            'qtd_produto' => 'required|integer'
        ]);

        Produto::create([
            'ds_produto' => $request->ds_produto,
            'lote_produto' => $request->lote_produto,
            'dt_vencimento' => $request->dt_vencimento,
            'qtd_produto' => $request->qtd_produto,
        ]);

        return view('inicio')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function listarProdutos(){
        $produto = Produto::all();
        return view('cadastro');
    }
}
