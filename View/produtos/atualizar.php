<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';

$produtoController = new ProdutoController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['id_produto']) && !empty($_POST['nome']) && !empty($_POST['marca']) && !empty($_POST['tipo']) && isset($_POST['preço'])) {
        $produtoController->atualizarProduto($_POST['id_produto'], $_POST['nome'], $_POST['marca'], $_POST['tipo'], $_POST['preço']);
        header("Location: listar.php");
        exit;
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_produto = (int) $_GET['id'];
    $produto = $produtoController->buscarProdutoPorId($id_produto);

    if (!$produto) {
        echo "Produto não encontrado!";
        exit;
    }
} else {
    echo "ID do produto inválido ou não especificado!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="catalogo"><nav class="navbar">
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
    <div class="container">
        <h3>Atualizar Produto</h3>
        <form method="POST">
            <input type="hidden" name="id_produto" value="<?php echo $produto['id_produto']; ?>">
            Nome: <input type="text" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" required><br>
            Marca: <input type="text" name="marca" value="<?php echo htmlspecialchars($produto['marca']); ?>" required><br>
            Tipo: <input type="text" name="tipo" value="<?php echo htmlspecialchars($produto['tipo']); ?>" required><br>
            Preço: <input type="number" step="0.01" name="preço" value="<?php echo htmlspecialchars($produto['preço']); ?>" required><br>
            <button type="submit">Atualizar</button>
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
