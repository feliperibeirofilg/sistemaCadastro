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
        return redirect()->route('visualizarItem')->with('success', 'Produto Cadastrado com sucesso!');
       // return view('estoque.produtos')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function listarProdutos(){
        $produtos = Produto::all();
        return view('estoque.produtos', compact('produtos'));
    }

    public function editarProduto($id){
        $produtos = Produto::findOrFail($id);
        return view ('cadastro.editar', compact('produtos'));
    }

    public function atualizarProduto(Request $request, $id){
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

    public function excluirProduto(Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('listaDeProdutos')->with('success', "Produto excluido com sucesso!");
    }
}
