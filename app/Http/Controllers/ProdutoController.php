<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function store(Request $request)
{
    $data = $request->validate([
        'nome' => 'required',
        'preco' => 'required|numeric',
        'quantidade_estoque' => 'required|numeric',
        'descricao' => 'required',
    ]);

    $product = new Product();
    $product->nome = $data['nome']; // Deve corresponder ao nome do campo no formulário
    $product->preco = $data['preco']; // Deve corresponder ao nome do campo no formulário
    $product->quantidade_estoque = $data['quantidade_estoque']; // Deve corresponder ao nome do campo no formulário
    $product->descricao = $data['descricao'];

    $product->save();

    return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso.');
}
   

public function update(Request $request, Product $produto)
{
    $validatedData = $request->validate([
        'nome' => 'required',
        'preco' => 'required|numeric',
        'quantidade_estoque' => 'required|integer',
        'descricao' => 'required',
    ]);

    $produto->update($validatedData);

    return redirect()->route('produtos.index')->with('success', 'Edição realizada com sucesso.');
}

public function edit(Product $produto)
{
    return view('edit', compact('produto'));
}


public function destroy(Product $produto)
{
    $produto->delete();
    return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso.');
}

public function index()
{
    $products = Product::paginate(25);
    return view('index', compact('products'));
}

public function create()
{
    return view('create');
}


}