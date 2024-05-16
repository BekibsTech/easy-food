<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de itens</title>
    @vite(['resources/css/lanche.css']);
    <link rel="stylesheet" href="css/lanche.css">
</head>

<body>

    <img class="logo" src="/assets/img/easy-food.PNG">
    <p>
    <section class="categorias">
        <button class="categoria">CARDÁPIO</button>
        <button class="categoria">ITENS</button>
        <button class="categoria">PEDIDOS</button>
        <button class="categoria">COZINHA</button>
        <button class="categoria">FECHAMENTO</button>
    </section>
    <section class="orders">
        <br>
        <h2>LANCHES:</h2>
        <br>
        <table>
            <tdead>
                <tr>
                    <td>Item</td>
                    <td>Ingredientes</td>
                    <td>Valor</td>
                    <td>Ação</td>
                </tr>
            </tdead>
            <tbody>
                <tr>
                    <td>X-FRANGO</td>
                    <td>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Frango e Batata-Palha</td>
                    <td>R$: 22,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>X-SALADA</td>
                    <td>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Salada e Batata-Palha</td>
                    <td>R$: 15,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>X-BACON</td>
                    <td>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Bacon, Salada e Batata-Palha</td>
                    <td>R$: 22,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>X-BURGUER</td>
                    <td>Pão, Carne, Presunto, Queijo, Maionese Caseira, Ketchup, Mostarda e Batata-Palha</td>
                    <td>R$: 13,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>X-EGG</td>
                    <td>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Ovo, Salada e Batata-Palha</td>
                    <td>R$: 16,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>HAMBÚRGUER</td>
                    <td>Pão, Carne, Maionese Caseira, Ketchup, Mostarda e Batata-Palha</td>
                    <td>R$: 16,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</body>

</html>
