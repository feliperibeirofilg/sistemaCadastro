@extends('layout.app')

@section('content')

    <h1>Cadastro de itens:</h1>

    <form action="{{ route('cadastrarItem') }}" method="POST" class="bg-white p-4 rounded shadow" style="width: 100%; max-width: 500px;">
        @csrf
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <label for="ds_produto" class="form-label">
                <input type="text" name="ds_produto" placeholder="Nome do item:">
            </label>
        </div>

        <div class="mb-3">
            <label for="lote_produto" class="form-label">
                <input type="text" name="lote_produto" placeholder="Lote do Produto:">
            </label>
        </div>

        <div class="mb-3">
            <label for="qtd_produto" class="form-label">
                <input type="number" name="qtd_produto">
            </label>
        </div>

        <div class="mb-4">
            <label for="dt_vencimento" class="form-label">
                <input type="date" name="dt_vencimento">
            </label>
        </div>

        <div class="btn">
            <input  type="submit" value="Cadastrar Item" class="btn btn-primary">
        </div> 

    </form>

@endsection