<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista</title>
</head>
<body>

<h1>Lista de Usuários</h1>

<?php
if (!empty($usuario)) {
    echo "<p>Nome: " . htmlspecialchars($usuario['nome_usuario']) . "</p>";
    echo "<p>E-mail: " . htmlspecialchars($usuario['email']) . "</p>";
    echo "<p>Senha: " . htmlspecialchars($usuario['senha']) . "</p>";
} else {
    echo "<p>Usuário não encontrado.</p>";
}

?>

<button><a href="view/usuario/cadastrar.php">Cadastrar</a></button>

    
</body>
</html>
