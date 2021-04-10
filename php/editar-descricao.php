<?php
require '../dataBase/config.php';
require '../dao/EstoqueDaoMysql.php';

$estoqueDao = new EstoqueDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$descricao = filter_input(INPUT_POST, 'descricao');
$valor = filter_input(INPUT_POST, 'valor');

if ($id && $descricao) {
    $estoque = new Estoque();

    $estoque->setId($id);
    $estoque->setValor($valor);
    $estoque->setDescricao($descricao);

    $estoqueDao->update($estoque);
header("location: vizualizarProdutos.php");
exit;
}
else{
    header("Location: alterarDescricao.php?=id" .$id);
    exit;
}