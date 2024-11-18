<?php
  require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
  require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

$produtoController = new ProdutoController($pdo);
$produtos = $produtoController->listarProdutos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Produtos de Beleza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="catalogo">
    <header>
    <nav class="navbar">
    <div class="logo-container">
        <img src="img/logo (2).png" alt="Logo"> 
        <h2>Beauty   Luxury </h2>
    </div>

    <label for="menu-toggle" class="hamburger">&#9776;</label>

    <ul class="nav-link"> 
    <div class="linha"></div>
    <ul class="menu">
    <li><a href="index1.php">♔CATÁLOGO</a></li>
                                 <li><a href="info.html">❃BLOG</a></li>
                                  <li><a href="View/produtos/cadastrar.php">♔ADICIONAR PRODUTOS</a></li>
                                  <li><a href="View/produtos/resenhas.php">♔RESENHAS</a></li>
                                 <li><a href="index.php">❃SAIR</a></li>
             
                              </div>
                              <hr class="linha1">
                         </ul>
                     </div>
</nav>

  
   
    
    </header>
    <br><br>
    <h1>CATÁLOGO</h1>
    <div class="card-container">
        <?php foreach ($produtos as $produto): ?>
            <div class="card">
                <div class="card-image">
                    <img src="img/perfume.png" alt="Imagem do produto">
                </div>
                <h2><?php echo htmlspecialchars($produto['nome']); ?></h2>
                <p><strong>Marca:</strong> <?php echo htmlspecialchars($produto['marca']); ?></p>
                <p><strong>Tipo:</strong> <?php echo htmlspecialchars($produto['tipo']); ?></p>
                <p><strong>Preço:</strong> R$ <?php echo number_format($produto['preço'], 2, ',', '.'); ?></p>
                <div class="card-actions">
                    <a href="View/produtos/atualizar.php?id=<?php echo $produto['id_produto']; ?>">Atualizar</a>
                    <a href="View/produtos/deletar.php?id=<?php echo $produto['id_produto']; ?>">Deletar</a>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($produtos)): ?>
            <p>Nenhum produto encontrado.</p>
        <?php endif; ?>
    </div>
    <a href="View/produtos/cadastrar.php" class="add-button">Adicionar Produto</a>
        </div></div>
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
            <li><a href="index1.php">Catálogo</a></li>
                    <li><a href="info.html">Blog</a></li>
                    <li><a href="View/produtos/resenhas.php">Resenhas</a></li>
                    <li><a href="View/produtos/cadastrar.php">Adicionar Produto</a></li>
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
