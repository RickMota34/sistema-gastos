<?php
require '../dataBase/config.php';
require '../dao/EstoqueDaoMysql.php';

$EstoqueDao = new EstoqueDaoMysql($pdo);

$estoque = false;

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $estoque = $EstoqueDao->findById($id);        
}

if($estoque === false){
        header("Location: mudarPreco.php");
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
    <title>Alterar Preço</title>
</head>
<body>
<div class="top">
    <div class="btn">
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
            <a href="../php/alterarDescricao.php"><li>Alterar Descrição</li></a>
            <a href="../php/vizualizarProdutos.php"><li>Vizualizar Produtos</li></a>
        </ul>
        <footer>
            <div class="rodape"><small>Desenvolvido por <i>&copy;</i> Rick Mota - <span>2020</span> </small></div>
            </footer>
    </div>
    <div class="sup-prod">
        <h1 class="top-h1">Alterar Preço</h1>
        <div class="cad-produto">
            <form  method="POST" action="editar-preco.php">
                <input type="hidden" name="id" value="<?=$estoque->getId();?>">
                <label for="preco">
                    Preço
                </label>
                <input type="text" name="valor" value="<?=$estoque->getValor();?>"><br>
                <input type="hidden" name="descricao" value="<?=$estoque->getDescricao();?>"><br>
                <input type="submit" value="Alterar">       
            </form>
        </div> 
    </div>
</nav>  
</body>
</html>