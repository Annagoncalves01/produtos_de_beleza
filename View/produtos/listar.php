<?php
// Inclua a configuração e o controlador
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

// Verifica se a variável $pdo foi definida corretamente pelo config.php
if (!isset($pdo)) {
    echo "Erro: Conexão com o banco de dados não foi estabelecida.";
    exit;
}

// Instancia o controlador de produtos e recupera a lista de produtos
$produtoController = new ProdutoController($pdo);
$produtos = $produtoController->listarProdutos() ?? []; // Define como um array vazio se listarProdutos() retornar null
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="catalogo">  <nav class="navbar">
    <div class="logo-container">
        <img src="logo (2).png" alt="Logo"> 
        <h2>Beauty   Luxury </h2>
    </div>

    <label for="menu-toggle" class="hamburger">&#9776;</label>

    <ul class="nav-link"> 
    <div class="linha"></div>
    <ul class="menu">
    <li><a href="../../index1.php">♔CATÁLOGO</a></li>
                                 <li><a href="../../info.html">❃BLOG</a></li>
                                 <li><a href="cadastrar.php">♔ADICIONAR PRODUTOS</a></li>
                                 <li><a href="resenhas.php">♔RESENHAS</a></li>
                                 <li><a href="../../index.php">❃SAIR</a></li>
             
                              </div>
                              <hr class="linha1">
                         </ul>
                     </div>
</nav>

  
   
    
    </header>
    <h3>Lista de Produtos</h3>
    <div class="container1">

    <a href="cadastrar.php">Adicionar Produto</a>
    <ul>        
        <?php foreach ($produtos as $produto): ?>
            <li>
                <?php echo htmlspecialchars($produto['nome']); ?> - 
                <?php echo htmlspecialchars($produto['marca']); ?> - 
                R$ <?php echo number_format($produto['preço'], 2, ',', '.'); ?>
                <a href="atualizar.php?id=<?php echo $produto['id_produto']; ?>">Atualizar</a>
                <a href="deletar.php?id=<?php echo $produto['id_produto']; ?>">Deletar</a>
            </li>
        <?php endforeach; ?>

        <?php if (empty($produtos)): ?>
            <li>Nenhum produto encontrado.</li>
        <?php endif; ?>
    </ul></div></div></div>
    <br><br><br><br><br>
    <footer class="site-footer">
    <div class="footer-container">
        <div class="footer-section">
            <h4>Sobre nós</h4>
            <p>Somos uma marca apaixonada por beleza e sofisticação. Criamos produtos de alta qualidade, pensados para destacar a sua essência e elegância.</p>
        </div>
        <div class="footer-section">
            <h4>Links rápidos</h4>
            <ul>
            <li><a href="../../index1.php">Catálogo</a></li>
                    <li><a href="../../info.html">Blog</a></li>
                    <li><a href="resenhas.php">Resenhas</a></li>
                    <li><a href="cadastrar.php">Adicionar Produto</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Contato</h4>
            <ul>
                <li><a href="#">Email: contato@beautyluxury.com</a></li>
                <li><a href="#">Telefone: (11) 1234-5678</a></li>
                <li><a href="#">Endereço: Rua Exemplo, 123, São Paulo, SP</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Beauty Luxury. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
