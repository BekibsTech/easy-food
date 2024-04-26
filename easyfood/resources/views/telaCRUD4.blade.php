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
        <h2>Bebidas</h2>
        
       
      <a href="/">  <button class = "botao2" style="background-color:#0D127B; border-color:#2517bf; color:white"> VOLTAR</button></a>

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
                    <th>ÁGUA</th>
                    <th>Água mineral ou com gás</th>
                    <th>R$: 4,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>REFRIGERANTES</th>
                    <th>Coca Cola, Guaraná, Pepsi, Fanta e Sprite</th>
                    <th>R$: 8,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>SUCO</th>
                    <th>Laranja, Uva, Morango, Maracujá, Abacaxi e Limão</th>
                    <th>R$: 12,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>DRINKS</th>
                    <th>Drinks com gin, sem álcool, com Vodka, com Doce de leite e/ou Whisky </th>
                    <th>R$: 15,00</th>
                   
                </tr>
            </thead>

            <thead>
                

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
