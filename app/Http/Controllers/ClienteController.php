<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // mostra a view para cadastrar um novo Cliente
    public function create()
    {
        return view('clientes.create');
    }
}
