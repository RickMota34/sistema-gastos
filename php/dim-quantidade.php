<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estile.css">
    <title>Incluir</title>
</head>
<body>
<div class="top">    
        <div class="btn">
            <label for="chec">
                <img  class="btn"src="../images/btn.png">
            </label>
        </div>
    <div class="topInt">
        <div class="cabeca"><h1>Controle de Estoque</h1></div>
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
            <a href="loginCadastro.php"><li>Cadastrar</li></a>
            <a href="mudarPreco.php"><li>Mudar Preço</li></a>
            <a href="vizualizarProdutos.php"><li>Vizualizar Produtos</li></a>
        </ul>
        <footer>
            <div class="rodape"><small>Desenvolvido por <i>&copy;</i> Rick Mota - <span>2020</span> </small></div>
            </footer>
    </div>
    <div class="sup-prod">
        <h1 class="viz">Incluir Quantidade</h1>
            <div class="verProd">
                <div class="Scroll">
                    <div class="quant">
                        <form action="" method="post">
                            <input type="hidden" name="descricao" value="">
                            <input type="text" name="valor" value="">
                            <input type="submit" value="Retirar">
                        </form>
                    </div>
                </div> 
            </div>
    </div>
</nav>
</body>
</html>