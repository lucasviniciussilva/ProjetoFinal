<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>

<body>
    <form action="{{route('registrar_produto')}}" method="POST">

        @csrf

        <label for="">Nome</label> <br />
        <input type="text" name=nome> <br />

        <label for="">Descrição</label> <br />
        <input type="text" name=descricao> <br />

        <label for="">Preço</label> <br />
        <input type="text" name=amount> <br />

        <label for="">Quantidade</label> <br />
        <input type="text" name=quantidade> <br />
        <br>
        <button>Enviar</button>
    </form>
</body>

</html>