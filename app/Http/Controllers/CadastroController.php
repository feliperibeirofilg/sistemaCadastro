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

        return view('welcome')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function listarProdutos(){
        $produto = Produto::all();
        return view('estoque.produtos', compact('produto'));
    }

    public function editarProdutos(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $request->validate([
            'ds_produto' => 'required|string|max100',
            'lote_produto' => 'required|string|max100',
            'dt_vencimento' => 'required|date',
            'qtd_produto' => 'required|integer'
        ]);

        $produto -> upddate($request->only(['ds_produto', 'lote_produto', 'dt_vencimento', 'qtd_produto']));

        return view('estoque.produtos', compact('produto'));
    }
}
