<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Usuário</title>
</head>

<body class="cadastro">

    <h1>LOGIN</h1>
    <div class="form-container">
        <form method="POST">
            <input type="text" name="nome_usuario" placeholder="Nome" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">ENTRAR</button>
        </form>

        <?php
        require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
        require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

        if (isset($_POST["nome_usuario"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
            $produtoController = new ProdutoController($pdo);
            $produtoController->adicionarUsuario($_POST["nome_usuario"], $_POST["email"], $_POST["senha"]);

            // Redireciona para o catálogo de produtos após o cadastro
            header("Location: /produtos_de_beleza/index1.php");
            exit();
        }
        ?>

        <br>
        <a href="View/usuario/cadastrar.php" class="cadastro-link">Cadastrar-se</a>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Sobre nós</h4>
                <p>Somos uma marca apaixonada por beleza e sofisticação. Criamos produtos de alta qualidade, pensados para destacar a sua essência e elegância.</p>
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
