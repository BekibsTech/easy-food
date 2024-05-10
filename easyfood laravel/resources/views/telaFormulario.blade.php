<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Cardápio - Restaurante</title>
    @vite(['resources/css/formulario.css']);
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Cardápio</h1>

        <div class="form-cardapio">
            <h2>Nova Categoria</h2>
            <form id="form-categoria">
                <div class="form-group">
                    <label for="nome-categoria">Nome da Categoria:</label>
                    <input type="text" id="nome-categoria" name="nome-categoria" required>
                </div>
                <button type="submit">Adicionar Categoria</button>
            </form>

            <h2>Novo Item</h2>
            <form id="form-item">
                <div class="form-group">
                    <label for="nome-item">Nome do Item:</label>
                    <input type="text" id="nome-item" name="nome-item" required>
                </div>

                <div class="form-group">
                    <label for="categoria-item">Categoria:</label>
                    <select id="categoria-item" name="categoria-item" required>
                        </select>
                </div>

                <div class="form-group">
                    <label for="preco-item">Preço:</label>
                    <input type="number" id="preco-item" name="preco-item" step="0.01" required>
                </div>
                <button type="submit">Adicionar Item</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>