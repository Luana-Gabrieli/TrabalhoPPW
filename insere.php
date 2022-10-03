<!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
 </head>
 <body>
     <h1> Situação do Cadastro</h1>
    <?php
        require_once("conexao.php");
            $nome = $_POST["nome"];
            $usuario = $_POST["usuario"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $cep = $_POST["cep"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $dtnasc = date("Y/m/d");
        
            $sql = "INSERT INTO usuario (id, nome, usuario, email, senha, cep, bairro, cidade,
            estado, dtnasc) 
            VALUES(null, '$nome', '$usuario', '$email', '$senha', '$cep', '$bairro', '$cidade', 
            '$estado', '$dtnasc')";
            
            $result= $con->query($sql);

            if($con->affected_rows > 0){
                echo "<h1>Cadastro feito com sucesso!</h1>";
            }else{
                echo "<p> Ocorreu um erro!<p>";
                echo "<p>{$con->error}</p>";
            }

        ?>
        <p> <a href="index.html"> Voltar para o Login</a> </p>
        <p> <a href="index.html"> Seguir para a página</a> </p>
 </body>
 </html>
