
<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="View/cadastrar.php">Adicionar Produto</a>
    <ul>
        <?php if (!empty($produtos)): ?>
            <?php foreach ($produtos as $produto): ?>
                <li>
                    <?php echo htmlspecialchars($produto['nome']); ?> - 
                    <?php echo htmlspecialchars($produto['marca']); ?> - 
                    R$ <?php echo number_format($produto['preço'], 2, ',', '.'); ?> <!-- Exibindo o preço -->
                    <a href="View/atualizar.php?id=<?php echo $produto['id_produto']; ?>">Atualizar</a>
                    <a href="View/deletar.php?id=<?php echo $produto['id_produto']; ?>">Deletar</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Nenhum produto encontrado.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
