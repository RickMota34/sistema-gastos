<?php
require '../dataBase/config.php';
require '../dao/EstoqueDaoMysql.php';

$estoqueDao = new EstoqueDaoMysql($pdo);

$estoque = false;

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $estoque = $estoqueDao->findById($id);
}

if($estoque === false) {

    header('Location: mudarDescricao.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estile.css">
    <link rel="shortcut icon" href="../images/controleEst.png">
    <title>Alterar Descrição</title>
</head>
<body>
<div class="top">
    <div class="btn"    >
        <label for="chec">
            <img  src="../images/btn.png">
        </label>
    </div>
    
    <div class="topInt">
        <h1>Controle de Estoque</h1>
    </div>
    <div class="usuario">
        <h4 class="user">Usuário: Rick Mota</h4></div>
    </div>
</div>
<nav> 
<input type="checkbox" id="chec">
    <div class="menuLeft">
        <ul>
            <a href="../index.php"><li>Voltar</li></a>
            <a href="../php/mudarPreco.php"><li>Mudar Preço</li></a>
            <a href="../php/vizualizarProdutos.php"><li>Vizualizar Produtos</li></a>
        </ul>
        <footer>
            <div class="rodape"><small>Desenvolvido por <i>&copy;</i> Rick Mota - <span>2020</span> </small></div>
            </footer>
    </div>
    <div class="sup-prod">
        <h1 class="top-h1">Alterar Descrição</h1>
        <div class="cad-produto">
            <form  method="POST" action="editar-descricao.php">

            <input type="hidden" name="id" value="<?=$estoque->getId();?>">
            
                <label for="desc">
                    Desc.:
                </label>
                <input type="hidden" name="valor" value="<?=$estoque->getvalor()?>" id="desc">
                <input type="text" name="descricao" value="<?=$estoque->getDescricao()?>" id="desc">
                <input type="submit" value="Alterar">       
            </form>
        </div> 
    </div>
</nav>  
</body>
</html>