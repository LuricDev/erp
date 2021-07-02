@extends('layout')

@section('content')
<style>
    .container {
        max-width: 450px;
    }

    .push-top {
        margin-top: 50px;
    }
</style>

<div class="card push-top">
    <div class="card-header">
        Novo Cliente
    </div>

    @if($status = Session::get('mensagem'))
        <div class="alert alert-sucess">{{ $status }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <h2>Houve alguns erros ao processar o formulário</h2>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-body">
        <form action="{{ route('clientes.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome"/>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" name="telefone"/>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="tel" class="form-control" name="celular"/>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="text" class="form-control" name="senha"/>
            </div>
            <button type="submit" class="btn btn-block btn-danger">Cadastrar Cliente</button>
        </form>
    </div>
</div>
@endsection