<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/Controller/ProdutoController.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/config.php';

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
<body>
    <div class="container">
        <h1>Atualizar Produto</h1>
        <form method="POST">
            <input type="hidden" name="id_produto" value="<?php echo $produto['id_produto']; ?>">
            Nome: <input type="text" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" required><br>
            Marca: <input type="text" name="marca" value="<?php echo htmlspecialchars($produto['marca']); ?>" required><br>
            Tipo: <input type="text" name="tipo" value="<?php echo htmlspecialchars($produto['tipo']); ?>" required><br>
            Preço: <input type="number" step="0.01" name="preço" value="<?php echo htmlspecialchars($produto['preço']); ?>" required><br>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>
