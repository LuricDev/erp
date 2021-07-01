<html>

<head>
    <meta charset="utf-8">
    <title>Sistema ERP</title>
</head>

<body>

    <h1>Clientes Cadastrados</h1>

    @if($status = Session::get('mensagem'))
    <h2>{{ $status }}</h2>
    @endif

    <h4><a href="{{ route('clientes.create') }}">Cadastrar
            Novo Cliente</a></h4>

    <table width="709" border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td width="85" align="center"><strong>Id</strong></td>
            <td width="161" align="center"><strong>Nome</strong></td>
            <td width="156" align="center"><strong>E-mail</strong></td>
            <td width="98" align="center"><strong>Telefone</strong></td>
            <td width="98" align="center"><strong>Celular</strong></td>
            <td width="167" align="center"><strong>Opções</strong></td>
        </tr>

        @foreach($clientes as $cliente)
        <tr>
            <td align="center">{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td align="center">{{ $cliente->celular }}</td>
            <td align="center">
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                    <a href="{{ route('clientes.show', 
           $cliente->id) }}">Detalhes</a> |
                    <a href="{{ route('clientes.edit', 
           $cliente->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit">Excluir</button>
                </form>

        </tr>
        @endforeach

    </table>

</body>

</html>