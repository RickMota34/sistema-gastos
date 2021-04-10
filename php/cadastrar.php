
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estile.css">
    <link rel="shortcut icon" href="../images/controleEst.png">
    <title>Cadastrar</title>
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
        <h4 class="user">Usuário: Rick Mota</h4>
    </div>
</div>
<nav> 
<input type="checkbox" id="chec">
    <div class="menuLeft">
        <ul>
            <a href="../index.php"><li>Voltar</li></a>
            <a href="../php/mudarDescricao.php"><li>Mudar Descrição</li></a>
            <a href="mudarPreco.php"><li>Mudar Preço</li></a>
            <a href="../php/vizualizarProdutos.php"><li>Vizualizar Produtos</li></a>
        </ul>
        <footer>
            <div class="rodape"><small>Desenvolvido por <i>&copy;</i> Rick Mota - <span>2020</span> </small></div>
            </footer>
    </div>
    <div class="sup-prod">
        <h1 class="top-h1">Cadastrar Produto</h1>
        <div class="cad-produto">
            <form  method="POST" action="../dataBase/inserir.php">
                <label for="cod">
                    Cod.:
                </label>
                <input type="text" name="codigo" id="cod">
                <label for="desc">
                    Desc.:
                </label>
                <input type="text" name="descricao" id="desc">
                <label for="quant">
                    Quant.:
                </label>
                <input type="text" name="quantidade" id="quant">
                <label for="preco">
                    Preço
                </label>
                <input type="text" name="valor" value="R$" id="preco"><br>
                <input type="submit" value="Salvar">       
            </form>
        </div> 
    </div>
</nav>  
</body>
</html>