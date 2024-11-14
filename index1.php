<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/Controller/ProdutoController.php';

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
<body>
    <header>
    <div class="logo">
        <img src="img/logo (2).png" alt="Logo do Site"> <!-- Certifique-se de usar o caminho correto para a imagem -->
    </div>
    <div class="site-name"><h1>BEAUTY LUXURY</h1></div>
    </header>
    <h1>CATÁLOGO</h1>
    <div class="card-container">
        <?php foreach ($produtos as $produto): ?>
            <div class="card">
                <div class="card-image">
                    <img src="imagens/produto_placeholder.jpg" alt="Imagem do produto">
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
</body>
</html>
