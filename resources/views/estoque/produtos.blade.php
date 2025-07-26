@extends('layout.app')
@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Produto:</th>
                <th>Lote:</th>
                <th>Validade:</th>
                <th>Qtdde:</th>
                <th>Ações:</th>
            </tr>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->ds_produto }}</td>
                <td>{{ $produto->lote_produto }}</td>
                <td>{{ $produto->dt_vencimento }}</td>
                <td>{{ $produto->qtd_produto }}</td>
                <td>
                    <a href="{{ route('editarForm', ['id'=> $produto->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                </td>
                <td>
                <form action="{{ route('excluirItem', ['id' => $produto->id]) }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esse produto?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection