<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Pedido</title>
</head>
<body>
    @if(isset($success))
        <span>{{ $success }}</span>
    @endif
    <form method="POST">
        @csrf
        <input type="text" name="pedido" placeholder="Pedido" value="{{ $pedidos->pedido ?? '' }}" />
        <input type="text" name="item" placeholder="Itens" value="{{ $pedidos->item ?? '' }}" />
        <input type="text" name="cliente" placeholder="Cliente" value="{{ $pedidos->cliente ?? '' }}" />
        <input type="number" name="valor" placeholder="Valor" value="{{ $pedidos->valor ?? '' }}" />

        <button type="submit">Salvar</button>
    </form>
</body>
</html>