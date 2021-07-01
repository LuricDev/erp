<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // obtém todos os livros cadastrados
        $clientes = Cliente::all();

        // direciona para a view e fornece um vetor
        // contendo os livros
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
}
