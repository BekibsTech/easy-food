<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de itens</title>
    @vite(['resources/css/style.css']);
</head>
<body>

    <img class="logo2" src="/assets/img/easy-food.PNG">
    <p>
    <button style="background-color:#0D127B; border-color:#2517bf; color:white">
        CARDÁPIO</button>
    <button style="background-color:#0D127B; border-color:#2517bf; color:white">
         ITENS</button>
    <button style="background-color:#0D127B; border-color:#2517bf; color:white">
            PEDIDOS</button>
     <button style="background-color:#0D127B; border-color:#2517bf; color:white">
                COZINHA</button>
     <button style="background-color:#0D127B; border-color:#2517bf; color:white">
                    FECHAMENTO</button>


    <div id="itens">
        <h2>Salgados:</h2>

       <a href="/"> <button class = "botao2" style="background-color:#0D127B; border-color:#2517bf; color:white">
            VOLTAR</button></a>

            <br><br>
       

        

        <table id="tabela-itens">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Ingrediente</th>
                    <th>Valor</th>
                    
                </tr>
            </thead>
            <tbody>
                </tbody>
        </table>

        <table id="tabela-itens-dois">
            <thead>
                <tr>
                    <th>X-FRANGO</th>
                    <th>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Frango e Batata-Palha</th>
                    <th>R$: 22,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>X-SALADA</th>
                    <th>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Salada e Batata-Palha</th>
                    <th>R$: 15,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>X-BACON</th>
                    <th>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Bacon, Salada e Batata-Palha</th>
                    <th>R$: 22,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>X-BURGUER</th>
                    <th>Pão, Carne, Presunto, Queijo, Maionese Caseira, Ketchup, Mostarda e Batata-Palha</th>
                    <th>R$: 13,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>X-EGG</th>
                    <th>Pão, Carne, Maionese Caseira, Ketchup, Mostarda, Ovo, Salada e Batata-Palha</th>
                    <th>R$: 16,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>HAMBÚRGUER</th>
                    <th>Pão, Carne, Maionese Caseira, Ketchup, Mostarda e Batata-Palha</th>
                    <th>R$: 16,00</th>
                   
                </tr>
            </thead>

            <tbody>
                </tbody>
        </table>

        



    </div>

    <button class = "botao2" style="background-color:#0D127B; border-color:#2517bf; color:white">
            ADICIONAR</button>

    <button class = "botao2" style="background-color:#0D127B; border-color:#2517bf; color:white">
            EXCLUIR</button>

    <button class = "botao2" style="background-color:#0D127B; border-color:#2517bf; color:white">
            EDITAR</button>

</body>
</html>
