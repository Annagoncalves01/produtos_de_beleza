<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/controller/ProdutoController.php';

    if (isset($_POST["email"]) && isset($_POST["senha"])) {
        $produtoController = new ProdutoController($pdo);
        
        $produtoController->login($_POST["email"], $_POST["senha"]);
    }
    ?>

    <br><br>

    <a href="cadastrar.php">Cadastrar-se</a>
</body>

</html>
