<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

$produtoController= new ProdutoController($pdo);

$produtos=$produtoController->listarProdutos();

if(isset($_POST['deletar_produto_id'])){
    $produtoController->deletarProduto($_POST['deletar_produto_id']);

    header("Location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar produto</title>
</head>
<body>
    <h1>DELETAR PRODUTO</h1>
    <form method="POST">
        <select name="deletar_produto_id">
            <?php
            foreach($produtos as $produto):?>
            <option value="<?php echo $produto['id'];?>"><?php echo $produto['nome']; ?></option>
            <?php endforeach;?>
        </select>
        <button type="submit">EXCLUIR PRODUTO</button>
    </form>
</body>
<a href="../../index.php">VOLTAR</a>

</html>