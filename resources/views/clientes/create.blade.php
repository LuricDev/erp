<html>

<head>
    <meta charset="utf-8">
    <title>Sistema ERP</title>
</head>

<body>

    <h1>Novo Cliente</h1>

    @if($status = Session::get('mensagem'))
    <h2>{{ $status }}</h2>
    @endif

    @if($errors->any())
    <h2>Houve alguns erros ao processar o formulário</h2>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <table width="200" cellspacing="3" cellpadding="3">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" id="nome" placeholder="Nome"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" id="email" placeholder="E-mail"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input type="text" name="telefone" id="telefone" placeholder="Telefone"></td>
            </tr>
            <tr>
                <td>Celular</td>
                <td><input type="text" name="celular" id="celular" placeholder="Celular"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="text" name="senha" id="senha" placeholder="Senha"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit">Cadastrar</button></td>
            </tr>
        </table>
    </form>

</body>

</html>