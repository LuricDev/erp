<html>

<head>
    <meta charset="utf-8">
    <title>Sistema ERP</title>

    <style>
        a {
            color: blue
        }
    </style>
</head>

<body>

    <h1>Detalhes do Cliente</h1>

    <table width="500" border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td><strong>Id</strong></td>
            <td>{{ $cliente->id }}</td>
        </tr>
        <tr>
            <td><strong>Nome</strong></td>
            <td>{{ $cliente->nome }}</td>
        </tr>
        <tr>
            <td><strong>E-mail</strong></td>
            <td>{{ $cliente->email }}</td>
        </tr>
        <tr>
            <td><strong>Telefone</strong></td>
            <td>{{ $cliente->telefone }}</td>
        </tr>
        <tr>
            <td><strong>Celular</strong></td>
            <td>{{ $cliente->celular }}</td>
        </tr>
    </table>

</body>

</html>