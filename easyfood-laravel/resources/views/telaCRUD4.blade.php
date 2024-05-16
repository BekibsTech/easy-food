<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de itens</title>
    @vite(['resources/css/bebidas.css']);   
</head>

<body>

    <img class="logo" src="IMG/logo.jpg">
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
        <h2>BEBIDAS:</h2>
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
                    <td>ÁGUA</td>
                    <td>Água mineral ou com gás</td>
                    <td>R$: 4,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>REFRIGERANTES</td>
                    <td>Coca Cola, Guaraná, Pepsi, Fanta e Sprite</td>
                    <td>R$: 8,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>SUCO</td>
                    <td>Laranja, Uva, Morango, Maracujá, Abacaxi e Limão</td>
                    <td>R$: 12,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>DRINKS</td>
                    <td>Drinks com gin, sem álcool, com Vodka, com Doce de leite e/ou Whisky </td>
                    <td>R$: 15,00</td>
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