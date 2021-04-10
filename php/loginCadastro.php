
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../images/login.png">
    <title>Login</title>
    <?php require '../dataBase/cadastro.php';?>
</head>
<body>
    <div class="login-users">
        <div class="login-users-int">
        <div class="usuario">
            <img src="../images/usuario.png">
        </div>
        <div class="linha">
            <hr>
        </div>
        <div class="form" >
            <form action="cadastrar.php" method="POST">
                <input type="text" name="nome" PLaceholder="Usuário" autofocus="on">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" value="Entrar">
            </form>
        </div>
        </div>
    </div>    
</body>
</html>