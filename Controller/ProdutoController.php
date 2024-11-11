<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Model/ProdutoModel.php';
class ProdutoController {
private $produtoModel;
    public function __construct($pdo){
        $this->produtoModel = new ProdutoModel($pdo);
    }
    public function criarProduto($nome, $idade,$altura, $peso,$cpf, $rg){
        $this->produtoModel->criarProduto($nome, $idade,$altura, $peso,$cpf, $rg);
    }
    public function listarProdutos(){
        return $this->produtoModel->listarProdutos();
    }
    public function exibirListaProdutos(){
        $Produtos = $this->produtoModel->listarProdutos();
        include 'C:/aluno2/xampp/htdocs/olimpiadas-mvc/view/Produto/listar.php';
    }
    public function atualizarProduto($nome, $idade,$altura, $peso,$cpf, $rg, $id_Produto){
        $this->produtoModel->atualizarProduto($nome, $idade,$altura, $peso,$cpf, $rg, $id_Produto);
    }
    public function deletarProduto($id_produto){
        $this->produtoModel->deletarProduto($id_produto);
    }
} 

?>