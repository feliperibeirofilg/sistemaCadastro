@extends('layout.app')

@section('content')

    <form action="{{ route('cadastrar.item') }}" method="POST" class="form-control form">
        <div class="form-control">
            <label for="ds_produto">
                <input type="text" name="ds_produto" placeholder="Nome do item:">
            </label>
        </div>

        <div class="form-control">
            <label for="lote_produto">
                <input type="text" name="lote_produto" placeholder="Nome do item:">
            </label>
        </div>

        <div class="btn">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>

    </form>

@endsection