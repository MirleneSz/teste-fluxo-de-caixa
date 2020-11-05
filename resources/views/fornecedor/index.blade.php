<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
<form action ="{{route('create-fornecedor')}}" method="POST">
    @csrf
        <input type="text" name="nome" id="">
        <input type="text" name="endereco" id="">
        <input type="tel" name="telefone" id="">

        <button type="submit">Cadastrar</button>
    </form>

    @if(session('success'))
    <h1>{{session('success')}}</h1>
    @endif

    <ul> @foreach ($fornecedores as $item)
        <li>{{$item->nome}}</li>

      @endforeach</ul>

</body>
</html>
