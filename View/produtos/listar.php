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
<body>
    <h1>Lista de Produtos</h1>
    <div class="container">

    <a href="cadastrar.php">Adicionar Produto</a>
    <ul>        
        <?php foreach ($produtos as $produto): ?>
            <li>
                <?php echo htmlspecialchars($produto['nome']); ?> - 
                <?php echo htmlspecialchars($produto['marca']); ?> - 
                R$ <?php echo number_format($produto['preço'], 2, ',', '.'); ?>
                <a href="View/produtos/atualizar.php?id=<?php echo $produto['id_produto']; ?>">Atualizar</a>
                <a href="View/produtos/deletar.php?id=<?php echo $produto['id_produto']; ?>">Deletar</a>
            </li>
        <?php endforeach; ?>

        <?php if (empty($produtos)): ?>
            <li>Nenhum produto encontrado.</li>
        <?php endif; ?>
    </ul></div>
</body>
</html>
