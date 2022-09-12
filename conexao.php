<?php
    $local_bd = "localhost";
    $usuario_bd = "root";
    $senha_bd = "";
    $database_bd = "sistemarestrito";

   function conectar(){
    global $local_bd, $usuario_bd, $senha_bd, $database_bd;
    $con = new mysqli($local_bd, $usuario_bd, $senha_bd, $database_bd);
    return $con;
   }
   
    $con = conectar();
    if($con->errno){
        echo "<p> Ocorreu um erro</p>";
        echo "<p>{$con->errno}:{$con->error}</p>";
        die();
    }
?>
