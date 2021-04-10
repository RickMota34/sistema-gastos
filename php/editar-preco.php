<?php
require '../dataBase/config.php';
require '../dao/EstoqueDaoMysql.php';

$estoqueDao = new EstoqueDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$valor = filter_input(INPUT_POST, 'valor');
$descricao = filter_input(INPUT_POST, 'descricao');

if ($id && $valor) {

    $estoque = new Estoque();
    $estoque->setId($id);
    $estoque->setValor( $valor );
    $estoque->setDescricao( $descricao);

    $estoqueDao->update( $estoque );

header("location: vizualizarProdutos.php");
exit;
}
else{
    header("Location: alterarPreco.php?id=".$id);
    exit;
}