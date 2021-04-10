<?php
require 'config.php';
require '../dao/EstoqueDaoMysql.php';

$estoqueDao = new EstoqueDaoMysql($pdo);

$codigo = filter_input(INPUT_POST, 'codigo');
$quantidade = filter_input(INPUT_POST, 'quantidade');
$descricao = filter_input(INPUT_POST, 'descricao');
$valor = filter_input(INPUT_POST, 'valor');

if($codigo && $quantidade){
    if($estoqueDao->findByCodigo($c) === false){
        $novoEstoque = new Estoque();
        $novoEstoque->setCodigo($codigo);
        $novoEstoque->setDescricao($descricao);
        $novoEstoque->setQuantidade($quantidade);
        $novoEstoque->setValor($valor);


        $estoqueDao->add( $novoEstoque );
        header('Location: ../php/vizualizarProdutos.php');
        exit;
    }else{
        header('Location: ../php/cadastrar.php');
    }
}else{
    header('Location: ../php/cadastrar.php');
}