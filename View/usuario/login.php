<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Login</title>
</head>

<body class="cadastro">
    <header>
        <nav class="navbar">
            <div class="logo-container">
                <img src="img/logo (2).png" alt="Logo">
                <h2>Beauty Luxury</h2>
            </div>
            <label for="menu-toggle" class="hamburger">&#9776;</label>
            <ul class="nav-link">
                <div class="linha"></div>
                <ul class="menu">
                    <li><a href="View/usuario/login.php">♔LOGIN</a></li>
                    <li><a href="View/usuario/cadastrar.php">❃CADASTRE-SE</a></li>
                </ul>
        </nav>
    </header>
    <h1>LOGIN</h1>
    <div class="form-container">
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">ENTRAR</button>
        </form>

        <?php
        session_start();
        require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
        require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Controller/ProdutoController.php';

        if (isset($_SESSION['usuario_id'])) {
            header("Location: /produtos_de_beleza/index1.php");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["email"]) && isset($_POST["senha"])) {
            $produtoController = new ProdutoController($pdo);

            $email = trim($_POST["email"]);
            $senha = trim($_POST["senha"]);

            if ($produtoController->login($email, $senha)) {
                header("Location: /produtos_de_beleza/index1.php");
                exit();
            } else {
                echo "<p style='color:red;'>E-mail ou senha incorretos!</p>";
            }
        }
        ?>
    </div>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Sobre nós</h4>
                <p>Somos uma marca apaixonada por beleza e sofisticação. Criamos produtos de alta qualidade, pensados para destacar a sua essência e elegância.</p>
            </div>
            <div class="footer-section">
                <h4>Contato</h4>
                <ul>
                    <li>Email: contato@beautyluxury.com</li>
                    <li>Telefone: (18) 99693-5678</li>
                    <li>Endereço: Rua Flores, 123, São Paulo, SP</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Beauty Luxury. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>
