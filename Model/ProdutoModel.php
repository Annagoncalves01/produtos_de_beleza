<?php
class ProdutoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function adicionarUsuario($nome_usuario, $email, $senha)
    {
        $sql = "INSERT INTO usuario (nome_usuario, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_usuario, $email, $senha]);
    }

    public function buscarUsuarioPorEmail($email)
    {
        $sql = "SELECT * FROM usuario WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function listarUsuarios() {
        $sql = "SELECT nome_usuario, email, senha FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function criarProduto($nome, $marca, $tipo, $preço) {
        $sql = "INSERT INTO produtos (nome, marca, tipo, preço) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $marca, $tipo, $preço]);
    }

    public function listarProdutos() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarProduto($id_produto, $nome, $marca, $tipo, $preço) {
        $sql = "UPDATE produtos SET nome = ?, marca = ?, tipo = ?, preço = ? WHERE id_produto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $marca, $tipo, $preço, $id_produto]);
    }
    public function buscarProdutoPorId($id_produto) {
        $sql = "SELECT * FROM produtos WHERE id_produto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_produto]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deletarProduto($id_produto) {
        $sql = "DELETE FROM produtos WHERE id_produto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_produto]);
    }
}
?>
