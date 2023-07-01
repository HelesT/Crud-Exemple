<?php
    include("conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="lista.css" type="text/css">
</head>
<body>
    <span>Lista</span>
    <div class="listado">
        <?php
            $comando = $pdo->prepare("SELECT nome, email, telefone FROM cadastro");
            $resultado = $comando->execute();
                    
            while($linhas = $comando->fetch())
            {
                $nome = $linhas["nome"];
                $email = $linhas["email"];
                $telefone = $linhas["telefone"];
                echo("
                                
                <div class='linha'>
                <div>Nome:$nome</div><div>Email:$email</div><div>Telefone:$telefone</div>
                </div><br>
                                
                ");
            }
        ?>
    </div>
    <a href="index.html" class="botao_cadastro"><img src="proximo.png" width="50px"></a> 
        
</body>
</html>