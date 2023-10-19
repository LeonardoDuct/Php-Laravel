@extends('layouts.app')

@section('content')
    <h1>Produtos Disponíveis</h1>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nome }}</h5>
                        <p class="card-text">{{ $product->descricao }}</p>
                        <div class="price">
                            <p>Preço: R$ {{ number_format($product->preco, 2, ',', '.') }}</p>
                        </div>
                        <p class="card-text text-center">Qtd: {{ $product->quantidade_estoque }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="d-flex justify-content-center">
        <a href="{{ route('produtos.index') }}">Ver Catálogo Completo</a>
    </div>
    
    <style>
        .price {
            text-align: right;
        }
    </style>
    
@endsection
