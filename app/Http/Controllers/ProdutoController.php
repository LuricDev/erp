<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        //obtém todos os produtos cadastrados
        $produtos = Produto::all();

        //retorna para a view index e lista todos os produtos
        return view('produtos.index', compact('produtos'));
    }

    //mostra a view para criar um novo produto
    public function create()
    {
        return view('produtos.create');
    }

    //recebe as informações do formulário e as grava no banco de dados
    public function store(Request $request)
    {
        //valida o formulário
        $request->validate([
            'codigo' => 'required',
            'descricao' => 'required',
            'entrada' => 'required',
            'saida' => 'required',
            'valor' => 'required'
        ]);

        //obtém os valores do formulário
        Produto::create($request->all());

        //direciona para a página novamente com uma mensagem
        //informando que o produto foi cadastrado com sucesso
        return redirect()->route('produtos.create')
            ->with('mensagem', 'Produto cadastrado com sucesso.');
    }

    //mostrar os detalhes do produto
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    //editar o produto
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    //atualizar o produto
    public function update(Request $request, Produto $produto)
    {
        //validação dos dados do formulário
        $request->validate([
            'codigo' => 'required',
            'descricao' => 'required',
            'entrada' => 'required',
            'saida' => 'required',
            'valor' => 'required'
        ]);
    
        //atualizar o produto no banco de dados
        $produto->update($request->all());

        //voltar para a página inicial de produtos
        return redirect()->route('produtos.index')
            ->with('mensagem', 'Produto atualizado com sucesso.');
    }

    //excluir o produto
    public function destroy(Produto $produto)
    {
        //metodo delete para excluir o produto
        $produto->delete();

        //voltar para a view inicial com a mensagem do produto excluido
        return redirect()->route('produtos.index')
            ->with('mensagem', 'Produto excluido com sucesso.');
    }
}
