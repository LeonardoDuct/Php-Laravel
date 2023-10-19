@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>
    <form method="post" action="{{ route('produtos.update', $produto) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nome">Nome do Produto</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição do Produto</label>
            <textarea name="descricao" id="descricao" class="form-control">{{ $produto->descricao }}</textarea>
        </div>

        <div class="form-group">
            <label for="preco">Preço do Produto</label>
            <input type="text" name="preco" id="preco" class="form-control" value="{{ $produto->preco }}" required>
        </div>

        <div class="form-group">
            <label for="quantidade_estoque">Quantidade em Estoque</label>
            <input type="number" name="quantidade_estoque" id="quantidade_estoque" class="form-control" value="{{ $produto->quantidade_estoque }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-1">Atualizar Produto</button>
    </form>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-1">Voltar ao Catálogo</a>
@endsection
