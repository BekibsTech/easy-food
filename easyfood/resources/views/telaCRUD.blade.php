<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Cardápio - Restaurante</title>
    @vite(['resources/css/style.css']);
</head>
<body>
    <h1>Gerenciamento de Cardápio</h1>

    <div id="categorias">
        <h2>Categorias</h2>
        <button id="btn-nova-categoria">Nova Categoria</button>
        <table id="tabela-categorias">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                </tbody>
        </table>
    </div>

    
    
    <script src="{{ mix('js/script.js') }}"></script>

</body>
</html>
