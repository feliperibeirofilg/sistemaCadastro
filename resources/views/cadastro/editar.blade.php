@extends('layout.app')
@section('content')


<div class="container">
    <form action="{{ route('editarItem', $produto->id) }}" method="post">
        @csrf
        <div calss="mb-3">
            <label for="ds_produto" class="form-label">
                <input type="text" nome="ds_produto" value="{{$produto->ds_produto}}" required>
            </label>
        </div>

        <div calss="mb-3">
            <label for="lote_produto" class="form-label">
                <input type="text" nome="ds_produto" value="{{$produto->lote_produto}}" required>
            </label>
        </div>

        <div calss="mb-3">
            <label for="dt_vencimento" class="form-label">
                <input type="text" nome="ds_produto" value="{{$produto->dt_vencimento}}" required>
            </label>
        </div>

        <div calss="mb-3">
            <label for="qtd_produto" class="form-label">
                <input type="text" nome="ds_produto" value="{{$produto->qtd_produto}}" required>
            </label>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
        <a href="{{ route('listaDeProduto')}}" class="btn btn-secondary">Cancelar</a>

    </form>
</div>
@endsection