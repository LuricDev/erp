<html>
<head>
  <meta charset="utf-8">
  <title>Sistema ERP</title>
</head>
<body>
 
<h1>Atualizar Cliente</h1>
 
@if($errors->any())
  <h2>Houve alguns erros ao processar o formulário</h2>
  <ul>
     @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
  </ul>
@endif
 
<form action="{{ route('clientes.update', $cliente->id) }}" method="post">
@csrf
@method('PUT')
 
<table width="200" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td>Nome:</td>
    <td><input type="text" value="{{ $cliente->nome }}" 
      name="nome" id="nome" placeholder="Nome"></td>
  </tr>
  <tr>
    <td>E-mail:</td>
    <td><input type="text" value="{{ $cliente->email }}" 
      name="email" id="email" placeholder="E-mail"></td>
  </tr>
  <tr>
    <td>Telefone</td>
    <td><input type="text" value="{{ $cliente->telefone }}" 
      name="telefone" id="telefone" placeholder="Telefone"></td>
  </tr>
  <tr>
    <td>Celular</td>
    <td><input type="text" value="{{ $cliente->celular }}" 
      name="celular" id="celular" placeholder="Celular"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="submit">Salvar Alterações</button></td>
  </tr>
</table>
</form>
 
</body>
</html>