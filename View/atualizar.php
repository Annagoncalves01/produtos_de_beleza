<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php'; // Certifique-se de que $pdo está sendo incluído

$produtoController = new ProdutoController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produtoController->atualizarProduto($_POST['id_produto'], $_POST['nome'], $_POST['marca'], $_POST['tipo'], $_POST['preço']);
    header("Location: listar.php");
    exit;
}

$id_produto = $_GET['id'];
$produto = $produtoController->buscarProdutoPorId($id_produto);

if (!$produto) {
    echo "Produto não encontrado!";
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
<body>
    <h1>Atualizar Produto</h1>
    <form method="post">
        <input type="hidden" name="id_produto" value="<?php echo $produto['id_produto']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" required><br>
        Marca: <input type="text" name="marca" value="<?php echo htmlspecialchars($produto['marca']); ?>" required><br>
        Tipo: <input type="text" name="tipo" value="<?php echo htmlspecialchars($produto['tipo']); ?>" required><br>
        Preço: <input type="number" step="0.01" name="preço" value="<?php echo htmlspecialchars($produto['preço']); ?>" required><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
