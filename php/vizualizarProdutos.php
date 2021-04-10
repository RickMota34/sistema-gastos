<?php
    require '../dataBase/config.php';
    require '../dao/EstoqueDaoMysql.php';

    $estoqueDao = new EstoqueDaoMysql($pdo);
    $lista = $estoqueDao->findAll(); 

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estile.css">
    <link rel="shortcut icon" href="../images/controleEst.png">
    <title>Vizualizar</title>
</head>
<body>
<div class="top">   
    <div class="btn" >
        <label for="chec"> 
            <img  src="../images/btn.png">
        </label>
    </div>
    <div class="topInt">
        <div class="cabeca">
            <h1>Controle de Estoque</h1>
        </div>
    </div>
        <div class="usuario">
            <h4 class="user">Usuário: Rick Mota</h4>
        </div>
</div>
<nav> 
<input type="checkbox" id="chec">
    <div class="menuLeft">
        <ul>
            <a href="../index.php"><li>Voltar</li></a>
            <a href="loginCadastro.php"><li>Cadastrar</li></a>
            <a href="mudarPreco.php"><li>Mudar Preço</li></a>
            <a href="mudarDescricao.php"><li>Mudar Descrição</li></a>
            
        </ul>
        <footer>
            <div class="rodape"><small>Desenvolvido por <i>&copy;</i> <a href="desenvolvedor.php" class="rodape-a">Rick Mota</a></div>
            </footer>
    </div>
    <div class="sup-prod">
        <h1 class="viz">Vizualizar</h1>
        <div class="verProd">
        <div class="Scroll">
            <table width="100%" class="zebra">
            
                <tr>
                    <th>Códico</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
                <?php 
                foreach($lista as $estoque){?>
                <tr>
                    <td><center><?=$estoque->getCodigo();?></center></td>
                    <td><?=$estoque->getDescricao();?></td>
                    <td><center><?=$estoque->getQuantidade();?></center></td>
                    <td><center><?=$estoque->getValor();?></center></td>
                </tr>
                <?php }?>
                </div>
            </table>
        </div>
    </div>
</nav>  
</body>
</html>