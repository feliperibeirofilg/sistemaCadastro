@extends('layout.app')
@section('content')

        <form method="GET" action="{{ route('listaDeProdutos') }}" class="mb-4">
            <div class="row g-2 align-items-center">
                <div class="col-auto">
                    <label for="ordenar_por" class="form-label mb-0">Ordenar por:</label>
                </div>
                <div class="col-auto">
                    <select name="ordenar_por" id="ordenar_por" class="form-select" onchange="this.form.submit()">
                        <option value="">-- Selecione --</option>
                        <option value="nome_asc" {{ request('ordenar_por') == 'nome_asc' ? 'selected' : '' }}>Nome (A-Z)</option>
                        <option value="nome_desc" {{ request('ordenar_por') == 'nome_desc' ? 'selected' : '' }}>Nome (Z-A)</option>
                        <option value="quantidade_asc" {{ request('ordenar_por') == 'quantidade_asc' ? 'selected' : '' }}>Quantidade (Menor-Maior)</option>
                        <option value="quantidade_desc" {{ request('ordenar_por') == 'quantidade_desc' ? 'selected' : '' }}>Quantidade (Maior-Menor)</option>
                    </select>
                </div>
            </div>
        </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Produto:</th>
                <th>Lote:</th>
                <th>Vencimento:</th>
                <th>Qtde:</th>
                <th>Ações:</th>
            </tr>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->ds_produto }}</td>
                <td>{{ $produto->lote_produto }}</td>
                <!-- Conversão de datas para o formato brasileiro -->
                <td>{{ \Carbon\Carbon::parse($produto->dt_vencimento)->format('d/m/Y') }}</td>
                <td>{{ $produto->qtd_produto }}</td>
                <td>
                    <a href="{{ route('editarForm', ['id'=> $produto->id]) }}" class="text-primary me-2" title="Editar">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                
                <form action="{{ route('excluirItem', ['id' => $produto->id]) }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link text-danger p-0" onclick="return confirm('Tem certeza que deseja excluir esse produto?')" title="Excluir">
                             <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection