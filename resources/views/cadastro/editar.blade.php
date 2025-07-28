@extends('layout.app')
@section('content')


<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form action="{{ route('editarItem', $produtos->id) }}" method="POST" class="bg-white p-4 rounded shadow" style="width: 100%; max-width: 500px;">
        @csrf
        <h2 class="mb-4 text-center fw-bold">Editar item cadastrado:</h2>

        <div class="mb-3">
            <label for="ds_produto" class="form-label">Nome do item:</label>
                <input type="text" class="form-control border border-dark rounded" name="ds_produto" value="{{$produtos->ds_produto}}" required>
        </div>

        <div class="mb-3">
            <label for="lote_produto" class="form-label">Lote do Produto:</label>
                <input type="text" class="form-control border border-dark rounded" name="lote_produto" value="{{$produtos->lote_produto}}" required>
        </div>

        <div class="mb-3">
            <label for="dt_vencimento" class="form-label">Data de Vencimento:</label>
                <input type="text" class="form-control border border-dark rounded" name="dt_vencimento" value="{{$produtos->dt_vencimento}}" required>
        </div>

        <div class="mb-3">
            <label for="qtd_produto" class="form-label">Quantidade:</label>
                <input type="text" class="form-control border border-dark rounded" name="qtd_produto" value="{{$produtos->qtd_produto}}" required>
        </div>

      <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-success w-50 me-2">Salvar</button>
            <a href="{{ route('listaDeProdutos') }}" class="btn btn-outline-secondary w-50 ms-2">Cancelar</a>
        </div>
    </form>
</div>
@endsection