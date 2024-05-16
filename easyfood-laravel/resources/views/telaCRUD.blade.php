<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Cardápio - Restaurante</title>
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

<main>
  

    

    <div id="categorias">
        <h2>Categorias</h2>
     
        <br><br>
        <table id="tabela-categorias">
            <thead>
                <tr>
                    <th class ="item-um">Lanches <a href="CRUD2"> <button class="botao-editar">Editar categoria</button></a></th>
                                       
                </tr>

                <tr>
                    <th class="item-um">Doces <a href="CRUD3">  <button class="botao-editar">Editar categoria</button></a></th>
                </tr>
                
                <tr>
                    <th class="item-um">Bebidas <a href="CRUD4"> <button class="botao-editar">Editar categoria</button></a> </th>
                </tr>

               

            </thead>
            <tbody>
                </tbody>
        </table>
    </div>

   <a href="adicionar"> <button class = "botao-adicionar">ADICIONAR</button></a>
    <button class = "botao-adicionar">EXCLUIR</button>
    
    
    <script src="{{ mix('js/script.js') }}"></script>

</body>
</html>
