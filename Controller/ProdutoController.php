<?php
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/Model/ProdutoModel.php';

class ProdutoController {
    private $produtoModel;

    public function __construct($pdo) {
        $this->produtoModel = new ProdutoModel($pdo);
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
        require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/View/listar.php';
    }
}
?>
