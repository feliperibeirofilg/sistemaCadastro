@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form action="{{ route('cadastrarItem') }}" method="POST" class="bg-white p-4 rounded shadow" style="width: 100%; max-width: 500px;">
        @csrf
        <h1 class="mb-4 text-center">CADASTRO DE ITEM:</h1>

        <div class="mb-3">
            <label for="ds_produto" class="form-label">Nome do item:</label>
            <input type="text" class="form-control" id="ds_produto" name="ds_produto" placeholder="Nome do item">
        </div>

        <div class="mb-3">
            <label for="lote_produto" class="form-label">Lote do Produto:</label>
            <input type="text" class="form-control" id="lote_produto" name="lote_produto" placeholder="Lote do Produto">
        </div>

        <div class="mb-3">
            <label for="qtd_produto" class="form-label">Quantidade:</label>
            <input type="number" class="form-control" id="qtd_produto" name="qtd_produto">
        </div>

        <div class="mb-4">
            <label for="dt_vencimento" class="form-label">Data de Vencimento:</label>
            <input type="date" class="form-control" id="dt_vencimento" name="dt_vencimento">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Cadastrar Item</button>
        </div>
    </form>
</div>
@endsection
