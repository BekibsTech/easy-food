// Função para buscar e preencher tabela de categorias
function buscarCategorias() {
    // Buscar categorias do banco de dados (ex: AJAX)
    const categorias = [
        { id: 1, nome: "Lanches" },
        { id: 2, nome: "Bebidas" },
        { id: 3, nome: "Variedades" },
    ];

    // Limpar tabela existente
    const tabelaCategorias = document.getElementById("tabela-categorias").querySelector("tbody");
    tabelaCategorias.innerHTML = "";

    // Preencher tabela com categorias
    categorias.forEach(categoria => {
        const linha = tabelaCategorias.insertRow();
        const celulaNome = linha.insertCell();
        const celulaAcoes = linha.insertCell();

        celulaNome.textContent = categoria.nome;
        celulaAcoes.innerHTML = `
            <button onclick="editarCategoria(<span class="math-inline">\{categoria\.id\}\)"\>Editar</button\>
<button onclick\="removerCategoria\(</span>{categoria.id})">Excluir</button>
        `;
    });
}

// Função para buscar e preencher tabela de itens
function buscarItens() {
    // Buscar itens do banco de dados (ex: AJAX)
    const itens = [
        { id: 1, nome: "X-Burguer", categoriaId: 1, preco: 12.50 },
        { id: 2, nome: "Refrigerante", categoriaId: 2, preco: 5.00 },
        { id: 3, nome: "Porção de Batata Frita", categoriaId: 1, preco: 8.00 },
        { id: 4, nome: "Suco de Laranja", categoriaId: 2, preco: 6.00 },
    ]
}
