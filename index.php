<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <h1>CATÁLOGO</h1>
  <?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

$produtoController = new ProdutoController($pdo);
$produtos = $produtoController->listarProdutos() ?? []; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Produtos de Beleza</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
                    <a href="View/atualizar.php?id=<?php echo $produto['id_produto']; ?>">Atualizar</a>
                    <a href="View/deletar.php?id=<?php echo $produto['id_produto']; ?>">Deletar</a>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (empty($produtos)): ?>
        <?php endif; ?>    <br><br><br><br><br><a href="View/cadastrar.php" class="add-button">Adicionar Produto</a>

    </div>
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';


$produtoController = new ProdutoController($pdo);

$produtoController->exibirListaProdutos();


?>
