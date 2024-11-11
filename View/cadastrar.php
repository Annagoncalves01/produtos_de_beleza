<?php
require_once '../Controller/ProdutoController.php';
$produtoController = new ProdutoController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produtoController->criarProduto($_POST['nome'], $_POST['marca'], $_POST['tipo'], $_POST['preço']);
    header("Location: listar.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Adicionar Produto</h1>
    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Marca: <input type="text" name="marca" required><br><br>
        Tipo: <input type="text" name="tipo" required><br><br>
        Preço: <input type="number" step="10.01" name="preço" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
