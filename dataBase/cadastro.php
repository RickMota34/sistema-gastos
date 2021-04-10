<?php

    if(isset($_POST['nome']) && empty($_POST['nome']) == false && isset($_POST['senha']) && empty($_POST['senha']) == false){
        $nome = addslashes($_POST['nome']);
        $senha = md5(addslashes($_POST['senha']));

        $dbnome = "mysql:dbname=controleestoque;host=localhost";
        $dbuser = "root";
        $dbpass = "";

        try {
             
            $db = new PDO($dbnome, $dbuser, $dbpass);
            $sql = $db->query("SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'");
            
            if ($sql->rowCount() > 0) {
                $dado = $sql->fetch();
                header('Location:loginCadastro.php');
            }

        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }