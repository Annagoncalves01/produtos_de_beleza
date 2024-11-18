<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';
$produtoController = new ProdutoController($pdo);

$id_produto = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produtoController->deletarProduto($id_produto);
    header("Location: listar.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Deletar Produto</title>
    <link rel="stylesheet" href="style.css">

</head>
<body class="catalogo">
<nav class="navbar">
    <div class="logo-container">
        <img src="logo (2).png" alt="Logo"> 
        <h2>Beauty   Luxury </h2>
    </div>

    <label for="menu-toggle" class="hamburger">&#9776;</label>

    <ul class="nav-link"> 
    <div class="linha"></div>
    <ul class="menu">
    <li><a href="index1.php">♔CATÁLOGO</a></li>
                                 <li><a href="info.html">❃BLOG</a></li>
                                 <li><a href="cadastrar.php">♔ADICIONAR PRODUTOS</a></li>
                                 <li><a href="resenhas.php">♔RESENHAS</a></li>
                                 <li><a href="index.php">❃SAIR</a></li>
             
                              </div>
                              <hr class="linha1">
                         </ul>
                     </div>
</nav>

  
   
    
    </header>
    <h3>Deletar Produto</h3>
    <div class="container">

    <p>Tem certeza de que deseja excluir este produto?</p>
    <form method="post">
        <button type="submit">Sim, Deletar</button>
        <a href="listar.php">Cancelar</a>
    </form></div></div></div>
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
