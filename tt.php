<!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
 </head>
 <body>
     <h1> Dados Recebidos do Cadastro</h1>
     
<?php
 $servidor_bd = "localhost";
 $login_bd = "root";
 $senha_bd = "";
 $banco_de_dados = "cep";
 
 $con = new mysqli($servidor_bd, $login_bd, $senha_bd, $banco_de_dados);
 
 if($con->connect_errno){
 
     echo "<p> Ocorreu um erro: " . $connect->errno . "<p>";
     echo "<p> Mensagem: " . $con->error . "<p>";
 
 
     }else{
     echo "<p> Conectado no BD com sucesso! </p>";
     }
 
   
     $nome = $_POST["nome"];
     @$email = $_POST["email"];
     $senha = $_POST["senha"];
     $cep = $_POST["cep"];
     $dtnasc = date("Y/m/d");
 
     
 
     $sql = "insert into buscarcep values(null, '$nome', '$cep', '$email', '$senha', '$dtnasc')";
 
     echo $sql;
     
     $result=$con->query($sql);
     if($con->errno){
 
         echo "<p> Ocorreu um erro " . $con->connect_errno . "<p>";
         echo "<p> Mensagem: " . $connect_error . "<p>";
 
     }else{
         echo "<p> Cadastrado com Sucesso <p>";
     }
 
?>
 </body>
 </html>
