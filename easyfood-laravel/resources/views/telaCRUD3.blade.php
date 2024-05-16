<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de itens</title>
    @vite(['resources/css/teste2.css']);
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
        <h2>DOCES:</h2>
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
                    <td>TORTA HOLANDESA</td>
                    <td>Biscoito com creme de Chocolate e creme Branco </td>
                    <td>R$: 80,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>TORTA DE LIMÃO</td>
                    <td>Creme de limão com massa de biscoito e pedaços de Limão</td>
                    <td>R$: 80,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>PETIT GÂTEAU</td>
                    <td>Pequeno bolo recheado com sorvete de Baunilhia</td>
                    <td>R$: 25,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>PUDIM</td>
                    <td>Pudim de leite</td>
                    <td>R$: 45,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>BOLO GELADO</td>
                    <td>Bolo branco com coco gelado</td>
                    <td>R$: 16,00</td>
                    <td>
                        <button type="button" class="button ed">Editar</button>
                        <button type="button" class="button ex">Excluir</button>
                    </td>
                </tr>

                <tr>
                    <td>ARROZ DOCE</td>
                    <td>Arroz cozido com leite condesado e canela</td>
                    <td>R$: 20,00</td>
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