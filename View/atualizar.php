<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

$produtoController= new ProdutoController($pdo);

$produtos=$produtoController->listarProdutos();

if(isset($_POST['atualizar_nome'])&& isset($_POST['atualizar_idade'])&& isset($_POST['atualizar_altura'])&& isset($_POST['atualizar_peso'])&& isset($_POST['atualizar_cpf'])&& isset($_POST['atualizar_rg'])&& isset($_POST['produto_id'])){
    $produtoController->atualizarProduto($_POST['atualizar_nome'], $_POST['atualizar_idade'], $_POST['atualizar_altura'], $_POST['atualizar_peso'], $_POST['atualizar_cpf'], $_POST['atualizar_rg'], $_POST['produto_id']);
    header("Location: ../../index.php");

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
</head>
<body>
    <form method="POST">
        <select name="produto_id">
       <?php
        foreach($produtos as $produto):?>
        <option value="<?php echo $produto['id'];?>">
        <?php echo $produto ['id'];?></option>
        <?php endforeach; ?>
        </select>

        <input type="text" name="atualizar_nome" placeholder="Atualize o nome">
        <input type="text" name="atualizar_idade" placeholder="Atualize a idade">
        <input type="text" name="atualizar_altura" placeholder="Atualize a altura">
        <input type="text" name="atualizar_peso" placeholder="Atualize o peso">
        <input type="text" name="atualizar_cpf" placeholder="Atualize o cpf">
        <input type="text" name="atualizar_rg" placeholder="Atualize o rg">
        <button type="submit">Atualizar</button>
    </form>
</body>     <br><br>   
<a href="../../index.php">VOLTAR</a>

</html>