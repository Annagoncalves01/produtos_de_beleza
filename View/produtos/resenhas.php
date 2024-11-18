<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

$produtoController = new ProdutoController($pdo);

$resenhas = $produtoController->listarResenhas();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome_usuario'], $_POST['conteudo'])) {
    $produtoController->criarResenhas($_POST['nome_usuario'], $_POST['conteudo'], date('Y-m-d H:i:s'));
    header("Location: resenhas.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resenhas de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="catalogo">
    <nav class="navbar">
        <div class="logo-container">
            <img src="logo (2).png" alt="Logo"> 
            <h2>Beauty Luxury</h2>
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
            </ul>
        </ul>
    </nav>
<br><br><br><br>
    <header>
        <h3>Resenhas de Usuários</h3>
    </header>

  

    <div class="resenhas-container">
        <?php if (!empty($resenhas)): ?>
            <?php foreach ($resenhas as $resenha): ?>
                <div class="resenha">
                    <p><strong>Usuário:</strong> <?= htmlspecialchars($resenha['nome_usuario']) ?></p>
                    <p><strong>Resenha:</strong> <?= htmlspecialchars($resenha['conteudo']) ?></p>
                    <p><small>Data: <?= htmlspecialchars($resenha['data']) ?></small></p>
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhuma resenha disponível no momento.</p>
        <?php endif; ?>
    </div>  <div class="adicionar-resenha">
        <h3>Adicionar Nova Resenha</h3>
        <form method="POST">
            <label for="nome_usuario">Nome do Usuário:</label>
            <input type="text" name="nome_usuario" id="nome_usuario" required>

            <label for="conteudo">Conteúdo da Resenha:</label>
            <textarea name="conteudo" id="conteudo" required></textarea>

            <button type="submit">Adicionar Resenha</button>
        </form>
    </div></div></div>
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
                <li><a href="#">Telefone: (18) 99693-5678</a></li>
                <li><a href="#">Endereço: Rua Flores, 123, São Paulo, SP</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Beauty Luxury. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
