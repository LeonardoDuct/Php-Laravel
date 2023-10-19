@extends('layouts.app')

@section('content')
    <h1>Criar Novo Produto</h1>
    <form method="post" action="{{ route('produtos.store') }}">
        @csrf

        <div class="form-group">
            <label for="nome">Nome do Produto</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição do Produto</label>
            <textarea name="descricao" id="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="preco">Preço do Produto</label>
            <input type="text" name="preco" id="preco" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantidade_estoque">Quantidade em Estoque</label>
            <input type="number" name="quantidade_estoque" id="quantidade_estoque" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-1">Salvar Produto</button>
    </form>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-1">Voltar ao Catálogo</a>
@endsection
