<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASY FOOD</title>
    @vite(['resources/css/teste.css'])
</head>
<body>
    
    
        <img class="logo" src="/assets/img/easy-food.PNG">
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
        <section class="search">
            <input type="text" placeholder="Encontre o que você deseja:">
        </section>

        <section class="products">
            <div class="product">
                <img src="/assets/img/928209592-dia-do-hamburguer.webp" alt="X-Frango">
                <h3>001-XFRANGO</h3>
                <p>Lanches</p>
                <p>R$ 22,00</p>
                <button class="add-to-cart">ADICIONAR</button>
            </div>

            <div class="product">
                <img src="/assets/img/esfirra.jpg" alt="Esfiha de Carne">
                <h3>023-ESFIHA DE CARNE</h3>
                <p>Variedades</p>
                <p>R$ 4,00</p>
                <button class="add-to-cart">ADICIONAR</button>
            </div>

            <div class="product">
                <img src="/assets/img/refris-2020_11_07-02_55_03-UTC.png" alt="Coca-Cola 2L">
                <h3>030-COCA-COLA 2L</h3>
                <p>Bebidas</p>
                <p>R$ 10,00</p>
                <button class="add-to-cart">ADICIONAR</button>
            </div>

            <div class="product">
                <img src="/assets/img/combo lanche.jpg" alt="Combo Super">
                <h3>110- COMBO SUPER</h3>
                <p>Lanches</p>
                <p>R$ 60,00</p>
                <button class="add-to-cart">ADICIONAR</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 11 EASY FOOD</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
