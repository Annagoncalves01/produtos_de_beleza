<?php

class ProdutoModel{
    private $pdo;
    public function __construct($pdo){
        $this->pdo=$pdo;
    }
    public function criarProduto($nome, $idade,$altura, $peso,$cpf, $rg){
        $sql = "INSERT INTO produto(nome, idade,altura, peso,cpf, rg) VALUES (?, ?, ?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $idade,$altura, $peso,$cpf, $rg]);
    }
    public function listarProdutos(){
        $sql= "SELECT * FROM produto";
        $stmt= $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarProduto($nome, $idade,$altura, $peso,$cpf, $rg, $id_produto){
        $sql = "UPDATE produto SET nome = ?, idade = ? , altura = ?, peso = ? ,cpf = ?, rg = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $idade,$altura, $peso,$cpf, $rg, $id_produto]);
    }

    public function deletarProduto($id_produto){
        $sql = "DELETE FROM produto WHERE id= ?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id_produto]);

    }
}

?>