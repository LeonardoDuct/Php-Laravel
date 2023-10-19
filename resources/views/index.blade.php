@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <h1>Catálogo de Produtos</h1>
<div class="d-flex justify-content-between align-items-center">
    <a href="{{ route('welcome') }}" class="btn btn-link">
        <i class="fas fa-home"></i> Página Inicial
    </a>
    
    <a href="{{ route('produtos.create') }}" class="btn btn-primary mt-1">Adicionar Produto</a>
    
</div>


    @if (session('success'))
        <div class="alert alert-success" style="margin-top: 10px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($products->count() > 0)
        <table class="table mt-2">
            <thead>
                <tr>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Preço</th>
                    <th class="text-center">Quantidade em Estoque</th>
                    <th class="text-center">Descrição</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->nome }}</td>
                        <td class="text-center">{{ $product->preco }}</td>
                        <td class="text-center">{{ $product->quantidade_estoque }}</td>
                        <td class="text-center">{{ $product->descricao }}</td>
                        <td class="text-center">
                            <a href="{{ route('produtos.edit', $product) }}" class="btn btn-primary mt-1">Editar</a>
                            <form action="{{ route('produtos.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-1">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>

    @else
        <p>Nenhum produto cadastrado.</p>
    @endif
@endsection
