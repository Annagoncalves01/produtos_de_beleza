<?php

require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/controller/ProdutoController.php';


$produtoController = new ProdutoController($pdo);

$produtoController->exibirListaProdutos();

?>
