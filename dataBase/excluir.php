<?php
require 'config.php';
require '../dao/EstoqueDaoMysql.php';

$estoqueDao = new EstoqueDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
    
    $estoqueDao->delete($id);

}
    header("Location: ../php/vizualizarProdutos.php");
    exit;