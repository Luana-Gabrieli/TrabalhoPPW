<?php
$local_bd = "localhost";
$usuario_bd = "root";
$senha_bd = "";
$database_bd = "sistemarestrito";

$con = "";

try{
$con = new mysqli($local_bd, $usuario_bd, $senha_bd, $database_bd);
}

catch(Exception $erro){
echo "<p>Ocorreu um erro ao conectar no banco de dados </p>";
die();

}
?>
