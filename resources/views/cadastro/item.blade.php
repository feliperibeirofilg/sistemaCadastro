@extends('layout.app')

@section('content')

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
            <label for="dt_validade">
                <input type="date" name="dt_validade">
            </label>
        </div>

        <div class="btn">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div> 

    </form>

@endsection