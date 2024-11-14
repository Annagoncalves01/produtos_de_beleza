<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/Model/ProdutoModel.php';

class ProdutoController {
    private $produtoModel;

    public function __construct($pdo) {
        $this->produtoModel = new ProdutoModel($pdo);
    }
    public function adicionarUsuario($nome_usuario, $email, $senha)
    {
        if (strlen($senha) < 8) {
            echo "A senha deve ter pelo menos 8 caracteres.";
            return;
        }

        if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[a-z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
            echo "A senha deve conter pelo menos uma letra maiúscula, uma minúscula e um número.";
            return;
        }

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $this->produtoModel->adicionarUsuario($nome_usuario, $email, $senhaHash);

        echo "Usuário cadastrado com sucesso!";
    }


    public function login($email, $senha)
    {
        $usuario = $this->produtoModel->buscarUsuarioPorEmail($email);

        if ($usuario) {
            if (password_verify($senha, $usuario['senha'])) {
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['nome_usuario'] = $usuario['nome_usuario'];

                header("Location: ../index.php");
                exit();
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "E-mail não encontrado!";
        }
    }

    public function listarusuarios()
    {
        $usuario = $this->produtoModel->listarUsuarios();
        include 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/view/usuario/listar.php';
    }

    public function listarProdutos() {
        return $this->produtoModel->listarProdutos();
    }

    public function criarProduto($nome, $marca, $tipo, $preço) {
        $this->produtoModel->criarProduto($nome, $marca, $tipo, $preço);
    }

    public function atualizarProduto($id_produto, $nome, $marca, $tipo, $preço) {
        $this->produtoModel->atualizarProduto($id_produto, $nome, $marca, $tipo, $preço);
    }

    public function deletarProduto($id_produto) {
        $this->produtoModel->deletarProduto($id_produto);
    }
    public function buscarProdutoPorId($id_produto) {
        return $this->produtoModel->buscarProdutoPorId($id_produto);
    }
    public function exibirListaProdutos() {
        $produtos = $this->listarProdutos();
        require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza-main (3)/produtos_de_beleza/View/listar.php';
    }
}
?>
