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
        <h2>DOCES:</h2>

      <a href="/">  <button class = "botao2" style="background-color:#0D127B; border-color:#2517bf; color:white">
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
                    <th>TORTA HOLANDESA</th>
                    <th>Biscoito com creme de Chocolate e creme Branco </th>
                    <th>R$: 80,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>TORTA DE LIMÃO</th>
                    <th>Creme de limão com massa de biscoito e pedaços de Limão</th>
                    <th>R$: 80,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>PETIT GÂTEAU</th>
                    <th>Pequeno bolo recheado com sorvete de Baunilhia</th>
                    <th>R$: 25,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>PUDIM</th>
                    <th>Pudim de leite</th>
                    <th>R$: 45,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>BOLO GELADO</th>
                    <th>Bolo branco com coco gelado</th>
                    <th>R$: 16,00</th>
                   
                </tr>
            </thead>

            <thead>
                <tr>
                    <th>ARROZ DOCE</th>
                    <th>Arroz cozido com leite condesado e canela</th>
                    <th>R$: 20,00</th>
                   
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
