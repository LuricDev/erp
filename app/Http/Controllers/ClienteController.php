<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // obtém todos os clientes cadastrados
        $clientes = Cliente::all();

        // direciona para a view e fornece um vetor
        // contendo os clientes
        return view('clientes.index', compact('clientes'));
    }

    // mostra a view para cadastrar um novo Cliente
    public function create()
    {
        return view('clientes.create');
    }

    // recebe as informações do formulário e as grava
    // no banco de dados
    public function store(Request $request)
    {
        // valida o formulário
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'celular' => 'required',
            'senha' => 'required'
        ]);

        // obtém os valores do form
        Cliente::create($request->all());

        // direciona para página cadastro novamente,
        // com uma mensagem de sucesso
        return redirect()->route('clientes.create')
            ->with('mensagem', 'Cliente salvo com sucesso.');
    }

    // método que permite excluir um cliente
    public function destroy(Cliente $cliente)
    {
        // vamos chamar o método delete() do Eloquent
        $cliente->delete();

        // vamos chamar a view com uma mensagem de
        // de sucesso.
        return redirect()->route('clientes.index')
            ->with('mensagem', 'Cliente excluído com sucesso.');
    }
}
