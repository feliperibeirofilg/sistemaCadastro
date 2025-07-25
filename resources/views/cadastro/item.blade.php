@extends('layout.app')

@section('content')

    <h1>Cadastro de itens:</h1>

    <form action="{{ route('cadastrarItem') }}" method="POST" class="form-control">
        @csrf
        <div class="form-control">
            <label for="ds_produto">
                <input type="text" name="ds_produto" placeholder="Nome do item:">
            </label>
        </div>

        <div class="form-control">
            <label for="lote_produto">
                <input type="text" name="lote_produto" placeholder="Lote do Produto:">
            </label>
        </div>

        <div class="form-control">
            <label for="qtd_produto">
                <input type="number" name="qtd_produto">
            </label>
        </div>

        <div class="form-control">
            <label for="dt_vencimento">
                <input type="date" name="dt_vencimento">
            </label>
        </div>

        <div class="btn">
            <input  type="submit" value="Cadastrar Item" class="btn btn-primary">
        </div> 

    </form>

@endsection