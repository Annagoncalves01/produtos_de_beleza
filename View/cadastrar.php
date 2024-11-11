<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olimpiadas</title>
</head>
<body>
    <h1>CADASTRAR PRODUTOS</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="idade" placeholder="Idade">
        <input type="text" name="altura" placeholder="Altura">
        <input type="text" name="peso" placeholder="Peso">
        <input type="text" name="cpf" placeholder="Cpf">
        <input type="text" name="rg" placeholder="Rg">
<button type="submit">Enviar</button>


    </form>
    <?php
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

    if(isset($_POST["nome"])&&
    isset($_POST["idade"])&&
    isset($_POST["altura"])&& isset($_POST["peso"])&&isset($_POST["cpf"])&&isset($_POST["rg"])){
    $produtoController = new ProdutoController($pdo);
    $produtoController->criarProduto($_POST["nome"],$_POST["idade"], $_POST["altura"], $_POST["peso"],$_POST["cpf"], $_POST["rg"]);
    header("Location: ../../index.php");

}
?>
</body>
<br><br>   
<a href="../../index.php">VOLTAR</a>

</html>