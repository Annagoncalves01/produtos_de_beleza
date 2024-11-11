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
<body>
    <h1>Deletar Produto</h1>
    <p>Tem certeza de que deseja excluir este produto?</p>
    <form method="post">
        <button type="submit">Sim, Deletar</button>
        <a href="listar.php">Cancelar</a>
    </form>
</body>
</html>
